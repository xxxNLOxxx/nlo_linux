<?php
require_once 'config.php';
header('Content-Type: application/json');

$action = $_GET['action'] ?? '';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'all':
        $stmt = $pdo->query("SELECT * FROM countries_cities ORDER BY id ASC");
        echo json_encode($stmt->fetchAll());
        break;

    case 'get':
        $stmt = $pdo->prepare("SELECT * FROM countries_cities WHERE id = ?");
        $stmt->execute([$id]);
        echo json_encode($stmt->fetch() ?: ['error' => 'Not found']);
        break;

    case 'del':
        $stmt = $pdo->prepare("DELETE FROM countries_cities WHERE id = ?");
        $stmt->execute([$id]);
        echo json_encode(['status' => 'success', 'id' => $id]);
        break;

    case 'edit':
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $id) {
            $country = $_POST['country'] ?? '';
            $city = $_POST['city'] ?? '';
            $stmt = $pdo->prepare("UPDATE countries_cities SET country = ?, city = ? WHERE id = ?");
            $stmt->execute([$country, $city, $id]);
            echo json_encode(['status' => 'updated']);
        } else {
            echo json_encode(['error' => 'POST method and ID required']);
        }
        break;

    default:
        echo json_encode(['error' => 'Unknown action']);
        break;
}
