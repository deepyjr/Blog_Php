<?php
include('modele/User.php');

?>

<form action="?page=checkForm" method="post" class="container mt-5">
     
        <div class="mb-5">
         <a href="?page=login" class="return">Retours</a>
        </div>

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

            <div class="form-group col-md-6">
            <label for="pays">Role</label>
            <select name="role" class="form-control">
                <option selected>Choose...</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
                <option value="3">Viewer</option>
            </select>
            </div>



        </div>
        <button type="submit" value="envoyer" class="btn btn-primary">S'inscrire</button>
    </form>
</div>
