<?php
require_once '../api/public/functions.php';
$data = callAPI('https://catfact.ninja/fact');
$fact = $data['fact'] ?? 'Error loading fact';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Факты о животных</title>
    <style>
        body { font-family: sans-serif; text-align: center; background: #fffaf0; padding: 50px; }
        .box { background: #fff; border: 2px solid #f6ad55; padding: 30px; border-radius: 20px; display: inline-block; max-width: 500px; }
        button { padding: 10px 20px; cursor: pointer; background: #f6ad55; border: none; color: white; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="box">
        <h1>Интересный факт</h1>
        <p><?php echo $fact; ?></p>
        <form method="get">
            <button type="submit">Новый факт</button>
        </form>
    </div>
</body>
</html>
