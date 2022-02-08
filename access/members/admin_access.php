<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>

<body>
    <?php
    $filename = $_GET['filename'];
    $containt = file_get_contents($filename);
    if ($containt == "This is secret code for admin") { ?>


    <?php } else { ?>
        <script>
            alert("Invalide secret code");
        </script>
    <?php } ?>
</body>

</html>