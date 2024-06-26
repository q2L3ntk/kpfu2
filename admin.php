<?php
    header('Content-type: text/html; charset=utf-8');
    session_start();
    if (! $_SESSION['admin']) header('Location: authorization.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    <!-- Header -->
    <header>
        <h1>ПАНЕЛЬ АДМИНИСТРАТОРА</h1>
        <nav>
            <a href="/close_session.php" class="nav_content">ВЫЙТИ</a> 
        </nav>
    </header>
    <!-- Main -->
    <main>
        <div class="top">
            <h2>ДОБРО ПОЖАЛОВАТЬ!</h2>
            <p class="disc">ВЫБЕРИТЕ ДЕЙСТВИЕ</p>
        </div>
        <div class="container">
            <div class="block vac">
                <img src="/images/1695881635_gas-kvas-com-p-kartinki-karandash-3.png" alt="pencil" class="logo">
                <h3>Изменить/удалить вакансию</h3>
            </div>
            <div class="block prof">
                <img src="/images/223025_1411410625.png" alt="book" class="logo">
                <h3>Изменить/удалить резюме</h3>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer> 
        <p class="footer_content">Электронная почта: kpfu@kpfu.ru</p>
        <p class="footer_content">Связаться с нами: +7 999 999-99-99</p>
        <p class="footer_content">© Казанский федеральный университет. Все права защищены</p>
    </footer>
    <!-- JS -->
    <script src="/js/admin.js"></script>
</body>
</html>