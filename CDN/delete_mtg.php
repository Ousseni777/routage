<?php
include('../../account/connectToDB.php');
    $mtg_id=$_GET['id'];
    $sql_update = "DELETE FROM `infos` WHERE mtg_id=$mtg_id";
        $query_u = mysqli_query($bdd, $sql_update); 
        if($query_u)
        require_once('./display_mtg.php');                             
        