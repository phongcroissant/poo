<?php

// Définition de la classe
class Rectangle {
    // Attribut
    private int $longueur;
    private int $largeur;
    private string $symbole;
    private string $couleur;
    // Interface de la classe

    // Constructeur de la classe
    /**
     * @param int $longueur
     * @param int $largeur
     * @param string $couleur
     */
    public function __construct(int $longueur, int $largeur, string $couleur, string $symbole)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->couleur = $couleur;
        $this->symbole = $symbole;
    }

    /**
     * @param int $longueur
     * @param int $largeur
     */


    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return "Longueur : ".$this->longueur.PHP_EOL."Largeur : ".$this->largeur;
    }

    /**
     * @return int
     */
    public function getLongueur(): int
    {
        return $this->longueur;
    }

    /**
     * @param int $longueur
     */
    public function setLongueur(int $longueur): void
    {
        $this->longueur = $longueur;
    }

    /**
     * @return int
     */
    public function getLargeur(): int
    {
        return $this->largeur;
    }

    /**
     * @param int $largeur
     */
    public function setLargeur(int $largeur): void
    {
        $this->largeur = $largeur;
    }
    public function calculerSurface():int {
        return $this->largeur*$this->longueur;
    }

    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * @return string
     */
    public function getSymbole(): string
    {
        return $this->symbole;
    }

    /**
     * @param string $symbole
     */
    public function setSymbole(string $symbole): void
    {
        $this->symbole = $symbole;
    }

    /**
     * @param string $couleur
     */
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    public function drawRectangle (): string {
        $rectangle="";
        for ($i=0;$i<$this->largeur;$i++){
            for ($j=0;$j<$this->longueur;$j++) {
                $rectangle.=$this->symbole;
            }
            $rectangle.=PHP_EOL;
        }
        return $rectangle;
    }
    public function drawRectangle2():string {
        $ligne=str_repeat($this->symbole,$this->longueur).PHP_EOL;
        $rectangle=str_repeat($ligne,$this->largeur);
        return $rectangle;
    }
}