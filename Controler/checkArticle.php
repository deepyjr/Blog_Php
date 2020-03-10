<?php

    var_dump($_POST);
     
    if (isset($_POST['userID'])) {
        $Article = new Article();
        $Article->createByPost();
        $Article->sendAfterPost();
        
       }   