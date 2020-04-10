function smoothScroll(target,duration) {
    target = document.querySelector(target);
    let targetPosition= target.getBoundingClientRect().top;
    let startPosition = window.pageYOffset;
    let distance = targetPosition - startPosition;
    let startTime = null;
    console.log(startPosition);



    function animation(currentTime){
        if(startTime === null) startTime = currentTime;
        let timeElaspsed = currentTime - startTime;
        let run = ease(timeElaspsed,startPosition,distance,duration);
        window.scrollTo(0,run);
        if(timeElaspsed < duration) requestAnimationFrame(animation);
    }


    function ease(t, b, c, d) {
        t /= d/2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }
    requestAnimationFrame(animation);
}



let accueil = document.querySelector('.Accueil'); 

accueil.addEventListener('click',function() {
    smoothScroll('.comp', 2000);
});

let contact = document.querySelector('.contactlink'); 

contact.addEventListener('click',function() {
    smoothScroll('.form-contact', 2000);
});

let footer = document.querySelector('#bottom-arrow');

footer.addEventListener('click',function() {
    smoothScroll('.design', 2000);
});

let creation = document.querySelector('.creation-title');

creation.addEventListener('click',function(){
    smoothScroll('.creation', 2000);
});

let about = document.querySelector('.aboutUs');

about.addEventListener('click',function(){
    smoothScroll('.presentation-title', 2000);
});



const btn = document.querySelector('.buttonUp');

btn.addEventListener('click', () => {
    smoothScroll('.header',1500);
});

/* Menu hamburger */
function myFunction() {
    let x = document.getElementById("menuInterne");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

// Fonction exécutée au redimensionnement
function redimensionnement() {
    let x = document.getElementById("menuInterne");
    if("matchMedia" in window) { // Détection
      if(window.matchMedia("(min-width:480px)").matches) {
        // Il y a de la place
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
      } else {
        
      }
    }
  }
  // On lie l'événement resize à la fonction
  window.addEventListener('resize', redimensionnement, false);
