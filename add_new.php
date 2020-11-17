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
    <link rel="stylesheet" href="css\bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
<link href="https://fonts.googleapis.com/css?family=Arial:300" rel="stylesheet">
</head>
	<body> 
<header class="headder">
		<div class="hrback"> 
	<div class="container"> 
	</div>
<div class="container">
<div class="zag"><a href="index.php"><p>www</p></a></div>
<nav class="top-menu">
	<ul>
		<li>
			<a href="index.php">main vid</a>
		</li>
		<li>
			<a href="add_new.php">add new</a>
				</li>
		<li>
			<a href="sear.php">search</a>
		<ul>
			<li><a href="#">mail</a></li>
			
		</ul>
		</li>
		<li>
			<a href="card.php">any card</a>
		</li>
		</ul>
</nav>
</header>
<main><!-- Форма обавление новго контакта-->
<div class="container">
<form action="vendor/create.php" method="post">
        <p>nomer(id_contacta)</p>
		<input type="number" name="nomer">
		<p>Names</p>
        <input type="text" name="name">
        <p>Adress</p>
        <textarea name="adress"></textarea>
        <p>Phone</p>
        <input type="number" name="phone"> <br> <br>
        <button type="submit">Add new contact</button> 
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