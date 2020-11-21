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
<main>
<!-- конец верстка старя хеаддер+меню--> 
	<!--таблица как в базе данных aderess--> 
	<div class="container">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Имя</th>
      <th scope="col">Адрес</th>
      <th scope="col">Телефон</th>
    </tr>
  </thead>
    <tbody>
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
</tbody>
	</table>
</main>


<div class="container">
    <div class="row mt-4">
      <div class="col-md-8 mx-auto bg-light rounded p-4">
        <h5 class="text-center font-weight-bold">Poisk po baze</h5>
        <hr class="my-1">
        <h5 class="text-center text-secondary">Vvedite imya ili telefon</h5>
        <form action="details.php" method="post" class="p-3">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." autocomplete="off" required>
            <div class="input-group-append">
              <input type="submit" name="submit" value="Search" class="btn btn-info btn-lg rounded-0">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5" style="position: relative;margin-top: -38px;margin-left: 215px;">
        <div class="list-group" id="show-list">
          <!-- Here autocomplete list will be display -->
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>

<div class="container">
<footer> 
	
</div>
</footer>
	<div class="black"></div>
</body>
</html>