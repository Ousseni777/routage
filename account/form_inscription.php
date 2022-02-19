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
    <?php include("nav_insc.php");
    ?>
    <?php $tp = ' ';
    $a = ' '; ?>
    <div class="container" id="register">
            <div class="welcome">
                <h1>Welcome to Water, Energy, Food NEXUS Innovation Week « Paving the Way Towards Entrepreneurship </h1>
            </div>
        <div class="form">
            <div class="welcomes">
                <h1>Welcome to Water, Energy, Food NEXUS Innovation Week « Paving the Way Towards Entrepreneurship </h1>
            </div>
            <span class="span top" style="float: right;">Already have an account ? <a href="./form_login.php">Login</a></span>
            <h1>REGISTER ACCOUNT</h1>
            <form action="./action_cnx.php" method="POST">
                <div class="field">
                    <input name="name" value="<?php if (isset($name)) echo $name; ?>" type="text" required>
                    <span></span>
                    <label class="label" for="name">Name <span>*</span></label>
                </div>
                <div class="field">
                    <input name="firstname" value="<?php if (isset($firstname)) echo $firstname; ?>" type="text" required>
                    <span></span>
                    <label class="label" for="firstname">Firstname <span>*</span></label>
                </div>
                <div class="field">
                    <input name="email" value="<?php if (isset($email)) echo $email; ?>" type="email" required>
                    <span></span>
                    <label class="label" for="email">Email <span>*</span></label>
                </div>
                <div class="field">
                    <input name="phone_number" value="<?php if (isset($phone)) echo $phone; ?>" type="number" required>
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
                    <input onmouseout="check()" name="password1" id="pass1" type="password" required>
                    <span></span>
                    <label class="label" for="password1">Choose a password <span>*</span></label>
                </div>
                <div class="field">
                    <span id="invalid" style="position: absolute;top: 0px;right: 0;height: 2px;color: red;transition: 0.5s;"></span>
                    <input onmouseout="check()" name="password2" id="pass2" type="password" required>
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
                    <input type="text" value="<?php if (isset($company)) echo $company; ?>" name="company" id="company" required>
                    <span></span>
                    <label class="label" for="company">Company <span>*</span></label>
                </div>
                <div class="field">
                    <input type="text" value="<?php if (isset($function)) echo $function; ?>" name="function" id="function" required>
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
                    <label for="checkbox">I Agree To Eventoo Terms & Conditions, Platform Terms, and Privacy Policy</label>
                </div>
                <div class="contract">
                    <input name="checkbox" type="checkbox" required>
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
                if ($a == 'L1') $tp = 'Participant';
                if ($a == 'L2') $tp = 'Media';
                if ($a == 'L3') $tp = 'Exhibitor';
                ?>
                <input type="text" name="typ" value="<?php echo $tp; ?>" style="visibility: hidden;">
                <input type="text" name="nam" value="<?php echo $a; ?>" style="visibility: hidden;">
            </form>
        </div>
    </div>
    <script>
        function check() {
            let pass1 = document.getElementById('pass1').value;
            let pass2 = document.getElementById('pass2').value;
            if (pass1 != '' && pass2 != '' && pass1 != pass2) {
                document.getElementById('pass2').value = '';
                document.getElementById('invalid').textContent = 'Not matching';
            } else {
                if (document.getElementById('pass2').value == document.getElementById('pass1').value)
                    document.getElementById('invalid').textContent = '';
            }
        }

        // function validate() {

        //     var a = document.getElementById("pass1").value;
        //     var b = document.getElementById("pass2").value;

        //     if (a != b) {

        //         document.getElementById("pass1").value="";
        //         document.getElementById("pass2").value="";

        //         return false;
        //     }
        // }
    </script>


</body>

</html>