<?php
require_once("cliente.php");
require_once("conexion.php");

class Carro extends Cliente {

    protected $fltcarro;
    public $srtcolor;
    public $srtplaca;
    public $srtmarca;
    public $intIdCliente;

    public function __construct($conexion, $documento, $nombre, $color, $marca, $placa, $id_cliente)
    {
        parent::__construct($conexion, $documento, $nombre);

        $this->srtcolor = $color;
        $this->srtplaca = $placa;
        $this->srtmarca = $marca;
        $this->intIdCliente = $id_cliente;
    }

    public function nuevoCarro() {
        if ($this->srtcolor && $this->srtplaca && $this->srtmarca) {
            $sql = "INSERT INTO autos (color, placa, marca,idCliente) VALUES (:color, :placa, :marca, :idCliente)";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(":color", $this->srtcolor);
            $stmt->bindParam(":placa", $this->srtplaca);
            $stmt->bindParam(":marca", $this->srtmarca);
            $stmt->bindParam(":idCliente", $this->intIdCliente);
            $stmt->execute();
        } else {
            echo "Color, placa y marca son obligatorios para insertar un nuevo carro.";
        }
    }
}



/* $conexionObj = new ConexionPDO();
$conexion = $conexionObj->getConexion();

$carro = new Carro($conexion, "123456789", "Juan Pérez", "Rojo", "Toyota", "ABC123");
$carro->insertCarro(); */

/* 
    if(isset($_POST['btn1'])) {
        $placa = $_POST['nom'];
        $marca = $_POST['doc'];
        $color = $_POST['doc'];
    
        $fltcarro = new carro($conexion, $documento, $nombre, $placa, $marca, $color);
    
        $fltcarro->insertCarro();
    }
 */
?>
