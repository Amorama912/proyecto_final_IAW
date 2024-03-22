<?php
    //establezco conexion
	require 'conexion.php';

    $id_cliente = $_GET['id_cliente'];

    $sql = "SELECT * FROM cliente WHERE id_cliente=$id_cliente";
    $resultado = $mysqli->query($sql);

    //se extrae el registro. no se hace en bucle porque el resultado debe ser unico
    $fila = $resultado->fetch_assoc();
?>

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
		<div class="container">
            <div class="row">
				<h1>Banco La Campiña</h1>
			</div>
			<br>

			<div class="row">
				<h2>
                    Ingreso de nueva cuenta
                    <br>
                    Propietario: <?php echo $fila['nombre'] ?>
                </h2>
			</div>
            <br>
			
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form action="añadircliente2.php" id="registro" name="registro" autocomplete="off" method="post">
						<div class="form-group">
							<!-- Nombre -->
							<label for="formControlInput" class="form-label">Nombre</label>
							<input type="text" class="form-control" id="formControlInput" name="nombre" placeholder="Introduce el nombre" require>
                            <input type="hidden" class="form-control" id="formControlInput" name="id_cliente" value="<?php echo $id_cliente ?>">
							</label>
						</div>
                        <br>
						
						<div class="form-group">
							<!-- Saldo -->
							<label for="formControlInput" class="form-label">Saldo</label>
							<input type="number" class="form-control" id="formControlInput" name="saldo" placeholder="Introduce el saldo de la cuenta" require>
						</div>
                        <br>

                        <div class="form-group">
							<!-- Iban -->
							<label for="formControlInput" class="form-label">Iban</label>
							<input type="number" class="form-control" id="formControlInput" name="iban" placeholder="Introduce el iban de la cuenta" require>
						</div>
                        <br>
							
						<div class="form-group">
							<!-- Registrar -->
							<button type="submit" class="btn btn-primary">Registrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>	