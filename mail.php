<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 
require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php'; 
 
$mail=new PHPMailer(true) ;


try {
    
//Server settings
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'boro7ousseni@gmail.com';                     //SMTP username
$mail->Password   = '';                               //SMTP password
$mail->Port       = "465";                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
$mail->SMTPSecure=PHPMailer::ENCRYPTION_SMTPS;

//Recipients


//Content
$mail->isHTML(true);  
$mail->addAddress('boro7ou@gmail.com','NAME DEST.'); 
$mail->setFrom('boro7ousseni@gmail.com','INNOV-SICOM');     //Add a recipient                               //Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}