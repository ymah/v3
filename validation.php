<?php
session_save_path('temp');
session_start();
unset($_SESSION['_CAPTCHA']);
var_dump($_SESSION);
?>
<br/><br/><br/>
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
echo ("le code A :" .htmlspecialchars($_SESSION['code'], ENT_COMPAT,'ISO-885429-1', true));
echo "<br/>";
echo ("le code B :" .htmlspecialchars($_POST['code2'], ENT_COMPAT,'ISO-885429-1', true));

?>


</body>
</html>
