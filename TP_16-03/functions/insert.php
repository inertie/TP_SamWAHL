<?php
require_once __DIR__ . '/login.php';

function newCar( 
    $name, $year, $kms) {
        $pdo = getPdo();

        $query = "INSERT INTO voiture (nom, annee_sortie, nb_km) VALUES (:nom, :annee_sortie, :nb_km)";
        $stmt = $pdo->prepare($query);

        return $stmt->execute([
            'nom' => $name,
            'annee_sortie' => $year,
            'nb_km' => $kms
        ]);
    }