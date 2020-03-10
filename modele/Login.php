<?php


/**
 * Class lié au login
 *
 * @author deepy
 */

class Login {
    public $loginPseudo;
    public $loginPassword;


    public function __construct(){
        
    }

    public function getInfosLogin() {

        $this->loginPseudo = $_POST["loginPseudo"];
        $this->loginPassword = $_POST["loginPassword"];

        
    }
  
    public function checkInfosLogin(){

        global $Db;

        $resultPseudo = $Db->query("SELECT * FROM user WHERE `userPseudo` = '$this->loginPseudo' ");
       
        return $resultPseudo;
    }
}