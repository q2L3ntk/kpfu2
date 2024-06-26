<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "UniversityDB";

    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);

    $type = $_POST['type'];
    $name = $_POST['name'];
    $organized = $_POST['organized'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `organisations` (type, name, organized, login, password) VALUES ('$type', '$name', '$organized', '$login', '$password')";
    $db -> query($sql);

    header('Location: authorization.php');
?>