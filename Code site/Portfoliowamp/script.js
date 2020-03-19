function smoothScroll(target,duration) {
    target = document.querySelector(target);
    let targetPosition= target.getBoundingClientRect().top;
    let startPosition = window.pageYOffset;
    let distance = targetPosition - startPosition;
    let startTime = null;
    console.log(startPosition);

    function animationScroll(currentTime){
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

let accueil = document.querySelector('#accueil');

accueil.addEventListener('click', function()) {
    smoothScroll('.design', 1000);
}

