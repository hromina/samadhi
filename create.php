<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'conn.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$ФИО = $_POST['ФИО'];
$Достижения  = $_POST['Достижения '];
$Возраст = $_POST['Возраст'];

/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `ученые` (`id`, `ФИО`, `Достижения`, `Возраст`) VALUES (NULL, '$ФИО', '$Достижения', '$Возраст')");

/*
 * Переадресация на главную страницу
 */

header('Location: /');