<?php

require '../src/functions.php';

if (!empty($_POST)) {

    $titre = $_POST['titre'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $codePostal = $_POST['cp'];
    $surface = "surface";
    $description = $_POST['description'];
    $photo = $_POST['photo'];
    $prix = $_POST['prix']; 


    $dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST;

    // Tableau d'options pour la connexion PDO
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];


    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $options);
    $pdo->exec('SET NAMES UTF8');
        
    $sql = 'INSERT INTO logement (titre, type, adresse, ville, cp, surface, description, photo, prix )
    VALUES('.$titre.','.$type.','.$adresse.', '.$ville.', '.$codePostale.','.$surface.','.$description.','.$photo.','.$prix.')';

    $query = $pdo->prepare($sql);

    $query->execute();

    header('Location: index.php');
    exit;  
}

include '../template/formulaire.phtml';

?>