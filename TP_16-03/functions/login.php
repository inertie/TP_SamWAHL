<?php

function getPdo(): PDO {
    try {
        $pdo = new PDO(
            "mysql:host=localhost;dbname=tp16",
            "tp16", #identifiant
            "tp16"  #mot de passe
        );
        return $pdo;
    } catch (PDOException $error) {
        exit("Erreur lors de la connexion à la BDD.");
    }
}