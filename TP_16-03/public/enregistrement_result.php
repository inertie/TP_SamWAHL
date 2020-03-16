<?php

(empty($_POST) ||
empty($_POST['nom']) ||
empty($_POST['annee_sortie']) ||
empty($_POST['nb_km'])) && exit("Requête invalide");

require_once '../functions/insert.php';
require_once '../layout/header.php';

if (newCar($_POST['nom'], $_POST['annee_sortie'], $_POST['nb_km'])) {
    ?>
    La voiture a été ajouté !

<?php } else { ?>
    La voiture n'a pas pu être ajouté à la BDD.

<?php } 

require_once '../layout/footer.php'; ?>