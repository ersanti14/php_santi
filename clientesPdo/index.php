<?php

require_once ("clasess.php");
require_once ("cliente.php");
require_once ("empleado.php");

$objEmpleado = new Empleado(123,"santiago erazo",33);
$objEmpleado -> setPuesto(" Administrador");


echo $objEmpleado -> getDatosPersonales();
echo "Puesto:".$objEmpleado -> getPuesto();




$objCredito = new cliente(564,"anastacio machete sin punta",55);
$objCredito -> setcredito(" 1.000");


echo $objCredito -> getDatosPersonales();
echo "Total credito:".$objCredito -> getcredito();

class Parqueadero {
    protected $pisos = array();

    public function __construct() {
        // Inicializar los pisos con 10 lugares disponibles en cada uno
        for ($piso = 1; $piso <= 4; $piso++) {
            $this->pisos[$piso] = array_fill(1, 10, null);
        }
    }

    public function estacionarCarro($carro) {
        // Recorrer los pisos y lugares para encontrar un lugar disponible
        foreach ($this->pisos as $piso => $lugares) {
            foreach ($lugares as $lugar => $carroEstacionado) {
                if ($carroEstacionado === null) {
                    $this->pisos[$piso][$lugar] = $carro;
                    $carro->setPiso($piso);
                    $carro->setLugar($lugar);
                    return true; // Carro estacionado exitosamente
                }
            }
        }
        return false; // No se encontró lugar disponible
    }

    public function mostrarTicket($carro) {
        return $carro->getFichaParqueadero();
    }
}