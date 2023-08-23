<?php

class operaciones{

    public $cantidadUno;

    public $cantidadDos;

    public $resultado=0;

    //definicion del metodo construccion 

    function __construct(int $cant1, int $cant2)
    {
        $this -> cantidadUno = $cant1;
        $this -> cantidadDos = $cant2;
    }

        public function suma(){

        $this -> resultado = $this->cantidadUno + $this->cantidadDos;

        }

    }

