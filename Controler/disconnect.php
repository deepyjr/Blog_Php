<?php

session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION = array();
// Destruction de la session
session_destroy();
// Destruction du tableau de session
unset($_SESSION);

include('./vues/login.php');

