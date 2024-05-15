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
                    Ingreso de nueva cuenta
                    <br>
                    Propietario: <?php echo $fila['nombre'] ?>
                </h2>
			</div>
            <br>
			
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form action="añadircuenta2.php" id="registro" name="registro" autocomplete="off" method="post">
						<div class="form-group">
							<!-- Saldo -->
							<label for="formControlInput" class="form-label">Saldo</label>
							<input type="number" class="form-control" id="formControlInput" name="saldo" placeholder="Introduce el saldo de la cuenta" required>
                            <input type="hidden" class="form-control" id="formControlInput" name="id_cliente" value="<?php echo $id_cliente ?>">
						</div>
                        <br>

                        <div class="form-group">
							<!-- Iban -->
							<label for="formControlInput" class="form-label">Iban</label>
							<input type="number" class="form-control" id="formControlInput" name="iban" placeholder="Introduce el iban de la cuenta" min="0" required>
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