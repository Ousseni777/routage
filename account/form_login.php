<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/form_inscription.css">

    <title>login</title>
</head>

<body>
    <?php include("nav_insc.php");
    ?>

    <div class="container" id="login">
        <div class="welcome">
            <h1>Welcome to Water, Energy, Food NEXUS Innovation Week « Paving the Way Towards Entrepreneurship </h1>            
        </div>
        <div class="form form_login">
            <h1>LOGIN</h1>
            <?php if (isset($retry))
                echo "<span id='invalid'>Incorrect password</span>";
            ?>

            <form method="POST" action="connexion.php">
                <div class="field login">
                    <input name="email" value="<?php if (isset($email)) echo $email ?> " type="email" required>
                    <span></span>
                    <label class="label" for="email">Email <span>*</span></label>
                    <a class="forgot_link" style="float: right; top: 45px; right: 0; text-decoration: none; font-weight: bold; position: absolute;" href="./forgot_pwd.php">Forgot your password ?</a>
                </div>
                <div class="field login">

                    <input name="password1" type="password" required>
                    <span></span>
                    <label class="label" for="password1">Password <span>*</span></label>
                </div>
                <div class="action">                    
                    <input style="width: 85%;" type="submit" id="submit" name="conn" value="LOG IN" id="">
                </div>
                <div class="query" style="margin-left: 10%; font-size: 18px; font-style: italic;">
                    <span>Don't have account ? <a href="./inscription.php">Sign up</a></span>
                </div>
            </form>
        </div>
    </div>

</body>

</html>