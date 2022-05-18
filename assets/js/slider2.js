const slider2 = tns({
    container: ".my-slider2",
    speed: 1000,
    items: 5,
    gutter: 20,
    slideBy: 1,
    controlsPosition: "bottom",
    navPosition: "bottom",
    mouseDrag: true,
    autoplay: true,
    autoplayButtonOutput: false,
    autoplayHoverPause: true,
    controlsContainer: "#custom-control2",
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        300: {
            items: 2,
            nav: false
        },
        600: {
            items: 3,
            nav: false
        },

        900: {
            items: 4,
            nav: false
        },

        1200: {
            items: 5,
            nav: false
        },
    }
    // mode: 'gallery',
    // speed: 2000,
    // animateIn: "scale",
    // controls: false,
    // nav: false,
    // edgePadding: 20,
    // loop: false,
});
