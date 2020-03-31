<article class="form-contact">
    <div class="form-contactin">
        <form action="traitement_formulaire.php" method="POST">
            <fieldset>
                <legend id="contactlink">Contact</legend>
                    <div class="name-email">
                        <div class="name">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" placeholder="Serre" required=""><br><br>
                        </div>
                        <div class="mail">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="prenom.nom@gmail.com" required="" pattern="[a-zA-Z]*.[a-zA-Z]*@gmail.com"><br><br>
                        </div>
                    </div>  
                    <div class="surname-tel">
                        <div class="surname">
                            <label for="prenom">Prénom</label>
                            <input type="text" id="prenom" name="prenom" placeholder="Olivier"><br><br>
                        </div>
                        <div class="tel">
                            <label for="telephone">N° téléphone</label>
                            <input type="tel" id="telephone" name="telephone" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br><br>
                        </div>
                    </div><br>
					<div class="objet">
                            <label for="objet">Objet</label>
                            <input type="text" id="objet" name="objet" placeholder=""><br><br>
                        </div>
                    <div class="message">
                        <label for="comments">Message</label>
                        <textarea type="text" id="comments" name="message"></textarea>
                    </div>
            </fieldset>
            <span class="btn-align"><input class="bouton-envoyer" type="submit" value="Envoyer" name="envoi"><img class="icon-email" src="svg/ic_email_24px.svg" alt="icon-email"></span>
        </form>
    </div>
</article>