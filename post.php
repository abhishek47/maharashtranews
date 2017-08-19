<?php

require_once 'bootstrap.php';

if(isset($_POST['title']))
{
	$title = trim($_POST['title']);
	$category = trim($_POST['category']);
	$body =  $_POST['body'];

	$postQuery = $db->prepare('INSERT INTO articles (title, body, category) VALUES (:title, :body, :category)');
	$postQuery->execute(['title' => $title, 'body' => $body, 'category' => $category]);

}




include 'views/newpost.view.php';