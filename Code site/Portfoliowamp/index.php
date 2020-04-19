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
    