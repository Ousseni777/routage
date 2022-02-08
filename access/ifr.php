<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../IMG/fontawesome/css/all.css">
    <link rel="stylesheet" href="../CSS/styles.css">

    <title>innov</title>

    <style>
        .prmenu {
            height: 0;
            z-index: 1;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        .pmenucls {
            height: 65%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            background-color: #003147;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            border-left: 1px solid #fff;
        }

        .pmenucls a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .pmenucls a:hover {
            color: #f1f1f1;
        }

        .pmenucls .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }
    </style>
</head>

<body style="display: flex; margin-left: 20%;background: #e2e0e7;">
    <?php
    session_start();
    if (!$_SESSION['email']) {
        header("Location: ../account/form_login.php");
    }
    $email = ($_SESSION['email']);
    $bdd = mysqli_connect('localhost', 'root', '', 'sicom_innovation');

    $sql = "SELECT * FROM `person` WHERE email='$email'";
    $resultat_sql = mysqli_query($bdd, $sql);

    $table = mysqli_fetch_assoc($resultat_sql);
    $prenom =  $table['first_name'];
    $nom = $table['last_name'];


    ?>
    <div class="side_bar" style="z-index: 1;">
        <div id="toogle" class="toogle"><i id="icon_toogle" class="fas fa-toggle-off fa-3x"></i></div>
        <div class="menu">
            <div class="option"><a href="./home_a.php" target="tg"><i class="fas fa-home fa-1x" id="i1"></i></i><span style="color: #fff;">Home</span></a></div>
            <div class="option"><a href=""><i class="far fa-calendar-alt fa-1x" id="i2"></i><span>Agenda</span></a></div>
            <div class="option"><a href=""><i class="fas fa-desktop fa-1x" id="i3"></i><span>Conference Room</span></a></div>
            <div class="option"><a href=""><i class="fas fa-laptop-medical fa-1x" id="i4"></i><span>Exhibitor Show</span></a></div>
            <div class="option"><a href="../wef_nexus_Exhibition.php" target="tg"><i class="fas fa-laptop-house fa-1x" id="i5"></i><span>WEF Exhibition</span></a></div>
            <div class="option"><a href="../wef_fair_innovation.php" target="tg"><i class="fas fa-laptop-house fa-1x" id="i6"></i><span>WEF Innov Fair</span></a></div>
            <div class="option"><a href="./members/speaker.php" target="tg"><i class="fas fa-users fa-1x" id="i7"></i><span>Participants</span></a></div>
            <div class="option"><a href=""><i class="fas fa-users-cog fa-1x" id="i8"></i><span>Networking</span></a></div>
            <div class="option"><a href="http://localhost/myProject/Innovation/nexus_brokerage.php" target="tg" class="anm"><i class="fas fa-users-cog fa-1x" id="i9"></i><span>NEXUS Brokerage</span></a></div>
            <div class="option"><a href="javascript:void(0)" target="tg"><i class="fas fa-user fa-1x" id="i10" onclick="openNav()"></i><span><span onclick="openNav()">My Profil Config</span> <span style="font-size:25px;cursor:pointer; margin-left: 18px;text-align: center;" onclick="closeNav()">&times;</span></span></a></div>
            <div class="prmenu" id="pmenu">
                <div class="option"><a href="http://localhost/myProject/Innovation/access/members/PROFIL/primary_information.php" target="tg"><i class="fas fa-user fa-1x" id="i10N" style="color: #111014;"></i><span style="color:rgb(223, 200, 200) ;">Primary information</span></a></div>
                <div class="option"><a href="http://localhost/myProject/Innovation/access/members/PROFIL/further_information.php" target="tg"><i class="fas fa-user fa-1x" id="i10N" style="color: #111014;"></i><span style="color:rgb(223, 200, 200) ;">Further information</span></a></div>
                <div class="option"><a href="http://localhost/myProject/Innovation/access/members/PROFIL/password.php" target="tg"><i class="fas fa-user fa-1x" id="i10D" style="color: #111014;"></i><span style="color:rgb(223, 200, 200) ;">Password</span></a></div>
            </div>
            <div class="option"><a href="" target="tg"><i class="fas fa-star fa-1x" id="i11"></i><span>My Visit</span></a></div>
            <div class="option"><a href="" target="tg"><i class="fas fa-question-circle fa-1x" id="i12"></i><span>How It works ?</span></a></div>
            <div class="option"><a href="" target="tg"><i class="fas fa-guilded fa-1x" id="i13"></i><span>User guides</span></a></div>
            <div class="option"><a href="" target="tg"><i class="fas fa-paper-plane fa-1x" id="i14"></i><span>Contact Us</span></a></div>
            <div class="option"><a target="tg" href="../access/zoom/CDN/setting.php" target="page"><i class="fas fa-desktop fa-1x" id="i15"></i><span>Set Meeting</span></a></div>
            <div class="option"><a id="logout" href="http://localhost/myProject/Innovation/account/form_login.php"><i class="fas fa-sign-out-alt fa-1x" id="i16"></i><span>Logout</span></a></div>
        </div>
    </div>
    <div style="width: 100%; background-color: #e2e0e7;" id="ifr">
        <?php $p = $prenom[0];
        $n = $nom[0];

        ?>
        <div id="pmenuid" class="pmenucls">
            <a href="javascript:void(0)" class="closebtn" onclick="closePr()">&times;</a>
            <a href="#"> <span style="float: right;position: absolute;"><span href="#" style="width: 60px;font-size: 35px;background-color:  #fff;color: #003147;padding: 8px;margin-right: 100px;cursor:pointer;" onclick="openPr()"><?php echo "$p" . "$n"; ?></span><span style="font-size: 18px;"> </span></span></a>
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
        </div>
        <div class="profil" id="pf" style="width: 100%;margin-right: 0px;padding-right: 15px ;height: 80px;float: right;padding-top: 13px;width: 120%; background-color: #fff; position: absolute; top: 0; left: -20%;">
            <span style="float: right;"><a href="#" style="width: 60px;font-size: 35px;background-color:  #113c5f;padding: 8px;margin-right: 3px;cursor:pointer;" onclick="openPr()"><?php echo "$p" . "$n"; ?></a><?php echo "$prenom" . " " . "$nom"; ?><span style="font-size: 18px;"> </span></span>

        </div>
        <iframe src="./home_a.php" name="tg" height="98%" width="100%" style=" border: 0;background-color: #e2e0e7; " title=""></iframe>
    </div>

    <script>
        function openNav() {
            document.getElementById("pmenu").style.width = "230px";
            document.getElementById("pmenu").style.height = "auto";
        }

        function closeNav() {
            document.getElementById("pmenu").style.width = "auto";
            document.getElementById("pmenu").style.height = "0";
        }


        function openPr() {
            document.getElementById("pmenuid").style.width = "340px";
        }

        function closePr() {
            document.getElementById("pmenuid").style.width = "0";
        }

        let toogle = document.getElementById('toogle');
        let icon = document.getElementById("icon_toogle");
        let side_bar = document.querySelector('.side_bar');
        let side1 = document.getElementById('i1');
        let side2 = document.getElementById('i2');
        let side3 = document.getElementById('i3');
        let side4 = document.getElementById('i4');
        let side5 = document.getElementById('i5');
        let side6 = document.getElementById('i6');
        let side7 = document.getElementById('i7');
        let side8 = document.getElementById('i8');
        let side9 = document.getElementById('i9');
        let side10 = document.getElementById('i10');
        let side11 = document.getElementById('i11');
        let side12 = document.getElementById('i12');
        let side13 = document.getElementById('i13');
        let side14 = document.getElementById('i14');
        let side15 = document.getElementById('i15');
        let side16 = document.getElementById('i16');
        let menu = document.querySelector('.menu');
        let ifr = document.getElementById('ifr');
        var glo = 0;

        side1.onmouseover = function() {
            // side_bar.classList.toggle('active');
            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }
        side2.onmouseover = function() {
            // side_bar.classList.toggle('active');
            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }
        side3.onmouseover = function() {
            // side_bar.classList.toggle('active');
            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }

        side4.onmouseover = function() {
            // side_bar.classList.toggle('active');
            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }

        side5.onmouseover = function() {
            // side_bar.classList.toggle('active');
            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }

        side6.onmouseover = function() {
            // side_bar.classList.toggle('active');



            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }

        side7.onmouseover = function() {
            // side_bar.classList.toggle('active');



            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }

        side8.onmouseover = function() {
            // side_bar.classList.toggle('active');



            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }


        side9.onmouseover = function() {
            // side_bar.classList.toggle('active');



            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }

        side10.onmouseover = function() {
            // side_bar.classList.toggle('active');



            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }

        side11.onmouseover = function() {
            // side_bar.classList.toggle('active');



            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }

        side12.onmouseover = function() {
            // side_bar.classList.toggle('active');



            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }

        side13.onmouseover = function() {
            // side_bar.classList.toggle('active');



            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }
        side14.onmouseover = function() {
            // side_bar.classList.toggle('active');



            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }
        side15.onmouseover = function() {
            // side_bar.classList.toggle('active');



            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }
        side16.onmouseover = function() {
            // side_bar.classList.toggle('active');



            icon.style.color = 'white';
            icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
            side_bar.classList.replace('side_bar', 'side_bar2');

        }




        //FERMETURE
        ifr.onmouseover = function() {
            icon.classList.replace('fa-toggle-on', 'fa-toggle-off');
            side_bar.classList.replace('side_bar2', 'side_bar');
            document.getElementById("pmenu").style.width = "auto";
            document.getElementById("pmenu").style.height = "0";

        }
    </script>
</body>

</html>