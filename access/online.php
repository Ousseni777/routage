<?php 
    session_start();
    $email=$_SESSION['email'];
    $session_times=15;
    $current_times=date('U');
    $user_ip=$_SERVER['REMOTE_ADDR'];
    // $user_ip="17002-555";
    include('../account/connectToDB.php');
    $sql="SELECT * FROM online WHERE user_ip='$user_ip'";
    $request=mysqli_query($bdd,$sql);
    $table=mysqli_fetch_assoc($request);
    if($table){
        $sql_update="UPDATE online SET times=$current_times WHERE user_ip=$user_ip";
        $request_update=mysqli_query($bdd,$sql_update);
    }
    else
    {
        $sql_insert="INSERT INTO online(user_ip,times,email)
        VALUES('$user_ip',$current_times,'$email')";
        $request_insert=mysqli_query($bdd,$sql_insert);
    }
    $session_delete_time=$current_times-$session_times;
    $sql_delete="DELETE FROM online WHERE times < $session_delete_time";
    $request_delete=mysqli_query($bdd,$sql_delete);

    $sql="SELECT count(id) as nbr FROM online WHERE 1";
    $request=mysqli_query($bdd,$sql);
    $users_nbr_online=mysqli_fetch_assoc($request);
        

?>