<?php
    //establezco conexion
    require 'conexion.php';
    $id_cuenta = $_GET['id_cuenta'];
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
                    Ingresar
                </h2>
			</div>
            <br>
			
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form action="ingresar2.php" id="registro" name="registro" autocomplete="off" method="post">
						<div class="form-group">
							<!-- Saldo -->
							<label for="formControlInput" class="form-label">Cantidad(€)</label>
							<input type="number" class="form-control" id="formControlInput" name="cantidad" placeholder="Introduce el saldo de la cuenta" min="1" required>
                            <input type="hidden" class="form-control" id="formControlInput" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
						</div>
                        <br>
							
						<div class="form-group">
							<!-- Añadir -->
							<a href="ingresar2.php"><button type="submit" class="btn btn-primary">Añadir</button></a>
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