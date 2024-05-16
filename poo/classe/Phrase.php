<?php
class Phrase {
    private string $phrase;

    /**
     * @param string $phrase
     */
    public function __construct(string $phrase)
    {
        $this->phrase = $phrase;
    }

    public function ajouterPhrase(string $phrase):void {
        $this->phrase=$phrase;
    }

    public function getPhrase():string{
        return $this->phrase;
    }
    public function compterMots():int{
        return str_word_count($this->phrase);
    }
    public function compterCaracteresSansEspace():int {
        return strlen(str_replace(" ","",$this->phrase));
    }
    public function getMotParPositions(int $position):string {
        $mots=explode(" ",$this->phrase);
        if ($position<1 || $position>count($mots)) {
            return "Cette position n'existe pas";
        }
        return $mots[$position-1];
    }
    public function determinerTypePhrase():string{
        if(strpos($this->phrase,"!")) {
            return "Type : Exclamative";
        }elseif(strpos($this->phrase,"?")){
            return "Type : Interrogative";
        } else {
            return "Type : Déclarative";
        }
    }
    public function determinerNombreOccurenceMot(string $mot):string {
        return substr_count(strtolower($this->phrase),strtolower($mot));
    }
    public function remplacerMotParMot(string $mot1,string $mot2):string {
        return str_replace($mot1,$mot2, $this->phrase);
    }
    public function reformaterPhrase(){
        if (str_ends_with($this->phrase,"")) {
            return ucfirst($this->phrase.=".");
        }else {
            return $this->phrase;
        }
    }
}