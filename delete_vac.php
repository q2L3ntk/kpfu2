<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "UniversityDB";
 
    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if(isset($_POST["id"])) {
        $userid = $db->real_escape_string($_POST["id"]);
        $sql = "DELETE FROM `vacancy` WHERE id = '$userid'";
        if($db->query($sql)){
            header("Location: admin_vac.php");
        }
        else{
            echo "Ошибка: " . $db->error;
        }
    }
?>