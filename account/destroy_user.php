<?php

$email = $_SESSION['email'];
// include('./connectToDB.php');
$session_times = 5*60;
$current_times = date('U');
// $user_ip = "$_SERVER['REMOTE_ADDR']";
$user_ip = "xxxxx12";

$sql = "SELECT * FROM online WHERE email LIKE '$email'";
$request = mysqli_query($bdd, $sql);

$session_delete_time = $current_times - $session_times;
$session_off=false;
$table_sql = mysqli_fetch_assoc($request);
if ($table_sql) {
    if ($table_sql['times'] < $session_delete_time) {
        $sql_delete = "DELETE FROM online WHERE email LIKE '$email'";
        mysqli_query($bdd, $sql_delete);
        $session_off = true;
    } else {
        if ($table_sql['status'] == 'off') {
            $session_off = false;
            $sql_update = "UPDATE online SET status='on' WHERE email LIKE '$email'";
            $request_update = mysqli_query($bdd, $sql_update);
        }else{
            $session_off = false;
            $sql_update = "UPDATE online SET times=$current_times, status='on' WHERE email LIKE '$email'";
            $request_update = mysqli_query($bdd, $sql_update);
        }
    }
}
