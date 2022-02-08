<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../IMG/fontawesome/css/all.css">
    <link rel="stylesheet" href="../../CSS/members/global.css">
    <title>Exhibitor</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sicom_innovation";
    $bd = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM `person` WHERE type_pers='Media'";
    $queru_sql = mysqli_query($bd, $sql);
    $len = 0;
    ?>
    <span class="btn"><i class="fas fa-arrow-circle-up fa-3x"></i></span>
    <div class="container">
        <div class="search_container">
            <div class="target">
                <ul>
                    <li><a href="./speaker.php" target="tg">SPEAKERS</a></li>
                    <li style="border-bottom: 5px solid red;"><a href="" target="tg">EXHIBITORS</a></li>
                    <li><a href="./participant.php" target="tg">PARTICIPANTS</a></li>
                </ul>
            </div>
            <div class="info">
                <span>List of Exhibitors</span>
                <span class="info_general">5 Exhibitors</span>
            </div>
            <form action="">
                <input id="search" type="search" name="name" placeholder="Search in : Name, Firstname, Company Name">
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
                    <div class="elt">
                        <input id="submit_exhibitor" type="submit" value="Search">
                    </div>
                </div>

            </form>
            <div class="participants">
                <?php while ($table = mysqli_fetch_assoc($queru_sql)) {
                    $len++; ?>
                    <div class="participant">
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
                            <a href="./profil.php">View profil</a>
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
    </div>
    <script>
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