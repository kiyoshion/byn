import "../sass/style.scss";
import gsap from 'gsap/'
import barba from '@barba/core'
import barbaCss from '@barba/css'
import barbaPrefetch from '@barba/prefetch'
import { replaceHeadTags } from './replaceHeadTags.js'
import { leaveAnimation, enterAnimation, leaveAnimationForNoThumb, enterAnimationForNoThumb } from './barbaAnimations.js'
import showContents from './showContents'
import setContactForm from './setContactForm'
import smoothScroll from './smoothScroll'
import smoothAnimation from './smoothAnimation'
import { toggleModal, resetModal } from './toggleModal'
import scrollStalker from './scrollStalker'
import loading from './loading'
// import contactAnimation from './contactAnimation'

// barba.use(barbaCss);

// promise.then(() => {

function load() {
    return new Promise((resolve, reject) => {
        window.addEventListener('load', function () {
            this.setTimeout(function () {
                const loading = document.querySelector('.loading');
                // const logo = document.querySelector('#logo');
                // const path = document.querySelectorAll('path');
                // let w = window.innerWidth;
                // if (w < 768) {
                //     console.log('<768!')
                //     logo.style.fill = '#fff';
                //     logo.style.stroke = '#fff';
                //     path.forEach(el => {
                //         el.style.stroke = '#fff';
                //     })
                // }
                loading.classList.add('is-loaded');
                resolve();                
            }, 1000)
        });
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
            if (width > 767) {
                smoothAnimation();
            }
        } else if (userAgent.indexOf('safari') != -1) {
            body.classList.add('is-safari');
        } else if (userAgent.indexOf('firefox') != -1) {
            body.classList.add('is-firefox');
            if (width > 767) {
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
