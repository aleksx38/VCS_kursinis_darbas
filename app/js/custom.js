document.addEventListener("DOMContentLoaded", () => {
    
// Paslaugu galerija "pagrindinis" puslapyje
    let slider = tns({
        container : ".my-slider",
        gutter: 20,
        "slideBy" :1,
        nav: false,
        controlsContainer: ".controller",
        hasControls: true,
        prevButton: ".previous",
        nextButton: ".next",
        autoplay: true,
        autoplayButtonOutput: false,
        "speed": 700,
        
        responsive: {
            1024: {
                items: 3
            },
            768: {
                items: 2
            },
            480: {
                items: 1
            }
        }
    });

    // funkcija iterpti galerija "projektai" puslapyje

    Fancybox.bind('[data-fancybox="gallery"]', {
        Thumbs: false,
        Toolbar: false,
    
        Image: {
        zoom: false,
        click: false,
        wheel: "slide",
        },
    });

})

