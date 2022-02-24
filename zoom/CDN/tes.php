<?php

echo date('Y').'-'.date('m').'-'.(intval(date('d'))-1);
// $bdd = mysqli_connect('localhost', 'root', '', 'sicom_innovation') or die(mysqli_error($bdd));
    
// $sql_delete="DELETE FROM `infos` WHERE mtg_date < date('Y-m-d')";
// $query= mysqli_query($bdd, $sql_delete);
// // $table = mysqli_fetch_assoc($query);
// if($query){
//     echo 'seccess';
// }
// else{
//     echo 'echec';
// }