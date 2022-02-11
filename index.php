<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Кал</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body id ="body">
<div class ="content">

    <?php
    include 'include-1.php';
    /** @var array $resources */
    ?>
    <form action="" method="post">
        <select name="thing" class="select" required value="<?= $_POST["thing"] ?>" >
            <?php foreach ($resources as $index => $value):?>
                <option value="<?= $index?>"> <?= $value["name"]?> </option>
            <?php endforeach; ?>
        </select>
        <input type = "text" name = "multiplir" required value = "" >
        <br/ >
        <input type = "submit" name = "submit" class = "select" required value = "Кнопка">
    </form>


</div>
</body>
</html>


