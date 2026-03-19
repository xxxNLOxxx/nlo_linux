<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="action.php" method="POST">
            <h2>Регистрация</h2>

            <label for="username">Имя:</label>
            <input type="text" id="username" name="username" placeholder="Введите имя" required>

            <label for="email">Почта:</label>
            <input type="email" id="email" name="email" placeholder="name@example.ru" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" placeholder="Введите пароль" required>

            <label for="confirm_password">Подтвердите пароль:</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Повторите пароль" required>

            <label for="gender">Пол:</label>
            <select id="gender" name="gender" required>
                <option value="">Выберите пол</option>
                <option value="male">Мужской</option>
                <option value="female">Женский</option>
                <option value="other">Другой</option>
            </select>

            <button type="submit">Зарегистрироваться</button>

            <div class="terms">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">Создавая учетную запись, вы соглашаетесь с нашим <a href="#">Условием и конфиденциальностью</a></label>
            </div>
        </form>
    </div>
</body>
</html>

