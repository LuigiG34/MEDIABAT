<?php
ob_start();
?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CONNEXION</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section>
            <img class="login-logo" src="../../assets/icons/svg/mediabat.svg" alt="">
            <form action="">
            <label for="">Email :</label>
                <input type="email" placeholder="Email...">
            <label for="">Mot de passe :</label>
                <input  type="password" placeholder="Mot de passe...">
                <input type="submit" value="Se connecter">
            </form>
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php
$css = "profil.css";
$title = "MEDIABAT - Votre profil";
$description = "Visualiser votre profil MEDIABAT.";
$content = ob_get_clean();
require_once "../template.php";
?> 