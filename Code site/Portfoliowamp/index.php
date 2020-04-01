<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexya-Web</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="btn"><img src="svg/arrow-up-solid.svg" class="icone"></i></div>
    <header>
        <img class="img1" src="Img/mountain.jpg" alt="background 4k">   
        <div class="header">
            <div class="logo">
                <ul>
                    <li><img class="logo-title" src="svg/Groupe 9.svg"></li>
                    <li class="title">LEXYA-WEB</li>
                </ul>
            </div>
            <div class="mobile-container">
                <nav class="menu">
                    <ul>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <i class="fa fa-bars"></i>
                        </a>
                        <li><a href="#home" class="active">Menu</a></li>
                        <div id="myLinks">
                            <li><a href="#" class="Accueil">Accueil</a></li>
                            <li><a href="#" class="contactlink">Contact</a></li>
                            <li><a href="#" class="creation-title">Nos créations</a></li>
                            <li><a href="#" class="aboutUs">A propos de nous</a></li>
                        </div>
                    </ul>
                </nav>
            </div>
            <script>
                function myFunction() {
                    let x = document.getElementById("myLinks");
                    if (x.style.display === "block") {
                        x.style.display = "none";
                    } else {
                        x.style.display = "block";
                    }
                }
            </script>
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

    <?php require ("presentation.php") ?>

    <article>
        <div class="bloc-creation">
            <h3 class="creation" id="creation-link">Nos créations</h3>
        </div>
    </article>
 
<<<<<<< HEAD
     <?php require("contact.php"); ?>
=======
     <?php require("contact.php");  ?>
>>>>>>> 7f48b1e0803b8a7d06174a0c1b0d3ee86798711c
    
    
    <?php require("footer.php"); ?> 
    <script type="text/javascript" src="script.js"></script> 
    