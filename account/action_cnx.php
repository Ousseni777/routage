<?php
session_start();
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

include('./connectToDB.php');
$sql = "SELECT * FROM `person` WHERE email='$email'";
$result = mysqli_query($bdd, $sql);
$table = mysqli_fetch_assoc($result);
if ($table) {
  $nb = true;
} else {
  $nb = false;
}

if (isset($_POST['register']) and ($_POST['password1'] == $_POST['password2']) and $nb == true) {
  header("Location: ./forgot_pwd.php");
}

if (isset($_POST['register']) and ($_POST['password1'] == $_POST['password2']) and $nb == false) {  
    // extract($_POST);
    // $bdd = mysqli_connect('localhost', 'root', '', 'sicom_innovation');
    $sql1 = "INSERT INTO `person`(`type_pers`, `title`, `first_name`, `last_name`,`mdp`, `age_range`, `email`, `phone_number`, `profil`, `sector`, `company`, `fonction`, `country`, `city`) 
      VALUES ('$tp','$title','$firstname','$name','$pw1','$age_range','$email','$phone','$profil','$sector','$company','$function','$country','$city')";

    $result1 = mysqli_query($bdd, $sql1);
    if ($result1) {
      $header = 'From:"BORO OUSSENI"<boro7ousseni@gmail.com>' . "\n";
      $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
      $header .= 'Content-Transfer-Encoding: 8 bits\n';
      $header .= 'X-Mailer : PHP/' . phpversion();
      $subject = "SICOM INNOVATION";

      $message = '		
              <body>
              <span> Hello  <i>' . $firstname . '  ' . $name . '</i></span><br>
              <b>Merci de vous avoir inscrire à SICOM INNOVATION </b><br>
              <b><br>                    
              <i></i><h2>Cordialement</h2></i>
              </body>		
            ';
      mail($email, $subject, $message, $header);
      echo '<script>
        alert("Inscription effectuée avec success");
        </script>';
      $_SESSION['first_name'] = $firstname;
      $_SESSION['last_name'] = $name;
      $_SESSION['email'] = $email;

      $current_times = date('U');
      // $user_ip = "$_SERVER['REMOTE_ADDR']";
      $user_ip = "xxxxx12";
      // $sql = "SELECT * FROM online WHERE user_ip='$user_ip'";
      $sql = "SELECT * FROM online WHERE email='$email'";
      $request = mysqli_query($bdd, $sql);
      $table = mysqli_fetch_assoc($request);
      if ($table) {
        $sql_update = "UPDATE online 
                                SET times=$current_times,  
                                times=$current_times
                                WHERE user_ip=$user_ip";
        $request_update = mysqli_query($bdd, $sql_update);
      } else {
        $sql_insert = "INSERT INTO online(user_ip,times,email,status)
                                VALUES('$user_ip',$current_times,'$email','on')";
        $request_insert = mysqli_query($bdd, $sql_insert);
      }
      header("Location: ../access/ifr.php");
    }
  
}




if (isset($_POST['register']) and ($_POST['password1'] != $_POST['password2'])) {
  $a = $_POST['nam'];

  require_once("form_inscription.php");
}



function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
