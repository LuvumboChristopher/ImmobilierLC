<?php

require '../src/functions.php';

$pdo = getPDOConnection();


$sql = 'SELECT *
        FROM logement';

$query = $pdo->prepare($sql);


$query->execute();

$logements = $query->fetchAll();

include '../template/index.phtml';

?>