<?php

//Добавление комментария

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'conn.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$id = $_POST['id'];
$body = $_POST['body'];

/*
 * Делаем запрос на добавление новой строки в таблицу comments
 */
mysqli_query($connect,"INSERT INTO `authors` (`id`, `ФИО`, `дата рождения`, `телефон`, `email`, `образование`, `рейтинг`) VALUES (NULL, '$ФИО', '$Достижения', '$Возраст')");
mysqli_query($connect, "INSERT INTO `authors` (`id`, `authors`, `body`) VALUES (NULL, '$id', '$body')");

/*
 * Переадресация на страницу /product.php?id=
 */

header('Location: /Ученые.php?id=' . $id);