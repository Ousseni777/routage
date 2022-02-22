<?php 
    $session_times = 2*60*60;  // 2 hours
    $update_times=5*60;   //5  minutes
    $current_times = date('U');
    $session_delete_time = $current_times - $session_times;
    $session_update_time=$current_times-$update_times;
    $sql_offline = "SELECT * FROM online WHERE 1";
    $request = mysqli_query($bdd, $sql_offline);
    while($table_sql=mysqli_fetch_assoc($request)){
        $mail=$table_sql['email'];
        if($table_sql['times']<$session_delete_time ){            
            $sql_delete = "DELETE FROM online WHERE email LIKE '$mail'";
            mysqli_query($bdd, $sql_delete);
        }
        else{
            if($table_sql['times']<$session_update_time){
                $sql_update = "UPDATE online SET status='off' WHERE email LIKE '$mail'";
                $request_update = mysqli_query($bdd, $sql_update);
            }            
        }
    }
