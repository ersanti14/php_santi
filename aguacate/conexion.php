
<?php
class ConePDO {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "aguacate";
    private $conexion;

    public function __construct() {
        try {
            $this->conexion = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa";
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function cerrarConexion() {
        $this->conexion = null;
    }
}
?>