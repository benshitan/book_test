<?php
define('HOST', 'localhost');
define('USER', 'benshi84_wk');
define('PASSWORD', 'Frigatylet123');
define('DATABASE', 'benshi84_wk');
$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
if (!$connect) {
    die('Error connect to database!');
}