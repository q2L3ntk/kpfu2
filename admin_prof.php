<?php
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
    <title>Список резюме</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/list_profile.css">
</head>
<body>
    <!-- Header -->
    <header>
        <h1>СПИСОК РЕЗЮМЕ</h1>
    </header>
    <!-- Main -->
    <main>
        <?php
            $c_p = mysqli_query($db, "SELECT * FROM `resume`");
            while ($test = mysqli_fetch_object($c_p)) {
                echo "<form action='/delete_prof.php' method='post'>
                    <h2>$test->title</h2>
                    <p>$test->money руб.</p>
                    <p>$test->direction</p>
                    <p>$test->discription</p>
                    <input type='hidden' name='id' value='" . $test->id . "' />
                    <input type='submit' class='submit' value='Удалить'>
                </form> ";
            }
            
        ?>
    </main>
    <!-- JS -->
    <script src="/js/admin_prof.js"></script>
</body>
</html>