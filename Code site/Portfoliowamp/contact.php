<article class="contact">
    <form action="" method="POST"> 
        <fieldset class="form_contact">
            <div class="contactin">
                <div class="contact-txt"><p>Contact</p></div>
                <input type="text" class="name_contact" id="name" name="name" placeholder="Votre nom *"/><br/>
                <input type="mail" class="mail_contact" id="mail" name="mail" placeholder="Votre mail *"/></br>
                <input type="text" class="message_contact" id="message" name="message" placeholder="Votre message *"></textarea><br/>
                <input class="btn-submit" type="submit" value="Envoyer" name="envoi">
            </div>
            <div class="coordonnees">
                <p class="coordonnees-title">Coordonnées</p><br/>
                <p>Alexia Fontraille<br/>
                07.69.86.89.53</p><br/>
                <p>Yael Hue<br/>
                07.81.28.51.47</p>
            </div>
        </fieldset>
    </form>

    <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['mail'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('afontraille@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['mail']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
</article>