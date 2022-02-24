<?php
    session_start();
    
    include('../../../account/connectToDB.php');

    // if(isset($_POST['save'])) {

    //     if(isset($_POST['current-password']) && isset($_POST['new-password']) && isset($_POST['retype-new-password'])) {
    //         // Récupération des informations saisies dans le formulaire
    //         $current_password = htmlspecialchars($_POST['current-password']);
    //         $new_password = htmlspecialchars($_POST['new-password']);
    //         $retype_new_password = htmlspecialchars($_POST['retype-new-password']);

    //         if($current_password==$_SESSION['mdp'] && $new_password==$retype_new_password) {
    //             $requete = 'UPDATE Person SET mdp=:new_mdp WHERE email=:email AND mdp=:mdp';
    //             $insert = $db->prepare($requete);
    //             $insert->execute([
    //             'new_mdp' => $new_password,
    //             'email' => $_SESSION['email'] ,
    //             'mdp' => $_SESSION['mdp'] 
    //             ]);

    //         }

    //     }
       
    // }

    header('Location: password.php'); // Redirection sur la page du formulaire

?>