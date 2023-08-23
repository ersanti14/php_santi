<?php

class empleado extends persona{

    public $strpuesto;

    public function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi,$nombre,$edad);
    }

    public function setPuesto( string $puesto){
        $this->strpuesto = $puesto;
    }
    public function getPuesto(){
        return $this-> strpuesto;
    }

}   