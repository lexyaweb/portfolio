class Perso {
    constructor(nom,classe,sante,puissance,inteligence,dexterite,xp) {
        this.nom = nom;
        this.classe = classe;
        this.sante = sante;
        this.puissance =  puissance;
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
       attaquer(cible) {
           if(this.sante > 0) {
               const degats = this.puissance;
               console.log(`${this.nom} attaque ${cible.nom}
               et lui inflige ${degats} points de dégats`);
           cible.sante -= degats;
           if(cible.sante > 0) {
               console.log(`${cible.nom} a encore ${cible.sante} points de vie `);
           } else {
               cible.sante = 0;
               const bonusXP = 60;
               console.log(`${this.nom} a tué ${cible.nom} et gagne ${bonusXP} points d'expérience`);
               this.xp += bonusXP;
               if(this.xp > 50) {
                console.log(`${this.nom} est passé au niveau supérieur`);
            } else {
                console.log(`${this.nom} est toujours au même niveau !`)
            }
           }
           
       } else {
           console.log(`${this.nom} n'a plus de points de vie et ne peut plus attaquer`);
       
        }
    }

}
let perso = new Perso ("baldur","sorcier",1000,20,15,30);
let monstre = new Perso("Bilbon la brute","monstre",25,10,12,18);

perso.decrire();
perso.bonus();
monstre.decrire();
monstre.attaquer(perso);
perso.attaquer(monstre);
perso.attaquer(monstre);
console.log(perso.decrire());
console.log(monstre.decrire());