<?php
include('modele/Login.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- font -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto+Slab:300,400,700|ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 

    <link rel="stylesheet" href="../css/login.css" >


</head>
 <body class="text-center">

 <form method="post" action="?page=checkLogin" class="form-signin">
 

  <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>

  <label for="inputEmail" class="sr-only">Pseudo</label>
  <input class="form-control" placeholder="Pseudo" required="" autofocus="" name="loginPseudo">

  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password"  class="form-control" placeholder="Password" required="" name="loginPassword">


  <a href="./forms.php" >S'inscrire</a>
  
  
  <button class="btn btn-lg btn-primary btn-block mt-2" type="submit">Se connecter</button>
</form>


    <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" async></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" async></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" async></script>
  </body>
</html>