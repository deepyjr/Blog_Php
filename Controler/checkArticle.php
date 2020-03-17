<?php
     session_start();
     
    $id = $_SESSION["pseudo"];

    if (isset($_POST['articleCatégorie']) && isset($_POST['articleTitre']) && isset($_POST['articleTexte']) && isset($_POST['articlePhoto']) ) {

        $Article = new Article();
        $Article->createByPost($id);
        $Article->sendAfterPost();
        header("Location: http://projetphp/index.php?page=homeArticles");
       }   
    