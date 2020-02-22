import Snap from 'snapsvg';

export default function () {
    const s = Snap('#iconContact');
    const el = document.querySelector('#contact');

    el.addEventListener('mouseover', function () {
        s.animate({
            y: '50'
        }, 3000);
    })
}