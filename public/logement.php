<?php

require '../vendor/autoload.php';
require '../src/functions.php';

if (!isset($_GET['id_logement'])) {
    echo 'Error : no valid product id';
    exit;
}

$logementId = intval($_GET['id_logement']);

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
        FROM logement
        WHERE id_logement = ?';


$query = $pdo->prepare($sql);

$query->execute(['$logement']);

$logement = $query->fetch();

dump($query);

$pageTitle = $logement['titre'];

include '../template/logement.phtml';

?>