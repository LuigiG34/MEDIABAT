<?php
ob_start();
?>

<body>
    <main class="d-flex flex-column justify-content-center align-items-center">
        <h1>INSCRIPTION</h1>
        <form action="" method="post" class="d-flex flex-column">
            <div class="d-flex container-two">
                <div class="by-two">
                    <label for="">Prénom :</label>
                    <input type="text" name="fname" id="fname" placeholder="Prenom...">
                </div>
                <div class="by-two">
                    <label for="">Nom :</label>
                    <input type="text" name="lname" id="lname" placeholder="Nom...">
                </div>
            </div>

            <label for="">Email :</label>
            <input type="email" name="email" id="email" placeholder="Email...">
            <label for="">Mot de passe :</label>
            <input type="password" name="password" id="password" placeholder="Mot de passe...">
            <label for="">Retapez votre mot de passe :</label>
            <input type="password" name="password-again" id="password-again" placeholder="Mot de passe...">

            <div class="d-flex container-two">
            <div class="by-two">
                    <label for="" class=" mt-3">Code Postal :</label>
                    <input type="text" name="zipcode" id="zipcode" placeholder="Code postal...">
                </div>
                <div class="by-two">
                    <label for="">Ville :</label>
                    <select name="city" id="city">
                        <option value="" disabled="true" selected>Ville...</option>
                    </select>
                </div>
            </div>
            <label for="" class="d-flex align-items-center date-container">Date de naissance : <input type="date" name="date"> </label>
            <label for="" class="d-flex align-items-center checkbox-cont">Type d'utilisateur :
                <label for="" class="d-flex align-items-center radios">Standard
                    <input name="status" value="standard" type="checkbox" checked>
                </label>
                <label for="" class="d-flex align-items-center radios">Professionel BTP
                    <input name="status" value="proBTP" type="checkbox">
                </label>
            </label>
            <div class="d-flex container-two">
                <div class="by-two">
                    <label for="">Métier :</label>
                    <select name="metier">
                        <option class="bg-light"  value="Métier" disabled="true" value="null" selected>Métier...</option>
                        <option class="bg-light" name="metier" value="maçon">Maçon</option>
                        <option class="bg-light" name="metier" value="architecte">Architecte</option>
                        <option class="bg-light" name="metier" value="électricien">Electricien</option>
                        <option class="bg-light" name="metier" value="sérrurier">Serrurier</option>
                        <option class="bg-light" name="metier" value="peintre">Peintre</option>
                        <option class="bg-light" name="metier" value="plombier">Plombier</option>
                        <option class="bg-light" name="metier" value="plaquiste">Plaquiste</option>
                        <option class="bg-light" name="metier" value="menuisier">Menuisier</option>
                        <option class="bg-light" name="metier" value="carreleur">Carreleur</option>
                        <option class="bg-light" name="metier" value="charpentier">Charpentier</option>
                    </select>
                </div>
                <div class="by-two small">
                    <small>*Uniquement pour les utilisateurs "Professionnel BTP"</small><br>
                    <small>**Laisse le champs "Métier" vide si vous êtes un utiliseur "Standard"</small>
                </div>
            </div>
            <input type="submit" name="submit" id="submit" value="S'inscrire">
        </form>
    </main>
</body>

<?php
$css = "forms.css";
$title = "MEDIABAT - S'inscrire";
$description = "Inscrivez-vous pour créer votre compte MEDIABAT.";
$content = ob_get_clean();
$script = "inscription.js";
require_once "../template.php";
?>