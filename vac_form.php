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
    <title>Вакансия</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/vac_form.css">
</head>
<body>
<form action="/vac_db.php" method="post">
        <h1>ВАКАНСИЯ</h1>
        <label for="title">Название:</label><br>
        <input type="text" name="title" class="data" required><br>

        <label for="org">Организация:</label><br>
        <input type="text" name="org" class="data" required><br>

        <label for="direction">Направление:</label><br>
        <select name="direction" id="direction" class="data" required>
            <?php
                $c_p = mysqli_query($db, "SELECT * FROM `directions` ORDER BY `direction` ASC");
                while ($test = mysqli_fetch_object($c_p)) {
                    echo "<option value = '$test->direction'>$test->direction</option>";
                }
            ?>
        </select><br>

        <label for="discription">Подробное описание:</label><br>
        <textarea name="discription" id="discription" class="data" required></textarea><br>

        <label for="money">Зарплата:</label><br>
        <input type="number" name="money" class="data" required><br>

        <input type="submit" value="Подтвердить" class="submit">
    </form>
</body>
</html>