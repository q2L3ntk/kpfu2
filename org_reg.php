<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация организации</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/form_reg.css">
</head>
<body>
    <form action="/org_db.php" method="post">
        <h1>ОРГАНИЗАЦИЯ</h1>
        <label for="type">Тип:</label><br>
        <input type="text" name="type" required class="data"><br>

        <label for="name">Название</label><br>
        <input type="text" name="name" required class="data"><br>

        <label for="organized">Образовано:</label><br>
        <input type="date" name="organized" required class="data"><br>

        <label for="login">Придумайте логин:</label><br>
        <input type="text" name="login" required class="data"><br>

        <label for="password">Придумайте пароль:</label><br>
        <input type="password" name="password" required class="data"><br>

        <label for="password">Повторите пароль:</label><br>
        <input type="password" name="password" required class="data"><br>

        <div class="rules">
            <input type="checkbox" required><p>Согласен с <a href="/rules.php">правилами</a> регистрации</p>
        </div><br>

        <input type="submit" value="Зарегистрироваться" class="submit">
    </form>
</body>
</html>