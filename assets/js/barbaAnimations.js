import gsap from 'gsap/';
export { leaveAnimation, enterAnimation, leaveAnimationForNoThumb, enterAnimationForNoThumb };

function leaveAnimation(data, done) {
    const h = data.querySelector('.hero');
    const hbg = data.querySelector('.hero__bg');
    const httl = data.querySelector('.hero__ttl');
    const hlttl = data.querySelector('.hero__lead-ttl');
    const hltxt = data.querySelector('.hero__lead-txt');
    const hs = data.querySelector('.hero__scroll');
    h.classList.remove('is-active');
    // mask.style.transform = 'translateY(100%)';

    let mask = document.querySelector('.mask');
    mask.classList.add('is-close');

    gsap.to(hbg, {
        duration: 1.2,
        ease: "power4.inOut",
        y: -110,
        opacity: 0,
        onComplete: () => {
            done();
        }
    })

    // hlttl.querySelectorAll('.js-ttl').forEach(function (e, index) {
    //     gsap.to(e, {
    //         duration: 2.2,
    //         delay: index * 0.05,
    //         ease: "power4.out",
    //         y: -75,
    //         opacity: 0,
    //     })
    // })

    // hltxt.querySelectorAll('.js-txt').forEach(function (e, index) {
    //     gsap.to(e, {
    //         duration: 1.8,
    //         delay: 0.05 + (index * 0.05),
    //         ease: "power4.out",
    //         y: -50,
    //         opacity: 0,
    //     })
    // })

    // gsap.to(hs, {
    //     duration: .8,
    //     ease: "power4.inOut",
    //     x: 10,
    //     opacity: 0,
    // })
}

function enterAnimation(current) {

    let w = window.innerWidth;

    try {
        const hbg = current.container.querySelector('.hero__bg');
        hbg.style.width = 0;
        hbg.style.transform = 'scale3d(1.00, 1.00, 1.00)';

        const httl = current.container.querySelector('.hero__ttl');
        const hlttl = current.container.querySelector('.hero__lead-ttl');
        const hltxt = current.container.querySelector('.hero__lead-txt');
        const hs = current.container.querySelector('.hero__scroll');
        const hero = current.container.querySelector('.hero--has-thumb');
        // hero.classList.add('is-active');

        const header = document.querySelector('.header');
        const ce = current.container.querySelector('.content__entry');
        // header.classList.add('is-active');

        let hlttlContent = hlttl.textContent;
        let strs = hlttlContent.split('');
        hlttl.textContent = '';
        strs.forEach(function (value) {
            const tag = document.createElement('span');
            tag.className = 'js-ttl';
            if (value == ' ') {
                tag.className = 'is-space';
            } 
            tag.innerHTML = value;
            hlttl.appendChild(tag);
        })

        let hltxtContent = hltxt.textContent;
        let txts = hltxtContent.split(' ');
        hltxt.textContent = '';
        txts.forEach(function (value) {
            const tags = document.createElement('span');
            tags.className = 'js-txt';
            tags.innerHTML = value;
            hltxt.appendChild(tags);
        })

        gsap.to(hbg, {
            duration: 1,
            ease: "power4.inOut",
            width: '100%',
        });

        if (w > 769) {
            gsap.to(hbg, {
                // duration: .6,
                duration: 1,
                delay: 1.2,
                ease: "power4.out",
                scale: .8,
                onComplete: function () {
                    hero.classList.add('is-active');
                }
            });
            hlttl.querySelectorAll('.js-ttl').forEach(function (e, index) {
                gsap.to(e, {
                    duration: 1,
                    delay: 1.6 + (index * 0.05),
                    ease: "power4.out",
                    y: 0,
                    opacity: 1,
                })
            })
            hltxt.querySelectorAll('.js-txt').forEach(function (e, index) {
                gsap.to(e, {
                    duration: 1.2,
                    delay: 1.6 + (index * 0.05),
                    ease: "power4.out",
                    y: 0,
                    opacity: 1,
                })
            })
        } else {
            gsap.to(hbg, {
                duration: .6,
                delay: 1.2,
                ease: "power4.out",
                scale: .9,
                x: '10%',
                y: '5%',
                onComplete: function () {
                    hero.classList.add('is-active');
                }
            });

            gsap.to(hlttl, {
                duration: 1,
                delay: 1.8,
                ease: "power4.out",
                x: 0,
                y: 0,
                rotate: 0,
                skewX: 0,
                skewY: 0,
                opacity: 1,
            })

            gsap.to(hltxt, {
                duration: 1,
                delay: 1.9,
                ease: "power4.out",
                x: 0,
                y: 0,
                rotate: 0,
                skewX: 0,
                skewY: 0,
                opacity: 1,
            })
        }

        gsap.to(httl, {
            duration: .8,
            delay: 1.8,
            ease: "power4.out",
            x: 0,
            y: 0,
            rotate: 0,
            skewX: 0,
            skewY: 0,
            opacity: 1,
        })




        gsap.to(hs, {
            duration: 1,
            delay: 2.2,
            ease: "power4.out",
            x: 0,
            y: 0,
            rotate: 0,
            skewX: 0,
            skewY: 0,
            opacity: 1,
        })

        gsap.to(ce, {
            duration: .8,
            delay: .6,
            ease: 'power4.out',
            y: 0,
            opacity: 1,
        })
    }
    catch (error) {
        console.log(error);
    }
}

function leaveAnimationForNoThumb(data, done) {
    const hbg = data.querySelector('.hero__bg');
    const httl = data.querySelector('.hero__ttl');
    const ce = data.querySelector('.content__entry');

    const hero = data.querySelector('.hero');
    hero.classList.remove('is-active');

    const header = document.querySelector('.header');
    header.classList.remove('is-active');

    gsap.to(httl, {
        duration: .6,
        // delay: .4,
        ease: "power4.out",
        x: 0,
        y: '30%',
        rotate: 0,
        skewX: 0,
        skewY: 0,
        opacity: 0,
    })

    gsap.to(ce, {
        duration: .6,
        // delay: .4,
        ease: 'power4.out',
        y: '10%',
        opacity: 0,
        onComplete: () => {
            done();
        }
    })
}

function enterAnimationForNoThumb(current) {

    try {
        const hbg = current.container.querySelector('.hero__bg');
        hbg.style.width = 0;

        const httl = current.container.querySelector('.hero__ttl');
        const hero = current.container.querySelector('.hero--has-no-thumb');
        const ce = current.container.querySelector('.content__entry');

        gsap.to(hbg, {
            duration: 1,
            ease: "power4.inOut",
            width: '100%',
        });

        gsap.to(httl, {
            duration: .8,
            delay: .4,
            ease: "power4.out",
            x: 0,
            y: 0,
            rotate: 0,
            skewX: 0,
            skewY: 0,
            opacity: 1,
        })

        gsap.to(ce, {
            duration: .8,
            delay: .6,
            ease: 'power4.out',
            y: 0,
            opacity: 1,
        })
    }
    catch (error) {
        console.log(error);
    }

}