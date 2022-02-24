<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/inscription.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>inscription</title>
    <style>
        .top_footer {
            height: 200px;
            margin-top: 20px;
            width: 100%;
            background-color: #003147;
            color: #82c4ca;
        }
        .top_footer .foot {
            text-align: center;
            margin-top: 0px;
            display: grid;
            grid-template-columns: auto auto auto;
        }
        .top_footer .foot .third h3 {
            width: auto;
            padding-bottom: 20px;
            border-bottom: 2px solid black;
            margin: 3%;
            font-size: clamp(1em, 3vw, 1.5em);
        }

        .top_footer .foot .third div {
            text-align: center;

        }


        .copyr {
            width: 100%;

            background-color: #003147;
            color: white;
            padding-bottom: 20px;
        }

        .copyr a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php include("nav_insc.php") ?>
    <div class="option_inscription">
        <div class="register">
            <h1>REGISTER ACCOUNT</h1>
        </div>
        <div class="title1">
            <h2>Free access, join us online from 17 to 20 January 2022 and get connected</h2>
        </div>
        <div class="types">
            <div class="type participant">
                <h1>Participant</h1>
                <a href="./form_inscription.php?nm=L1"><i class="fas fa-user fa-4x" style="border: 2px solid #003147;padding: 30px;margin: 20px;border-radius: 100%;"></i><br><span>Register</span></a>
            </div>
            <div class="type media">
                <h1>Media</h1>
                <a href="./form_inscription.php?nm=L2"><i class="fas fa-user fa-4x" style="border: 2px solid #003147;padding: 30px;margin: 20px;border-radius: 100%;"></i><br><span>Register</span></a>
            </div>
            <div class="type exhibitor">
                <h1>Exhibitor</h1>
                <a href="./form_inscription.php?nm=L3"><i class="fas fa-user fa-4x" style="border: 2px solid #003147;padding: 30px;margin: 20px;border-radius: 100%;"></i><br><span>Register</span></a>
            </div>
        </div>
        <div class="title2">
            <h2>
                <h1>Need more information?</h1>
                Feel free to get in touch with Mr. LAMAH Jean Remy, Communication Manager by sending an email to lamah.jremy@ccicentre.org.tn
            </h2>
        </div>
    </div>

    <div class="top_footer">
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
                        <a href="Home.php"><img src="../IMG/INNV.jfif" style="height: 9vh; " alt="logo SICOM"></a>
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
    </div>

    <div class="copyr" style="text-align: center;">@Copyright 2022 SicoM <div>

</body>

</html>