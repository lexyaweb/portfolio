<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexya-Web</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php require ("menu.php"); ?>
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
    <?php
    require ("skills.php");
    require ("presentation.php")
    ?>

    <article>
        <div class="bloc-creation">
            <h3 class="creation" id="creation-link">Nos créations</h3>
        </div>
    </article>
 
    <?php 
    require("contact.php");
    require("footer.php");
    ?> 
    <script type="text/javascript" src="script.js"></script> 
    