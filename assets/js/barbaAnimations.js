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

    gsap.to(hbg, {
        duration: 1.2,
        ease: "power4.inOut",
        x: 50,
        opacity: 0,
        onComplete: () => {
            done();
        }
    })

    gsap.to(httl, {
        duration: .8,
        ease: "power4.inOut",
        x: 30,
        opacity: 0,
    })

    gsap.to(hlttl, {
        duration: .8,
        ease: "power4.inOut",
        x: 25,
        opacity: 0,
    })

    gsap.to(hltxt, {
        duration: .8,
        ease: "power4.inOut",
        x: 20,
        opacity: 0,
    })

    gsap.to(hs, {
        duration: .8,
        ease: "power4.inOut",
        x: 10,
        opacity: 0,
    })
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

        gsap.to(hbg, {
            duration: 1,
            ease: "power4.inOut",
            width: '100%',
        });

        if (w > 769) {
            gsap.to(hbg, {
                duration: .6,
                delay: 1.2,
                ease: "power4.out",
                scale: .75,
                onComplete: function () {
                    hero.classList.add('is-active');
                }
            });
        } else {
            gsap.to(hbg, {
                duration: .6,
                delay: 1.2,
                ease: "power4.out",
                scale: 1,
                onComplete: function () {
                    hero.classList.add('is-active');
                }
            });

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

        gsap.to(hlttl, {
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

        gsap.to(hltxt, {
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