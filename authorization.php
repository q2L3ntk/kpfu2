<?php
    include "database/db.php";
    dbConnectUniversity();

    // if($db -> connect_error) {
    //     echo "Нет подключения к базе данных. Код ошибки: ".mysqli_connect_error();
    // } else {
    //     echo "БД подключена \n";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/form_auth.css">
</head>
<body>
    <form action="/redirect.php" method="post">
        <h1>Вход в личный кабинет</h1>
        <label for="login">Логин:</label><br>
        <input type="text" name="login" class="data" required><br>

        <label for="password">Пароль:</label><br>
        <input type="password" name="password" class="data" required><br><br>

        <input type="submit" class="submit" value="Войти"><br>

        <p>Нет учётной записи?</p>
        <a href="/org_reg.php">Зарегистрироваться как организация</a><br>
        <a href="/registration.php">Зарегистрироваться</a>
    </form>
</body>
</html>