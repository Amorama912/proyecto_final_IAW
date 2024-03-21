<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Club Deportivo La Venta</title>
	</head>
	<body>
		<?php
			//establezco conexion
			require 'conexion.php';

			//obtengo los datos introducidos en el formulario
			$nombre = $_POST['nombre'];
			$telefono = $_POST['telefono'];
			
	
			//se prepara la sentencia sql para agregar los datos
			$sql = "INSERT INTO cliente (nombre, telefono) VALUES ('$nombre','$telefono')";
	
			//se ejecuta la sentencia y se guarda el resultado en $resultado
			$resultado = $mysqli->query($sql);

			//se comprueba si se han guardado datos en $resultado
			if($resultado > 0){
				?>
				<div class="alert alert-primary" role="alert">
					<p>Cliente agregado</p>
				</div>
				<?php
			} else {
				echo "<p>Hubo un error al añadir el registro</p>";
			}
			echo "<p><a href='index.php'><button type='button' class='btn btn-primary'>Volver</button></a></p>";
			
		?>

	</body>
</html>