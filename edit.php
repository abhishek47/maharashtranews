<?php 

require_once 'bootstrap.php ';

if(!isset($_GET['id']))
{
	header('Location: index.php');
}

try {

    $stmt = $db->prepare('SELECT * FROM articles WHERE id = :postID');
    $stmt->execute(array(':postID' => $_GET['id']));
    $row = $stmt->fetch(); 

} catch(PDOException $e) {
    echo $e->getMessage();
}


include 'views/editpost.view.php';

