class Contact{
    constructor(nom, prenom) {
        this.nom = nom;
        this.prenom = prenom;
    }
    decrire() {
        return `Nom : ${this.nom}, prénom: ${this.prenom}`;
    }
}
const contact = [];

function option() {
    return console.log("1 : lister les contacts"),
            console.log("2 : Ajouter les contacts"),
            console.log("3 : Supprimer un contact"),
            console.log("0 : Quitter");
}

console.log("Bienvenue dans le gestionnaire de contact !");
option();

let choix = Number(prompt("Choisisser une option :"));

while (choix !== 0) {
    if (choix === 1) {
        contact.forEach(contact => {
            console.log(contact.decrire());
        });
        option();
        choix = Number(prompt("Choisissez une option"));
    } else if (choix === 2) {
        contact.push(new Contact(prompt("Entrez le nom du contact"), prompt("Ecrivez le prénom du contact")));
        console.log("Le contact a été ajouté avec succès");
        option();
        choix = Number(prompt("Choisissez une option"));
    } else if (choix === 3) {
        contact.pop();
        console.log("le contact a éte supprimé avec succès");
        option();
        choix = Number(prompt("Choisissez une option"));
    } else {
        console.log("Cette option n'existe pas!");
        option();
        choix = Number(prompt("Choisissez une option"));
    }
}
console.log("Au revoir!");
