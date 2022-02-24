<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../IMG/fontawesome/css/all.css">
    <link rel="stylesheet" href="../../CSS/members/global_m.css">
    <title>Exhibitor</title>
    <style>
        .container {
            width: 98%;
            margin: 95px 0 0 1%;
            padding: 1%;
            /* height: 150px; */
            background-color: rgb(235, 230, 226);
            border-radius: 10px;
            /*box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.19);
    -webkit-box-shadow:  0 1px 1px 0 rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.19);
    -moz-box-shadow:  0 1px 1px 0 rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.19);*/
        }

        .target_li {
            width: 90%;
            margin: auto;
            padding: 20px 0;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: blue;
        }

        .target_li a {
            color: white;
        }

        .online {
            width: 10px;
            height: 10px;
            margin: 0 2% 0 0;
            background-color: rgb(12, 240, 31);
            border-radius: 50%;
        }

        .offline {
            width: 10px;
            height: 10px;
            margin: 0 2% 0 0;
            background-color: gray;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <?php
    include('../../account/connectToDB.php');

    $sql = "SELECT * FROM `person` WHERE type_pers LIKE 'Exhibitor'";
    $queru_sql = mysqli_query($bdd, $sql);
    include('../set_offline.php');
    $len = 0;
    ?>
    <span class="btn"><i class="fas fa-arrow-circle-up fa-3x"></i></span>
    <div class="container">
        <div class="target">
            <ul>
                <li><a href="./speaker.php" target="tg">SPEAKERS</a></li>
                <li style="border-bottom: 5px solid red;"><a href="" target="tg">EXHIBITORS</a></li>
                <li><a href="./participant.php" target="tg">PARTICIPANTS</a></li>
            </ul>
        </div>
        <div class="info">
            <span class="span">List of Exhibitors</span>
            <span id="number" class="info_general span"></span>
        </div>
        <form action="">
            <div class="search">
                <input id="search" type="search" name="name" placeholder="Search in : Name, Firstname, Company Name">
            </div>
            <div class="selects_exhibitor">
                <div class="elt">
                    <select name="country" id="">
                        <option value="">BF</option>
                        <option value="">GC</option>
                        <option value="">T</option>
                    </select>

                </div>
                <div class="elt">
                    <select name="sector" id="" multiple="multiple">
                        <option value="">Energy</option>
                        <option value="">Ergy</option>
                        <option value="">Energ</option>
                    </select>
                </div>
                <div class="elt search">
                    <input class="submit" id="submit_exhibitor" type="submit" value="Search">
                </div>
            </div>

        </form>
        <div class="participants">
            <?php while ($table = mysqli_fetch_assoc($queru_sql)) {
                $len++; ?>
                <div class="participant">
                    <?php

                    $email = $table['email'];
                    $sql = "SELECT * FROM online WHERE email LIKE '$email'";
                    $request = mysqli_query($bdd, $sql);
                    $table_sql = mysqli_fetch_assoc($request);
                    if ($table_sql['status'] == 'on')
                        echo '<div class="online"></div>';
                    else
                        echo '<div class="offline"></div>';
                    ?>
                    <div class="img">
                        <img class="profil" src="http://localhost/myProject/Innovation/IMG/part3.jpg" alt="profil">
                        <div class="description">
                            <a href="">M. <?php echo $table['last_name'] ?></a><br>
                            <span> Excellenca Presiden</span>
                        </div>
                    </div>
                    <div class="more" style="justify-content: center; justify-items: center; margin-left: 5%;">
                        <a href=""><?php echo $table['type_pers'] ?></a>
                        <!-- <span class="flag"><img src="" alt="Img"></span> -->
                        <span class="country"><?php echo $table['country'] ?></span>
                    </div>
                    <div class="link">
                        <a href="./profil.php?id=<?php echo $table['id_pers'] ?>">View profil</a>
                    </div>
                    <div class="link">
                        <a href="">Send message</a>
                    </div>
                    <div class="link">
                        <a href="">Request an appointment</a>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
    <span id="nbr" class="nbr"><?php echo $len ?></span>
    <script>
        var start = window.pageYOffset;
        window.onscroll = function() {
            var current = window.pageYOffset;
            if (current > 400) {
                document.querySelector('.btn').style.visibility = 'visible';
            } else {
                document.querySelector('.btn').style.visibility = 'hidden';
            }
        }
        document.getElementById('number').textContent = document.getElementById('nbr').textContent + ' Exhibitor(s)';
        const btn = document.querySelector('.btn');

        btn.addEventListener('click', () => {

            window.scrollTo({
                top: 0,
                left: 0,
                behavior: "smooth"
            })

        })
    </script>
</body>

</html>