<?php session_start(); ?>

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
        <title>Further information</title>
    </head>

    <body>
        <header>
            <div class="profile">
                <?php
                    include("connection.php"); // Connexion à la base de données
                    
                    // Sélection des informations de la personne dans la base de données
                    $requete = 'SELECT first_name, last_name, about_me, linkedin_profile, need_describe, department, business_sector
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
                <h3>Further Information</h3>
            </div>
        </header>

        <!----------- Further Information ------------>
        <section>
            <div class="bloc-form">
                <div>
                    <h4 style="font-size: 1.2em;">Further Information</h4>
                    <p style="color: #C5C4CB;">This information is obligatory. Please fill out this form carefully.</p>
                </div>

                <form method="post" action="#">
                    <table>
                        <!----------- About me ------------>
                        <tr style="margin-top: 20px;">
                            <td><label for="about-me">About me (Short description) <span style="color: #FFC767;">(Recommended)</span></label></td>
                            <td><textarea name="about-me" id="about-me" rows="2" ><?php echo $donnees['about_me']; ?></textarea></td>
                        </tr>

                        <!----------- Linkedin profile ------------>
                        <tr>
                            <td><label for="linkedin-profile">Your linkedin profile<span style="color: #FFC767;">(Recommended)</span></label></td>
                            <td><input type="text" name="linkedin-profile" id="linkedin-profile" placeholder=<?php echo $donnees['linkedin_profile']; ?>  /></td>
                        </tr>

                        <!----------- Describe need ------------>
                        <tr>
                            <td><label for="describe">Describe your need/ request/ what you are looking for <span class="etoile">*</span></label></td>
                            <td><textarea name="describe" id="describe" rows="2"  required><?php if(!isset($donnees['need_describe'])) {echo $donnees['need_describe'];} else echo ''; ?></textarea></td>
                        </tr>

                        <!----------- Department ------------>
                        <tr>
                            <td><label for="department">Department</label></td>
                            <td>
                                <select name="department" id="department">
                                    <option value="Department">Department</option>
                                    <option value="Senior Management">Senior Management</option>
                                    <option value="Sales and Marketing">Sales and Marketing</option>
                                    <option value="Administrative and Financial">Administrative and Financial</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Legal">Legal</option>
                                    <option value="Research and Development">Research and Development</option>
                                    <option value="Production Management">Production Management</option>
                                    <option value="IT Management and ISD">IT Management and ISD</option>
                                    <option value="Procurement and Logistics">Procurement and Logistics</option>
                                    <option value="Other">Other</option>
                                </select>
                            </td>
                        </tr>

                        <!----------- Business sector ------------>
                        <tr>
                            <td><label for="business-sector">Your business sector</label></td>
                            <td>
                                <select name="business-sector" id="business-sector">
                                    <option value="Industry & Energy">Industry & Energy</option>
                                    <option value="Trade, Retail & Ecommerce">Trade, Retail & Ecommerce</option>
                                    <option value="Agriculture / Agri-Food">Agriculture / Agri-Food</option>
                                    <option value="Services">Services</option>
                                    <option value="Public Services">Public Services</option>
                                    <option value="Education">Education</option>
                                    <option value="Banking, Insurance & Finance">Banking, Insurance & Finance</option>
                                    <option value="Health">Health</option>
                                    <option value="Tourism & Hospitality">Tourism & Hospitality</option>
                                    <option value="Transport & Logistics">Transport & Logistics</option>
                                    <option value="Urban mobility & Smart Cities">Urban mobility & Smart Cities</option>
                                    <option value="ICT, Digital Services & Telecom">ICT, Digital Services & Telecom</option>
                                    <option value="Communication, Media & Entertainment">Communication, Media & Entertainment</option>
                                    <option value="Consulting & Design Offices">Consulting & Design Offices</option>
                                    <option value="TPE, Small Business">TPE, Small Business</option>
                                    <option value="Other sectors">Other sectors</option>
                                </select>
                            </td>
                        </tr>

                        <!----------- Submit ------------>
                        <tr class="submit">
                            <td>
                                <!-- <i class="fa fa-floppy-o" aria-hidden="true"></i> -->
                                <input type="submit" name="submit" value="Submit" />
                            </td>
                        </tr>
                    
                    </table>
                </form>
            </div>
        </section>

    </body>
</html>