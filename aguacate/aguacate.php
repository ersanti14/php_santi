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

        function __construct($conexion, $documento, $nombre, $color, $marca, $placa, $id_cliente, $id_autos, $horas, $piso, $precio, $precioTotal, $fechaHoraEntrada, $fechaHoraSalida, $puestoNumero)
        {
            parent::__construct($conexion, $documento, $nombre, $color, $marca, $placa, $id_cliente);

            $this->piso = $piso;
            $this->horas = $horas;
            $this->precio = $precio;
            $this->precioTotal = $precioTotal;
            $this->intIdAuto = $id_autos;
            $this->intIdPuesto = $puestoNumero;
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
        
        /* public function obtenerPuestoNumero()
        {
            $sql = "SELECT puestos FROM puestos WHERE id = :id_puesto";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(":id_puesto", $this->intIdPuesto);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        
            if ($resultado !== false) {
                return $resultado['puestos'];
            } else {
                return null;
            }
        } */


            public function marcarPuestoActivo()
            {
                $sqlUpdate = "UPDATE puestos SET estado = 1 WHERE puestos = :puestonumero";
                $stmtUpdate = $this->conexion->prepare($sqlUpdate);
                $stmtUpdate->bindParam(":puestonumero", $this->piso);

                if ($stmtUpdate->execute()) {
                    echo "Puesto marcado como activo.";
                } else {
                    echo "Error al marcar el puesto como activo.";
                }
            }   


        public function nuevoParqueo()
        {
            if ($this->intIdPuesto && $this->intIdAuto && $this-> fechaHoraEntrada && $this->fechaHoraSalida) {
                $fechaHoraEntradaArray = $this->fechaIngreso(); 
                $fechaHoraEntrada = $fechaHoraEntradaArray['fecha'] . ' ' . $fechaHoraEntradaArray['hora'];
    
                $fechaHoraSalida = "00:00:00";
    
                /* $this->intIdPuesto = $this->obtenerIdPiso(); */
    
                $sql = "INSERT INTO parqueo(id_piso, idAuto, fechaIngreso, fechaSalida) VALUES (:piso, :idauto, :horaEntra, :horaSali)";
                $stmt = $this->conexion->prepare($sql);
                $stmt->bindParam(":piso", $this->intIdPuesto);
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