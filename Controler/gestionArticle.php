<?php
session_start();


$id = $_SESSION["pseudo"];


if($type=$_GET['action']=='delete'){
    Article::delete($_GET['articleID']);
}

$Article = new Article();
$results = $Article->listArticleById($id);

include('./layout/layout.php');
