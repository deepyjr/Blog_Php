<?php
include('modele/Article.php');
?>


<form action="?page=checkArticle" method="post"  class="container mt-5" >
  
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control"  placeholder="name@example.com" name="userID">
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Catégorie</label>
    <select name="articleCatégorie" class="form-control" >
      <option value="Sport">Sport</option>
      <option value="Photos">Photos</option>
      <option value="Informatique">Informatique</option>
      <option value="Aviation">Aviation</option>
    </select>
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Titre</label>
    <input  class="form-control" placeholder="Mon super titre" name="articleTitre">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Contenu de l'article</label>
    <textarea class="form-control" placeholder="Mon super contenu" rows="3" name="articleTexte"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Image</label>
    <input class="form-control"  placeholder="https://c4.wallpaperflare.com/wallpaper/246/739/689/digital-digital-art-artwork-illustration-abstract-hd-wallpaper-thumb.jpg" name="articlePhoto">
  </div>

  <button type="submit" value="envoyer" class="btn btn-primary">S'inscrire</button>

</form>