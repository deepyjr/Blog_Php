<?php

     
    
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['nom']) &&  isset($_POST['prenom']) && isset($_POST['userPseudo']) && isset($_POST['photo']) ) {
        
        $User = new User();

        $results = $User->listUserById($_POST['userPseudo']);


        // var_dump(count($results->fetch()));

        if (count($results->fetch()) == 1){
            echo 'cas 1 ';
            $User->createFormLogin();
            header("Location: http://projetphp/index.php?page=login");
        }
        else{
            header("Location: http://projetphp/index.php?page=formError");
        }
        
       }   