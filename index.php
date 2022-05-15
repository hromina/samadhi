<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'conn.php';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<title>МКЭ</title>
<style>
body {
	background:#88ffff;
	}
</style>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb3 bg-white border-bottom shadow-sm">
<img src="/img/мкэ.png" align="left" width="300" height="200" class="rounded-circle">
<h2 class="my-0 mr-md-auto font-weight-normal">Метод конечных элементов</h2>
<nav class="my-2 my-md-0 mr-md-3">
 <a class="p-2 text-dark" href="#">Главная</a>
 <a class="p-2 text-dark" href="#">Сборник задач</a>
 <a class="p-2 text-dark" href="#">Теоретический материал</a>
 </nav>
 <a class="btn btn-outline-primary" href="reg.php">Регистрация</a>
 </div>
 <div class="container mt-5">
 <h3 class="mb-5">Статьи</h3>
 <form name="connect" action="rap.php" method="post">
					<input type="hidden" name="script" value="conn.php">
					<input type="submit" value="connect">
					</form>
 <div class="content"><center><b><i>База данных</i></b><center>
					<?php if (!(isset($_POST['script']))) 
					{
					print ("Добро пожаловать, нажмите Connect"); 
					}
					if (isset($_POST['script'])) 
					{
					include $_POST['script']; 
					}
					?></div> 
 <div class="d-flex flex-wrap"> 
 <?php
  for($i = 0;$i<3;$i++):
 ?>
 <div class="card mb-4 rounded-3 shadow-sm">
  <div class="card-header py-3">
   <h4 class="my-0 fw-normal"></h4>
 </div>
 <div class="card-body">
 <img src="img/<?php echo ($i) ?>.png" class="img-thumbnail">
 <ul class="list-unstyled mt-3 mb-4">
 <li>Хотите больше знать? Нажмите кнопку ниже!</li>
 </ul>
 <button type="button" class="w-100 btn btn-lg btn-outline-primary">Читать</button>
 </div>
 </div>
<?php endfor; ?>
</div>
</div>
<footer class="container pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">© Мария Хромина :3 2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Контакты</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a> Наш адрес:</a></li>
          <li class="mb-1"><a>Г.Тула, ул.Фонковая, кв47</a></li>
          <li class="mb-1"><a>Наш instagram:</a></li>
          <li class="mb-1"><a>hromosomina</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>О нас</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a>Этот замечательный сайт создан Хроминой Марией</a></li>
        </ul>
      </div>
      </div>
  </footer>
</body>
</html>