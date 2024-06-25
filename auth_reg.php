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

    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $login = $_POST['login'];   
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (surname, name, patronymic, login, password) VALUES ('$surname', '$name', '$patronymic', '$login', '$password')";
    
    // if ($db -> query($sql)) {
    //     echo "Успешно";
    // } else {
    //     echo "Ошибка". $db -> error;
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/auth_reg.css">
</head>
<body>
    <form action="/redirect.php" method="post">
        <h1>Вход в личный кабинет</h1>
        <label for="login">Логин:</label><br>
        <input type="text" name="login" class="data" required><br>

        <label for="password">Пароль:</label><br>
        <input type="password" name="password" class="data" required><br><br>

        <input type="submit" class="submit" value="Войти"><br>
    </form>
</body>
</html>