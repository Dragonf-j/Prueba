<?php require_once('fTabla.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Biblioteca</title>
</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1>Biblioteca</H1>
					<H2>Tema 05 Modelo vista controlador</H2>
				</hgroup>
		</header>
		<section>
			<article>
				<div id="myModal" class="modal fade" role="dialog">

				    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
					    <div class="modal-header">
					        <h4 class="modal-title">Gestión Libros</h4>
					    </div>
				      	<div class="modal-body">
							<div class="form-group">
								<label for="DNI">DNI </label>
								<input type="text" class="form-control" name="DNI" />
							</div>
							<div class="form-group">
								<label for="Nombre">Nombre </label>
								<input type="text" class="form-control" name="Nombre" size="10" />
							</div>
							<div class="form-group">
								<label for="Edad">Edad </label>
								<input type="text" class="form-control" name="Edad" />
							</div>
							<div class="form-group">
								<label for="puesto">Puesto </label>
								<input type="text" class="form-control" name="puesto" size="10" />
							</div>
							<div class="form-group">
								<label for="Antiguedad">Antiguedad </label>
								<input type="text" class="form-control" name="Antiguedad" size="10" />
							</div>
							<div class="form-group">
								<label for="Salario">Salario </label>
								<input type="text" class="form-control" name="Salario" size="10" />
							</div>									
					    </div>
					    <div class="modal-footer">
					    <div class="btn-group" role="group" aria-label="...">
						    <input type="submit" class="btn btn-default" value="Añadir" name="anadir" />
						    <input type="submit" class="btn btn-default" value="Actualizar" name="anadir" />
						    <input type="submit" class="btn btn-default" value="Suprimir" name="suprimir" />
						</div>
					    </div>
					</form>
				    </div>
				<!-- Fin del Modal -->
				<?php 
					mostrar($emp);

				?>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 20/21</p>
		</footer>
	</div>
</body>
</html>