<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../IMG/fontawesome/css/all.css">
    <link rel="stylesheet" href="../../CSS/members/profil_m.css">
    <title>Document</title>
    <style>
        @media screen and (max-width:800px) {
            .bottom {
                display: flex;
                flex-direction: column;
            }

            .top {
                display: inline;
            }

            .image {
                background-color: #003147;
                width: 80%;
                height: 100px;
                padding: 5% 10%;
                justify-content: center;                
                
            }

            .substr {
                text-align: center;
                font-size: 100px;
                color: #08e2ff;
            }
            .bottom_label{
                display: inline;
            }
            .mail{                      
                position: relative;
                justify-content: center;
                align-items: center;
                text-align: center;
            }
        }
        .name_member{
            display: flex;
        }
        .online{
            width: 10px;
            height: 10px;
            margin: 0 2% 0 0;
            background-color: green;            
            border-radius: 50%;
        } 
        .offline{
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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sicom_innovation";
    $bd = mysqli_connect($servername, $username, $password, $dbname);
    $id = $_GET['id'];

    $sql = "SELECT * FROM `person` WHERE id_pers=$id";
    $queru_sql = mysqli_query($bd, $sql);
    $table = mysqli_fetch_assoc($queru_sql);
    ?>
    <div class="identifiant">

        <div class="name_member">
        <div class="online"></div>
            <i class="fas fa-user fa-1x"></i>
            <span>Participant file: <?php echo $table['first_name'] . ' ' . $table['last_name'] ?></span>
            
            
        </div>
    </div>
    <div class="body">
        <div class="top">
            <div class="image">
                <p class="substr"><?php echo $table['first_name'][0] . $table['last_name'][0] ?></p>
            </div>
            <div class="attribut">
                <div class="top_label">
                    <p><?php echo $table['first_name'] . ' ' . $table['last_name'] ?></p>
                </div>
                <div class="bottom_label">
                    <div>
                        <p><?php echo $table['fonction'] ?></p>
                        <p><?php echo $table['company'] ?></p>
                    </div>
                    <div class="mail">
                        <p style="float: right;"><?php echo 'Email : '.$table['email'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <h1></h1>
        <div class="bottom">
            <div class="left">
                <p>Sectors : <?php echo $table['sector'] ?></p>
                <p>What I do</p>
                <p>What I am looking for</p>
            </div>
            <div class="right">
                <p>Sectors send</p>
                <p>Send message</p>
            </div>
        </div>
    </div>
</body>

</html>