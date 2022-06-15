<?php 
include_once ('config/connection.php')

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Prova php</title>
	 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
	<form method="POST">
			<h3>Dados</h3>
			<div>
				<label>Título</label>
				<input type="text" name="title">
			</div>
			<div>
				<label>Descrição</label>
				<textarea name="description">
					




				</textarea>
			</div>
			<div>
				<button type="submit">Enviar</button>
			</div>
		
	</form>


</body>
</html>