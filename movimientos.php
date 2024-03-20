<?php
    //establezco conexion
    require 'conexion.php';
    $id_cuenta = $_GET['id_cuenta'];
    $nombre_cliente = $_GET['nombre'];

    //preparo una sentencia para obtener los datos que quiero de la bd
    $sql = "SELECT * FROM operacion WHERE id_cuenta=$id_cuenta";

    //la ejecuto y guardo el resultado en $resultado
    $resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/jquery.dataTables.min.js" ></script>
</head>
<body>
		<div class="container">
			<div class="row">
				<h1>Banco La Campiña</h1>
			</div>
			<br>

            <!-- Titulo con cliente en uso-->
            <div class="row">
				<h3>Movimientos de <strong><?php echo $nombre_cliente ?></strong></h3>
			</div>
			<br>
			<br>
			
			<table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
						<th>Cantidad</th>
						<th>Tipo</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					//Insertar los datos en la tabla recorriendo el array
						while($fila = $resultado->fetch_assoc()){
							echo "<tr>";
								echo "<td>$fila[cantidad]</td>";
								echo "<td>$fila[tipo]</td>";
						}
					?>
				</tbody>
			</table>
            <br>
            <br>
            <div>
                <a href="hacermovimiento.php"><button type="button" class="btn btn-success">Hacer movimiento</button></a>
                <a href="index.php"><button type="button" class="btn btn-primary">Volver</button></a>
            </div>

			<?php
				//cerramos la conexion con la base de datos
				$mysqli->close();
			?>
		</div>
</body>
</html>
