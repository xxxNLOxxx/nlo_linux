<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $res = "Спасибо, $name! Сообщение получено.";
}
include '../includes/header.php';
?>

<main>
    <h1>Контакты</h1>
    <?php if (isset($res)): ?>
        <p style="color: green;"><?= $res ?></p>
    <?php endif; ?>
    <form method="post">
        <input type="text" name="name" placeholder="Имя" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <textarea name="message" placeholder="Сообщение"></textarea><br><br>
        <button type="submit">Отправить</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>
