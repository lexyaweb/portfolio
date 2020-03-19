function smoothScroll(target,duration) {
    target = document.querySelector(target);
    let targetPosition= target.getBoundingClientRect().top;
    let startPosition = window.pageYOffset;
    let distance = targetPosition - startPosition;
    let startTime = null;
    console.log(startPosition);
}

smoothScroll('#accueil', 1000);