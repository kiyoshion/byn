import "../sass/style.scss";
import barba from '@barba/core'
import barbaPrefetch from '@barba/prefetch'
import gsap from 'gsap/'
import { replaceHeadTags } from './replaceHeadTags.js'
import { leaveAnimation, enterAnimation, leaveAnimationForNoThumb, enterAnimationForNoThumb } from './barbaAnimations.js'
import showContents from './showContents'
import setContactForm from './setContactForm'
import smoothScroll from './smoothScroll'
import smoothAnimation from './smoothAnimation'
import { toggleModal, resetModal } from './toggleModal'
import scrollStalker from './scrollStalker'

function load() {
    return new Promise((resolve, reject) => {
        window.addEventListener('load', function () {
            const strs = document.querySelectorAll('#strs g');
            strs.forEach((e, index) => {
                gsap.to(e, {
                    duration: .6,
                    delay: .1 * index,
                    ease: 'power4.out',
                    y: 0,
                    scale: 1,
                    opacity: 1,
                })
            })
            this.setTimeout(function () {
                const loading = document.querySelector('.loading');

                let width = window.innerWidth;

                if (width > 768) {
                    window.WebFontConfig = {
                        google: { families: ['Noto+Sans+JP:500'] },
                        active: function () {
                            sessionStorage.fonts = true;
                        }
                    };

                    var wf = document.createElement('script');
                    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
                    wf.type = 'text/javascript';
                    wf.async = 'true';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(wf, s);
                }

                loading.classList.add('is-loaded');

                resolve();                
            }, 2000)
        }, false);
    })
}
const promise = Promise.all([
    load(),
])

barba.use(barbaPrefetch);
    
promise.then(() => {

    let width = window.innerWidth;
    let body = document.querySelector('body');

    barba.hooks.beforeEnter((data) => {
        // this hook will be called for each transitions

        // load();
        smoothScroll(data.next.container);
        replaceHeadTags(data.next.html);
        resetModal();

        // contactAnimation();
        let userAgent = window.navigator.userAgent.toLowerCase();
        // check browser
        if (userAgent.indexOf('edge') != -1) {
            body.classList.add('is-edge');
        } else if (userAgent.indexOf('chrome') != -1) {
            body.classList.add('is-chrome');
            if (width > 1024) {
                smoothAnimation();
            }
        } else if (userAgent.indexOf('safari') != -1) {
            body.classList.add('is-safari');
        } else if (userAgent.indexOf('firefox') != -1) {
            body.classList.add('is-firefox');
            if (width > 1024) {
                smoothAnimation();
            }
        }
        if (data.next.url.path.indexOf('contact') != -1) {
            setContactForm();
        }
        let mask = document.querySelector('.mask');
        mask.classList.remove('is-close');
        if (width > 768) {
            scrollStalker();
        }
    });
    barba.init({
        debug: false,
        preventRunning: true,
        prevent: ({ el }) => el.getAttribute('href').slice(0, 1) === '#',
        transitions: [
            {
                once({ current, next, trigger }) {
                    if (next.namespace === 'has-thumb') {
                        enterAnimation(next);
                    } else {
                        enterAnimationForNoThumb(next);
                    }
                
                    if (next.url.path.indexOf('mag') != -1) {
                        // showContents();
                    }
                    showContents();
                },
                leave(data) {
                    const done = this.async();

                    if (data.current.namespace === 'has-thumb') {
                        leaveAnimation(data.current.container, done);
                    } else {
                        leaveAnimationForNoThumb(data.current.container, done);
                    }
                },
                beforeEnter({ next }) {
                    const scrollElem = document.scrollingElement || document.documentElement;
                    scrollElem.scrollTop = 0;
                },
                enter({ current, next, trigger }) {
                    if (next.namespace === 'has-thumb') {
                        enterAnimation(next);
                    } else {
                        enterAnimationForNoThumb(next);
                    }
                },
                after(data) {
                    if (data.next.url.path.indexOf('mag') != -1) {
                        // showContents();
                    }
                    showContents();
                },
                afterEnter() {
                }
            },
        ]
    });
});


window.onload = toggleModal();
const eventDelete = e => {
    if (e.currentTarget.href === window.location.href) {
        e.preventDefault()
        e.stopPropagation()
        return
    }
}

const links = [...document.querySelectorAll('a[href]')]
links.forEach(link => {
    link.addEventListener('click', e => {
        eventDelete(e)
    }, false)
})
