<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style5.css">
    <link rel="stylesheet" type="text/css" href="CSS/global_css.css">
    <link rel="stylesheet" type="text/css" href="./CSS/footercss.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="banniere" id="navbar">
        <!--debut des liens de gauche-->
        <div class="gauche">
            <img src="./IMG/innovlogo.jfif">
        </div>
        <span class="mnbton" onmouseout="closeMenu()" onclick="openMenu()">&#9776;</span>
        <div class="droite" id="menuid">
            <span href="javascript:void(0)" class="mnbton" onclick="closeMenu()" id="back_button" style="position: absolute;position: absolute; right: 5vw; top: 5vh;border: 0;cursor:pointer;">&times;</span>
            <a href="./account/form_login.php" class="teacher">Login</a>
            <a href="./account/inscription.php" id="back_button"> Register</a>
            <a href="contact.php" id="back_button"> Contact</a>
            <a href="Meet.php" id="back_button"> Our Speakers</a>
            <a href="Agenda.php" id="back_button"> Agenda</a>
            <a href="index.php" id="back_button"> Home</a>

        </div>
    </div>
    <div class="header">
        <div class="title">CONTACT </div>
        <div class="baner">
            <img src="./IMG/INNV.jfif" alt="logo SICOM">
        </div>
    </div>

    <div class="section">
        <div>
            <div class="day">
                <div class="title">MailTo</div>
                <div class="uline"></div>
            </div>
            <div class="open_ceremony">
                <div class="title1">

                </div>
                <div class="contain_open">
                    <div class="grid_container">
                        <div class="grid">
                            <img src="IMG/participant.jpg" alt="">
                            <div class="legend">
                                <div class="title">Ms El Amrani El Idrissi Najiba</div>
                                <div class="contain"> Professor Hyper Frequences </div>
                                <div class="mail">
                                    <div>Email:</div>
                                    <div class="em">najiba.elamrani@usmba.ac.ma</div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">


                        </div>
                        <div class="grid">
                            <img src="IMG/participant.jpg" alt="">
                            <div class="legend">
                                <div class="title">M. GHENNOUI HICHAM</div>
                                <div class="contain">Coordinator of SicoM & Professor </div>
                                <div class="mail">
                                    <div>Email:</div>
                                    <div class="em">hicham.ghennioui@usmba.ac.ma</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--HJKKLKL.-->






            <!--FIN-->

        </div>
    </div>
    <!--FOOTER-->
    <footer class="top_footer">
        <div class="foot">
            <div class="third">
                <h3>Nos Reseaux</h3>
                <div>
                    <dl style="margin-left: 40%;">
                        <dt style="font-size: clamp(0.5em,3vw,0.8em);"> <a href=""><i class="fab fa-facebook-square fa-4x fa-3y"></i></a></dt>
                        <dt style="font-size: clamp(0.5em,3vw,0.8em);"> <a href=""><i class="fa fa-linkedin fa-1,5x" aria-hidden="true"></i></a></dt>
                        <dt style="font-size: clamp(0.5em,3vw,0.8em);"> <a href=""><i class="fab fa-twitter-square fa-4x"></i></a></dt>
                    </dl>
                </div>
            </div>

            <div class="third">
                <h3>Semaine de L'innovation </h3>
                <div>
                    <div class="baner">
                        <a href="Home.php"><img src="./IMG/INNV.jfif" style="height: 9vh; " alt="logo SICOM"></a>
                    </div>
                </div>
            </div>

            <div class="third">
                <h3>Liens Utiles</h3>
                <div>
                    <ul>
                        <li><a href="https://fst-usmba.ac.ma/" style="text-decoration: none;color: #fff;font-size: clamp(1em,3vw,1.5em);font-weight: 400;">Go to fst.ma </a></li>
                        <li><a href="http://elearning.usmba.ac.ma/" style="text-decoration: none;color: #fff;font-size: clamp(1em,3vw,1.5em);margin-top: 40px;font-weight: 400;">Go to usmba.ma </a></li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>

    <div class="copyr" style="text-align: center;">@Copyright 2022 SicoM <div>
        <script>
            var start = window.pageYOffset;
                window.onscroll = function() {
                    var current = window.pageYOffset;

                    if (start > current) {
                        document.getElementById("navbar").style.top = "0";
                    } else {
                        document.getElementById("navbar").style.top = "-350px";
                    }
                    start = current;
                }

            function openMenu() {
                    document.getElementById("menuid").style.width = "80%";
                }

                function closeMenu() {
                    document.getElementById("menuid").style.width = "0px";
                }
        </script>
</body>

</html>