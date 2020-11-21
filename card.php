<?php
/*
 * Подключаем  базу данных (PhpMyAdmin, MySQL)
 */
require_once 'config/connect.php';
?>
<!--верстка старая хеаддер+меню--> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>adrees_book</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS + main -->
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
<link href="https://fonts.googleapis.com/css?family=Arial:300" rel="stylesheet">
</head>
	<body> 
<header>
		<div class="container"> 
	<ul class="nav nav-pills nav-fill">
  <li class="top-menu">
    <a class="nav-link active" href="index.php">Главная</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="add_new.php">Добавить новый</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="sear.php">Поиск</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="card.php">Карточка контакта</a>
  </li>
  <li class="nav-item">
    <!-- Search form -->
<div class="md-form mt-0">
  <input class="form-control" type="text" placeholder="Введите текст" aria-label="Search">
</div>
  </li>
</ul>
</div>
</header>
    
    <div class="container">
 
    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card with stretched link</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
  </div>
 
  </div>
  </div>
   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js\jquery-3.5.1.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <!-- FOOTER
    -->

  </body>
</html>