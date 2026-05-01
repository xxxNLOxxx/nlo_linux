<?php
require_once 'config.php';
header('Content-Type: application/json');

$country = $_GET['country'] ?? null;

if ($country) {
    $stmt = $pdo->prepare("SELECT city FROM countries_cities WHERE country = ?");
    $stmt->execute([$country]);
    $cities = $stmt->fetchAll(PDO::FETCH_COLUMN);

    echo json_encode([
        'country' => $country,
        'cities' => $cities
    ]);
} else {
    echo json_encode(['error' => 'Missing country']);
}
