<?php
ob_start();
?>

<body>
    <main class="d-flex flex-column justify-content-center align-items-center">
        <h1>CONTACT</h1>
        <form action="" method="post" class="d-flex flex-column">
    <label for="">Email :
        <input type="email" name="" id="">
    </label>
    <label for="">Message :
        <textarea name="" id="" cols="30" rows="10"></textarea>
    </label>
    <input type="submit" value="Envoyer">
</form>
</section>

<?php
$css = "forms.css";
$title = "MEDIABAT - Contactez-nous";
$description = "En cas de problèmes, suggestions ou autres. Contactez-nous.";
$content = ob_get_clean();
require_once "../template.php";
?>