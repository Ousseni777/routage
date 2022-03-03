<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/form_inscription.css">
    <title>reset possword</title>
    <style>
        @media only screen and (max-width: 1100px) {
            .form_login h1 {
                margin-top: -20px;
                font-size: 40px;
            }
        }
    </style>
</head>

<body>
    <?php 
    session_start();
    include("nav_insc.php");

    include('./connectToDB.php');
    if(isset($_SESSION['email']))    {
        $email=$_SESSION['email'];
        $sql = "SELECT * FROM `person` WHERE email='$email'";
        $resultat_sql = mysqli_query($bdd, $sql);
        $resultat = mysqli_fetch_assoc($resultat_sql);
        if(!$resultat){
            header('location: ./inscription.php');
        }    
        if($_POST){
            extract($_POST);
            $sql = "UPDATE `person` SET mdp='$password1' WHERE email='$email'";
            mysqli_query($bdd, $sql);
        }    
    }    

    ?>
    

    <div class="container" id="login">
        <div class="welcome">
            <h1>Welcome to Water, Energy, Food NEXUS Innovation Week « Paving the Way Towards Entrepreneurship </h1>
        </div>
        <div class="form form_login">
            <h1>RESET PASSWORD</h1>
            <form method="POST" action="./reset_pwd.php">
                <div class="field login">
                    <input name="password1" type="password" required>
                    <span></span>
                    <label class="label" for="password1">New password <span>*</span></label>
                </div>
                <div class="field login">

                    <input name="password2" type="password" required>
                    <span></span>
                    <label class="label" for="password2">Confirme password <span>*</span></label>
                </div>
                <div class="action">
                    <input style="width: 85%;" type="submit" id="submit" name="conn" value="LOG IN" id="">
                </div>
            </form>
        </div>
    </div>

</body>

</html>