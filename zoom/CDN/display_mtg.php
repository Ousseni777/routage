<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.1.1/css/bootstrap.css" />
    <link rel="stylesheet" href="./css/display.css">
    <title>displaying</title>
<style>
    @media screen and (max-width: 800px) {
            .meeting{
                display: inline;
            }

            .s_title{
                width: 100%;
            }
        }
</style>
</head>

<body>
    <?php

    include('../../account/connectToDB.php');
    
    $current_date = date('Y-m-d');    
    $sql_delete="DELETE FROM `infos` WHERE mtg_date < '$current_date'";
    $query_delete= mysqli_query($bdd, $sql_delete);

    $sql = "SELECT * FROM `infos` WHERE 1";
    $resultat_sql = mysqli_query($bdd, $sql);
    ?>
    <div class="container">
        <?php while ($resultat = mysqli_fetch_assoc($resultat_sql)) { ?>
            <div class="meeting">
                <div class="topic s_title">
                    <div>
                        <span class="label">Topic : </span><br>
                    </div>
                    <div class="mtg_info">
                        <span><?php echo $resultat['topic'] ?></span>
                    </div>
                </div>
                <div class="date s_title">
                    <div>
                        <span class="label">Date :</span><br>
                    </div>
                    <div class="mtg_info">
                        <span><?php echo $resultat['mtg_date'] ?></span>
                    </div>
                </div>
                <div class="s_title">
                    <div>
                        <span class="label">Meeting starts at =></span><br>
                    </div>
                    <div class="mtg_info">
                        <span><?php echo $resultat['mtg_starts_h'] ?>h:</span>
                        <span><?php echo $resultat['mtg_starts_m'] ?></span>
                        <span>mn</span>
                        <span>GMT+1</span>
                    </div>
                </div>
                <div class="s_title">
                    <div>
                        <span class="label">Meeting ends at =></span><br>
                    </div>
                    <div class="mtg_info">
                        <span><?php echo $resultat['mtg_ends_h'] ?>h:</span>
                        <span><?php echo $resultat['mtg_ends_m'] ?></span>
                        <span>mn</span>
                        <span>GMT+1</span>
                    </div>
                </div>
                <div class="s_title action">
                    <a class="delete btn btn-danger" href="./delete_mtg.php?id=<?php echo $resultat['mtg_id'] ?>">Delete</a>
                    <a class="modify btn btn-info" href="./form_modify.php?id=<?php echo $resultat['mtg_id'] ?>">Modify</a>
                </div>
            </div>


        <?php } ?>
    </div>
    <?php mysqli_close($bdd); ?>
    <script>
        function modify() {
            window.location.href = "./modify_mtg.php?id=" + document.getElementsBy('input').value;
        }
    </script>
</body>

</html>