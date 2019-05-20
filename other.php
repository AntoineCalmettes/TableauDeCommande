<?php
require ('bdd.php');
$id = $_GET['num_bon'];



function deleteRow($numBon) {
    $bdd = connectBDD();
    $req = $bdd -> prepare("DELETE FROM factux_bon_comm WHERE num_bon='".$numBon."'");
    $req->execute(array(
      'num_bon'=>$numBon
    ));
    header('Location:index.php');
}
if (isset($id)) {
    
    deleteRow($id);
}
