<?php
session_save_path('temp');
session_start();
var_dump($_SESSION['captcha']);
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
    <title>Partage Mot de passe</title>
    <head>
    <title>Inscription</title>
    </head>
    <body>


<?php
print_r("le captcha : ".$_SESSION['captcha']['code']);
echo "<br/>";
print_r("le code tapé dans le formulaire :" .htmlspecialchars($_POST['code'], ENT_COMPAT,'ISO-885429-1', true));
?>


</body>
</html>
