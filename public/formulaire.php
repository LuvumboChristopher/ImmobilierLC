<?php

require '../src/functions.php';



if (!empty($_POST)) {

    $titre = $_POST['titre'];
    $type = $_POST['type'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $codePostal = $_POST['cp'];
    $surface = "surface";
    $description = $_POST['description'];
    $photo = $_POST['photo'];
    $prix = $_POST['photo'];

    $pdo = getPDOConnection();

    $sql = 'INSERT INTO logement ()
    VALUES("","'.$titre.'","'.$type.'","'.$adresse.'","'.$ville.'"'.$codePostal.'","'.$surface.'","'.$description.'","'.$photo.'"'.$prix.'")'; 


}

include '../template/formulaire.phtml';

?>