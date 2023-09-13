<?php

class Combat{
    private ?int $nbrTour;
    private Personnage $gagnant;
    private Personnage $perso1;
    private Personnage $perso2;
    public function __construct(?int $nbrTour, Personnage $perso1, Personnage $perso2){
        $this->nbrTour = $nbrTour;
        $this->perso1 = $perso1;
        $this->perso2 = $perso2;
        $this->gagnant = new Personnage(null, null, null, null);
    }
    public function lancerPartie(){
        while($this->nbrTour >0){
            $this->perso1->attaque($this->perso2);
            if($this->perso2->getVie()<=0){
                $this->gagnant->setNom($this->perso1->getNom());
                return $this->gagnant->getNom();
            }
            $this->perso2->attaque($this->perso1);
            if($this->perso1->getVie()<=0){
                $this->gagnant->setNom($this->perso2->getNom());
                return $this->gagnant->getNom();
            }
            $this->nbrTour--;
        }
    }
}
?>