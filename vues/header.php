
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Cours de PHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php?page=gestionArticle">Gestion de mes articles</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="index.php?page=createArticle">Ecrire un article</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0" action="?page=disconnect" method="post" >
                <button class="btn btn-danger my-2 my-sm-0" type="submit">Se deconnecter</button>
              </form>
            </div>
        </nav>


