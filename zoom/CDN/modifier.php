<?php
include('../../../account/connectToDB.php');
if ($_POST) {
    
    extract($_POST);                
    $sql_update = "UPDATE `infos` SET `topic`='$meeting_topic', 
    `mtg_date`='$meeting_date',`mtg_starts_h`='$meeting_start_h',`mtg_starts_m`='$meeting_start_m', 
    `mtg_ends_h`='$meeting_ends_h',`mtg_ends_m`='$meeting_ends_m' 
    WHERE mtg_id=$mtg_id";
        $query_u = mysqli_query($bdd, $sql_update); 
        if($query_u)
        require_once('./display_mtg.php');                             
        
}