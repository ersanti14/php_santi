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
    public function getLastInsertedId() {
        return $this->conexion->lastInsertId();
    }
}

?>
