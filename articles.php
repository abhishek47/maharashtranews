<?php

require_once 'bootstrap.php';

if(isset($_GET['q']))
{

	$articlesQuery = $db->prepare('SELECT * FROM articles WHERE title LIKE %:q% ORDER BY created_at DESC');
	$articlesQuery->execute(['q' => $_GET['q']]);



} else {	
	
	if(isset($_GET['category']))
	{
		
	$articlesQuery = $db->prepare('SELECT * FROM articles WHERE category=:category ORDER BY created_at DESC');
	$articlesQuery->execute(['category' => $_GET['category']]);

	} else {
	   
	   $articlesQuery = $db->prepare('SELECT * FROM articles ORDER BY created_at DESC');
	 
	   $articlesQuery->execute();
	}

}



$articles = $articlesQuery->rowCount() ? $articlesQuery->fetchAll(PDO::FETCH_OBJ) : []; 



include 'views/articles.view.php';
