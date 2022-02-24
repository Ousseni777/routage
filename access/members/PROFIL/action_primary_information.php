<?php
    session_start();

    include("connection.php"); // Connection à la base de données

    if(isset($_POST['save'])) {

        // Récupération des informations saisies dans le formulaire
        $first_name = htmlspecialchars($_POST['first-name']);
        $last_name = htmlspecialchars($_POST['last-name']);
        $age_range = htmlspecialchars($_POST['age-range']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $profile = htmlspecialchars($_POST['profile']);
        $sector = htmlspecialchars($_POST['sector']);
        $media_name = htmlspecialchars($_POST['media-name']);
        $function = htmlspecialchars($_POST['function']);
        $country = htmlspecialchars($_POST['country']);
        $city = htmlspecialchars($_POST['city']);
        $about_me = htmlspecialchars($_POST['about-me']);
        $linkedin_profile = htmlspecialchars($_POST['linkedin-profile']);

        // Insertion des modifications effectuées par la personne dans la base de données
        $requete = 'INSERT INTO Person
        (first_name, last_name, age_range, phone_number, profil, sector, company, fonction, country, city) VALUES
        (:first_name, :last_name, :age_range, :telephone, :profil, :sector, :media_name, :fonction, :country, :city)
        WHERE email = :email';
        $insert = $db->prepare($requete);
        $insert->execute([
        'first_name' => $first_name,
        'last_name' => $last_name,
        'age_range' => $age_range,
        'telephone' => $telephone,
        'profil' => $profile,
        'sector' => $sector,
        'media_name' => $media_name,
        'fonction' => $function,
        'country' => $country,
        'city' => $city,
        'about_me' => $about_me,
        'linkedin_profile' => $linkedin_profile,
        'email' => $_SESSION['email']
        ]);
    }

    header('Location: primary_information.php'); // Redirection sur la page du formulaire

?>