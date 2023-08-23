<?php


/* class Aguacate {

    public $horaEntrada;
    public $horaSalida;
    public $horas;
    public $piso;
    public $puesto;
    public $precio = 200;
    public $precioTotal = 0;
    


    public function __construct($horaEntrada, $horaSalida,$piso, $precio, $precioTotal,$horas, $documento, $nombre)
    {
        parent::__construct( $horaEntrada, $horaSalida, $piso, $precio, $precioTotal,$horas);

        
    }

    function __construct(  string $horaEntrada,  string $horaSalida, string $piso, $precio, $precioTotal, $horas)
    {

        $this-> horaEntrada = $horaEntrada;
        $this-> horaSalida = $horaSalida;
        $this-> piso = $piso;
        $this-> horas = $horas;
        $this-> precio = $precio;
        $this ->precioTotal = $precioTotal;
    }
    

    public function sumaPrecio(){
        $this -> precioTotal = $this->precio * $this->horas;
        return $this -> precioTotal;
        }

    public function getFichaParqueadero(){

        $ficha="
            <h1> TIKED PARQUEADERO </h1>
            <br>
            ENTRADA: {$this->horaEntrada} <br>
            SALIDA: {$this->horaSalida} <br>
            PRECIO: {$this->sumaPrecio()} <br>
        ";
        return $ficha;
    }

} */


?>
