<?php
require_once("cliente.php");
require_once("carro.php");
require_once("conexion.php");
require_once("aguacate.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA AGUACATE</title>
    <link rel="stylesheet" href="css/style3.css">

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
                <h1 class="titulo">REGISTROS AGUACATE</h1>
            </div>
        </nav>
    </header>
    <?php
    try {
        $conexionObj = new ConePDO();
        $conexion = $conexionObj->getConexion();

        $sql = "SELECT c.id_clientes, c.cedula, c.nombre, a.placa, a.marca, a.color, p.fechaIngreso, f.puestos, z.piso FROM clientes c
        INNER JOIN autos a ON c.id_clientes = a.idCliente
        INNER JOIN parqueo p ON a.id_autos = p.idAuto
        inner join puestos f  on p.idPuesto = f.id
        inner join pisos z  on  f.piso = z.idPiso";
        $resultado = $conexion->prepare($sql);
        $resultado->execute();
    } catch (PDOException $e) {
        die('ALERTA DATOS NO ENCONTRADOS' . $e->getMessage());
    }
    ?>
    <div class="table-1">
        <table class="n1">
            <thead>
                <tr>
                    <th class="t1">N°</th>
                    <th class="t1">DOCUMENTO</th>
                    <th class="t1">NOMBRE</th>
                    <th class="t1">PLACA</th>
                    <th class="t1">MARCA</th>
                    <th class="t1">COLOR</th>
                    <th class="t1">HORA ENTRADA</th>
                    <th class="t1">PISO</th>
                    <th class="t1">PUESTO</th>
                    <th class="t1">ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td class="t2"><?php echo $consulta['id_clientes'] ?></td>
                        <td class="t3"><?php echo $consulta['cedula'] ?></td>
                        <td class="t2"><?php echo $consulta['nombre'] ?></td>
                        <td class="t3"><?php echo $consulta['placa'] ?></td>
                        <td class="t2"><?php echo $consulta['marca'] ?></td>
                        <td class="t3"><?php echo $consulta['color'] ?></td>
                        <td class="t2"><?php echo $consulta['fechaIngreso'] ?></td>
                        <td class="t3"><?php echo $consulta['piso'] ?></td>
                        <td class="t2"><?php echo $consulta['puestos'] ?></td>
                        <td class="t3"><a href="comfirma.php?codigo=<?php echo $consulta['id_clientes'] ?>"><img src="imagenes/trash-can-solid.svg" alt="" width="30px"></a></td>
                    </tr>
            </tbody>

        <?php
                }

        ?>
    </div>

</body>

</html>