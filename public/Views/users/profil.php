<?php
ob_start();
?>

<section class="d-flex flex-column align-items-center justify-content-center big-container">
    <main class="d-flex flex-column align-items-center justify-content-around">
        <img class="profile-img" src="public/assets/img/defaultprofile.jpg"  alt="">
        <h1 class="text-center">NOM Prenom</h1>
        <h2>Utilisateur Standard</h2>
        <article class="d-flex flex-row align-items-center justify-content-end">
            <!--CE BOUTTON DEVIENS MODIFIER PROFIL SI CEST NOTRE PROFIL-->
            <button>Signaler l'utilisateur</button><br>
            <small class="m-2">*Vous pouvez signaler un utilisateur en cas de langage ou comportement innaproprié.</small>
        </article>
        <button>Modifier Profile</button>
        <hr class="w-100">
    </main>
</section>

<?php
$css = "profil.css";
$title = "MEDIABAT - Votre profil";
$description = "Visualiser votre profil MEDIABAT.";
$content = ob_get_clean();
require_once "../template.php";
?> 