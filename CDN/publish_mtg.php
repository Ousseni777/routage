<?php
$mtg_id = $_GET['id'];
include('../../../account/connectToDB.php');

$sql = "SELECT * FROM `person` WHERE 1";
$queru_sql = mysqli_query($bdd, $sql);

$sql_info = "SELECT * FROM `infos` WHERE mtg_id=$mtg_id";
$queru_sql_info = mysqli_query($bdd, $sql_info);
$table_info = mysqli_fetch_assoc($queru_sql_info);

$current_date = date('Y-m-d');
$sql_update = "UPDATE `infos` SET `statut`='ready' WHERE mtg_id=$mtg_id";
mysqli_query($bdd, $sql_update);
?>
  <?php

  $header = 'From:"BORO OUSSENI"<boro7ousseni@gmail.com>' . "\n";
  $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
  $header .= 'Content-Transfer-Encoding: 8 bits\n';
  $header .= 'X-Mailer : PHP/' . phpversion();
  $subject = "Invitation à une réunion Zoom - Innovation";

  $message = '		
			<body>
			<span>SICOM INNOV vous invite à une réunion Zoomn planifiée- ' . $table_info['topic'] . '</span><br>
			<b>Sujet :<i> ' . $table_info['topic'] . '</i></b><br>
      <b>Date :<i> ' . $table_info['mtg_date'] . '</i></b><br>
			<b>Heure :<i>' . $table_info['mtg_starts_h'] . 'h ' . $table_info['mtg_starts_m'] . 'mn </i> GMT+1</b> (Casablanca)<br>			
      <h1>Cordialement</h1>
			</body>		
		';
  // mail('boro7ou@gmail.com', $subject, $message, $header);      
  while ($table = mysqli_fetch_assoc($queru_sql)) {
    mail($table['email'], $subject, $message, $header);
  }

  require_once('./display_mtg.php');

  ?>

