<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.poptrox/2.5.1/jquery.poptrox.js"></script>

 <?php
        require_once('./conf.inc.php');
        require_once('./autoload.php');
        global $Db;
        $Db = new DbTools();
        if($Db ->Connection){
            echo "<script>console.log('Connexion bonne')</script>" ;
        }
        include('Controler/gestionPage.php');


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
