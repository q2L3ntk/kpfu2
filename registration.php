<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "UniversityDB";

    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);

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
    <title>Регистрация</title>
    <!-- CSS -->    
    <link rel="stylesheet" href="/css/form_reg.css">
</head>
<body>
    <form action="/auth_reg.php" method="post">
        <h1>Регистрация</h1>
        <label for="surname">Фамилия:</label><br>
        <input type="text" name="surname" class="data" required><br>

        <label for="name">Имя:</label><br>
        <input type="text" name="name" class="data" required><br>
        
        <label for="patronymic">Отчество (необязательно):</label><br>
        <input type="text" name="patronymic" class="data"><br>

        <label for="login">Придумайте логин:</label><br>
        <input type="text" name="login" required class="data"><br>

        <label for="password">Придумайте пароль:</label><br>
        <input type="password" name="password" required class="data"><br>

        <label for="password">Повторите пароль:</label><br>
        <input type="password" name="password" required class="data">

        <div class="rules">
            <input type="checkbox" required><p>Согласен с <a href="/rules.php">правилами</a> регистрации</p>
        </div><br>

        <input type="submit" class="submit" value="Зарегистрироваться">
    </form>
</body>
</html>