<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.1.1/css/bootstrap.css" />
    <link rel="stylesheet" href="./css/setting.css">
    <title>Modify</title>
</head>

<body>
    <?php
    $mtg_id=$_GET['id'];
    //Connexion à la base de données gestion_voitures_sql
    include('../../account/connectToDB.php');
    $sql_select="SELECT * FROM infos WHERE mtg_id=$mtg_id";
    $query_s = mysqli_query($bdd, $sql_select);        
    $table=mysqli_fetch_assoc($query_s);    
    ?>
        
        <div id="nav-tool" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">            
            <div id="navbar" class="websdktest">
                <form class="navbar-form navbar-right" method="POST" action="./modifier.php" id="meeting_form">                
                    <div class="form-group">
                        <label for="meeting_topic"> Meeting Topic :</label>
                        <input type="text" name="meeting_topic" id="meeting_topic" value="<?php echo $table['topic'] ?>" maxLength="100" placeholder="Meeting Topic" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="meeting_start">Meeting duration : => (Date)</label>
                        <input type="date" name="meeting_date" id="meeting_date" value="<?php echo $table['mtg_date'] ?>" maxLength="100" class="form-control" required>
                    </div>

                    <div style="margin-left: 30%;" class="form-group">
                        <label for="meeting_start">Meeting starts => :</label>
                        <select style="width: 100px; float: none; margin-left: 30%;" class="sdk-select" name="meeting_start_h" id="meeting_start_h">
                            <option value="<?php echo $table['mtg_starts_h'] ?>"><?php echo $table['mtg_starts_h'] ?></option>
                            <?php for ($i = 0; $i <= 24; $i++)
                                if($i!=$table['mtg_starts_h'])
                                    echo "<option value=" . $i . ">" . $i . "</option>";
                            ?>
                        </select>
                        <select style="width: 100px; float: none;" class="sdk-select" name="meeting_start_m" id="meeting_start_m">
                            <option value="<?php echo $table['mtg_starts_m'] ?>"><?php echo $table['mtg_starts_m'] ?></option>
                            <?php for ($i = 0; $i <= 60; $i += 15)
                                if($i!=$table['mtg_starts_m'])
                                echo "<option value=" . $i . ">" . $i . "</option>";
                            ?>
                        </select>
                    </div>
                    <div style="margin-left: 30%;" class="form-group">
                        <label for="meeting_ends_h"> Meeting ends => : </label>
                        <select style="width: 100px; float: none; margin-left: 30%;" class="sdk-select" name="meeting_ends_h" id="meeting_ends_h">
                        <option value="<?php echo $table['mtg_ends_h'] ?>"><?php echo $table['mtg_ends_h'] ?></option>
                            <?php for ($i = 0; $i <= 24; $i++)
                                if($i!=$table['mtg_ends_h'])
                                    echo "<option value=" . $i . ">" . $i . "</option>";
                            ?>
                        </select>
                        <select style="width: 100px; float: none;" class="sdk-select" name="meeting_ends_m" id="meeting_ends_m">
                        <option value="<?php echo $table['mtg_ends_m'] ?>"><?php echo $table['mtg_ends_m'] ?></option>
                            <?php for ($i = 0; $i <= 60; $i += 15)
                            
                                if($i!=$table['mtg_ends_m'])
                                echo "<option value=". $i .">". $i."</option>";
                            ?>
                    
                        </select>
                        <input type="text" style="visibility: hidden;" name="mtg_id" value="<?php echo $table['mtg_id'] ?>">
                    </div>                   

                    <div class="form-group"  style="width: 50%;">                        
                        <a href="./display_mtg.php" style="background-color: gray; color: #fff; float: left; width: 40%;" class="btn btn-dark btn-lg active btn-block">Cancel</a>
                        <!-- <a href="./" style=" width: 45% ; float: right;"  class="btn btn-info btn-lg btn-block;">Modify</a>                                                 -->
                        <input type="submit" style="padding: 2%;" class="btn btn-info btn-lg;" value="Modify">
                    </div>


                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>
</body>

</html>