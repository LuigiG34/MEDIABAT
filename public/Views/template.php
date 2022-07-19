<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description ?>">
    <link rel="shortcut icon" href="public/assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="public/assets/fonts/fonts.css">
    <link rel="stylesheet" href="public/assets/css/template.css">
    <link rel="stylesheet" href="public/assets/css/<?= $css ?>">
    <title><?= $title ?></title>
</head>
<body>
<div id="page">
    <!--NAVIGATION BAR-->
    <header class="d-flex flex-col">
        <nav class="d-flex justify-content-between align-items-center">
            <a href="../main/index.php" class="logo">
                <img class="svg" src="public/assets/icons/svg/mediabat.svg" alt="logo de l'entreprise MEDIABAT">
            </a>

            <div class="d-flex justify-content-around align-items-center link-container">
                
            <a href="accueil" class="nav-links">
                <p>ACCUEIL</p>
            </a>
            <a href="inscription" class="nav-links">
                <p>INSCRIPTION</p>
            </a>
            <a href="connexion" class="nav-links">
                <p>CONNEXION</p>
            </a>
            <a href="profil" class="nav-links">
                <p>PROFIL</p>
            </a>
            <!--
            <a href="../contact/messagerie.php" class="nav-links">
                <p>MESSAGES</p>
            </a>
            <a href="../admin/administration.php" class="nav-links">
                <p>ADMIN</p>
            </a> -->
            </div>
        </nav>
    </header>


    <?= $content ?>

    <!-- PAGE FOOTER-->
    <footer class="d-flex align-items-center justify-content-between">
        <div class="socials">
        <h3>RETROUVEZ-NOUS<br>SUR LES RESEAUX</h3>
        <div>
            <a href="#">
                <img class="svg social" src="public/assets/icons/svg/social/twitter.svg" alt="logo twitter">
            </a>
            <a href="#">
                <img class="svg social" src="public/assets/icons/svg/social/facebook.svg" alt="logo facebook">                
            </a>
            <a href="#">
                <img class="svg social" src="public/assets/icons/svg/social/instagram.svg" alt="logo instagram">
            </a>
        </div>
            
        </div>

        <div class="footer-logo-container">
            <img class="svg footer-icon" src="public/assets/icons/svg/mediabat.svg" alt="logo de l'entreprise MEDIABAT">
        </div>

        <div class="footer-nav">
            <a href="public/Views/main/index.html" class="footer-links">
                <p>Accueil</p>
            </a>
            <a href="public/Views/contact/contact.php" class="footer-links">
                <p>Nous contacter</p>
            </a>
            <a href="#" class="footer-links">
                <p>Mentions Légales</p>
            </a>
            <a href="#" class="footer-links">
                <p>RGPD</p>
            </a>
        </div>
    </footer>

    <a href="#" class="top-btn">
        <img class="top-img" src="public/assets/icons/svg/top-arrow.svg" alt="">
    </a>
    </div>

    <section class="loader-wrapper d-flex justify-content-center css-selector">
        <section class="d-flex justify-content-center align-items-center flex-column">
            <img src="public/assets/icons/svg/mediabat.svg" alt="MEDIABAT LOGO" class="m-3 loader-logo">
            <div class="spinner-border text-light" role="status" class="m-3">
            </div>
        </section>
    </section>

    <script src="public/assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="public/assets/js/template.js"></script>
    <?php if (isset($script)){?>
        <script src="public/assets/js/<?= $script?>"></script>
    <?php }?>    
</body>
</html>