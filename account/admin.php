<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            background: #7abecc !important;
        }

        .justify_container {
            margin-left: 25%;
            margin-top: 5%;
        }

        .container {
            width: 60%;
            background: #74cfbf;
            position: relative;
            display: flex;
            justify-content: center;
            flex-direction: column;

            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 5px;
        }

        .form_container {
            margin-top: 10px;
            justify-content: flex-start;
        }

        #form-title {
            color: #ffff;
            text-align: center;
            font-size: 30px;
        }

        .img {
            width: 40px;
            height: 38px;
            text-align: center;
        }

        .icon {
            background: rgb(202, 196, 200) !important;
            border: white 1px solid;
            border-radius: 10px 0px 0px 10px !important;
            margin-top: 10px;
            padding-right: 0;
            height: 42px;
            width: 10%;
        }

        .input_field {
            width: 70%;
        }

        .input-group {
            display: flex;
            text-align: center;
            padding-left: 15%;
        }

        input {
            width: 100%;
            height: 40px;
            border: white 1px solid;
            font-size: 20px;
            margin-top: 10px;
            border-radius: 0px 10px 10px 0px;
        }

        .input:hover,
        .input:focus {
            transition: all 0.5s ease;
            outline: none;
            border-bottom: 2px solid orange;
        }


        #reset_btn {
            width: 45%;
            background: #be0202;
            color: white;
            box-shadow: none !important;
            border-radius: 0px;
            outline: 0px !important;
            margin: 5%;
            cursor: pointer;
        }

        #register_btn {
            width: 50%;
            font-size: 25px;
            text-align: center;
            background: #33ccff !important;
            color: white !important;
            box-shadow: none !important;
            border-radius: 0px;
            border: 0px;
            outline: none !important;
            margin-left: 25%;
            cursor: pointer;
        }

        #register_btn:hover {
            transition: all 0.5s ease;
            border: 2px greenyellow solid;
        }

        #register_btn:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .input_login_c {
            text-align: center;
            font-size: 20px;
            margin-top: 10px;
        }

        .login_container {
            padding: 0 2rem;
        }
    </style>
</head>

<body>
    <div class="justify_container">
        <div class="container">
            <div class="title">
                <h3 id="form-title">ADMIN</h3>
            </div>
            <div class="form_container">
                <?php
                if ($_POST) {
                    extract($_POST);
                    $containt = file_get_contents($filename);
                    echo $containt;
                    if ($containt == "This is secret code for admin") {                        
                        header("location:../access/members/admin_access.php");
                    } else { ?>
                        <script>
                            alert("Invalide secret code");
                        </script>
                <?php }
                } ?>
                <form method="POST" action="./admin.php">                    
                    <div class="input-group" style="width: 100%;">
                        <div title="Choose a file containing secret key" class="input_field">
                            <input type="file" style="outline: none; font-size:30px;" class="file" value="Fichier" name="filename">
                        </div>
                    </div>

                    <div id="input_submit">
                        <input id="register_btn" type="submit" value="Login">
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script>
        for (var field in form_fields) {
            form_fields[field].className += ' form-control'
        }
    </script>
</body>

</html>