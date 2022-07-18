<?php
ob_start();
?>

<body>
    <main class="d-flex flex-column justify-content-center align-items-center">
        <h1>SERVICE CONTACT</h1>
        <h2 class="my-5">Répondre à l'utilisateur</h2>
        <form action="" method="post" class="d-flex flex-column">
    <label for="">Message :
        <textarea name="" id="" cols="30" rows="10"></textarea>
    </label>
    <input type="submit" value="Envoyer">
</form>
</section>

<?php
$css = "forms.css";
$title = "MEDIABAT - ADMIN";
$description = "En cas de problèmes, suggestions ou autres. Contactez-nous. Response.";
$content = ob_get_clean();
require_once "../template.php";
?>