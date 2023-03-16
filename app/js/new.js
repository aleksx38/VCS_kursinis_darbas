document.addEventListener("DOMContentLoaded", () => {
    
    // Galerijos funkcija "paslaugos" puslapiui

        const tnsCarousel = document.querySelectorAll('.slider-paslaugos');
        tnsCarousel.forEach(slider1 =>{
            let tnsSlider = tns({
                container: slider1,
                gutter: 20,
                "slideBy" :1,
                "speed": 400,
                "nav": false,
                autoplay: true,
                controls: false,
                responsive: {
                    1024: {
                        items: 3
                    },
                    768: {
                        items: 2
                    },
                    400: {
                        items: 1
                    }
                }
            })
        })
})
    
    