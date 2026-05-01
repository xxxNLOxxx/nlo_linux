<?php
header('Content-Type: application/json');

if (isset($_GET['date'])) {
    $dateStr = $_GET['date'];
    $timestamp = strtotime($dateStr);

    if ($timestamp) {
        $dayName = date('l', $timestamp);
        
        echo json_encode([
            'weekday' => $dayName
        ]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid date format']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Parameter "date" is missing']);
}
