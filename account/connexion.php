<?php

session_start();

if (isset($_POST['email'], $_POST['password1'])) {
    $email = $_POST['email'];
    $pass = $_POST['password1'];
    try{        
    $bdd = mysqli_connect('localhost', 'root', '', 'sicom_innovation') or die(mysqli_error($bdd));

    $sql = "SELECT * FROM person where email = '$email' AND mdp = '$pass'";
    $result = mysqli_query($bdd,$sql);
    $table=mysqli_fetch_assoc($result);         

    if ($table) {
        $_SESSION['email'] = $email; 
        $_SESSION['first_name']=$table['first_name'];
        $_SESSION['last_name']=$table['last_name'];              
    header("Location: ../access/ifr.php");
           
    } 
    else
    {               
        $retry=true;
        require_once("form_login.php");       
                
    }
}
    catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }    
}
?>
