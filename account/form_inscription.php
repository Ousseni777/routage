<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/form_inscription.css">
    <!-- <link rel="stylesheet" href="../CSS/wellcome.css">-->
</head>

<body>
    <?php include("nav_insc.php") ?>

    <?php $tp = ' ';
    $a = ' '; ?>
    <div class="left">
        <h1>Welcome to Water, Energy, Food NEXUS Innovation Week « Paving the Way Towards Entrepreneurship </h1>
        <div class="image">
            <img src="../IMG/innovlogo.jfif" alt="" style="border-radius: 70%;">
        </div>
    </div>
    <div class="form" style="float: right; width: 70%;">
        <span style="float: right;">Already have an account ? <a href="./form_login.php">Login</a></span>            
        <h1>REGISTER ACCOUNT</h1>                        
        <form action="../access/action_cnx.php" method="POST">
            <div class="field">
                <input name="name" type="text" required>
                <span></span>
                <label class="label" for="name">Name <span>*</span></label>
            </div>
            <div class="field">
                <input name="firstname" type="text" required>
                <span></span>
                <label class="label" for="firstname">Firstname <span>*</span></label>
            </div>
            <div class="field">
                <input name="email" type="email" required>
                <span></span>
                <label class="label" for="email">Email <span>*</span></label>
            </div>
            <div class="field">
                <input name="phone_number" type="number" required>
                <span></span>
                <label class="label" for="phone_number">Phone number <span>*</span></label>
            </div>
            <div class="field select">
                <div class="title s_title">
                    <label class="label_select" for="title">Title</label>
                    <select name="title" id="">
                        <option value="M.">M.</option>
                        <option value="Ms.">Ms.</option>
                    </select>
                </div>

                <div class="age_range s_title">
                    <label class="label_select" for="age_range">Age range</label>
                    <select name="age_range" id="">
                        <option value="18-24">18-24</option>
                        <option value="25-34">25-34</option>
                        <option value="35-44">35-44</option>
                        <option value="45-54">45-54</option>
                        <option value="55-64">55-64</option>
                        <option value="">+64</option>
                    </select>

                </div>
            </div>
            <div class="field">
                <input name="password1" id="pass2" type="password" required>
                <span></span>
                <label class="label" for="password1">Choose a password <span>*</span></label>
            </div>
            <div class="field">
                <input onmouseover="check()" name="password2" id="pass2" type="password" required>
                <span> </span>
                <label class="label" for="password2">Confirme password<span>*</span></label>
            </div>
            <div class="field select">
                <div class="s_title">
                    <label for="profil">Profil</label>
                    <select name="profil" id="profil">
                        <option value="Professsor">Professsor</option>
                        <option value="enginer">enginer</option>
                        <option value="doctor">doctor</option>
                    </select>
                </div>
                <div class="s_title">
                    <label for="sector">Sector </label>
                    <select name="sector" id="sector">
                        <option value="Energy">Energy</option>
                        <option value="Telecoms">Telecoms</option>
                        <option value="HyperFrequences">HyperFrequences</option>
                    </select>
                </div>
            </div>
            <div class="field">
                <input type="text" name="company" id="company" required>
                <span></span>
                <label class="label" for="company">Company <span>*</span></label>
            </div>
            <div class="field">
                <input type="text" name="function" id="function" required>
                <span></span>
                <label class="label" for="function">Function <span>*</span></label>
            </div>
            <div class="field select">
                <div class="title s_title">
                    <label for="country">Country</label>
                    <select name="country" id="country">
                        <option value="maroc">maroc</option>
                        <option value="Guinea">Guinea</option>
                        <option value="France">France</option>
                    </select>

                </div>

                <div class="s_title">
                    <label for="city">City</label>
                    <select name="city" id="city">
                        <option value="Conakry">Conakry</option>
                        <option value="Ouaga">Ouaga</option>
                        <option value="Fes">Fes</option>
                    </select>
                </div>
            </div>
            <div class="contract">
                <input name="checkbox" type="checkbox" required>
                <span></span>
                <label for="checkbox">I Agree To Eventoo Terms & Conditions, Platform Terms, and Privacy Policy</label>
            </div>
            <div class="contract">
                <input name="checkbox" type="checkbox" required>
                <span></span>
                <label for="checkbox">I agree to receive product updates and marketing communications from Eventoo</label>
            </div>
            <div class="action">
                <!-- <a href=""><span>NEXT</span> <span><img src="../IMG/icons/next.png" alt="next"></span> </a> -->
                <input type="reset" id="reset" value="Cancel">
                <input type="submit" id="submit" name="register" value="REGISTER" id="">
            </div>
            <div style="margin: 0 0 10% 10%; font-size: 18px; font-style: italic;" class="query">
                <span>Already have an account ? <a href="./form_login.php">Login</a></span>
            </div>
            <?php
            $a = ($_GET['nm']);
            if ($a == 'L1') $tp = 'Participant';
            if ($a == 'L2') $tp = 'Media';
            if ($a == 'L3') $tp = 'Exhibitor';
            ?>
            <input type="text" name="typ" value="<?php echo $tp; ?>" style="visibility: hidden;">
            <input type="text" name="nam" value="<?php echo $a; ?>" style="visibility: hidden;">
        </form>
    </div>
    <script>
        function check(){
            let pass1=document.getElementById('pass1').value;
            let pass2=document.getElementById('pass2').value;
            if(pass1!=''||pass2!=''||pass1!=pass2)
                document.getElementById('pass2').value='';
        }
    </script>


</body>

</html>