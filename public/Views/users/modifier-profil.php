<?php
ob_start();

?>

<body>
    <main class="d-flex flex-column justify-content-center align-items-center">
        <h1>MODIFICATION DU PROFIL</h1>
        <form action="" method="post" class="d-flex flex-column">
    <label for="">Photo profile :
            <input type="file" name="img" id="" class="form-control">
    </label>
    <label for="">Email :
        <input type="email" name="" id="">
    </label>
    <label for="">Mot de passe :
        <input type="password" name="" id="">
    </label>
    <label for="">Retapez nouveau mot de passe :
        <input type="password" name="" id="">
    </label>
    <div class="d-flex container-two">
                <div class="by-two">
                    <label for="">Ville :</label>
                    <input type="text" placeholder="Ville...">
                </div>
                <div class="by-two">
                    <label for="" class=" mt-3">Code Postal :</label>
                    <select name="zipcode" id="">
                        <option value="zipcode" disabled="true" selected>Code Postal</option>
                        <option value="">75000</option>
                        <option value="">34000</option>
                    </select>
                </div>
            </div>
    <input type="submit" value="Confirmer">
</form>
</section>

<?php
$css = "forms.css";
$title = "MEDIABAT - Modifier votre profil";
$description = "Modifier votre profil MEDIABAT.";
$content = ob_get_clean();
require_once "../template.php";
?>