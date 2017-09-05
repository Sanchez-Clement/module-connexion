<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Module de connexion</title>
  </head>
  <body>

<?php
$password = "#simplon!";

if (!isset($_POST['password_user'])) {
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
  </body>
</html>
