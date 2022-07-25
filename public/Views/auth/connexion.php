<?php
ob_start();
?>

<body>
    <main class="d-flex flex-column justify-content-center align-items-center">
        <h1>CONNEXION</h1>
            <form action="" method="post" class="d-flex flex-column">
            <label for="">Email :</label>
                <input type="email" name="email" placeholder="Email...">
            <label for="">Mot de passe :</label>
                <input  type="password" name="password" placeholder="Mot de passe...">
                <input type="submit" name="submit" value="Se connecter">
        </form>
    </main>
</body>

<?php
$css = "forms.css";
$title = "MEDIABAT - Se connecter";
$description = "Connectez-vous pour accéder à votre compte MEDIABAT.";
$content = ob_get_clean();
require_once "../template.php";
?>