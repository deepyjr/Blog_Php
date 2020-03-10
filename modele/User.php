<?php


/**
 * Class des Users
 *
 * @author deepy
 */
class User {
   
    
    
   public $userID;
   public $userPseudo;
   public $email;
   public $password;
   public $nom;
   public $prenom;
   public $role;
   public $photo;
   
   
   
   public function __construct(){
        
    }
    public function listing(){
            
        global $Db;
        $result  = $Db->query("SELECT * from user ");
        return $result;
       
    }
    public static function delete($id){
        
        global $Db;
        $sql = "DELETE FROM user WHERE userID = $id";
        echo $sql;
        $result  = $Db->query($sql);
           
    }
    
    public function create(){
       
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $userPseudo = $_POST["userPseudo"];
            $email = $_POST["email"];
            $role = $_POST["role"];
            $password = $_POST["password"];
            $photo = $_POST["photo"];
            
            
            global $Db;
        
           $Db->query("INSERT INTO user(userPseudo, email , password, nom, prenom , role ,photo )
                    VALUES('$userPseudo','$email','$password','$nom', '$prenom', '$role', '$photo')");
    }
    
    public function update() {
        
    } 
}

