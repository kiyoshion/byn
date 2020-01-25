import "../sass/style.scss";
import gsap from 'gsap/';
import { Power4 } from 'gsap/EasePack';
import barba from '@barba/core'
import barbaCss from '@barba/css'
import barbaPrefetch from '@barba/prefetch'
import { replaceHeadTags } from './replaceHeadTags.js'

console.log('START');

barba.use(barbaCss);
barba.use(barbaPrefetch);
barba.hooks.enter((data) => {
    // this hook will be called for each transitions
    replaceHeadTags(data.next.html);
});
barba.init({
    debug: true,
    prevent: ({ el }) => el.getAttribute('href').slice(0, 1) === '#',
    transitions: [
        {
            leave(data) {
            },
            enter({ current, next, trigger }) {
            }
        }
    ]
});