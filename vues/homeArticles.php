<?php
session_start();


foreach($resultsArticle as $resultArticle){
  print('
  <div class="container mt-5">
      <div class="card mb-3">
      <img class ="articlePhoto" src="'.$resultArticle['articlePhoto'].'" class="card-img-top" alt="...">
      <div class="card-body">
          <h5 class="card-title">'.$resultArticle['articleTitre'].'</h5>
          <p class="card-text">'.$resultArticle['texte'].'</p>
          <p class="card-text"><small class="text-muted">Posté le '.$resultArticle['articleDate'].'  par '.$resultArticle['userID'].' ----  '.$resultArticle['articleCatégorie'].'</small></p>
      </div>
      </div>

  </div>
  ');
}


    ?>

