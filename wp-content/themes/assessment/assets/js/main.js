jQuery(document).ready(function () {

    //Location Page Content Animation using Gsap
    let gsap_timeline = gsap.timeline();
    gsap_timeline.to(".location--map img", {
        opacity: 1,
        duration: 1,
        y: 0
    })
    gsap_timeline.to(".pin--img", {
        opacity: 1,
        duration: 1,
        stagger: 0.3,
        keyframes: {
            "0%": { yPercent: 0, scaleX: 1, scaleY: 1 },
            "7%": { yPercent: -5, scaleY: 0.9, scaleX: 1.1, ease: "sine.in" },
            "25%": { yPercent: -20, scaleY: 1.15, scaleX: 0.9, ease: "sine.in" },
            "50%": { yPercent: -30, scaleX: 1, scaleY: 1.05, ease: "none" },
            "60%": { scaleX: 1.1, scaleY: 0.9, ease: "sine.out" },
           
            "100%": { yPercent: 0, scaleX: 1, scaleY: 1 },
            easeEach: "sine.out"
        },
    })

})