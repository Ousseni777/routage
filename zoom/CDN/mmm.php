<!DOCTYPE html>

<head>
    <title>Zoom WebSDK</title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.1.1/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.1.1/css/react-select.css" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="origin-trial" content="">
</head>

<body>

    <?php
            session_start();
            $topic=$_SESSION['topic'];
            // $mtg_id = $_GET['id'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sicom_innovation";
            $bd = mysqli_connect($servername, $username, $password, $dbname);

            $sql = "SELECT * FROM `person` WHERE 1";
            $queru_sql = mysqli_query($bd, $sql);

            // $sql_info = "SELECT * FROM `infos` WHERE mtg_id=$mtg_id";
            // $queru_sql_info = mysqli_query($bd, $sql_info);
            // $table_info=mysqli_fetch_assoc($queru_sql_info);

            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
                $url = "https";
            } else {
                $url = "http";
            }
            $url .= "://";
        $url .= $_SERVER['HTTP_HOST'];
            $url .= $_SERVER['REQUEST_URI'];

            $header = 'From:"BORO OUSSENI"<boro7ousseni@gmail.com>' . "\n";
            $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
            $header .= 'Content-Transfer-Encoding: 8 bits\n';
            $header .= 'X-Mailer : PHP/' . phpversion();
            $subject = "Invitation à une réunion Zoom - " . $topic;
            while ($table = mysqli_fetch_assoc($queru_sql)) {
                $pre = substr($url, 0, 1 + strpos($url, '='));
                $end = substr($url, strpos($url, '&mn'), strlen($url));
                $pre = $pre.substr($table['first_name'],0,1).' '.substr($table['last_name'],0,1).'.';
                $link = $pre . $end;

                $message = '		
                    <body>
                    <span>SICOM INNOV vous invite à une réunion Zoomn planifiée</span><br>
                    <b>Sujet : <i style="font-size: 20px;">' . $topic . '</i> </b><br>			
                    <span>Participer à la réunion Zoom : ' . $link . '</span>
                    </body>	';
                mail($table['email'], $subject, $message, $header);
            }
            ?> 
    <p style="position: absolute; padding:5px; 
    font-style:italic; border-radius: 5px; 
    left: 0px; top: 0px; width: 160px; 
    height: 60px; font-size: 30px; 
    font-weight: bold; 
    text-align: center; z-index:1; color: white; 
    background-color:red; " id="direct">En direct</p>
    <script src="https://source.zoom.us/2.1.1/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/2.1.1/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/2.1.1/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/2.1.1/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/2.1.1/lib/vendor/lodash.min.js"></script>
    <script src="https://source.zoom.us/zoom-meeting-2.1.1.min.js"></script>
    <script src="js/tool.js"></script>
    <script src="js/vconsole.min.js"></script>
    <script src="js/meeting.js"></script>
</body>

</html>