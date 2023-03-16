document.addEventListener("DOMContentLoaded", () => {
    
    // Funkcija iskviesti mygtuka, kuri paspaudus vartotojas gris i puslapio virsu
    
    let mybutton = document.getElementById("myBtn");
    
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    };
    
})
    
    