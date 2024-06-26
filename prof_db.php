<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "UniversityDB";

    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);

    $title = $_POST['title'];
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $direction = $_POST['direction'];
    $discription = $_POST['discription'];
    $money = $_POST['money'];

    $sql = "INSERT INTO `resume` (title, surname, name, patronymic, direction, discription, money) VALUES ('$title', '$surname', '$name', '$patronymic', '$direction', '$discription', '$money')";
    $db -> query($sql);

    header('Location: list_profile.php');
?>