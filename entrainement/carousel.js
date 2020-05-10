class Chrono {
    constructor(time,nom,a,b) {
        this.time = time;
        this.nom = [];
        this.a = a;
        this.b = b;
    }
    timePing(delai) {
        setTimeout(() =>  console.log(this.time),delai * 1000);
    }
    decrire() {
        setTimeout(() => console.log("Bonjour" + " " + this.nom));
    }
    hello() {
        let bonjour = () => console.log('bonjour ' + this.nom);
        bonjour();
    }
    calcul() {
        let mathematic = () => console.log(this.a * this.b);
        mathematic();
    }
    moyenne() {
        let somme = () => console.log(this.a + this.b);
        somme();
        let moy = () => console.log(this.a + this.b);
        moy();

    }

}
let chronos = new Chrono("yes!!!","dan");
let name = new Chrono(12,"Yael");
let test = new Chrono(15,"danny",1569,2365);
let tabul = new Chrono(1,"ee",15693,1452336)
chronos.timePing(2);
name.decrire();
name.hello();
test.calcul();
tabul.calcul();
tabul.moyenne();
let tab = [41,12,0,2,11,17];

tab.push("bonjour");

console.log(tab);

const numberSupp = tab.filter(p => p >= 11)
console.log(numberSupp);

const numberUp = tab.map(p => p * 25);
console.log(numberUp);