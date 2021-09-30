<?php
    session_start();

    if(isset($_SESSION['user'])){
        header('Location: profile.php');
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <form>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit" class="button-enter">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
        </p>
        <?php
            echo '<p class="msg none"></p>'
            ?>
        <p class="msg none"></p>
    </form>

    <script src="assets/js/http_code.jquery.com_jquery-3.6.0.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>