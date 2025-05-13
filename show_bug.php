<?php
// show_bug.php <id>
require_once "bootstrap.php";
$id = $argv[1];

$dql = "SELECT b, e, r FROM Bug b JOIN b.engineer e JOIN b.reporter r
ORDER BY b.created DESC";
$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$bugs = $query->getResult();
$bug = $bugs[$id];
echo $bug['description'] . " - " . $bug['created']->format('d.m.Y') . "\n";
echo " Reported by: " . $bug['reporter']['name'] . "\n";
echo " Assigned to: " . $bug['engineer']['name'] . "\n";
foreach ($bug['products'] as $product) {
    echo " Platform: " . $product['name'] . "\n";
}
echo "\n";