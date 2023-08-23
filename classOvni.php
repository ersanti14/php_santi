<?php

class ovni{
    private $gris;
    private $redondo;
    private $azul;

    function __construct($color1, $tamaño, $color3){
        $this->gris = $color1;
        $this->redondo = $tamaño;
        $this->azul = $color3;
    }

    public function volar() {
    echo " el color del ovni es ".$this->gris."<br>";

    }

    public function abducion(){
    echo " el tamaño del ovni volando es grande ".$this->redondo."<br>";
    }



}
