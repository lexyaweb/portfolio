<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexya-Web</title>
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="script.js"></script> 
</head>
<body>
    <?php include ("connect.php"); ?>
    <?php require ("menu.php"); ?>
    <div class="title1">
            <h1>FULLSTACK DEVELOPPEUR</h1>
            <h2>Une équipe pour réaliser tous vos projets</h2>
        </div>
        <div class="buttondown">
            <div class="circle">
                <a href="#bottom-page"><img id="bottom-arrow" src="Img/Icon - Keyboard Arrow - Up - Dark.svg" alt="arrow down"></a>
            </div>
        </div>
    </header>
    <?php require ("skills.php"); ?>
    <?php require ("presentation.php"); ?>

    <article>
        <div class="bloc-creation">
            <h3 class="creation" id="creation-link">Nos créations</h3>
        </div>
    </article>
 
 
    <?php require("contact.php"); ?>
    <?php require("footer.php"); ?> 
    
    <script type="text/javascript" src="script.js"></script> 
    