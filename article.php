<?php

require_once 'bootstrap.php';


if(!isset($_GET['id']))
{
	header('Location: index.php');
}

$id = $_GET['id'];


$articleQuery = $db->prepare('SELECT * FROM articles WHERE id=:id LIMIT 1');
$articleQuery->execute(['id' => $id]);

$article = $articleQuery->fetch(PDO::FETCH_OBJ);





include 'views/article.view.php';
