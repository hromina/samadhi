<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'conn.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Авторы</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
    <table border=1 style="position:absolute">
        <tr>
            <th>ID</th>
            <th>ФИО</th>
            <th>дата рождения</th>
            <th>телефон</th>
			<th>e-mail</th>
			<th>образование</th>
			<th>рейтинг</th>
        </tr>
		 

        <?php


            $authors = mysqli_query($connect, query: "SELECT * FROM `authors`");

            $authors = mysqli_fetch_all($authors);


            foreach ($authors as $Ученые) 
			{
                ?>
                    <tr>
                        <td><?= $avtor[0] ?></td>
                        <td><?= $Ученые[1] ?></td>
                        <td><?= $Ученые[3] ?></td>
                        <td><?= $Ученые[2] ?></td>
						<td><?= $Ученые[2] ?></td>
						<td><?= $Ученые[2] ?></td>
						<td><?= $Ученые[2] ?></td>
                        <td><a href="Ученые.php?id=<?= $Ученые[0] ?>">Смотреть</a></td>
                        <td><a href="update.php?id=<?= $Ученые[0] ?>">Обновить</a></td>
                        <td><a style="color: red;" href="delete.php?id=<?= $Ученые[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
	
    <h3>Добавить автора</h3>
    <form action="create.php" method="post">
        <p>ФИО</p>
        <input type="varchar" name="ФИО">
        <p>дата рождения</p>
        <input type="date" name="дата_рождения">
        <p>телефон</p>
        <input type="text" name="телефон">
		<p>email</p>
		<input type="varchar" name="email">
        <p>образование</p>
		<input type="text" name="образование">
		<p>рейтинг</p>
		<input type="integer" name="рейтинг">
        <button type="submit">Добавить </button>
    </form>
</body>
</html>
