<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../IMG/fontawesome/css/all.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="./css/menu.css">
    <title>Document</title>
    <style>
        .open {
            visibility: hidden;
        }

        @media screen and (max-width: 800px) {
            .containt{
                position: relative;
                display: flex;
                flex-direction: column;
            }
            .nav {
                display: inline;   
                border: 0;             
            }

            .open {
                visibility: visible;
                position: absolute;
                right: 10px;
                top: -10px;
                cursor: pointer;
            }

            .nav li {
                visibility: hidden;
                width: 400px;
                margin-left: 30%;
                padding: 2%;
                border: 0;
                padding-left: 0;
                text-align: center;
                background-color: rgb(240, 208, 186);
                list-style-type: none;
                border-left: 1px solid blue;
            }

            .nav li:hover {
                background-color: black;

            }

            .nav li a {
                width: 50%;

                margin-left: -50%;
            }

            .nav li a:hover {
                color: whitesmoke;
            }
        }
    </style>
</head>

<body>
    <div class="containt">
        <span onclick="toogle()" class="open"><i id="open" class="fa-solid fa-angle-left fa-4x"></i></span>
        <!-- <div class="icon">
            <i class="fas fa-clock fa-4x"></i>
        </div> -->
        <ul class="nav" id="nav">
            <li class="li">
                <a href="./schedule_mtg.php" target="main">
                    <span>Add a meeting</span>
                    <i class="fas fa-clock fa-1x"></i>
                </a>
            </li>
            <li class="li">
                <a href="./display_mtg.php" target="main">
                    <span>Display meeting</span>
                    <i class="fas fa-file-powerpoint fa-1x"></i>
                </a>
            </li>
            <li class="li">
                <a href="./form_publish.php" target="main">
                    <span>Publish a meeting</span>
                    <i class="fas fa-upload fa-1x"></i>
                </a>
            </li>
            <li class="li">
                <a href="./index.php" target="main">
                    <span>Start Meeting</span>
                    <i class="fas fa-upload fa-1x"></i>
                </a>
            </li>
        </ul>
    </div>
    <script>
        function toogle() {
            let li = document.querySelectorAll('li');
            let nav = document.getElementById('nav');
            let open =document.getElementById('open');
            if (document.querySelector('li').style.width == "100%") {
                for (let i = 0; i < li.length; i++) {
                    li[i].style.width = "0px";
                    // nav.style.width="0px";
                    li[i].style.visibility = "hidden";

                }
                // <i class="fa-solid fa-angle-left"></i>
                open.classList.replace("fa-solid","fa-solid");
                
                nav.style.visibility = "hidden";
            } else {
                for (let i = 0; i < li.length; i++) {
                    li[i].style.width ="100%";
                    li[i].style.visibility = "visible";

                }
                open.classList.replace("fa-solid","fa-solid");                
                nav.style.visibility = "visible";
            }
        }
        let li = document.querySelector('ul');
        li.addEventListener("mouseover", function(event) {
            // on met l'accent sur la cible de mouseover
            event.target.style.color = "orange";

            // on réinitialise la couleur après quelques instants
            setTimeout(function() {
                event.target.style.color = "";
            }, 500);
        }, false);
    </script>
</body>

</html>