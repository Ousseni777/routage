<?php
 if(isset($_POST['register']) and ($_POST['password1']==$_POST['password2']) ){
    $name = $firstname = $email = $phone = $title = $age_range = $pw1 = $pw2 = $profil = $sector = $company = $country = $city =  $function = "";
    //include("../account/form_inscription.php"); 
    header("Location: frame_innov.php");
        $name = test_input($_POST["name"]);
        $firstname = test_input($_POST["firstname"]);
        $email = test_input($_POST["email"]);
        $phone = test_input($_POST["phone_number"]);
        $title = test_input($_POST["title"]);
        $age_range = test_input($_POST["age_range"]);
        $pw1 = test_input($_POST["password1"]);
        $pw2 = test_input($_POST["password2"]);
        $profil = test_input($_POST["profil"]);
        $sector = test_input($_POST["sector"]);
        $company = test_input($_POST["company"]);
        $country = test_input($_POST["country"]);
        $city = test_input($_POST["city"]);
        $function = test_input($_POST["function"]);
        
         $tp = $_POST['typ'];

  //  echo  $name .' && ' ;echo $firstname .' && ' ; echo $email .' && '; echo $phone .' && ' ; echo $title .' && '; echo $age_range .' && '; echo $pw1 .' && '; echo $pw2 .' && ';echo $profil .' && ';echo $sector .' && ';echo $company .' && '; echo $country .' && '; echo $city .' && ';echo $function .' && ';




  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sicom_innovation";

  try {
      extract($_POST);
      $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql1 = "INSERT INTO `person`(`type_pers`, `title`, `first_name`, `last_name`, `age_range`, `email`, `phone_number`, `mdp`, `profil`, `sector`, `company`, `fonction`, `country`, `city`) 
VALUES ('$tp','$title','$firstname','$name','$age_range','$email','$phone','$pw1','$profil','$sector','$company','$function','$country','$city')";

      $conn->exec($sql1);
      $msg = "Inserer avec Succes !";
      echo $msg;
  } catch (PDOException $e) {
     
    echo "Error: " . $e->getMessage();
  }

  $conn = null;
}







function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['register']) and ($_POST['password1']!=$_POST['password2']) ){
  header("Location: ../account/form_inscription.php");
}
?>

