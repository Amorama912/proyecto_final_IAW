<?php
    //establezco conexion
    require 'conexion.php';
    $id_cuenta = $_GET['id_cuenta'];

	//sentencia para traer id_cliente
    $sql = "SELECT * FROM cuenta WHERE id_cuenta LIKE $id_cuenta";
    $resultado2 = $mysqli->query($sql);
    $fila = $resultado2->fetch_assoc();

	$id_cliente = $fila['id_cliente'];

	echo $id_cliente;
	//sentencia para obtener todas las cuentas del cliente
    //$sql = "SELECT * FROM cuenta WHERE id_cliente LIKE $id_cliente";
    //$resultado = $mysqli->query($sql);
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
                    Traspasar
                </h2>
			</div>
            <br>
			
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form action="traspasar2.php" id="registro" name="registro" autocomplete="off" method="post">
						<div class="form-group">
							<!-- Saldo -->
							<label for="formControlInput" class="form-label">Cantidad(€)</label>
							<input type="number" class="form-control" id="formControlInput" name="cantidad" placeholder="Introduce el saldo de la cuenta" min="1" required>
                            <input type="hidden" class="form-control" id="formControlInput" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
						</div>
                        <br>

                        <div class="form-group">
							<!-- Cuentas Propias -->
							<select name="cuentas">
							<?php
								while ($fila = $resultado->fetch_assoc()) {
                                	echo "<option value='$fila['id_cuenta']'></option>";
								};
							?>
                            </select>
						</div>
                        <br>
							
						<div class="form-group">
							<!-- Traspaso -->
							<button type="submit" class="btn btn-primary">Traspasar</button>
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