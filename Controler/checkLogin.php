<?php
require('./modele/Login.php');
    

session_start();

    
    if (isset($_POST['loginPseudo'],$_POST['loginPassword'] )) {
        $Test = new Login();
        $Test->getInfosLogin();
        $content = $Test->checkInfosLogin();
        echo 'Instance réussie';



       foreach ($content as $contentitem) {
            $passTemp = $contentitem['password']; 
            $pseudoTemp = $contentitem['userPseudo'];
            

            if($pseudoTemp == $_POST['loginPseudo'] && $passTemp == $_POST['loginPassword']){
                $_SESSION["pseudo"]= $contentitem['userPseudo'];
                $_SESSION["statut"]= $contentitem['role'];
                $_SESSION["image"]= $contentitem['photo'];
                header("Location: http://projetphp/index.php?page=homeArticles");
            }
            else{
                header("Location: http://projetphp/index.php?page=loginwitherror");
            };

        };
    }   