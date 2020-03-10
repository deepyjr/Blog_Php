<?php

    $page=$_GET['page'];
    $type=$_GET['action'];
    
    $page = ($page == '')? 'home' : $page;
    
     
     include('Controler/'.$page.'.php');
