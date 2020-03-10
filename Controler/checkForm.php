<?php

    var_dump($_POST);
     
    if (isset($_POST['email'])) {
        
        $User = new User;
        $User->create();
        echo 'Instance réussie';
       }   