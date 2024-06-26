<?php
    include "database/db.php";
    dbConnectUniversity();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/main_media.css">
</head>
<body>
    <!-- Header -->
    <header>
        <img src="/images/kfu_logo_3l_rus.png" alt="logo" class="logo">
        <nav> 
            <a href="/authorization.php" class="font">ВОЙТИ</a>
            <a href="/stud.php" class="font">ВЫПУСКНИКАМ</a>
            <a href="/org.php" class="font">ОРГАНИЗАЦИЯМ</a>
        </nav>
        <h1 class="font">ТРУДОУСТРОЙСТВО ПО НАПРАВЛЕНИЯМ СПЕЦИАЛЬНОСТЕЙ</h1>
    </header>
    <!-- Main -->
    <main>
        <!-- Top content -->
        <div class="top_main">
            <div class="content">
                <a href="/authorization.php" class="inner first">ТРУДОУСТРОЙСТВО</a>
                <a href="/list_vac.php" class="inner second">ВАКАНСИИ</a>
                <a href="/list_vac.php" class="inner app">ОТКЛИКНУТЬСЯ</a>
            </div>
            <div class="callendar">
                <div class="upper">
                    <h3 class="up_title">17 ИЮНЯ</h3>
                </div>
                <h4 class="down_title">СТАРТ ЯРМАРКИ ВАКАНСИЙ</h4>
                <p class="down_title">16:00</p>
            </div>
        </div>
        <!-- Main content -->
        <div class="main_content">
            <div class="main">
                <h3 class="new_main">Список вакансий -></h3>
            </div>
            <div class="left_main">
                <div class="left1">
                    <h3 class="new1">Работодатели -></h3>
                </div>  
                <div class="left2">
                    <h3 class="new2">Направления -></h3>
                </div>
                <div class="left3">
                    <h3 class="new3">Отзывы -></h3>
                </div>
                <div class="left4">
                    <h3 class="news">Читать все новости -></h3>
                </div>
            </div>
        </div>
        <!-- Bottom content -->
        <div class="bottom_content">
            <div class="discr">
                <h2 class="num">50+</h2><br>
                <h3 class="dis">работодателей готовы просмотреть ваше резюме</h3>
            </div>
            <img src="/images/gas-kvas-com-p-bloknot-i-ruchka-na-prozrachnom-fone-1.png" alt="pic" class="bottom_pic">
        </div>
    </main>
    <!-- Footer -->
    <footer>
        <p class="footer_content">Электронная почта: kpfu@kpfu.ru</p>
        <p class="footer_content">Связаться с нами: +7 999 999-99-99</p>
        <p class="footer_content">© Казанский федеральный университет. Все права защищены</p>
    </footer>
    <!-- JS -->
    <script src="/js/index.js"></script>
</body>
</html>