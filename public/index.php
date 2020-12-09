<?php


const DB_HOST = 'localhost';
const DB_NAME = 'immobilier';
const DB_USER = 'root';
const DB_PASSWORD = '';

$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST;

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

$pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $options);
$pdo->exec('SET NAMES UTF8');

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