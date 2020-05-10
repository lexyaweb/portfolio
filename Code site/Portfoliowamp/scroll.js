function scrollAppear() {
    let introText = document.querySelector('.texte-present');
    let introPosition = introText.getBoundingClientRect().top;
    let screenPosition = window.innerHeight;

    if (introPosition > screenPosition) {
        introText.classList.add('.texte-present-appear');
    
    }
    console.log(introText);
}

window.addEventListener('scroll', scrollAppear);