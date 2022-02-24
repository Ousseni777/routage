<?php

session_start();

if (isset($_POST['email'], $_POST['password1'])) {
    $email = $_POST['email'];
    $pass = $_POST['password1'];
    try {
        include('./connectToDB.php');

        $sql = "SELECT * FROM person where email = '$email' AND mdp = '$pass'";
        $result = mysqli_query($bdd, $sql);
        $table = mysqli_fetch_assoc($result);

        if ($table) {
            $_SESSION['email'] = $email;
            $_SESSION['first_name'] = $table['first_name'];
            $_SESSION['last_name'] = $table['last_name'];

            $current_times = date('U');
            $user_ip = $_SERVER['REMOTE_ADDR'];
            // $user_ip = "xxxxx122";
            // $sql = "SELECT * FROM online WHERE user_ip='$user_ip'";
            $sql = "SELECT * FROM online WHERE user_ip='$user_ip'";
            $request = mysqli_query($bdd, $sql);
            $table = mysqli_fetch_assoc($request);
            if ($table) {
                $sql_update = "UPDATE online 
                                SET times=$current_times
                                
                                WHERE user_ip='$user_ip'";
                $request_update = mysqli_query($bdd, $sql_update);
            } else {
                $sql_insert = "INSERT INTO online(user_ip,times,email,status)
                                VALUES('$user_ip',$current_times,'$email','on')";
                $request_insert = mysqli_query($bdd, $sql_insert);
            }

            header("Location: ../access/ifr.php");
        } else {
            $retry = true;
            require_once("form_login.php");
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
