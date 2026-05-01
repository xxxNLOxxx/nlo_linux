<?php
require_once '../api/public/functions.php';
$data = callAPI('https://api.adviceslip.com/advice');
$advice = $data['slip']['advice'] ?? 'Error loading advice';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Advice</title>
    <style>
        body { font-family: sans-serif; text-align: center; background: #f8fafc; padding: 50px; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); display: inline-block; width: 450px; }
        .favorites { margin-top: 30px; text-align: left; display: inline-block; width: 450px; }
        button, input[type="submit"] { padding: 10px 20px; cursor: pointer; margin: 5px; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Совет дня</h1>
        <p id="advice-text"><?php echo $advice; ?></p>
        <form method="get">
            <button type="submit">Получить новый совет</button>
        </form>
        <button onclick="saveAdvice()">Сохранить в любимое</button>
    </div>
    <div class="favorites">
        <h3>Любимые советы:</h3>
        <ul id="fav-list"></ul>
    </div>
    <script>
        function saveAdvice() {
            const text = document.getElementById('advice-text').innerText;
            let favs = JSON.parse(localStorage.getItem('php_advices') || "[]");
            if (!favs.includes(text)) {
                favs.push(text);
                localStorage.setItem('php_advices', JSON.stringify(favs));
                showFavs();
            }
        }
        function showFavs() {
            const list = document.getElementById('fav-list');
            const favs = JSON.parse(localStorage.getItem('php_advices') || "[]");
            list.innerHTML = favs.map(f => `<li>${f}</li>`).join('');
        }
        showFavs();
    </script>
</body>
</html>
