<?php 
include_once ('config/connection.php')

//$id = $_GET['id'];
$id = 1;

$stmt = $conectar->prepare('SELECT id, title,description FROM posts WHERE id = :id');

$stmt = execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
 </head>
 <body>
 <main >
            <div >
                <h1 >Editar Post</h1>
	</div>
</main>
<form action="atualiza-fim.php" method="posts" >
<?php foreach($results as $post): ?>
	<p><input type="hidden" value="<?= $post["id"] ?>" name="id"></p>
	<p><input type="text" value="<?= $post["title"] ?>" name="title"></p>
	<p><input type="text" value="<?= $post["description"] ?>" name="description"></p>
<?php endforeach; ?>
	<input type="submit" value="EDITAR">
</form>

 </body>
 </html>
 