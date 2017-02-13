<?php

class Math {

    //Déclaration des propriétés
    private $pi = 3.14;

    //Déclaration construct
    function __construct() {
        $this->pi = 3.14;
    }

    function calCirCerc($param) {
        $this->rayon = $param;
        $circ = $this->pi * $this->rayon * 2;
        return $circ;
    }

//     if(isset($_POST['volume'])){
//         $param0 = $_POST['nFigure'];
//         $param1 = $_POST['rFigure'];
//         $param2 = $_POST['hFigure'];
//        }
    
    function calVol($param0, $param1, $param2) {
        $this->figure = $param0;
        $this->rayon = $param1 * $param1;
        $this->hauteur = $param2;
        if ($this->figure == "cylindre") {
            $vol = $this->pi * $this->rayon * $this->hauteur;
        } else if ($this->figure == "cone") {
            $vol = ($this->pi * $this->rayon * $this->hauteur) / 3;
        }
        return round($vol, 2);
    }
    
}
