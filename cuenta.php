<?php
    //establezco conexion
    require 'conexion.php';
    $id_cliente = $_GET['id_cliente'];
    $nombre_cliente = $_GET['nombre'];

    //preparo una sentencia para obtener los datos que quiero de la bd
    $sql = "SELECT * FROM cuenta WHERE id_cliente=$id_cliente";

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

            <div class="row">
				<h3>Cuenta de <strong><?php echo $nombre_cliente ?></strong></h3>
			</div>
			<br>
			<br>

            <table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
						<th>Saldo</th>
						<th>Iban</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					//Insertar los datos en la tabla recorriendo el array
						while($fila = $resultado->fetch_assoc()){
							echo "<tr>";
								echo "<td>$fila[saldo]</a></td>";
								echo "<td>$fila[iban]</td>";
								echo "<td><a href='eliminar.php?id_cuenta=$fila[id_cuenta]'><button type='button' class='btn btn-danger'>Cerrar cuenta</button></td>";
						}
					?>
				</tbody>
			</table>

            <br>
			<br>
            <div>
				<!-- botones -->
				<a href="añadircuenta.php"><button type="button" class="btn btn-primary">Añadir cuenta</button></a>
				<?php
                echo "<a href='movimientos.php?id_cuenta=$fila[id_cuenta]'><button type='button' class='btn btn-primary'>Ver movimientos</button></a>"
				?>
                <a href="index.php"><button type="button" class="btn btn-primary">Volver</button></a>
			</div>
            
			<?php
				//para cerrar la conexion con la base de datos
				$mysqli->close();
			?>
		</div>
</body>
</html>
