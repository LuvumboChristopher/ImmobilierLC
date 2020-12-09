<?php

require '../src/functions.php';

$pdo = getPDOConnection();

// Préparer la requête de sélection des commandes
$sql = 'SELECT *
        FROM logement';


$query = $pdo->prepare($sql);

// Exécuter la requête
$query->execute();

// Récupérer les résultats de la requête pour les afficher dans le template HTML
$logements = $query->fetchAll();

include '../template/index.phtml';

?>