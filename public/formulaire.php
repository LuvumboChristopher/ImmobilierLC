<?php

require '../src/functions.php';


// Est-ce que le formulaire a été soumis
if (!empty($_POST)) {

    $titre = $_POST['titre'];
    $type = $_POST['type'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $codePostal = $_POST['cp'];
    $surface = "surface";
    $description = $_POST['description'];
    $photo = $_POST['photo'];
    $prix = $_POST['prix']; 

    // Construction du Data Source Name
    $dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST;

    // Tableau d'options pour la connexion PDO
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    // Création de la connexion PDO (création d'un objet PDO)
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $options);
    $pdo->exec('SET NAMES UTF8');
        
    // Vérification de l'existence de l'email de la base de données
    $sql = 'SELECT COUNT(*)
            FROM subscribers
            WHERE email = ?';

    $query = $pdo->prepare($sql);
    $query->execute([$email]);
    $result = $query->fetchColumn();
    
    if ($result) {
        $error = 'Cet email existe déjà dans la liste des abonnés.';
    } 
    else {
        // Requête d'insertion de l'email dans la base de données
        $sql = 'INSERT INTO logement (titre, type, adresse, ville, cp, surface, description, photo, prix )
        VALUES('.$titre.','.$type.','.$adresse.', '.$ville.', '.$codePostale.','.$surface.','.$description.','.$photo.','.$prix.')';

        $query = $pdo->prepare($sql);

        $query->execute();

        header('Location: index.php');
        exit;
    }
}

include '../template/formulaire.phtml';

?>