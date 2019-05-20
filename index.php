<?php
$bdd = new PDO('mysql:host=localhost;dbname=sSenerityTest;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$reponse = $bdd->query("SELECT * FROM `factux_bon_comm` LIMIT 30");



?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Exercice 2 </title>
  </head>
  <body class="bg-dark">
  <h1 class="text-white text-center py-4" >Tableau commande</h1>
  <table class="table table-striped table-dark">
  <tr>
       <th scope="col">Num_bon</th>
       <th scope="col">Client_Num</th>
       <th scope="col">Fournisseur num</th>
       <th scope="col">Date</th>
       <th scope="col">Tot_htva</th>
       <th scope="col">Tot_tva</th>
       <th scope="col">fact</th>
       <th scope="col">comment</th>
       <th scope="col">utlisateur</th>
       <th scope="col">deplacement</th>
       <th scope="col">image</th>
       <th scope="col"> Supprimer</th>

   </tr>


  <?php

while ($donnees = $reponse->fetch())
{
?>


  

   <tr>
       <td scope="row"> <?php echo $donnees['num_bon'];  ?></td>
       <td><?php echo $donnees['client_num'];  ?></td>
       <td><?php echo $donnees['fournisseur_num'];  ?></td>
       <td><?php echo $donnees['date'];  ?></td>
       <td><?php echo $donnees['tot_htva'];  ?></td>
       <td><?php echo $donnees['tot_tva'];  ?></td>
       <td><?php echo $donnees['fact'];  ?></td>
       <td><?php echo $donnees['coment'];  ?></td>
       <td><?php echo $donnees['utilisateur'];  ?></td>
       <td><?php echo $donnees['deplacement'];  ?></td>
       <td><?php echo $donnees['image'];  ?></td>
       <td><a href="#" id="<?php echo $donnees['num_bon'];?>" class="btn btn-primary trash"> Supprimer</a> </td>
   </tr>
   <!-- href="other.php?num_bon=  <?php /*echo $donnees['num_bon']; */?>" -->
   


<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête


?>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>