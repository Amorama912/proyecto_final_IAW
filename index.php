<?php
    //establezco conexion
    require 'conexion.php';

    //preparo una sentencia para obtener los datos que quiero de la bd
    $sql = "SELECT * FROM cliente";

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
				<!-- Registrar -->
				<a href="añadircliente.php"><button type="button" class="btn btn-primary">Añadir cliente</button></a>
			</div>
			<br>
			<br>
			
			<table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Telefono</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					//Insertar los datos en la tabla recorriendo el array
						while($fila = $resultado->fetch_assoc()){
							echo "<tr>";
								echo "<td><a href='cuenta.php?id_cliente=$fila[id_cliente]&&nombre=$fila[nombre]'>$fila[nombre]</a></td>";
								echo "<td>$fila[telefono]</td>";
								echo "<td><a href='eliminar.php?id=$fila[id_cliente]'><button type='button' class='btn btn-danger'>Eliminar cliente</button></td>";
						}
					?>
				</tbody>
			</table>
			<?php
				//cerramos la conexion con la base de datos
				$mysqli->close();
			?>
		</div>
</body>
</html>