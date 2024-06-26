<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "UniversityDB";

    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);

    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql_user = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
    $sql_org = "SELECT * FROM `organisations` WHERE `login` = '$login' AND `password` = '$password'";
    $result_user = $db->query($sql_user);
    $result_org = $db->query($sql_org);

    if ($login == 'admin' && $password == 'admin') {
        session_start();
        $_SESSION['admin'] = true;
        $script = 'admin.php';
    } else if (mysqli_num_rows($result_user) > 0) {
        session_start();
        $_SESSION['user'] = true;
        $script = 'user.php';
    } else if (mysqli_num_rows($result_org) > 0) {
        session_start();
        $_SESSION['org'] = true;
        $script = 'organization.php';
    } else $script = 'authorization.php';
    
    header("Location: $script");
?>