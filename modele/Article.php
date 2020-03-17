<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Class des articles
 *
 * @author deepy
 */
class Article {
    public $articleID;
    public $articleCatégorie;
    public $articleDate;
    public $articleTitre;
    public $articlePhoto;
    public $userID;
    public $articleTexte;

    
    
    public function __construct(){
        
    }
    
    public function deleteAdmin($id){
        global $Db;
        $sql = "DELETE FROM article WHERE articleID = $id";
        $result  = $Db->query($sql);
    }

    public function delete($articleID){
        global $Db;
        $sql = "DELETE FROM article WHERE articleID = $articleID ";
        $result  = $Db->query($sql);
    }

    public function createByPost($userID){
        $this->userID  = $userID ;
        $this->articleCatégorie = $_POST["articleCatégorie"];
        $this->articleTitre  = $_POST["articleTitre"];
        $this->articleTexte  = $_POST["articleTexte"];
        $this->articlePhoto  = $_POST["articlePhoto"];
            
    }
    
    public function sendAfterPost() {
                    
        global $Db;
    
        
        $Db->query("INSERT INTO article(userID, articleCatégorie, articleTitre , texte, articlePhoto)
                VALUES('$this->userID', '$this->articleCatégorie', '$this->articleTitre', '$this->articleTexte', '$this->articlePhoto')");
    }
    
    public function listArticleAdmin() {
        global $Db;
        $resultArticle  = $Db->query("SELECT * FROM `article` ORDER BY `article`.`articleDate` DESC ");
        return $resultArticle;
    }

    public function listArticleById($id) {
        global $Db;
        $resultArticle  = $Db->query("SELECT * FROM `article`WHERE userID = '$id' ORDER BY `article`.`articleDate` DESC ");
        return $resultArticle;
    }
    
    public function ModifierArticleById($id) {
        global $Db;
        $resultArticle  = $Db->query("SELECT * FROM `article`WHERE userID = '$id' ORDER BY `article`.`articleDate` DESC ");
        return $resultArticle;
    }
}
