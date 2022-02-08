<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/global_css.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="./CSS/footercss.css">
    <title>home</title>
</head>

<body>

    <?php include("index1.php") ?>
    <div class="header">
        <div class="text">
            <h1 id="id_h1">WATER, ENERGY, FOOD NEXUS INNOVATION WEEK</h1>
            <h2>"Paving the way towards Entrepreneurship"
                17-20 January 2022
                Online Regional Event</h2>
        </div>
        <div class="baner">
            <a href="Home.php"><img src="./IMG/INNV.jfif" alt="logo SICOM"></a>
        </div>
    </div>
    <div class="about">

        <h2>About the Event</h2>
        <p>
            Bringing together Euro-Mediterranean researchers, policy makers, investors, Industry players, Academia, Technology Transfer Offices, SMEs, startups and Entrepreneurs
        </p><br>
        <p>Four days to know more about WEF NEXUS status and realities in Tunisia & the Euro-Mediterranean Region & forge strategic partnerships across Europe & the MENA region</p><br>
        <p>Over four days, WEF NEXUS innovation week will stream a regional conference, workshops, discussion panels and expert roundtables, followed by B2B matchmaking sessions to help you connect with relevant peers and stakeholders in Europe and the MENA region</p><br>
    </div>
    <?php
    $bdd = mysqli_connect('localhost', 'root', '', 'sicom_innovation') or die(mysqli_error($bdd));
    $sql_select = "SELECT * FROM infos WHERE 1 ORDER BY(mtg_date) LIMIT 1";
    $query_s = mysqli_query($bdd, $sql_select);
    $table = mysqli_fetch_assoc($query_s);

    $current_hours=date('G');
    $current_minutes=date('i');    
    $current_date=date('Y-m-d');

    $minutes=$table['mtg_starts_m'];
    $hours=$table['mtg_starts_h'];
    $days=$table['mtg_date'];
    $days=$days[8].''.$days[9];
    $current_date=$current_date[8].''.$current_date[9];    

    

    if ($minutes <$current_minutes) {
        $minutes += 60;
        $hours -= 1;
    }
    if ($hours < $current_hours) {
        $hours += 24;     
        $res=1;   
    }else
        $res=0;
    ?>
    <div class="hour" style="visibility: hidden;">    
    <input type="number" id="res" value="<?php echo $res ?>">
    <input type="text" id="mtg_date_c" value="<?php echo $current_date ?>">
        <input type="text" id="mtg_date" value="<?php echo $days ?>">
        <input type="number" id="mtg_h" value="<?php echo $hours ?>">
        <input type="number" id="mtg_m" value="<?php echo $minutes ?>">
    </div>
    <h1 class="h1">Don't miss the WEF NEXUS Virtual Innovation Week !</h1>
    <div class="horloge">
        <div class="hours">

        </div>
        <div class="label">
            <span>Days</span>
            <span>Hours</span>
            <span>Minutes</span>
            <span>Seconds</span>
        </div>
    </div>
    <div class="agenda">
        <h1 class="h1_agenda">Agenda Overview</h1>
        <div class="days dayRows">
            <div class="dayCols">
                <h1>DAY1</h1>
                <h2>Connecting with PHEMAC Euro-Mediterranean and Tunisian innovators, researchers, policy makers, international companies, investors and industrialsin WEF sectors.</h2>
                <ul>
                    <li>Join us on the first day to connect with key stakeholders in the EU & MENA region</li>
                    <li>Exchange around the latest innovations and findings in the Water, Energy, Food sectors following a NEXUS approach</li>
                    <li>
                        Explore partnerships and business opportunities</li>
                    <li>
                        Gather information and generate recommendations about which KPIs should target IT platforms addressing WEF NEXUS solutions, how to better employ such platforms, how to guarantee their sustainability or how to replicate their use
                    </li>
                </ul>
            </div>
            <div class="dayCols">
                <h1>DAY1</h1>
                <h2>Connecting with PHEMAC Euro-Mediterranean and Tunisian innovators, researchers, policy makers, international companies, investors and industrialsin WEF sectors.</h2>
                <ul>
                    <li>Join us on the first day to connect with key stakeholders in the EU & MENA region</li>
                    <li>Exchange around the latest innovations and findings in the Water, Energy, Food sectors following a NEXUS approach</li>
                    <li>
                        Explore partnerships and business opportunities</li>
                    <li>
                        Gather information and generate recommendations about which KPIs should target IT platforms addressing WEF NEXUS solutions, how to better employ such platforms, how to guarantee their sustainability or how to replicate their use
                    </li>
                </ul>
            </div>
        </div>
        <div class="days dayRows">
            <div class="dayCols">
                <h1>DAY1</h1>
                <h2>Connecting with PHEMAC Euro-Mediterranean and Tunisian innovators, researchers, policy makers, international companies, investors and industrialsin WEF sectors.</h2>
                <ul>
                    <li>Join us on the first day to connect with key stakeholders in the EU & MENA region</li>
                    <li>Exchange around the latest innovations and findings in the Water, Energy, Food sectors following a NEXUS approach</li>
                    <li>
                        Explore partnerships and business opportunities</li>
                    <li>
                        Gather information and generate recommendations about which KPIs should target IT platforms addressing WEF NEXUS solutions, how to better employ such platforms, how to guarantee their sustainability or how to replicate their use
                    </li>
                </ul>
            </div>
            <div class="dayCols">
                <h1>DAY1</h1>
                <h2>Connecting with PHEMAC Euro-Mediterranean and Tunisian innovators, researchers, policy makers, international companies, investors and industrialsin WEF sectors.</h2>
                <ul>
                    <li>Join us on the first day to connect with key stakeholders in the EU & MENA region</li>
                    <li>Exchange around the latest innovations and findings in the Water, Energy, Food sectors following a NEXUS approach</li>
                    <li>
                        Explore partnerships and business opportunities</li>
                    <li>
                        Gather information and generate recommendations about which KPIs should target IT platforms addressing WEF NEXUS solutions, how to better employ such platforms, how to guarantee their sustainability or how to replicate their use
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="explore_event">

    </div>
    <div class="about_project">

    </div>
    <div class="scrolling">

    </div <!--FOOTER-->
    <footer class="top_footer">
        <div class="foot">
            <div class="third">
                <h3>Nos Reseaux</h3>
                <div>
                    <dl style="margin-left: 40%;">
                        <dt> <a href=""><i class="fab fa-facebook-square fa-4x fa-3y"></i></a></dt>
                        <dt> <a href=""><i class="fa fa-linkedin fa-1,5x" aria-hidden="true"></i></a></dt>
                        <dt> <a href=""><i class="fab fa-twitter-square fa-4x"></i></a></dt>
                    </dl>
                </div>
            </div>

            <div class="third">
                <h3>Semaine de L'innovation </h3>
                <div>
                    <div class="baner">
                        <a href="Home.php"><img src="./IMG/INNV.jfif" alt="logo SICOM"></a>
                    </div>
                </div>
            </div>

            <div class="third">
                <h3>Liens Utiles</h3>
                <div>
                    <ul>
                        <li><a href="https://fst-usmba.ac.ma/" style="text-decoration: none;color: #fff;font-size: 22px;font-weight: 400;">Go to fst.ma </a></li>
                        <li><a href="http://elearning.usmba.ac.ma/" style="text-decoration: none;color: #fff;font-size: 22px;margin-top: 40px;font-weight: 400;">Go to usmba.ma </a></li>
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
                    days = Number(days)-Number(days_c)-res;             

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