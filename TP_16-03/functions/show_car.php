<?php
require_once __DIR__ . '/login.php';

function ListCar() {
    $pdo = getPdo();

    if(empty($_GET['search']) ) {
        $query = "SELECT * FROM voiture";
        $result = $pdo->query($query);
        
        while ($donnees = $result->fetch()) { ?>
            </br> <?php echo $donnees['nom']; ?>
            a pourcouru <?php echo $donnees['nb_km']; ?>
            et date de <?php echo $donnees['annee_sortie']; ?> </br> </br><?php
        }
    } else  {
        $query ="SELECT * FROM voitre WHERE ('nom' LIKE '%".$_GET['search']."%')";
        $result = $pdo->query($query);

        while ($donnees = $result->fetch()) { ?>
            </br> <?php echo $donnees['nom']; ?>
            a pourcouru <?php echo $donnees['nb_km']; ?>
            et date de <?php echo $donnees['annee_sortie']; ?> </br> </br> <?php
        
        }
    }
}
?>