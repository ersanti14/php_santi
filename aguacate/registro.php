<?php
require_once("cliente.php");
require_once("carro.php");
require_once("conexion.php");
require_once("aguacate.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking | Aguacate</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" href="imagenes/2503796.png">
</head>

<body>
    <img class="fondo" src="imagenes/abstract-blur-car-parking-in-shopping-mall-free-photo.jpg" alt="">
    <header>
        <nav>
            <div class="aguacate">
                <div class="back">
                    <a class="atras" href="inicioAguacate.html"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="32" height="32" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l14 0"></path>
                            <path d="M5 12l6 6"></path>
                            <path d="M5 12l6 -6"></path>
                        </svg>Back</a>
                </div>
                <img class="icont" src="imagenes/2503796.png" alt="">
                <h1 class="titulo">PARQUEADERO AGUACATE</h1>
            </div>
        </nav>
    </header>
    <div class="mensajeCone">
        <?php
        $conexionObj = new ConePDO();
        $conexion = $conexionObj->getConexion();
        ?>
    </div>
    <section class="formulario">
        <div class="formu">
            <h2>Registar Vehiculo</h2>
            <form method="post" action="">
                <fieldset>
                    <label for="">Nombre:</label>
                    <input type="text" name="nom" placeholder="Ingrese su nombre">
                    <label for="">Documento:</label>
                    <input type="number" name="doc" placeholder="Ingrese su Documento">
                    <label for="">Placa:</label>
                    <input type="text" name="placa" placeholder="Placa del Vehiculo">
                    <label for="">Marca:</label>
                    <input type="text" name="marca" placeholder="Marca del Vehiculo">
                    <label for="">Color:</label>
                    <input type="text" name="color" placeholder="Color del Vehiculo">
                    <input type="submit" name="btn1" value="REGISTRAR">
                </fieldset>
            </form>
        </div>

    </section>
</body>
<?php

    if (isset($_POST['btn1'])) {
        $nombre = $_POST['nom'];
        $documento = $_POST['doc'];
        $placa = $_POST['placa'];
        $marca = $_POST['marca'];
        $color = $_POST['color'];

        $cliente = new Cliente($conexion);
        $cliente->intdpi = $documento;
        $cliente->srtnombre = $nombre;
        $cliente->nuevoCliente();

        $id_cliente = $cliente->getLastInsertedId();

        $carro = new Carro($conexion, $documento, $nombre, $color, $marca, $placa, $id_cliente);
        $carro->srtcolor = $color;
        $carro->srtplaca = $placa;
        $carro->srtmarca = $marca;
        $carro->nuevoCarro();

        $id_autos = $carro->getLastInsertedId();


        $id_Puesto = $aguacate -> getLastInserteId();

        
            $piso = 1; 
            $precio = 200;  
            $precioTotal = 0; 
            $horas = 0; 
            $id_Puesto =5;
            
            $aguacate = new Aguacate($conexion, $documento, $nombre, $color, $marca, $placa, $id_cliente, $id_autos, $id_Puesto, $horas, $piso, $precio, $precioTotal, "", "00:00:00");
            

            $fechaHoraEntradaArray = $aguacate->fechaIngreso();
            $fechaHoraEntrada = $fechaHoraEntradaArray['fecha'] . ' ' . $fechaHoraEntradaArray['hora'];
            

            $aguacate->fechaHoraEntrada = $fechaHoraEntrada;
            
            $aguacate->nuevoParqueo();
        }
?>
</html> <!-- <script type="text/javascript">
    window.alert('Usuario registrado con exito...')
</script> -->
