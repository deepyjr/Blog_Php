<table class="table ">
  <thead class="thead-dark ">
    <tr>
      <th scope="col">article ID</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Date</th>
      <th scope="col">Titre</th>
      <th scope="col">Photo</th>
      <th scope="col">Contenu</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach($results as $result){
        print('
        <tr>
            <th scope="row">'.$result['articleID'].'</th>
            <td>'.$result['articleCatégorie'].'</td>
            <td>'.$result['articleDate'].'</td>
            <td>'.$result['articleTitre'].'</td>
            <td>'.$result['articlePhoto'].'</td>
            <td>'.$result['texte'].'</td>
            <td><button type="button" class="btn btn-primary" ><a href="?page=gestionUsers">Modifier</a></button></td>
            <td><a class="btn btn-danger" role="button" href="?page=gestionArticleAdmin&id='.$result['articleID'].'&action=delete">Supprimer</a></td>
        </tr>
        ');
      }
    ?>
  </tbody>
</table>