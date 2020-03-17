<?php




if($type=$_GET['action']=='delete'){
    Article::deleteAdmin($_GET['id']);
}

$Article = new Article();
$results = $Article->listArticleAdmin();

include('./layout/layout.php');
