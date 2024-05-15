<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Proyecto fila</title>
</head>

<body>
    <?php
    require 'conexion.php';

    //Obtengo los datos introducidos en el formulario anterior
    $cantidad = $_POST['cantidad'];
    $id_cuenta = $_POST['id_cuenta'];

    //Se prepara la sentencia SQL
    $sql = "INSERT INTO operacion (id_cuenta,cantidad,tipo) VALUES('$id_cuenta','$cantidad','ingreso')";

    //Se ejecuta la sentencia y se guarda el resultado en $resulado
    $resultado = $mysqli->query($sql);

    $sql = "UPDATE cuenta SET saldo=saldo+$cantidad WHERE id_cuenta = $id_cuenta";
    $resultado2 = $mysqli->query($sql);

    //Si se se han guardado los registros se vuelve al index
    if ($resultado > 0) {
        $mysqli->close();
        echo "<div class='alert alert-primary' role='alert'><p>Ingreso efectuado</p></div>";
        echo "<a href='index.php'>Regresar</a>";

        // Si no se ha guardado los registros mostramos un mensaje de error
    } else {
        $mysqli->close();
        echo "<div class='alert alert-danger' role='alert'>Ha habido un error al añadir la partida</div>";
        echo "<a href='index.php'>Regresar</a>";
    }

    ?>

</body>

</html>