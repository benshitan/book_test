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
<main><!-- поиск+результаты-->
<div class="container">
<form method="post">
	<input type="text" name="search" class="search" ><input type="submit" name="submit" value="search type" >
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
<footer> 
	<div class="container">
</div>

</footer>
	<div class="black"></div>
</body>
</html>