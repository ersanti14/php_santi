<?php

require_once("conexion.php");

class Cliente {
    protected $conexion; 

    public $intdpi;
    public $srtnombre;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function nuevoCliente() {
        if ($this->intdpi && $this->srtnombre) {
            $sql = "INSERT INTO clientes (cedula, nombre) VALUES (:doc, :nom)";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(":doc", $this->intdpi);
            $stmt->bindParam(":nom", $this->srtnombre);
            $stmt->execute();
        } else {
            echo "Documento y nombre son obligatorios para crear un nuevo cliente.";
        }
    }
}

/* $conexionObj = new ConexionPDO();
$conexion = $conexionObj->getConexion();

$cliente = new Cliente($conexion);
$cliente->intdpi = "123456789";
$cliente->srtnombre = "Juan Pérez";
$cliente->nuevoCliente(); */


/*  public function getFichaParqueadero(){

        $ficha="
            <h1> TIKED PARQUEADERO </h1>
            <br>
            ENTRADA: {$this->horaEntrada} <br>
            SALIDA: {$this->cone} <br>
            PRECIO: {$this->sumaPrecio()} <br>
            NOMBRE: {$this-> srtnombre} <br>
            DOCUMENTO: {$this-> intdpi} <br>
        ";
        return $ficha;
    }

} */

?>
