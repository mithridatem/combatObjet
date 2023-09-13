<?php
    include './Personnage.php';
    include './Combat.php';
    $perso1 = new Personnage('Gandalf', 2, 4, 10);
    $perso2 = new Personnage('Goku', 8, 7, 10);
    $combat = new Combat(20, $perso1, $perso2);
    echo "Le gagnant est : ".$combat->lancerPartie();
?>