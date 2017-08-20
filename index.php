<?php

require_once 'bootstrap.php';

$articlesQuery = $db->prepare('SELECT * FROM articles ORDER BY created_at DESC');

$articlesQuery->execute();

$articles = $articlesQuery->rowCount() ? $articlesQuery->fetchAll(PDO::FETCH_OBJ) : []; 

if($articles)
{
	$trending = $articles[0]->title;
} else {
	$trending = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.";
}




include 'views/index.view.php';
