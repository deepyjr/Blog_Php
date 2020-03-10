<?php

if($type=$_GET['action']=='delete'){
    User::delete($_GET['id']);
}

$User = new User();
$results = $User->listing();

include('./layout/layout.php');
