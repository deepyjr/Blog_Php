<?php
require('./modele/Login.php');
    
var_dump($_POST);


session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
// $_SESSION = array();
// // Destruction de la session
// session_destroy();
// // Destruction du tableau de session
// unset($_SESSION);
    
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
                echo $_SESSION["pseudo"];
                header("Location: http://projetphp/index.php?page=homeArticles");
            }
            else{
                header("Location: http://projetphp/index.php?page=loginwitherror");
            };

        };
    }   