<?php
class Personnage{
    private ?string $nom;
    private ?int $force;
    private ?int $defense;
    private ?int $vie;
    public function __construct(?string $nom, ?int $force, ?int $defense, ?int $vie){
        $this->nom = $nom;
        $this->force = $force;
        $this->defense = $defense;
        $this->vie = $vie;
    }
    public function getNom():?string{
        return $this->nom;
    }
    public function setNom(?string $nom):void{
        $this->nom = $nom;
    }
    public function getForce():?int{
        return $this->force;
    }
    public function setForce(?int $force):void{
        $this->force = $force;
    }
    public function getDefense():?int{
        return $this->defense;
    }
    public function setDefense(?int $defense):void{
        $this->defense = $defense;
    }
    public function getVie():?int{
        return $this->vie;
    }
    public function setVie(?int $vie):void{
        $this->vie = $vie;
    }
    public function attaque(Personnage $rival):void{
        if($this->force-$rival->defense>0){
            $rival->vie -= $this->force-$rival->defense;
        }
    }
}
?>