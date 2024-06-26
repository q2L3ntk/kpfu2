<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "UniversityDB";

    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);

    $title = $_POST['title'];
    $org = $_POST['org'];
    $direction = $_POST['direction'];
    $discription = $_POST['discription']; 
    $money = $_POST['money'];

    $sql = "INSERT INTO `vacancy` (title, organization, direction, discription, money) VALUES ('$title', '$org', '$direction', '$discription', '$money')";
    $db -> query($sql);

    header('Location: list_vac.php');
?>