<?php
    //establezco conexion
    require 'conexion.php';
    $id_cuenta = $_GET['id_cuenta'];
    echo $id_cuenta;
?>

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
		<div class="container">
            <div class="row">
				<h1>Banco La Campiña</h1>
			</div>
			<br>

			<div class="row">
				<h2>
                    Movimientos disponibles
                </h2>
			</div>
            <br>
			
            <!-- Creamos un bloque de 6/12 de anchura con un centrado automático para los botones -->
			<div class="d-grid gap-2 col-6 mx-auto">
                <a href="ingresar.php"><button class="btn btn-primary" type="button">Ingresar</button></a>
                <a href="retirar.php"><button class="btn btn-primary" type="button">Retirar</button></a>
                <a href="transferir.php"><button class="btn btn-primary" type="button">Transferir</button></a>
                <a href="transpaso.php"><button class="btn btn-primary" type="button">Transpaso</button></a>
            </div>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>	