<?php
require_once("cliente.php");
require_once("conexion.php");
require_once("carro.php");

class Aguacate extends Carro
{
    public $horas;
    public $piso;
    public $precio = 200;
    public $precioTotal = 0;
    public $intIdAuto;
    public $intIdPuesto;
    public $fechaHoraEntrada;
    public $fechaHoraSalida;

    function __construct($conexion, $documento, $nombre, $color, $marca, $placa, $id_cliente, $id_autos, $id_Puesto, $horas, $piso, $precio, $precioTotal, $fechaHoraEntrada, $fechaHoraSalida)
    {
        parent::__construct($conexion, $documento, $nombre, $color, $marca, $placa, $id_cliente);

        $this->piso = $piso;
        $this->horas = $horas;
        $this->precio = $precio;
        $this->precioTotal = $precioTotal;
        $this->intIdAuto = $id_autos;
        $this->intIdPuesto = $id_Puesto;
        $this->fechaHoraEntrada = $fechaHoraEntrada;
        $this->fechaHoraSalida = $fechaHoraSalida;
    }

    function fechaIngreso()
    {
        date_default_timezone_set('America/Bogota');
        $horaActual = date('H:i:s');
        $fechaActual = date('Y-m-d');
        return array('hora' => $horaActual, 'fecha' => $fechaActual);
    }

    public function nuevoParqueo()
    {
        if ($this->intIdPuesto && $this->intIdAuto && $this-> fechaHoraEntrada && $this->fechaHoraSalida) {
            $fechaHoraEntradaArray = $this->fechaIngreso(); 
            $fechaHoraEntrada = $fechaHoraEntradaArray['fecha'] . ' ' . $fechaHoraEntradaArray['hora'];

            $fechaHoraSalida = "00:00:00";

            $sql = "INSERT INTO parqueo(idPuesto, idAuto, fechaIngreso, fechaSalida) VALUES (:puesto, :idauto, :horaEntra, :horaSali)";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(":puesto", $this->intIdPuesto);
            $stmt->bindParam(":idauto", $this->intIdAuto);
            $stmt->bindParam(":horaEntra", $fechaHoraEntrada);
            $stmt->bindParam(":horaSali", $fechaHoraSalida);
            $stmt->execute();
        } else {
            echo "Datos insuficientes";
        }
    }
    public function getLastInsertedId() {
        return $this->conexion->lastInsertId();
    }

    public function pisoAuto(){
        
    }

    public function sumaPrecio()
    {
        $this->precioTotal = $this->precio * $this->horas;
        return $this->precioTotal;
    }
}







/* 
    public function getFichaParqueadero()
    {

        $ficha = "
            <h1> TIKED PARQUEADERO </h1>
            <br>
            ENTRADA: {$this->horaEntrada} <br>
            SALIDA: {$this->horaSalida} <br>
            PRECIO: {$this->sumaPrecio()} <br>
        ";
        return $ficha;
    }
}
 */