<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('afontraille@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From : ' $_POST['mail']);
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    } else {
        echo 'Votre message n\'a pas fonctionné';
    }
    ?>
</body>
</html>