<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Banco La Campiña</title>
	</head>
	<body>
		<?php
			//establezco conexion
			require 'conexion.php';

			//obtengo el id del registro que quiero eliminar
			$id_cliente = $_GET['id_cliente'];
	
			//se prepara la sentencia sql
			$sql = "DELETE FROM cliente WHERE id_cliente=$id_cliente";
	
			//se ejecuta la sentencia y se guarda el resultado en $resultado
			$resultado = $mysqli->query($sql);

			//se prepara la sentencia sql
			$sql = "DELETE FROM cuenta WHERE id_cliente=$id_cliente";
	
			//se ejecuta la sentencia y se guarda el resultado en $resultado
			$resultado = $mysqli->query($sql);
	
			if($resultado > 0){
				?>
				<div class="alert alert-primary" role="alert">
					<p>Registro eliminado</p>
				</div>
				<?php
			} else {
				echo "<p>Hubo un error al eliminar el registro</p>";
			}
			echo "<p><a href='index.php'><button type='button' class='btn btn-primary'>Volver</button></a></p>";
		?>

	</body>
</html>