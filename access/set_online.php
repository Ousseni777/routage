<?php 
    // session_start();
    // $email=$_SESSION['email'];
    // include('../account/connectToDB.php');
    $current_times = date('U');
    //  $sql = "SELECT * FROM online WHERE user_ip='$user_ip'";
    // $sql = "SELECT * FROM online WHERE email LIKE '$email'";
    //  $request = mysqli_query($bdd, $sql);
    //  $table = mysqli_fetch_assoc($request);
     if (isset($_SESSION['email'])) {
         $email=$_SESSION['email'];
         $sql_update = "UPDATE online 
                         SET times=$current_times,  
                         status='on'
                         WHERE email LIKE '$email'";
            mysqli_query($bdd, $sql_update);
     } else {
         $request_login=true;
     }
