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
                    <input type="text" placeholder="Prenom...">
                </div>
                <div class="by-two">
                    <label for="">Nom :</label>
                    <input type="text" placeholder="Nom...">
                </div>
            </div>

            <label for="">Email :</label>
            <input type="email" placeholder="Email...">
            <label for="">Mot de passe :</label>
            <input type="password" placeholder="Mot de passe...">
            <label for="">Retapez votre mot de passe :</label>
            <input type="password" placeholder="Mot de passe...">

            <div class="d-flex container-two">
                <div class="by-two">
                    <label for="">Ville :</label>
                    <input type="text" id="ville" placeholder="Prenom..." list="villes">
                    <datalist id="villes">
                        <option value="Internet Explorer">
                        <option value="Firefox">
                        <option value="Chrome">
                        <option value="Opera">
                        <option value="Safari">
                    </datalist>
                </div>
                <div class="by-two">
                    <label for="" class=" mt-3">Code Postal :</label>
                    <select name="zipcode" id="zipcode">
                        <option value="zipcode" disabled="true" selected>Code Postal</option>
                        <option value="">75000</option>
                        <option value="">34000</option>
                    </select>
                </div>
            </div>
            <label for="" class="d-flex align-items-center date-container">Date de naissance : <input type="date"> </label>
            <label for="" class="d-flex align-items-center checkbox-cont">Type d'utilisateur :
                <label for="" class="d-flex align-items-center radios">Standard
                    <input type="checkbox" checked>
                </label>
                <label for="" class="d-flex align-items-center radios">Professionel BTP
                    <input type="checkbox">
                </label>
            </label>
            <div class="d-flex container-two">
                <div class="by-two">
                    <label for="">Métier :</label>
                    <select>
                        <option class="bg-light" value="Métier" disabled="true" selected>Métier...</option>
                        <option class="bg-light" value="">Maçon</option>
                        <option class="bg-light" value="">Architecte</option>
                        <option class="bg-light" value="">Electricien</option>
                        <option class="bg-light" value="">Serrurier</option>
                        <option class="bg-light" value="">Peintre</option>
                        <option class="bg-light" value="">Plombier</option>
                        <option class="bg-light" value="">Plaquiste</option>
                        <option class="bg-light" value="">Menuisier</option>
                        <option class="bg-light" value="">Carreleur</option>
                        <option class="bg-light" value="">Charpentier</option>
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
$script = "ville.js";
require_once "../template.php";
?>