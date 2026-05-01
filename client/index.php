<?php
require_once '../api/public/functions.php';

$lat = 59.9386;
$lon = 30.2141;
$cityName = 'Санкт-Петербург';

$url = "https://api.open-meteo.com/v1/forecast?latitude=$lat&longitude=$lon&current_weather=true&daily=temperature_2m_max,temperature_2m_min,weathercode&timezone=auto";
$weatherData = callAPI($url);

function getWeatherIcon($code) {
    $icons = [
        0 => '☀️', 1 => '🌤️', 2 => '⛅', 3 => '☁️', 
        45 => '🌫️', 48 => '🌫️', 51 => '🌧️', 53 => '🌧️', 
        61 => '🌧️', 63 => '🌧️', 71 => '❄️', 95 => '⛈️'
    ];
    return $icons[$code] ?? '❓';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Погода</title>
    <style>
        body { font-family: sans-serif; background: #1e293b; color: white; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .card { background: #334155; border-radius: 20px; padding: 30px; text-align: center; box-shadow: 0 10px 15px rgba(0,0,0,0.3); width: 320px; }
        .temp { font-size: 4rem; font-weight: bold; margin: 10px 0; color: #38bdf8; }
        .forecast { display: flex; justify-content: space-around; margin-top: 20px; border-top: 1px solid #475569; padding-top: 20px; }
        .f-day { font-size: 0.8rem; }
    </style>
</head>
<body>
    <div class="card">
        <h2><?= $cityName ?></h2>
        <?php if (isset($weatherData['current_weather'])): ?>
            <div class="temp"><?= round($weatherData['current_weather']['temperature']) ?>°C</div>
            <div style="font-size: 1.2rem;"><?= getWeatherIcon($weatherData['current_weather']['weathercode']) ?> Текущая погода</div>
            
            <div class="forecast">
                <?php for($i = 1; $i <= 3; $i++): ?>
                    <div class="f-day">
                        <div><?= date('d.m', strtotime($weatherData['daily']['time'][$i])) ?></div>
                        <div style="font-size: 1.5rem;"><?= getWeatherIcon($weatherData['daily']['weathercode'][$i]) ?></div>
                        <div><?= round($weatherData['daily']['temperature_2m_max'][$i]) ?>°</div>
                    </div>
                <?php endfor; ?>
            </div>
        <?php else: ?>
            <p>Не удалось загрузить данные</p>
        <?php endif; ?>
    </div>
</body>
</html>
