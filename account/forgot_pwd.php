<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.1.1/css/bootstrap.css" />
    <link rel="stylesheet" href="../CSS/form_inscription.css">

    <title>forget password</title>    
        
</head>

<body>

    <?php include("nav_insc.php");


    if ($_POST) {
        include('./connectToDB.php');
        $header = 'From:"BORO OUSSENI"<boro7ousseni@gmail.com>' . "\n";
            $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
            $header .= 'Content-Transfer-Encoding: 8 bits\n';
            $header .= 'X-Mailer : PHP/' . phpversion();
            $subject = "Recover your password for SICOM INNOVATION";
            $message="Bonjour";
        extract($_POST);
            mail($email, $subject, $message, $header);
        // $sql = "SELECT * FROM `person` WHERE email='$email'";
        // $resultat_sql = mysqli_query($bdd, $sql);
        // $resultat = mysqli_fetch_assoc($resultat_sql);
        // //Si le propriétaire n'existe pas on effectue des requetes SQL
        // if ($resultat) {
        //     $header = 'From:"BORO OUSSENI"<boro7ousseni@gmail.com>' . "\n";
        //     $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
        //     $header .= 'Content-Transfer-Encoding: 8 bits\n';
        //     $header .= 'X-Mailer : PHP/' . phpversion();
        //     $subject = "Recover your password for SICOM INNOVATION";

        //     $message = '		
		// 	<body>
		// 	<span> Hello  <i>' . $resultat["first_name"] . '  ' . $resultat["last_name"] . '</i></span><br>
		// 	<b>Suite à votre demande, vous trouverez ci-après vos paramètres d’accès à SICOM INNOVATION </b><br>
		// 	<b>Votre login  :</b> ' . $resultat['email'] . '<br>
        //     <b>Votre mot de pass  :</b> ' . $resultat['mdp'] . '<br>
		// 	<i></i><h2>Cordialement</h2></i>
		// 	</body>		
		// ';
        //     mail($email, $subject, $message, $header);
        //     $info_request = true;
        // } else {
        //     $info_request = false;
        // }
    }

    ?>


    <div class="container" id="forgot">
        <div class="welcome">
            <h1>Welcome to Water, Energy, Food NEXUS Innovation Week « Paving the Way Towards Entrepreneurship </h1>
        </div>
        <div class="form">
            <?php
            if (isset($info_request)) {
                if ($info_request) {
                    echo '<div id="info_pass">
                <span>Le mot de passe a été envoyé à ' . $email . '</span>
            </div>';
                } else {
                    echo '<div id="info_pass">
                <span> ' . $email . ' introuvable  <a href="inscription.php">Sign Up</a></span>
            </div>';
                }
            }
            ?>
            <h1>FORGOT YOUR PASSWORD ?</h1>

            <form method="POST" action="./forgot_pwd.php">
                <div class="field">
                    <input name="email" type="email" required>
                    <span></span>
                    <label class="label" for="email">Email <span>*</span></label>
                </div>
                <span style="float: right; font-size: 16px; font-weight: bold; font-style: italic; color: white;">Enter your email address to receive your password by Email</span>
                <div class="action">
                    <input style="width: 95%;" type="submit" id="submit" name="conn" value="GET YOUR PASSWORD" id="">
                </div>
            </form>
            <?php if (isset($info_request)) {
                if ($info_request)
                    echo '<a class="info_request" href="./form_login.php">Login</a>';
                else
                    echo '<a class="info_request" href="inscription.php">Sign Up</a>';
            } ?>
        </div>
    </div>

</body>

</html>