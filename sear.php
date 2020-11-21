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
<main><!-- поиск+результаты-->
<div class="container">

<div class="input-group mb-3">
    <input type="text" class="form-control"  aria-label="Найти!" aria-describedby="inputGroup-sizing-default">
</div>

<form method="post">

<button name="search" class="btn btn-primary" type="submit" value="Поиск">Найти в контактах</button>
  </form>
<hr>

<?php
        if(isset($_POST['submit'])){
            $search = explode(" ", $_POST['search']);
            $count = count($search);
            $array = array();
            $i = 0;
            foreach($search as $key) {
                $i++;
                if($i < $count) $array[] = "CONCAT ('name', 'phone', 'adress') LIKE '%".$key."%' OR "; else $array[] = "CONCAT ('name', 'phone', 'adress') LIKE '%".$key."%'";
            }
            $sql = "SELECT * FROM 'aderess_book' WHERE ".implode("", $array);
            echo $sql;
            $query = mysqli_query($connect, $sql);
            while($row = mysqli_fetch_assoc($query))  echo "<h1>".$row['name']."</h1><p>".$row['phone']."</p></br>"; ;
            
     /*   printf ("%s (%s)\n", $row['name'], $row['phone'])     */
        }
?>
</div>
</main>

</html>