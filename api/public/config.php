<?php
$host = 'localhost';
$port = '5432';
$db   = 'php_site';
$user = 'postgres';
$pass = 'postgres';

$dsn = "pgsql:host=$host;port=$port;dbname=$db";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    $pdo->exec("SET search_path TO laba19");
} catch (\PDOException $e) {
    header('Content-Type: application/json');
    die(json_encode(['error' => $e->getMessage()]));
}
