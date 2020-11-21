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
<main><!-- Форма обавление новго контакта-->
<div class="container">


<form action="vendor/create.php" method="post" class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Имя</label>
      <input type="text" class="form-control" id="validationTooltip01"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Телефон</label>
      <input type="text" class="form-control" id="validationTooltip02"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Адрес</label>
      <input type="text" class="form-control" id="validationTooltip03"  required>
      <div class="valid-tooltip">
        +++
      </div>
    </div>
     </div>
  <button class="btn btn-primary" type="submit">Добавить в книгу</button>
</form>



    <!-- Форма обавление новго контакта--> 
</div>
</main>
<footer> 
	<div class="container">
</div>

</footer>
	<div class="black"></div>
</body>
</html>