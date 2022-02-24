<?php

    // Connection à la base de données
    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=sicom_innovation;charset=utf8',
            'root'
        );
    }
    catch(Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

?>