<?php 
$conectar = new PDO("mysql:dbname=atividade; host=localhost", "root", "");

$stmt = $conectar->prepare("INSERT INTO posts (title, description) VALUES(:TITLE, :DESCRIPTION)");

$title = $_POST['title'];
$description = $_POST['description'];

$stmt->bindParam(":TITLE",$title);
$stmt->bindParam(":DESCRIPTION",$description);

$stmt->execute();
 ?>