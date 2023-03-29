        // loader
        $(document).ready(function () {
            setTimeout(() => {
                $('.loader').remove();
            }, 1000); // after 8 sec it will remove.
        });


        // navbar scroll
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.hndzCoNavbar').addClass('stickyNavbar');
                $('.logo-img').css("width", "90px")
                $('.menu-icon').css("font-size", "28px")
            } else {
                $('.hndzCoNavbar').removeClass('stickyNavbar');
                $('.logo-img').css("width", "120px")
                $('.menu-icon').css("font-size", "38px")
            }
        });






        // latest-project-slider
        $(document).ready(function () {
            $('.latest-project-slider').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                autoplay: true,
                navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1.5
                    },
                    1300: {
                        items: 3.5
                    },
                    1500: {
                        items: 3.5
                    }
                }
            })
        });


        // aos
        AOS.init();