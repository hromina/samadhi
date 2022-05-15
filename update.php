<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $Ученые_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $Ученые = mysqli_query($connect, "SELECT * FROM `ученые` WHERE `id` = '$Ученые_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $Ученые = mysqli_fetch_assoc($Ученые);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
</head>
<body>
    <h3>Update Product</h3>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $Ученые['id'] ?>">
        <p>ФИО</p>
        <input type="text" name="ФИО" value="<?= $Ученые['ФИО'] ?>">
        <p>Возраст</p>
        <input type="integer" name="Возраст" value="<?= $Ученые['Возраст'] ?>">
        <p>Достижения</p>
        <input type="text" name="Достижения" value="<?= $Ученые['Достижения'] ?>"> <br> <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>