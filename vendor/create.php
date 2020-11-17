<?php

//Добавление нового контакта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$id = $_POST['nomer'];
$names = $_POST['name'];
$adresss = $_POST['adress'];
$phones = $_POST['phone'];

/*
 * Делаем запрос на добавление новой строки в таблицу aderess_book
 */

mysqli_query($connect,"INSERT INTO `aderess_book` (`id`, `name`, `adress`, `phone`) VALUES ($id, '$names', '$adresss', '$phones')");

/*
 * Переадресация на главную страницу
 */

header('Location: /');