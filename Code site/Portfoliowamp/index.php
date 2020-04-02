<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexya-Web</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <img src="svg/arrow-up-solid.svg" class="buttonUp">
    <header>
        <img class="background" src="Img/mountain.jpg" alt="background 4k">   
        <div class="header">
            <nav class="menu">
                <div class="logo active"><ul>
                    <li><img class="logo-title" src="svg/Groupe 9.svg"></li>
                    <li class="title">LEXYA-WEB</li>
                </ul></div>
                <ul>
                    <div id="myLinks">
                        <li><a href="#" class="Accueil">Accueil</a></li>
                        <li><a href="#" class="contactlink">Contact</a></li>
                        <li><a href="#" class="creation-title">Nos créations</a></li>
                        <li><a href="#" class="aboutUs">A propos de nous</a></li>
                    </div>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </ul>
            </nav>
        </div>
        <div class="title1">
            <h1>FULLSTACK DEVELOPPEUR</h1>
            <h2>Une équipe pour réaliser tous vos projets</h2>
            <div class="buttonPortfolio">
                <p><a href="#">Portfolio</a></p>
            </div>
        </div>
        <div class="buttondown">
            <div class="circle">
                <a href="#bottom-page"><img id="bottom-arrow" src="Img/Icon - Keyboard Arrow - Up - Dark.svg" alt="arrow down"></a>
            </div>
            
        </div>

    </header>
    <section class="comp">
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
 
     <?php require("contact.php"); ?>
    
    
    <?php require("footer.php"); ?> 
    <script type="text/javascript" src="script.js"></script> 
    