<?php

require '../vendor/autoload.php';
require '../src/functions.php';

if (!isset($_GET['id'])) {
    echo 'Error : no valid product id';
    exit;
}

$logementId = intval($_GET['id_logement']);

$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST;

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

$pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $options);
$pdo->exec('SET NAMES UTF8');

$logementId = intval($_GET['id_logement']);


// Préparer la requête de sélection des commandes
$sql = 'SELECT *
        FROM logement
        WHERE id_logement = ?';


$query = $pdo->prepare($sql);

$query->execute(['$logementId']);

$logementId = $query->fetch($sql);

dump($logementId);

$pageTitle = $logementId['titre'];

include '../template/logement.phtml';

?>