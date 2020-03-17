
<html>
    <head>
        <title>Cours de PHP test</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <form action="?page=checkFormLogin" method="post" class="container mt-5">
     
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" >
            </div>

            <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" >
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom">
            </div>

            <div class="form-group col-md-6">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" name="prenom">
            </div>
        </div>

        <div class="form-group">
            <label for="adresse">Pseudo</label>
            <input type="text" class="form-control" name="userPseudo" placeholder="">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="photo">Photo</label>
            <input type="text" class="form-control" name="photo">
            </div>





        </div>
        <button type="submit" value="envoyer" class="btn btn-primary">S'inscrire</button>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
