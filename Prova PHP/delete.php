<?php 
include_once ('config/connection.php') 
$id = 1;
$stmt = $conectar->prepare("DELETE FROM posts WHERE id = ?");
$stmt->bind_param('i', $id);
$stmt->execute();
?>