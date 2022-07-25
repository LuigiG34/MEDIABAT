<?php
ob_start();
define('PATHVIEWS', 'http://localhost/mediabat/');
?>

<section class="dark-background" style="height: 100vh;">
    <section class="text-center d-flex justify-content-center align-items-center flex-column w-100" style="height: 100%;">
        <h1 class="text">ERREUR 404</h1>
        <p class="text">La page que vous cherchez n'existe pas.</p>
        <a href="<?=  PATHVIEWS ?>accueil" class="link">Retourner vers la page d'accueil</a>
    </section>
</section>

<?php
$css = "404.css";
$title = "MEDIABAT - ERREUR_404";
$description = "La page que vous cherchez n'existe pas.";
$content = ob_get_clean();
$script = "404.js";
require_once "../template.php";
?> 