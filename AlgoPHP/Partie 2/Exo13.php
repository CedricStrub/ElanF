<h1>Exercice 13</h1>

<p>Créer  une  classe  Voiture  possédant  les  propriétés  suivantes: <br>
marque,  modèle,  nbPorteset vitesseActuelleainsi que les méthodes demarrer( ), <br>
accelerer( )et stopper( )en plus des  accesseurs  (get)  et  mutateurs  (set)  traditionnels. <br>
La  vitesse  initiale  de  chaque  véhicule instancié est de 0. Une méthode personnalisée <br>
pourra afficher toutes les informations d’un véhicule. <br>
<br>
v1 ➔"Peugeot","408",5<br>
v2 ➔"Citroën","C4",3<br>
<br>
Coderl’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests  <br>
pour  vérifier  la  cohérence  de  la  classe Voiture. Vous  devez  afficher  les  tests  et  les éléments suivants:</p>

<h2>Résultat</h2>

<?php



class Voiture
{
    private $marque;
    private $modèle;
    private $nbPortes;
    private $vitesseActuelle;


    function __construct(string $marque,string $modèle,int $nbPortes){
        $this->marque = $marque;
        $this->modèle = $modèle;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
    }
    

    function demarrer(){
        if($this->vitesseActuelle == 0){
            echo "Le véhicule".$this->marque.$this->modèle."démarre";
            $this->vitesseActuelle = 1;
        }elseif($this->vitesseActuelle == 1){
            echo "Le véhicule".$this->marque.$this->modèle."est déjà démarré";
        }else{
            echo "Le véhicule".$this->marque.$this->modèle."roule il est inutile de le démarré";
        }
    }

    function accelerer($vitesse){
        if($this->vitesseActuelle == 1){
            $this->vitesseActuelle = $vitesse;
            echo "Le véhicule".$this->marque.$this->modèle."accélère de ".$vitesse." km / h";
        }elseif($this->vitesseActuelle == 0){
            echo "Pour accélerer, il faut démarrer le véhicule ".$this->marque." ".$this->modèle." !";
        }else{
            echo "Le véhicule".$this->marque.$this->modèle."accélère de ".$vitesse." km / h";
            $this->vitesseActuelle = $this->vitesseActuelle + $vitesse;
        }
    }

    function ralentir($vitesse){
        if($this->vitesseActuelle == 1){
            echo "Pour ralentir, il faudrais déjà que le véhicule ".$this->marque." ".$this->modèle." roule !";
        }elseif($this->vitesseActuelle == 0){
            echo "Pour ralentir, il faudrais déjà que le véhicule ".$this->marque." ".$this->modèle." sois démarré !";
        }elseif($this->vitesseActuelle < $vitesse){
            echo "Le véhicule".$this->marque.$this->modèle."ne peut ralentir que de ".$this->vitesseActuelle." km / h il sera alors a l'arrêt";
            $this->vitesseActuelle = 1;
        }
        else{
            echo "Le véhicule".$this->marque.$this->modèle."ralentis de ".$vitesse." km / h";
            $this->vitesseActuelle = $this->vitesseActuelle - $vitesse;
        }
        
    }

    function stopper(){
        if($this->vitesseActuelle == 0){
            echo "Le véhicule".$this->marque.$this->modèle."est déjà stoppé";
        }elseif($this->vitesseActuelle == 1){
            echo "Le véhicule".$this->marque.$this->modèle."est stoppé";
        }else{
            echo "Le véhicule".$this->marque.$this->modèle."dois dabbord ralentir avant de pouvoir stoppé";
        }
    }

    function getMarque(){
        return $this->marque;
    }

    function setMarque(string $marque){
        $this->marque = $marque;
    }


    function getModèle(){
        return $this->modèle;
    }

    function setModèle(string $modèle){
        $this->modèle = $modèle;
    }

    function getNbPortes(){
        return $this->nbPortes;
    }

    function setNbPortes(int $nbPortes){
        $this->nbPortes = $nbPortes;
    }

    function getVitesseActuelle(){
        return $this->vitesseActuelle;
    }

    function setVitesseActuelle(int $vitesseActuelle){
        $this->vitesseActuelle = $vitesseActuelle;
    }

    function getInfo($véhicule){
        echo "Info véhicule<br>";
        echo "***********************<br><br>";
        echo "Nom et Modèle du véhicule : ".$this->marque.$this->modèle.'<br>';
        if($this->vitesseActuelle >= 1){
            echo "Le véhicule ".$this->marque." est démarré";
        }else{
            echo "Le véhicule ".$this->marque." est a l'arrêt";
        }
        echo "Sa vitesse actuelle est de ".$this->vitesseActuelle." km / h";
    }

}

?>
