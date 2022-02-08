<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.1.1/css/bootstrap.css" />
    <link rel="stylesheet" href="../CSS/form_inscription.css">

    <title>forget password</title>
    <style>

    </style>
</head>

<body>
    <style>
        .signUp {
            position: absolute;
            top: 20%;
            padding: 5%;
            left: 50%;
            font-size: 50px;
            z-index: 1;
            width: 300px;
            height: 200px;
            text-align: center;
            border-radius: 10px;
            color: black;
        }
    </style>
    <?php include("nav_insc.php");


    if ($_POST) {
        $bdd = mysqli_connect('localhost', 'root', '', 'sicom_innovation');
        extract($_POST);
        $sql = "SELECT * FROM `person` WHERE email='$email'";
        $resultat_sql = mysqli_query($bdd, $sql);

        $booleean = false;
        //On doit vérifier si le propriétaire existe
        while ($resultat = mysqli_fetch_assoc($resultat_sql)) {
            if ($resultat['email'] == $email)
                $booleean = true;
        }
        $resultat_sql = mysqli_query($bdd, $sql);
        $resultat = mysqli_fetch_assoc($resultat_sql);
        //Si le propriétaire n'existe pas on effectue des requetes SQL
        if ($booleean) {
            echo '<script>
            alert("Veuillez verifier votre boite mail");
            </script>';
            $header = 'From:"BORO OUSSENI"<boro7ousseni@gmail.com>' . "\n";
            $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
            $header .= 'Content-Transfer-Encoding: 8 bits\n';
            $header .= 'X-Mailer : PHP/' . phpversion();
            $subject = "Recover your password for SICOM INNOVATION";

            $message = '		
			<body>
			<span> Hello  <i>'.$resultat["first_name"].'  '.$resultat["last_name"].'</i></span><br>
			<b>Suite à votre demande, vous trouverez ci-après vos paramètres d’accès à SICOM INNOVATION </b><br>
			<b>Votre login  :</b> '.$resultat['email'].'<br>
            <b>Votre mot de pass  :</b> '.$resultat['mdp'].'<br>
			<i></i><h2>Cordialement</h2></i>
			</body>		
		';
            mail($email, $subject, $message, $header);
        } else {
            echo '<script>
            alert("Compte introuvable");            
        </script>        
        ';
            echo '<a href="./inscription.php" class="btn btn-info signUp">Sign Up</a>';
        }
    }

    ?>


    <div class="left">
        <h1>Welcome to Water, Energy, Food NEXUS Innovation Week « Paving the Way Towards Entrepreneurship </h1>
        <div class="image">
            <img src="../IMG/innovlogo.jfif" alt="" style="border-radius: 70%;">
        </div>
    </div>
    <div class="form" style="top: 50%; width: 60%;">

        <h1>FORGOT YOUR PASSWORD ?</h1>

        <form method="POST" action="./forgot_pwd.php">
            <div class="field">
                <input name="email" type="email" required>
                <span></span>
                <label class="label" style="margin-left: -45%;" for="email">Email <span>*</span></label>
            </div>
            <span style="float: right; font-size: 16px; font-weight: bold; font-style: italic;">Enter your email address to receive your password by Email</span>
            <div class="action">
                <input style="width: 85%;" type="submit" id="submit" name="conn" value="GET YOUR PASSWORD" id="">
            </div>
        </form>
    </div>

</body>

</html>