/*lorsque je clique sur le bouton dans la classe spoiler 
alors jajoute la classe visible 
a lelement suivant qui se trouve juste a coté*/
/*
let button = document.querySelector('.spoiler button')
button.addEventListener('click', function (){
    this.nextElementSibling.classList.add('visible')
    this.parentNode.removeChild(this)
});*/

let elements = document.querySelectorAll('.spoiler')

let createSpoilerButton = function(element) {

    // on crée la span spoiler-content
    let span = document.createElement('span')
    span.className ='spoiler-content'
    span.innerHTML = element.innerHTML

    // on crée le bouton
    let button = document.createElement('button')
    button.textContent = 'Afficher le spoiler'

    // on ajoute les éléments au DOM
    element.innerHTML = ''
    element.appendChild(button)
    element.appendChild(span)

    // on met l'écouteur du click
    button.addEventListener('click', function(){
        button.parentNode.removeChild(button)
        span.classList.add('visible')
    })
}
    for(let i = 0; i < elements.length; i++) {
        createSpoilerButton(elements[i])
    }


/*function largestOfFour(arr) {
    let tab = [];
    for (let i =0; i < arr.length; i++) {
      let largestNumber = arr[i][0];
      for(let n = 1; n < arr[i].length;n++) {
        if (arr[i][n] > largestNumber) {
          largestNumber = arr[i][n];
        }
      }
      tab[i] = largestNumber;
    }
    return tab;
  }

largestOfFour([[4, 5, 1, 3], [13, 27, 18, 26], [32, 35, 37, 39], [1000, 1001, 857, 1]]);
  */






/*function multiplication (a) 
    {
    const number = a;
    console.log(`Table deco multiplication de ${number}`);
    for (let i = 0;i <= 10; i++){
    console.log(`${number} / ${i} = ${number / i}`);
    }
}
multiplication(15);*/






/*function randomize (arr) {
    let temp = 0;
    let random = 0;

    for(let i = 0;i < arr.length;i++) {
        random = Math.floor(Math.random() * arr.length);
        temp = arr[i];
        arr[i] = arr[random];
        arr[random] = temp;
    }
    return arr;
}

console.log(randomize([1,2,3,4,5]));
*/















/*function tirageAuSort(min, max) {
    let number = min + Math.round(Math.random()* 1000);
    console.log(number);
    if (number > 800) {
        return "Tu as gagné";
    } else if (number <800 && number >200) {
        return "tu as droit au lot de consolation";
    } else {
        return "retente ta chance";
    }
}


console.log(tirageAuSort(1,45));
*/






/*let number = Math.floor(Math.random() * 20);

console.log(number);



let addition = 15 + number;

console.log(addition);*/













/*function plusUn (arr) {
    for(let i=0; i < arr.length;i++) {
        for(let j = 0; j < arr[i].length;j++) {
            arr[i][j] += 1;
        }
    }
    return arr;
}

console.log(plusUn([[15,12],[15,25],[14,36]]));*/









/*
function moy (arr) {
    let total = 0;
    for(i=0;i < arr.length;i++) 
    total += arr[i];
    return total / arr.length;
}

console.log(moy([15,25,36,98,789,2569]));*/