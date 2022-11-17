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

$v1 = new Voiture("Peugeot","408","5");
$v2 = new Voiture("Citroën","C4","3");

echo $v1->demarrer();
echo $v1->accelerer(50);
echo $v2->demarrer();
echo $v2->stopper();
echo $v2->accelerer(20);
echo $v1->getVitesseActuelle();
echo $v2->getVitesseActuelle();
echo $v1->ralentir(20);
echo $v1->getVitesseActuelle();
echo "<br>";
echo '<table><tr><td>';
echo "Info véhicule 1<br>".$v1;
echo '</td><td>';
echo "Info véhicule 2<br>".$v2;
echo '</td></tr></table>';


class Voiture
{
    private $marque;
    private $modèle;
    private $nbPortes;
    private $vitesseActuelle;


    public function __construct(string $marque,string $modèle,int $nbPortes){
        $this->marque = $marque;
        $this->modèle = $modèle;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
    }
    

    public function demarrer(){
        if($this->vitesseActuelle == 0){
            echo "Le véhicule ".$this->marque." ".$this->modèle." démarre<br>";
            $this->vitesseActuelle = -1;
        }elseif($this->vitesseActuelle == -1){
            echo "Le véhicule ".$this->marque." ".$this->modèle." est déjà démarré<br>";
        }else{
            echo "Le véhicule ".$this->marque." ".$this->modèle." roule il est inutile de le démarré<br>";
        }
    }

    public function accelerer($vitesse){
        if($this->vitesseActuelle == -1){
            $this->vitesseActuelle = $vitesse;
            echo "Le véhicule ".$this->marque." ".$this->modèle." accélère de ".$vitesse." km / h<br>";
        }elseif($this->vitesseActuelle == 0){
            echo "Le véhicule ".$this->marque." ".$this->modèle." veut accelerer de ".$vitesse." km / h<br>";
            echo "Pour accélerer, il faut démarrer le véhicule ".$this->marque." ".$this->modèle." !<br>";
        }else{
            echo "Le véhicule ".$this->marque." ".$this->modèle." accélère de ".$vitesse." km / h<br>";
            $this->vitesseActuelle = $this->vitesseActuelle + $vitesse;
        }
    }

    public function ralentir($vitesse){
        if($this->vitesseActuelle == -1){
            echo "Pour ralentir, il faudrais déjà que le véhicule ".$this->marque." ".$this->modèle." roule !<br>";
        }elseif($this->vitesseActuelle == 0){
            echo "Pour ralentir, il faudrais déjà que le véhicule ".$this->marque." ".$this->modèle." sois démarré !<br>";
        }elseif($this->vitesseActuelle < $vitesse){
            echo "Le véhicule ".$this->marque." ".$this->modèle." ne peut ralentir que de ".$this->vitesseActuelle." km / h il sera alors a l'arrêt<br>";
            $this->vitesseActuelle = -1;
        }
        else{
            echo "Le véhicule ".$this->marque." ".$this->modèle." ralentis de ".$vitesse." km / h<br>";
            $this->vitesseActuelle = $this->vitesseActuelle - $vitesse;
        }
        
    }

    public function stopper(){
        if($this->vitesseActuelle == 0){
            echo "Le véhicule ".$this->marque." ".$this->modèle." est déjà stoppé<br>";
        }elseif($this->vitesseActuelle == -1){
            echo "Le véhicule ".$this->marque." ".$this->modèle." est stoppé<br>";
            $this->vitesseActuelle = 0;
        }else{
            echo "Le véhicule ".$this->marque." ".$this->modèle." dois dabbord ralentir avant de pouvoir stoppé<br>";
        }
    }

    public function getMarque(){
        return $this->marque;
    }

    public function setMarque(string $marque){
        $this->marque = $marque;
    }


    public function getModèle(){
        return $this->modèle;
    }

    public function setModèle(string $modèle){
        $this->modèle = $modèle;
    }

    public function getNbPortes(){
        return $this->nbPortes;
    }

    public function setNbPortes(int $nbPortes){
        $this->nbPortes = $nbPortes;
    }

    public function getVitesseActuelle(){
        echo "La vitesse du véhicule ".$this->marque." ".$this->modèle." est de : ".$this->vitesseActuelle." km / h<br>";
    }

    public function setVitesseActuelle(int $vitesseActuelle){
        $this->vitesseActuelle = $vitesseActuelle;
    }

    public function __toString()
    {
        $info = "************************************<br><br>".
                "Nom et Modèle du véhicule : ".$this->marque." ".$this->modèle.'<br>'.
                "Nombre de portes : ".$this->nbPortes."<br>";
        if($this->vitesseActuelle >= 1){
            $info = $info."Le véhicule ".$this->marque." est démarré<br>";
        }else{
            $info = $info."Le véhicule ".$this->marque." est a l'arrêt<br>";
        }
        $info = $info."Sa vitesse actuelle est de ".$this->vitesseActuelle." km / h<br><br>";
        return $info;
    }

}

?>
