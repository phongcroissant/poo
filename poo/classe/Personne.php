<?php
class Personne {
    private string $nom;
    private array $prenom=[];
    // $dateNaissance est une référence sur un objet (instance) de la classe DateTime
    private DateTime $dateNaissance;

    /**
     * @param string $nom
     * @param array $prenom
     * @param string $dateNaissance
     */
    public function __construct(string $nom, string $prenom, string $dateNaissance)
    {
        $this->nom = strtoupper($nom);
        $this->prenom[] = ucfirst((strtolower($prenom)));
        $this->dateNaissance =DateTime::createFromFormat("d/m/Y",$dateNaissance);
    }
    public function getIdentiteCourante() : string {
        return ucfirst($this->prenom[0]." ".$this->nom);
    }
    public function ajouterPrenom (string $prenom):bool {
        if(count($this->prenom)==3) {
            return false;
        }
        $this->prenom[]=$prenom;
        return true;
    }
    public function getIdentiteAdministrative():string {
    $prenoms=implode(" ",$this->prenom);
    return $prenoms." ".$this->nom;
    }
    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        $prenoms=implode(" ",$this->prenom);
        $prenoms=ucwords(strtolower($prenoms));
        return "Nom : ". $this->nom.PHP_EOL."Prenom(s) : ".$prenoms.PHP_EOL."Date de naissance : ";
    }
    public function getAge():int {
        $now=new DateTime();
        $interval=$this->dateNaissance->diff($now);
        return $interval->y;
    }
    public function getDateNaissance():DateTime {
        return $this->dateNaissance;
    }

}