<?php

class usuarios{

    private $strnombre;
    private $stremail;
    private $strtipo;
    private $strclave;



    function __construct($nombre, $correo, $tipo) {
        $this->strnombre = $nombre;
        $this->stremail = $correo;
        $this->strtipo = $tipo;
        $this->strclave = rand(1,10000);
    }

    public function getNombre(){

        return $this-> strnombre;

    }
    public function ver_perfil(){

        echo "Los datos del usuario ".$this-> strnombre." son: <br>";
        echo " correo: ".$this->stremail."<br>";
        echo " Tipo de usuario: ".$this->strtipo."<br>";
        echo " clave: ".$this->strclave."<br>";
    }

public function cambiar_clave(){

    }
}

?>