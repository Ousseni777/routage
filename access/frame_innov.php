<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>innov week</title>
</head>
<?php 
session_start();
if(!$_SESSION['mdp']){
header("Location: ../account/form_login.php");
}
?>
<frameset cols="20%,*" border=0 >
    <frame src="./side_bar.php" scroll="ye">
    <frameset rows="10%,*" >
        <frame src="./profil.php" >
        <frame src="" name="page" >
    </frameset>
</frameset>
</html>