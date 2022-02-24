<?php 
session_start();
$email=$_SESSION['email'];
$_SESSION=array();
session_destroy();

include('../account/connectToDB.php');
    $sql_delete="DELETE FROM online WHERE email LIKE '$email'";
    $request_delete=mysqli_query($bdd,$sql_delete);
header('location:../account/form_login.php');