<?php
ob_start();
?>

<section class="my-modal-container d-flex justify-content-center align-items-center note-modal d-none">
    <article class="my-modal d-flex flex-column justify-content-center align-items-center">
    <div class="cross-container">
                <img class="cross cross-note" src="../../assets/icons/svg/x-square.svg" alt="">
            </div>
        <div class="content d-flex flex-column justify-content-center align-items-center">
            <h2>Noter l'utilisateur</h2>
            <span class="star-container">
                <img class="stars" src="../../assets/icons/svg/star.svg" alt="">
                <img class="stars" src="../../assets/icons/svg/star.svg" alt="">
                <img class="stars" src="../../assets/icons/svg/star.svg" alt="">
                <img class="stars" src="../../assets/icons/svg/star.svg" alt="">
                <img class="stars" src="../../assets/icons/svg/star-empty.svg" alt="">
            </span>
        </div>

    </article>
</section>

<section class="d-flex flex-column align-items-center justify-content-center big-container">
    <main class="d-flex flex-row align-items-center justify-content-around">
        <article class="d-flex flex-column align-items-start justify-content-end">
            <img class="profile-img" src="../../assets/img/defaultprofile.jpg" alt="">
            <h1 class="text-center">NOM Prenom</h1>
        </article>
        <article class="d-flex flex-column align-items-start justify-content-end">
            <h2>[METIER USER]</h2>
            <h3>[Ville, Code postal]</h3>
            <h4 class="d-flex flex-row align-items-center justify-content-center">Note globale :
                <span class="star-container">
                    <img class="stars" src="../../assets/icons/svg/star.svg" alt="">
                    <img class="stars" src="../../assets/icons/svg/star.svg" alt="">
                    <img class="stars" src="../../assets/icons/svg/star.svg" alt="">
                    <img class="stars" src="../../assets/icons/svg/star.svg" alt="">
                    <img class="stars" src="../../assets/icons/svg/star-empty.svg" alt="">
                </span>
            </h4>
        </article>
        <article class="d-flex flex-column align-items-center justify-content-end">
            <button class="contact-me">
                <a href="">Contactez-moi</a>
            </button>
            <button class="note">Notez-moi</button>
            <!--deviennent modifer profile si c'est notre compte-->
            <button class="modifier">
                <a href="modifier-profil.php">Modifier Profile</a>
            </button>
        </article>
    </main>
    <div class="w-100 hr-container">
        <hr class="w-100 px-5">
    </div>
</section>
<section class="publication-container d-flex flex-wrap align-items-center justify-content-start">
    <article class="publication d-flex flex-column align-items-center justify-content-center">
        <img src="../../assets/img/defaultimg.png" alt="">
        <p>Description...</p>
    </article>
    <article class="publication">
        <img src="../../assets/img/defaultimg.png" alt="">
        <p>Description...</p>
    </article>
    <article class="publication">
        <img src="../../assets/img/defaultimg.png" alt="">
        <p>Description...</p>
    </article>
    <article class="publication">
        <img src="../../assets/img/defaultimg.png" alt="">
        <p>Description...</p>
    </article>
    <article class="publication">
        <img src="../../assets/img/defaultimg.png" alt="">
        <p>Description...</p>
    </article>
    <article class="publication">
        <img src="../../assets/img/defaultimg.png" alt="">
        <p>Description...</p>
    </article>
</section>



<?php
$css = "profil.css";
$script = "profil-btp.js";
$title = "MEDIABAT - Votre profil";
$description = "Visualiser votre profil MEDIABAT.";
$content = ob_get_clean();
require_once "../template.php";
?>