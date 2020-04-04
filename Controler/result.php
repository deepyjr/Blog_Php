<?php

if(isset($_GET['motclef'])){
    
    $motclef = $_GET['motclef'];
    
    $q = array('motclef'=>$motclef.'%');

    $sql = Article::chercher($motclef);
    

}




include('./layout/layoutAjax.php');
