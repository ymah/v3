<?php
session_save_path('temp');
session_start();
include('captcha.php');
$_SESSION =array();
$cap= captcha();
$_SESSION['captcha']= $cap;
$_SESSION['code'] = $cap['code'];
var_dump($_SESSION);
?>


<!DOCTYPE html>
<html>
<meta charset="utf-8" />
    <title>Partage Mot de passe</title>
    <head>
    <title>Inscription</title>
    </head>
    <body>






    <form action="index.php" method= "POST" >

    <p><label>Clé privée AES fournie</label></p>
    <t/><p><input type="text" name="aes"/></p>
    <p><label>Veuillez reproduire les numéros présents sur le captcha</label><p>
<?php

    echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA" />';

?>
<p>B : <input type="text" name ="code"/></p>
<p>C :<input type="text" name ="code2" value=<?php echo $_SESSION['code']; ?>/></p>

    <p><input type="submit" value="valider"/></p>

    </form>
</body>
</html>
