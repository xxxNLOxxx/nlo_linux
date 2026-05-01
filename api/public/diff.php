<?php
header('Content-Type: application/json');

$date1 = $_GET['date1'] ?? null;
$date2 = $_GET['date2'] ?? null;

if ($date1 && $date2) {
    try {
        $d1 = new DateTime($date1);
        $d2 = new DateTime($date2);
        $interval = $d1->diff($d2);
        
        echo json_encode([
            'date1' => $date1,
            'date2' => $date2,
            'days_difference' => $interval->days
        ]);
    } catch (Exception $e) {
        echo json_encode(['error' => 'Invalid dates provided']);
    }
} else {
    echo json_encode(['error' => 'Please provide date1 and date2 parameters']);
}
