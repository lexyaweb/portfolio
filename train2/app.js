/*class Contact {
    constructor(nom,prenom,age) {
        this.nom = nom;
        this.prenom = prenom;
        this.age = age;
    }

    decrire() {
        return `Mr${this.nom} ${this.prenom} a ${this.age}ans !`;
    }
}

const contact = [];

function option () {
    return console.log("1 : lister les contacts"),
            console.log("2 : Ajouter les contacts"),
            console.log("3 : Supprimer un contact"),
            console.log("0 : Quitter");
}

console.log("Bienvenue dans le gestionnaire de contact !");
option();

let choixUser = Number(prompt("Choisissez une option : "));

while (choixUser !== 0) {
    if (choixUser === 1){
            contact.forEach(contact => {
            console.log(contact.decrire());
            });
            option();
            choixUser = Number(prompt("Choisissez une option"));}
        

    else if (choixUser === 2){
            contact.push(new Contact(prompt("Entrez le nom du contact"), prompt("Ecrivez le prénom du contact"), prompt("Entrez son age")));
            console.log("Le contact a été ajouté avec succès");
            option();
            choixUser = Number(prompt("Choisissez une option"));
      }

    else if (choixUser === 3) {
            contact.pop();
            console.log("le contact a éte supprimé avec succès");
            option();
            choixUser = Number(prompt("Choisissez une option"));}
       
    else if (choixUser === 0)  {  
            console.log("Au revoir !")}
    else {
        console.log("Cette option n'existe pas!");
        option();
        choixUser = Number(prompt("Choisissez une option"));}
    }

/*function niveau (arr) {
    let moyenne = (arr[1]) / arr.length;

      if   (moyenne > 15) {
          return "BG !!" +  moyenne;
      } else if (moyenne >= 10) {
          return "peut mieux faire !!"  + moyenne;
      } else
        {return "cours de soutien nécéssaire !!" + moyenne;}
      
}

console.log(niveau([12, 18,15]));*/










/*
function esTuFort (force) {
    if(force > 15) {
        return "tu es fort";
    } else if (force > 5 && force < 15) {
        return "tu es presque fort";
    } else {return "tu es faible";}
}

console.log(esTuFort(Math.round(Math.random() * 20)));*/