<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/global_css_home_a.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>home</title>
    <style>
        body {
            background-color: #e2e0e7;
            border-left: 2px solid #003147;
        }

        .header {
            height: 400px;
            background-color: #e2e0e7;
            margin-bottom: 0%;
        }

        @media screen and (max-width: 1100px) {
            body {
                border-left: 0;
            }

            .hours {
                font-size: 40px;
                /* height: 60px; */
                font-weight: 700;
                margin-top: 20px;
                margin-left: 1%;
                padding: 1%;
                padding-top: 15px;
                width: 96%;
            }

            .label {
                font-size: 14px;
                width: 96%;
                padding: 2% 0;
                margin: 0;
            }
        }
    </style>
</head>

<body>

    <div class="header">

        <div class="text">
            <h1 class="id_h1">Don't miss the WEF NEXUS Virtual Innovation Week !</h1>
        </div>
        <div id="" style="margin-top: -10px; ">
            <span id="target" style="border-radius: 0 0 30% 30%;"></span>
        </div>

    </div>
    <?php
    session_start();
    

    include('../account/connectToDB.php');
 
    // $sql = "SELECT * FROM online WHERE 1";
    // $request = mysqli_query($bdd, $sql);
    include('./set_online.php');
    if(isset($request_login)){
        header('location:../account/form_login.php');
    }
    // $session_times = 5*60;
    // $current_times = date('U');
    // $session_delete_time = $current_times - $session_times;

    // while($table_sql=mysqli_fetch_assoc($request)){
    //     $email=$table_sql['email'];
    //     if($table_sql['times']<$session_delete_time ){
    //         $sql_delete = "DELETE FROM online WHERE email LIKE '$email'";
    //         mysqli_query($bdd, $sql_delete);
    //     }
    // }

    $yesterday = date('Y') . '-' . date('m') . '-' . (intval(date('d')) - 1);
    $sql_delete = "DELETE FROM `infos` WHERE mtg_date <= '$yesterday'";
    $query_delete = mysqli_query($bdd, $sql_delete);

    $current_date = date('Y-m-d');
    $sql_update = "UPDATE `infos` SET `statut`='killed' WHERE mtg_date < '$current_date'";
    // $sql_delete="DELETE FROM `infos` WHERE mtg_date < '$current_date'";
    $query = mysqli_query($bdd, $sql_update);

    $sql_select = "SELECT * FROM infos WHERE statut IN ('ready','waiting') ORDER BY(mtg_date) LIMIT 1";
    $query_s = mysqli_query($bdd, $sql_select);
    $table = mysqli_fetch_assoc($query_s);
    if ($table) {
        $current_hours = date('G');
        $current_minutes = date('i');
        $current_date = date('Y-m-d');

        $minutes = $table['mtg_starts_m'];
        $hours = $table['mtg_starts_h'];
        $days = $table['mtg_date'];
        $days = $days[8] . '' . $days[9];
        $current_date = $current_date[8] . '' . $current_date[9];



        if ($minutes < $current_minutes) {
            $minutes += 60;
            $hours -= 1;
        }
        if ($hours < $current_hours) {
            $hours += 24;
            $res = 1;
        } else
            $res = 0;
    } ?>


    <?php if ($table) { ?>
        <div class="hour" style="visibility: hidden;">
            <input type="number" id="res" value="<?php echo $res ?>">
            <input type="text" id="mtg_date_c" value="<?php echo $current_date ?>">
            <input type="text" id="mtg_date" value="<?php echo $days ?>">
            <input type="number" id="mtg_h" value="<?php echo $hours ?>">
            <input type="number" id="mtg_m" value="<?php echo $minutes ?>">
        </div>
        <div class="horloge" style="width: 80%; margin-left: 10%;margin-bottom: 80px;">
            <div class="hours">

            </div>
            <div class="label">
                <span>Days</span>
                <span>Hours</span>
                <span>Minutes</span>
                <span>Seconds</span>
            </div>
        </div>
    <?php } else { ?>
        <div class="hour" style="visibility: hidden;">
            <input type="number" id="res" value="0">
            <input type="text" id="mtg_date_c" value="0">
            <input type="text" id="mtg_date" value="0">
            <input type="number" id="mtg_h" value="0">
            <input type="number" id="mtg_m" value="0">
        </div>
        <div class="horloge" style="width: 80%; margin-left: 10%;margin-bottom: 80px; visibility: hidden;">
            <div class="hours">

            </div>
            <div class="label">
                <span>Days</span>
                <span>Hours</span>
                <span>Minutes</span>
                <span>Seconds</span>
            </div>
        </div>
    <?php } ?>

    <div class="copyr" style="text-align: center;">@Copyright 2022 SicoM <div>

            <script>
                const target = document.getElementById('target');

                let array = ['Simple', 'Clear', 'Smart', 'Strong'];
                let wordIndex = 0;
                let letterIndex = 0;

                const createLetter = () => {
                    const letter = document.createElement('span');
                    target.appendChild(letter);
                    letter.classList.add('letter');
                    letter.style.opacity = '0';
                    letter.style.animation = 'anim 5s ease forwards';
                    letter.textContent = array[wordIndex][letterIndex];
                    setTimeout(() => {
                        letter.remove();
                    }, 2000)
                }

                const loop = () => {
                    setTimeout(() => {
                        if (wordIndex >= array.length) {
                            letterIndex = 0;
                            wordIndex = 0;
                            loop();
                        } else if (letterIndex < array[wordIndex].length) {
                            createLetter();
                            letterIndex++;
                            loop();
                        } else {
                            letterIndex = 0;
                            wordIndex++;
                            setTimeout(() => {
                                loop();
                            }, 2000)
                        }
                    }, 80)
                }

                loop();




                var hoursDiv = document.querySelector('.hours');
                var debut = 1;

                var display = function() {
                    var days = document.getElementById('mtg_date').value,
                        hours = document.getElementById('mtg_h').value,
                        minutes = document.getElementById('mtg_m').value,
                        res = document.getElementById('res').value,
                        days_c = document.getElementById('mtg_date_c').value;
                    seconds = 60;
                    hours = Number(hours);
                    minutes = Number(minutes);
                    today = new Date();
                    days = Number(days) - Number(days_c) - res;

                    format = function(elt) {
                        if (elt < 10)
                            return elt = "0" + elt;
                        else
                            return elt;
                    }
                    seconds = Number(seconds) - today.getSeconds();
                    minutes = Number(Number(minutes) - today.getMinutes());
                    hours = Number(hours) - today.getHours();


                    hoursDiv.innerHTML = format(days) + " : " + format(hours) + " : " + format(minutes) + " : " + format(seconds);
                    setTimeout(display, 1000);
                }
                display();
            </script>

</body>

</html>