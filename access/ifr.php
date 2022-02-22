<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../IMG/fontawesome/css/all.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins"> -->
    <title>innov</title>

    <style>
        body {
            display: flex;
            margin-left: 20%;
            background: #e2e0e7;
        }

        .profil {
            width: 98%;
            margin-right: 0px;
            padding-right: 15px;
            height: 80px;
            float: right;
            padding-top: 13px;
            width: 120%;
            background-color: #fff;
            position: absolute;
            top: 0;
            left: -20%;
        }

        .prmenu {
            height: 0;
            z-index: 1;
            overflow-x: hidden;
            overflow-y: hidden;
        }
        .mnbton, .identifiant{
            visibility: hidden;
        }

        @keyframes animB {
            0% {
                filter: hue-rotate(0deg);
            }

            90% {
                filter: hue-rotate(360deg);
            }

            270% {
                filter: hue-rotate(270deg);
            }

            360% {
                filter: hue-rotate(360deg);
            }
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
        

        @media only screen and (max-width: 1100px) {
            body {
                /* display: flex; */
                margin-left: 0%;
                background: #e2e0e7;
            }

            .side_bar {
                width: 0;
                margin: 0;
                padding: 0;
            }            

            .menu,
            .toogle {
                visibility: hidden;
                
            }

            .mnbton {
                visibility: visible;
                cursor: pointer;
                position: absolute;
                color: #35e6fd;
                right: 50px;
                border: 0;
            }

            #open {
                top: 10px;
                font-size: 35px;
            }

            #close {
                visibility: hidden;
                position: relative;
                float: right;
                margin-right: 10px;
                color: #35e6fd;
                z-index: 9999;
                font-size: 55px;
            }
            

            .profil {
                background-color: #003147;
            }

            .identifiant {
                visibility: visible;
                cursor: pointer;
                position: absolute;
                color: #15e6fd;
                top: 20px;
                right: 10px;
                border: 0;
                font-size: 25px;
            }

            .name_firstname {
                visibility: hidden;
            }
            ::-webkit-scrollbar {
  width: 0px;
height: 0px;
  
}

        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header("Location: ../account/form_login.php");
    }
    
    include('../account/connectToDB.php');
    $email = $_SESSION['email'];

    include('./set_online.php');
    if(isset($request_login)){
        header('location:../account/form_login.php');
    }
    $sql = "SELECT * FROM `person` WHERE email='$email'";
    $resultat_sql = mysqli_query($bdd, $sql);

    $table = mysqli_fetch_assoc($resultat_sql);
    $prenom =  $table['first_name'];
    $nom = $table['last_name'];


    ?>

    <div class="side_bar" id="side_bar_id" style="z-index: 1;">
        <div id="toogle" class="toogle"><i id="icon_toogle" class="fas fa-toggle-off fa-3x"></i></div>
        <span class="mnbton_close" id="close" onclick="closeMenu()">&times;</span>
        <div class="menu">
            <div class="option"><a href="./home_a.php" target="tg"><i class="options fas fa-home fa-1x" id="i1"></i></i><span   >Home</span></a></div>
            <div class="option"><a href=""><i class="options far fa-calendar-alt fa-1x" id="i2"></i><span>Agenda</span></a></div>
            <div class="option"><a href=""><i class="options fas fa-desktop fa-1x" id="i3"></i><span>Conference Room</span></a></div>
            <div class="option"><a href=""><i class="options fas fa-laptop-medical fa-1x" id="i4"></i><span>Exhibitor Show</span></a></div>
            <div class="option"><a href="./wef_nexus_Exhibition.php" target="tg"><i class="options fas fa-laptop-house fa-1x" id="i5"></i><span>WEF Exhibition</span></a></div>
            <div class="option"><a href="./wef_fair_innovation.php" target="tg"><i class="options fas fa-laptop-house fa-1x" id="i6"></i><span>WEF Innov Fair</span></a></div>
            <div class="option"><a href="./members/speaker.php" target="tg"><i class="options fas fa-users fa-1x" id="i7"></i><span>Participants</span></a></div>
            <div class="option"><a href=""><i class="options fas fa-users-cog fa-1x" id="i8"></i><span>Networking</span></a></div>
            <div class="option"><a href="./nexus_brokerage.php" target="tg" class="anm"><i class="options fas fa-users-cog fa-1x" id="i9"></i><span>NEXUS Brokerage</span></a></div>
            <div class="option"><a href="javascript:void(0)" target="tg"><i class="options fas fa-user fa-1x" id="i10" onclick="openNav()"></i><span><span onclick="openNav()">My Profil Config</span> <span style="font-size:25px;cursor:pointer; margin-left: 18px;text-align: center;" onclick="closeNav()">&times;</span></span></a></div>
            <div class="prmenu" id="pmenu">
                <div class="option"><a href="./members/PROFIL/primary_information.php" target="tg"><i class="options fas fa-user fa-1x" id="i10N" style="color: #111014;"></i><span style="color:rgb(223, 200, 200) ;">Primary information</span></a></div>
                <div class="option"><a href="./members/PROFIL/further_information.php" target="tg"><i class="options fas fa-user fa-1x" id="i10N" style="color: #111014;"></i><span style="color:rgb(223, 200, 200) ;">Further information</span></a></div>
                <div class="option"><a href="./members/PROFIL/password.php" target="tg"><i class="options fas fa-user fa-1x" id="i10D" style="color: #111014;"></i><span style="color:rgb(223, 200, 200) ;">Password</span></a></div>
            </div>
            <div class="option"><a href="" target="tg"><i class="options fas fa-star fa-1x" id="i11"></i><span>My Visit</span></a></div>
            <div class="option"><a href="" target="tg"><i class="options fas fa-question-circle fa-1x" id="i12"></i><span>How It works ?</span></a></div>
            <div class="option"><a href="" target="tg"><i class="options fas fa-guilded fa-1x" id="i13"></i><span>User guides</span></a></div>
            <div class="option"><a href="" target="tg"><i class="options fas fa-paper-plane fa-1x" id="i14"></i><span>Contact Us</span></a></div>
            <div class="option"><a target="tg" href="./zoom/CDN/setting.php" target="page"><i class="options fas fa-desktop fa-1x" id="i15"></i><span>Set Meeting</span></a></div>
            <div class="option"><a id="logout" href="./logout.php"><i class="options fas fa-sign-out-alt fa-1x" id="i16"></i><span>Logout</span></a></div>
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

        <div class="profil" id="pf">
            <span class="mnbton" id="open" onclick="openMenu()">&#9776;</span>
            
            <span class="identifiant" onclick="openPr()"><i class="options fas fa-user fa-1x" id="i10" onclick="openNav()"></i></span>
            <span class="name_firstname" style="float: right;"><a href="#" style="width: 60px;font-size: 35px;background-color:  #113c5f;padding: 8px;margin-right: 3px;cursor:pointer;   animation-name: animB;animation-duration: 4s;animation-iteration-count: infinite;animation-timing-function: linear;" onclick="openPr()"><?php echo "$p" . "$n"; ?></a><?php echo "$prenom" . " " . "$nom"; ?><span style="font-size: 18px;"> </span></span>
        </div>

        <iframe src="./home_a.php" name="tg" width="100%" style=" border: 0;background-color: #e2e0e7;height: 100vh; " title=""></iframe>
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
        let menu = document.querySelector('.menu');
        let options = document.querySelectorAll('.options');
        let option = document.querySelectorAll('.option');
        let ifr = document.getElementById('ifr');

        for (let i = 0; i < option.length; i++) {
            options[i].onmouseover = function() {
                icon.style.color = 'white';
                icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
                side_bar.classList.replace('side_bar', 'side_bar2');

            }
        }
        for (let i = 0; i < option.length; i++) {
            option[i].onclick = function() {
                if(document.getElementById('side_bar_id').style.width=='300px'){
                    closeMenu();
                }
            }
        }

        ifr.onmouseover = function() {
            icon.classList.replace('fa-toggle-on', 'fa-toggle-off');
            side_bar.classList.replace('side_bar2', 'side_bar');
            document.getElementById("pmenu").style.width = "auto";
            document.getElementById("pmenu").style.height = "0";

        }

        function openMenu() {
            menu.style.visibility = 'visible';
            document.getElementById("side_bar_id").style.width = "300px";            
            document.getElementById("side_bar_id").style.overflow= "scroll";
            document.getElementById("side_bar_id").style.height="500px";
            document.getElementById("side_bar_id").style.borderRadius="0 0 10% 0";
            // toogle.style.visibility='visible';
            document.getElementById('open').style.visibility = 'hidden';
            document.getElementById('close').style.visibility = 'visible';
        }

        function closeMenu() {
            menu.style.visibility = 'hidden';
            document.getElementById("side_bar_id").style.width = "0px";
            // toogle.style.visibility='hidden';
            
            document.getElementById('close').style.visibility = 'hidden';
            document.getElementById('open').style.visibility = 'visible';
        }
    </script>
</body>

</html>