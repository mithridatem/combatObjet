<?php
    include './Personnage.php';
    include './Combat.php';
    $perso1 = new Personnage('Gandalf', 3, 6, 10);
    $perso2 = new Personnage('Goku', 5, 5, 10);
    $combat = new Combat(20, $perso1, $perso2);
    echo "Le gagnant est : ".$combat->lancerPartie();
?>