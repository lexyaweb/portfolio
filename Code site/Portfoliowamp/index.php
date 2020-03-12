<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexya-Web</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>

            <img class="img1" src="Img/mountain.jpg" alt="background 4k">   

        <div class="header">
            <div class="logo">
                <ul>
                    <li><img class="logo-title" src="svg/Groupe 9.svg"></li>
                    <li class="title">LEXYA-WEB</li>
                </ul>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="#accueil" class="Accueil">Accueil</a></li>
                    <li><a href="#contactlink">Contact</a></li>
                    <li><a href="#creation-link" class="creation-title">Nos créations</a></li>
                    <li><a href="#aboutUs-link" class="aboutUs">A propos de nous</a></li>
                </ul>
            </nav>
        </div>

        <div class="titre1">

            <h1>FULLSTACK DEVELOPPEUR</h1>
            <h2>Une équipe pour réaliser tous vos projets</h2>
            <div class="button-portfolio">
                <p><a href="#">Portfolio</a></p>
            </div>

        </div>

        <div class="buttondown">

            <div class="circle">
                <a href="#bottom-page"><img id="bottom-arrow" src="Img/Icon - Keyboard Arrow - Up - Dark.svg" alt="arrow down"></a>
            </div>
            
        </div>

    </header>
    <section class="comp" id="accueil">
        <section class="compleft">

            <div class="titleskills">
                <img class="logouser" src="svg/toolcomp.svg" alt="logouser">
                <h2 class="skills">Nos compétences</h2>
            </div>
                <div class="listskills">
                    <ul>
                        <li>Html</li>
                        <li>Css</li>
                        <li>Javascript</li>
                        <li>Php</li>
                        <li>Ui & Ux</li>
                    </ul>
                </div>
        </section>

        <section class="compright">

            <div class="tool">
                <img class="icontool" src="svg/Icontool.svg" alt="Icon tool">
                <h2 class="title-tool">Nos Outils</h2>
            </div>   
        
            <div class="listtools">
                <ul>
                    <li>Système : Linux, Windows, Git, Github</li>
                    <li>Logiciel : Adobe XD, Illustrator, Photoshop, Lightroom</li>
                    <li>Bureautique : Openoffice, Excell</li>
                </ul>
            </div>
        </section>
    </section>

    <article>
        <div class="cadre">

            <div class="presentation-title" id="aboutUs-link">
                <div class="presentation">
                    <div class="texte-present">
                        <div class="toolalign">
                            <img class="logopresentation" src="svg/logocomp.svg" alt="logo compétence">
                            <h3>A propos de nous</h3>
                        </div>
                        <p>Alexia & Yael HUE, respectivement 26 et 32 ans, nous sommes 2 développeur, en plein apprentissage.
                        Back end et front end rien ne nous échappe !
                        Nous sommes originaire du sud de la de la France.</p>
                    </div>
                    <div class="image-present">
                        <img src="Img/yael.png" alt="yael développeur">   
                        <img src="Img/alexia.png" alt="alexia développeur">
                    </div>
                </div>
            </div>

        </div>
    </article>
    <article>
        <div class="bloc-creation">
            <h3 class="creation" id="creation-link">Nos créations</h3>
        </div>
    </article>
    
    <article class="form-contact">
        <div class="form-contactin">
            <form action="traitement_formulaire.php" method="POST">
                <fieldset>
                    <legend id="contactlink">Contact</legend>
                        <div class="name-email">
                            <div class="name">
                                <label for="nom">Nom</label>
                                <input id="nom" placeholder="Serre" autofocus="" required=""><br><br>
                            </div>
                            <div class="mail">
                                <label for="email">Email</label>
                                <input id="email" type="email" placeholder="prenom.nom@gmail.com" required="" pattern="[a-zA-Z]*.[a-zA-Z]*@polytechnique.edu"><br><br>
                            </div>
                        </div>  
                        <div class="surname-tel">
                            <div class="surname">
                                <label for="prenom">Prénom</label>
                                <input id="prenom" placeholder="Olivier" autofocus="" required=""><br><br>
                            </div>
                            <div class="tel">
                                <label for="telephone">N° téléphone</label>
                                <input id="telephone" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br><br>
                            </div>
                        </div>
                        <div class="message">
                            <label for="comments">Message</label>
                            <textarea id="comments"></textarea>
                        </div>
                </fieldset>
                <span class="btn-align"><input class="bouton-envoyer" type="submit" value="Envoyer"><img class="icon-email" src="svg/ic_email_24px.svg" alt="icon-email"></span>
            </form>
        </div>
    </article>

    <footer class="footer">
        <div class="design">
            <p id="bottom-page">Design Yaelxy copyright</p>
            <img class="copyright-icon" src="svg/copyright.svg" alt="copyright">
        </div>
    </footer>
</body>
</html>