<?php 
session_start();
$_SESSION=array();
session_destroy();
header('location:../account/form_login.php');