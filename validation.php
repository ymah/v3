<?php
session_save_path('temp');
session_start();

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
    print_r("le capcha : ".$_SESSION['captcha']['code']);
echo "<br/>";
print_r("le code tapé dans le formulaire :" $_POST['code']);
?>


</body>
</html>
