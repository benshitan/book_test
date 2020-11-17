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
<main>
<!-- конец верстка старя хеаддер+меню--> 
	<!--таблица как в базе данных aderess--> 
	<div class="container">
	<table>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>adress</th>
            <th>phone</th>
        </tr>
  	
<?php
/*
 * Делаем выборку всех строк из таблицы "aderess_book" SELECT * FROM `aderess_book`
 */
$aderess_book = mysqli_query($connect, "SELECT * FROM `aderess_book`");
$aderess_book = mysqli_fetch_all($aderess_book);
	foreach ($aderess_book as $aderess_book) {
?>
                    <tr>
                        <td><?= $aderess_book[0] ?></td>
                        <td><?= $aderess_book[1] ?></td>
                        <td><?= $aderess_book[2] ?></td>
                        <td><?= $aderess_book[3] ?></td>
                    </tr>
                <?php
            }
		
	  ?>
	</table>

		<form aсtion="sear.php" method="post">
		
	  Что ищем:<br> <input name="search"> <br>
    <input type=submit value="Поиск">
</form>


</main>
<footer> 
	<div class="container">
</div>

</footer>
	<div class="black"></div>
</body>
</html>