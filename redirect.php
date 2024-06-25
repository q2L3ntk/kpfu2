<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "UniversityDB";

    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);

    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
    $result = $db->query($sql);

    if ($login == 'admin' && $password == 'admin') {
        session_start();
        $_SESSION['admin'] = true;
        $script = 'admin.php';
    } else if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['user'] = true;
        $script = 'user.php';
    } else $script = 'authorization.php';
    
    header("Location: $script");
?>