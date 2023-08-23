<?php

class cliente extends persona{

    protected $fltcredito;

    public function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi,$nombre,$edad);
    }

    public function setcredito( string $credito){
        $this->fltcredito = $credito;
    }
    public function getcredito(){
        return $this-> fltcredito;
    }

}