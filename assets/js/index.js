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

console.log('START');

// barba.use(barbaCss);
barba.use(barbaPrefetch);
barba.hooks.beforeEnter((data) => {
    // this hook will be called for each transitions
    smoothScroll(data.next.container);
    replaceHeadTags(data.next.html);
    smoothAnimation();
    resetModal();
    if (data.next.url.path.indexOf('contact') != -1) {
        setContactForm();
    }
});
barba.hooks.afterEnter((data) => {
})
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
                const scrollElem = document.scrollingElement || document.documentElement
                scrollElem.scrollTop = 0
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
            }
        },
    ]
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
