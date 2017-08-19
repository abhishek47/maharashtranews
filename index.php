<?php

require_once 'bootstrap.php';

$articlesQuery = $db->prepare('SELECT * FROM articles ORDER BY created_at DESC');

$articlesQuery->execute();

$articles = $articlesQuery->rowCount() ? $articlesQuery->fetchAll(PDO::FETCH_OBJ) : []; 

$trending = $articles[0]->title;


include 'views/index.view.php';
