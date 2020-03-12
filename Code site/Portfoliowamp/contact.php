<article class="form-contact">
        <div class="form-contactin">
            <form action="" method="POST">
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