class Perso {
    constructor(nom,classe,sante,puissance,inteligence,dexterite,xp) {
        this.nom = nom;
        this.classe = classe;
        this.sante = sante;
        this.puissance = puissance;
        this.inteligence = inteligence;
        this.dexterite = dexterite;
        this.xp = 0;
       }

       decrire() {
           console.log(`${this.nom} est un ${this.classe}!`);
       }
       combat() {
           if (this.puissance > this.sante) {
               console.log(`${this.nom} est mort`);
           } else {
               console.log(`${this.nom} a survecu !`);
           }
       }
       bonus() {
           if(this.sante > this.puissance) {
               console.log(`${this.nom} a gagner ${this.xp} points d'expériences !`)
           } else if (this.sante = this.puissance) {
               console.log(`${this.nom} n'a pas gagner de ${this.xp} points d'expériences !`)
           } else {
               console.log(`${this.nom} est mort !!`)
           }
       }
}

let perso = new Perso ("baldur","sorcier",36,20,15,30);
let monstre = new Perso("Bilbon la brute","monstre",25,10,12,18)
perso = 
perso.bonus() 
    if(this.bonus >15) {
        console.log("level up");
    }

perso.decrire();
perso.bonus();
monstre.decrire();

perso.combat();























/*class Moto {
    constructor(marque,cylindre,prix) {
        this.marque = marque;
        this.cylindre = cylindre;
        this.prix = prix;
    }

    puissance() {
        console.log(`cette Moto ${this.marque} a une puissance de ${this.cylindre} CC`)
    }

    cout() {
        console.log(`cette moto ${this.marque} coûte ${this.prix} €`)
    }
}
class Car {
    constructor(m)
}
let moto = new Moto("Honda", 900, 1500);
moto.puissance();
moto.cout();
console.log(moto); */