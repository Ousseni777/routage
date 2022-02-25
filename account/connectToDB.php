<?php

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $bdd = mysqli_connect('eu-cdbr-west-02.cleardb.net', 'b6f0fc9c4eedf6', 'f963d311', 'heroku_5c1f27c679be917') or die(mysqli_error($bdd));
} else {
    $bdd = mysqli_connect('localhost', 'root', '', 'sicom_innovation') or die(mysqli_error($bdd));    
}

// $bdd = mysqli_connect('us-cdbr-east-05.cleardb.net', 'bdd759e7c05277', '59d13ed0', 'heroku_fd9d17ca928ca6d') or die(mysqli_error($bdd));

 
?>