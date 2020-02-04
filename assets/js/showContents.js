import gsap from 'gsap/';

export default function () {
    const main = document.querySelector('#main');
    const footer = document.querySelector('.footer');
    const thumbs = document.querySelectorAll('.content__item-thumbnail');
    const itemImgs = document.querySelectorAll('.item__img-wrap');
    const itemTxts = document.querySelectorAll('.item__txt-wrap');

    const options = {
        root: null,
        rootMargin: '-50% 0px',
        threshold: 0
    }
    const opstionsFooter = {
        root: null,
        rootMargin: '-200px 0px',
        threshold: 0
    }
    const optionsContent = {
        root: null,
        rootMargin: '0px 0px',
        threshold: 0
    }

    const observer = new IntersectionObserver(showThumb, options);
    const observerFooter = new IntersectionObserver(showFooter, opstionsFooter);
    const observerImg = new IntersectionObserver(showImg, optionsContent);
    const observerTxt = new IntersectionObserver(showTxt, optionsContent);

    thumbs.forEach(thumb => {
        observer.observe(thumb);
    })

    observerFooter.observe(main);

    itemImgs.forEach(itemImg => {
        itemImg.style.transform = 'translateY(150px)';
        itemImg.style.opacity = 0;
        observerImg.observe(itemImg);
    })

    itemTxts.forEach(itemTxt => {
        itemTxt.style.transform = 'translateY(100px)';
        itemTxt.style.opacity = 0;
        observerTxt.observe(itemTxt);
    })

    function showFooter(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                footer.classList.add('is-active');
            } else {
                footer.classList.remove('is-active');
            }
        })
    }

    function showImg(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                gsap.to(entry.target, {
                    duration: 1.6,
                    ease: 'power4.out',
                    opacity: 1,
                    y: 0
                })
            }
        })
    }

    function showTxt(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                gsap.to(entry.target, {
                    duration: 1.2,
                    ease: 'power4.out',
                    opacity: 1,
                    y: 0
                })
            }
        })
    }

    function showThumb(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-active');
                gsap.to(entry.target.firstElementChild, {
                    duration: .4,
                    ease: 'power4.in',
                    opacity: 1,
                    onComplate: function () {
                        gsap.to(entry.target.firstElementChild, {
                            duration: 1.6,
                            delay: .4,
                            ease: 'power4.out',
                            x: 0,
                            width: '100%'
                        })
                    }
                });

                entry.target.nextElementSibling.classList.add('is-active');
                gsap.to(entry.target.nextElementSibling.firstElementChild, {
                    duration: .4,
                    ease: 'power4.in',
                    opacity: 1,
                    onComplate: function () {
                        gsap.to(entry.target.nextElementSibling.firstElementChild, {
                            duration: 1.6,
                            delay: .4,
                            ease: 'power4.out',
                            x: 0,
                            width: '100%'
                        })
                    }
                });
            }
        })
    }
}