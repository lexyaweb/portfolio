let bernard = new Boulanger("dédé");
let baguette = new Produit("baguette");
let croissant = new Produit("croissant");
let painDeMie = new Produit("pain de mie");
let flute = new Produit("flute");

bernard.fabriquer(flute, 30);
bernard.fabriquer(baguette, 80);
bernard.fabriquer(croissant, 50);
bernard.fabriquer(painDeMie, 20);
bernard.bilan();