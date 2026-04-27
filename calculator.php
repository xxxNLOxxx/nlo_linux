<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP Калькулятор</title>
    <style>
        .calc-box {
            border: 1px solid #ccc;
            padding: 20px;
            width: 450px;
            margin: 50px auto;
            font-family: sans-serif;
        }
        .inputs-row {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }
        .inputs-row input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .buttons-row button {
            width: 50px;
            height: 50px;
            background: #eee;
            border: 1px solid #bbb;
            border-radius: 5px;
            font-size: 20px;
            cursor: pointer;
            margin-right: 5px;
        }
        .buttons-row button:hover { background: #ddd; }
        .result { margin-top: 15px; font-size: 18px; }
        .error { color: red; }
    </style>
</head>
<body>

<div class="calc-box">
    <form action="calculator.php" method="POST">
        <div class="inputs-row">
            <input type="number" name="n1" step="any" required placeholder="Число 1">
            <input type="number" name="n2" step="any" required placeholder="Число 2">
        </div>
        <div class="buttons-row">
            <button type="submit" name="op" value="add">+</button>
            <button type="submit" name="op" value="sub">-</button>
            <button type="submit" name="op" value="mul">*</button>
            <button type="submit" name="op" value="div">/</button>
        </div>
    </form>

    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['op'])) {
            $num1 = $_POST['n1'];
            $num2 = $_POST['n2'];
            $operation = $_POST['op'];
            $res = "";

            if ($operation == 'add') $res = $num1 + $num2;
            if ($operation == 'sub') $res = $num1 - $num2;
            if ($operation == 'mul') $res = $num1 * $num2;
            if ($operation == 'div') {
                if ($num2 == 0) {
                    echo "<span class='error'>Операция не может быть выполнена: деление на 0</span>";
                } else {
                    $res = $num1 / $num2;
                }
            }

            if ($res !== "") {
                echo "Результат: " . $res;
            }
        }
        ?>
    </div>
</div>

<p style="text-align:center;"><a href="index.php">Вернуться к регистрации</a></p>

</body>
</html>
