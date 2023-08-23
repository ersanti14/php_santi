<?php
class persona{

    public $intdpi;
    public $srtnombre;
    public $intedad;
    
    function __construct(int $dpi, string $nombre, int $edad)
    {
        $this-> intdpi = $dpi;
        $this-> srtnombre = $nombre;
        $this-> intedad = $edad;
    }

    public function getDatosPersonales(){

        $datos="
            <h1> DATOS PERONALES</h1>
            <br>
            DPI: {$this->intdpi} <br>
            NOMBRE: {$this->srtnombre} <br>
            EDAD: {$this->intedad} <br>
        ";
        return $datos;
    }

}


?>