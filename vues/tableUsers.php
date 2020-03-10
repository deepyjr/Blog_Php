
<table class="table ">
  <thead class="thead-dark ">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Pseudo</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Role</th>
      <th scope="col">Photo</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach($results as $result){
        print('
        <tr>
            <th scope="row">'.$result['userID'].'</th>
            <td>'.$result['userPseudo'].'</td>
            <td>'.$result['email'].'</td>
            <td>'.$result['password'].'</td>
            <td>'.$result['nom'].'</td>
            <td>'.$result['prenom'].'</td>
            <td>'.$result['role'].'</td>
            <td>'.$result['photo'].'</td>
            <td><button type="button" class="btn btn-primary" ><a href="?page=gestionUsers">Modifier</a></button></td>
            <td><a class="btn btn-danger" role="button" href="?page=tableUsers&id='.$result['userID'].'&action=delete">Supprimer</a></td>
        </tr>
        ');
      }
    ?>
  </tbody>
</table>