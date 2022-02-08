<?php
    session_start(); // Début d'une session 
    $_SESSION['email'] = 'komihugues.koumako@gmail.com';
    $_SESSION['mdp'] = '1234';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="with=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>My profil</title>
    </head>

    <body>
        <header>
            <div class="profile">
                <?php
                    include("connection.php"); // Connexion à la base de données
                    
                    // Sélection des informations de la personne dans la base de données
                    $requete = 'SELECT first_name, last_name, profile_picture, age_range, phone_number, profil, sector, media_name, fonction, country, city, about_me, linkedin_profile
                                            FROM Person
                                            WHERE email = :email
                                            AND mdp = :mdp';

                    $reponse = $db->prepare($requete); // Préparation de la requête

                    // Exécution de la requête
                    $reponse->execute([
                        'email' => $_SESSION['email'],
                        'mdp' => $_SESSION['mdp']
                    ]);

                    $donnees = $reponse->fetch();
                    
                ?>
                <p><?php echo $donnees['first_name'] . ' ' . $donnees['last_name'] ?></p>
            </div>

            <div class="title">
                <i class="fa fa-user"></i>
                <h3>Primary Information</h3>
            </div>
        </header>

        <!----------- Primary Information ------------>
        <section>
            <div class="bloc-form">
                <div>
                    <h4 style="font-size: 1.2em;">Primary Information</h4>
                    <p style="color: #C5C4CB;">Update your personal information</p>
                </div>

                <form method="post" action="action_primary_information.php">
                    <table>
                        <!----------- En-tête du formulaire ------------>
                        <tr style="margin-top: 20px;">
                            <td><p><img src="" alt="Your profile picture" /><br /><span style="color: #C5C4CB; font-size: 0.8em;">Allowed file types: png, jpg, jpeg</span></p></td>
                            <td><p>Profile picture<br /><span style="color: #FFC767;">Square format : 300*300px</span></p></td>
                            
                        </tr>

                        <!----------- First name ------------>
                        <tr style="margin-top: 20px;">
                            <td><label for="first-name">First name <span class="etoile">*</span></label></td>
                            <td><input type="text" name="first-name" id="first-name" placeholder=<?php echo $donnees['first_name'] ?> required /></td>
                        </tr>

                        <!----------- Last name ------------>
                        <tr>
                            <td><label for="last-name">Last name <span class="etoile">*</span></label></td>
                            <td><input type="text" name="last-name" id="last-name" placeholder=<?php echo $donnees['last_name'] ?>  required /></td>
                        </tr>

                        <!----------- Age range ------------>
                        <tr>
                            <td><label for="age-range">Age range <span class="etoile">*</span></label></td>
                            <td>
                                <select name="age-range" id="age-range" required>
                                    <option value="18-24">18-24</option>
                                    <option value="25-34">25-34</option>
                                    <option value="35-44">35-44</option>
                                    <option value="45-54">45-54</option>
                                    <option value="55-64">55-64</option>
                                    <option value="65+">65+</option>
                                </select>
                            </td>
                        </tr>

                        <!----------- Telephone ------------>
                        <tr>
                            <td><label for="telephone">Telephone <span class="etoile">*</span></label></td>
                            <td><input type="text" name="telephone" id="telephone" placeholder=<?php echo $donnees['phone_number'] ?>  required /></td>
                        </tr>

                        <!----------- Profile ------------>
                        <tr>
                            <td><label for="profile">Profile</label></td>
                            <td>
                                <select name="profile" id="profile">
                                    <option value="Public Authority">Public Authority</option>
                                    <option value="Startup">Startup</option>
                                    <option value="Research">Research</option>
                                </select>
                            </td>
                        </tr>

                        <!----------- Sector ------------>
                        <tr>
                            <td><label for="sector">Sector</label></td>
                            <td>
                                <select name="sector" id="sector">
                                    <option value="TIC">TIC</option>
                                    <option value="Water">Water</option>
                                    <option value="Energy">Energy</option>
                                </select>
                            </td>
                        </tr>

                        <!----------- Media ------------>
                        <tr>
                            <td><label for="media-name">Media name <span class="etoile">*</span></label></td>
                            <td><input type="text" name="media-name" id="media-name" placeholder=<?php echo $donnees['media_name'] ?>  required /></td>
                        </tr>

                        <!----------- Function ------------>
                        <tr>
                            <td><label for="function">Function <span class="etoile">*</span></label></td>
                            <td><input type="text" name="function" id="function" placeholder=<?php echo $donnees['fonction'] ?>  required /></td>
                        </tr>

                        <!----------- Country ------------>
                        <tr>
                            <td><label for="country">Country <span class="etoile">*</span></label></td>
                            <td>
                                <select name="country" id="country" required>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Tunisie">Tunisie</option>
                                    <option value="South Africa">South Africa</option>
                                </select>
                            </td>
                        </tr>

                        <!----------- City ------------>
                        <tr>
                            <td><label for="city">City <span class="etoile">*</span></label></td>
                            <td><input type="text" name="city" id="city" placeholder=<?php echo $donnees['city'] ?>  required /></td>
                        </tr>

                        <!----------- About me ------------>
                        <tr>
                            <td><label for="about-me">About me</label></td>
                            <td><input type="text" name="about-me" id="about-me" placeholder=<?php echo $donnees['about_me'] ?>  /></td>
                        </tr>

                        <!----------- Linkedin Profile ------------>
                        <tr>
                            <td><label for="linkedin-profile">Your linkedin profile</label></td>
                            <td><input type="text" name="linkedin-profile" id="linkedin-profile" placeholder=<?php echo $donnees['linkedin_profile'] ?>  /></td>
                        </tr>
                        <tr class="submit">
                            <td>
                                <!-- <i class="fa fa-floppy-o" aria-hidden="true"></i> -->
                                <input type="submit" value="Save" name="save"/>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>

    </body>
</html>