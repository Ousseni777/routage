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

    <?php
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    // include("nav_insc.php");


    if ($_POST) {        
        require '../PHPMailer/Exception.php';
        require '../PHPMailer/PHPMailer.php';
        require '../PHPMailer/SMTP.php';

        include('./connectToDB.php');

        extract($_POST);
        
        $sql = "SELECT * FROM `person` WHERE email='$email'";
        $resultat_sql = mysqli_query($bdd, $sql);
        $resultat = mysqli_fetch_assoc($resultat_sql);
        //Si le propriétaire n'existe pas on effectue des requetes SQL
        if ($resultat) {
            // $header = 'From:"BORO OUSSENI"<boro7ousseni@gmail.com>' . "\n";
            // $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
            // $header .= 'Content-Transfer-Encoding: 8 bits\n';
            // $header .= 'X-Mailer : PHP/' . phpversion();
            $mail = new PHPMailer(true);
            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'boro7ousseni@gmail.com';                     //SMTP username
                $mail->Password   = 'Orob-2022-s';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`    

                //Recipients
                $mail->addAddress($email, $resultat['first_name'] . ' ' . $resultat['last_name']);
                $mail->setFrom('boro7ousseni@gmail.com', 'INNOV-SICOM');     //Add a recipient                             
                //Set email format to HTML
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $subject = "Recover your password for SICOM INNOVATION";

                $message = '		
                <body>
                <span> Hello  <i>' . $resultat["first_name"] . '  ' . $resultat["last_name"] . '</i></span><br>
                <b>Suite à votre demande, vous trouverez ci-après vos paramètres d’accès à SICOM INNOVATION </b><br>
                <b>Votre login  :</b> ' . $resultat['email'] . '<br>
                <b>Votre mot de pass  :</b> ' . $resultat['mdp'] . '<br>
                <i>To reset your password click this link http://localhost/myproject/innov_heroku/account/reset_pwd.php</i>
                <i></i><h2>Cordialement</h2></i>
                </body>';
                
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $message;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $_SESSION['email']=$email;
                // $mail->send();
                $info_request = true;
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            
        } else {
            $info_request = false;
        }
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