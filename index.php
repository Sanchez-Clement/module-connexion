<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Module de connexion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  </head>
  <body>

<?php
$password = "#simplon!";

if (!isset($_POST['password_user']) OR strlen($_POST['password_user'])==0) {
  include("formulaire.php");
echo "<p>
Veuillez saisir un mot de passe !
</p>";
}


elseif ($_POST['password_user'] != $password) {
include("formulaire.php");

echo "<p>
Mot de passe eronné !
</p>";

} else {
echo "<p>
Le mot de passe pour le bombe atomique est : 3456 7898 9987 4436
</p>";
};

 ?>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  </body>
</html>
