<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/setting.css">
    <title>setting</title>
    <style>
        @media screen and (max-width: 800px) {
            .page {
                /* width: 100%; */
                padding: 0 1%;
                padding-top: 50vw;

            }

            .page iframe {
                /* width: 100%; */
                height: 100vw;
            }
        }
    </style>
</head>

<body>
    <div class="menu">
        <?php include('./menu_mtg.php') ?>
    </div>
    <div class="page">
        <iframe src="./accueil_mtg.php" name="main" frameborder="0"></iframe>
    </div>
</body>

</html>