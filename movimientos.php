<?php
    //establezco conexion
    require 'conexion.php';
    $id_cuenta = $_GET['id_cuenta'];

    //preparo una sentencia para obtener los datos que quiero de la bd
    $sql = "SELECT * FROM operacion WHERE id_cuenta=$id_cuenta";

    //la ejecuto y guardo el resultado en $resultado
    $resultado = $mysqli->query($sql);

    echo $id_cuenta;
    
?>

