<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $name = $_POST['name'] ?? '';

    if (empty($email) || empty($password)) {
        echo "<h3>Ошибка: Поля Email и Пароль обязательны для заполнения!</h3>";
        echo '<a href="index.php">Вернуться назад</a>';
    } else {
        echo "<h3>Регистрация успешна!</h3>";
        echo "Здравствуйте, " . htmlspecialchars($name) . "!<br>";
        echo "Ваш Email: " . htmlspecialchars($email) . "<br>";
        echo "Ваш пол: " . htmlspecialchars($_POST['gender']);
    }
} else {
    header("Location: index.php");
    exit();
}
?>
