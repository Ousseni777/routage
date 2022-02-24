<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reccording</title>
</head>

<body>    
    <?php
    
    include('../../../account/connectToDB.php');
    extract($_POST);
    $sql="INSERT INTO `infos`(`topic`, `mtg_date`, `mtg_starts_h`, `mtg_starts_m`, `mtg_ends_h`, `mtg_ends_m`)
        VALUES('$meeting_topic','$meeting_date','$meeting_start_h','$meeting_start_m','$meeting_ends_h','$meeting_ends_m') ";
    // $sql="INSERT INTO `info`(`moderator`, `topic`, `start`, `duration_h`, `duration_m`, `meeting_number`, `meeting_password`, `moderator_email`) 
    //     VALUES ('$name','$meeting_topic','$meeting_start',$meeting_duration_h,$meeting_duration_m,'$mn','$pwd','$meeting_email')";
    $resultat_sql= mysqli_query($bdd, $sql); 
    //VALUES ('$display_name','$meeting_topic','$meeting_start',$meeting_duration_h,$meeting_duration_m,'$meeting_number','$meeting_pwd','$meeting_email')";        
    if($resultat_sql){
        echo "Avec succes";
        
    }
    else{
        echo "echec";
    }
    
    mysqli_close($bdd);
    header('location:./display_mtg.php');
    ?>
</body>

</html>