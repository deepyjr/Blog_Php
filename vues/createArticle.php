<?php
include('modele/Article.php');

?>

<head>
    <title>Cours de PHP test</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    
<body>
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
    <button type="button" onclick="myFunction()" value="redirect" class="btn btn-primary">Retours au site</button>
    

<script>
function myFunction() {
  location.replace("http://projetphp/index.php?page=homeArticles")
}
</script>

  </form>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      

  </body>
</html>