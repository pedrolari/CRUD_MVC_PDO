<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Proyecto 1 | Consultar y listar con Ajax</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body data-urlbase="<?= URL::base()?>">
	<div class="container">
		<div class="card mt-5">
			<div class="card-header bg-dark text-white">
				<h5>Proyecto1</h5>
			</div>
			<div class="card-body">
				<div class="btn-group">
					<a href="<?=URL::to("crearusuario")?>" class="btn btn-primary">Crear Usuario</a>
				</div>
				<hr>
				<h4 class="card-title mb4">Listar Usuarios con Ajax</h4>
				<table class="table table-condensed table-hover table-striped" width="100%" id="tablaListaUsuarios">
					<thead class="bg-dark text-white">
						<tr>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>Edad</th>
							<th>Email</th>
							<th>Teléfono</th>
							<th>Fecha Alta</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="7">Consultando...</td>
						</tr>
					</tbody>
				</table> 	
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/ea4e6c8472.js" crossorigin="anonymous"></script>
	<script src="<?=URL::to("assets/js/global/helperform.js")?>" type="text/javascript"></script>
	<script src="<?=URL::to("assets/js/global/rutas.api.js")?>" type="text/javascript"></script>
	<script src="<?=URL::to("assets/js/global/app.global.js")?>" type="text/javascript"></script>
	<script src="<?=URL::to("assets/js/modulos/lista.usuarios.js")?>" type="text/javascript"></script>
</body>
</html>