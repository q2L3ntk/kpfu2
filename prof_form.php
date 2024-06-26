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
    <title>Анкета</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/prof_form.css">
</head>
<body>
    <form action="/prof_db.php" method="post">
        <h1>ВАШЕ РЕЗЮМЕ</h1>
        <label for="title">Название:</label><br>
        <input type="text" name="title" class="data" required><br>

        <label for="surname">Фамилия:</label><br>
        <input type="text" name="surname" class="data" required><br>

        <label for="name">Имя:</label><br>
        <input type="text" name="name" class="data" required><br>

        <label for="patronymic">Отчество:</label><br>
        <input type="text" name="patronymic" class="data"><br>

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

        <label for="money">Ожидаемая зарплата:</label><br>
        <input type="number" name="money" class="data" required><br>

        <input type="submit" value="Подтвердить" class="submit">
    </form>
</body>
</html>