<?php
    $count = $sql->rowCount();
    $result = $sql->fetchAll();
?>
  <table>
    <tbody>
      <?php
        foreach($result as $article){
          print('
          <div class="container mt-5">
            <div class="card mb-3">
                <img class ="articlePhoto" src="'.$article['articlePhoto'].'" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">'.$article['articleTitre'].'</h5>
                    <p class="card-text">'.$article['texte'].'</p>
                    <p class="card-text"><small class="text-muted">Posté le '.$article['articleDate'].'  par '.$article['userID'].' ----  '.$article['articleCatégorie'].'</small></p>
                </div>
                
            </div>
    
            </div>
          ');
        }
      ?>
    </tbody>
  </table>


