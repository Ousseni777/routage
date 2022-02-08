<?php

session_start();

if (isset($_POST['email'], $_POST['password1'])) {
    $email = $_POST['email'];
    $pass = $_POST['password1'];
    try{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sicom_innovation";
        $db = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM person where email = ? AND mdp = ?";
    $result = $db->prepare($sql);
    $result->execute(array($email,$pass));

    if ($result->rowCount() > 0) {
        $_SESSION['email'] = $email;
        $data = $result->fetch();
        header("Location: ../access/ifr.php?echo=REUUSSIE");
           
    } 
    else
    {
            $data = $result->fetch();
            header("Location: form_login.php?echo=echec");
       
                
    }
}
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>