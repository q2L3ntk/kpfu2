<?php
    header('Content-type: text/html; charset=utf-8');
    session_start();

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "UniversityDB";

    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пользователь</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/user.css">
</head>
<body>
    <!-- Header -->
    <header>
        <h1>КАТАЛОГ ПОЛЬЗОВАТЕЛЯ</h1>
        <nav>
            <a href="/list_vac.php" class="nav_content">СПИСОК ВАКАНСИЙ</a>
            <a href="/list_profile.php" class="nav_content">СПИСОК РЕЗЮМЕ</a>
            <a href="/close_session.php" class="nav_content">ВЫЙТИ</a>
        </nav>
    </header>
    <!-- Main -->
    <main>
        <div class="top">
            <h2>СОЗДАЙТЕ СВОЁ РЕЗЮМЕ</h2>
        </div>
        <div class="block_user" >
            <img src="/images/223025_1411410625.png" alt="book" class="logo">
            <h3>Создать</h3>
        </div>
    </main>
    <!-- JS -->
    <script src="/js/path_user.js"></script>
</body>
</html>