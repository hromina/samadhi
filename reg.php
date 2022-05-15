<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Регистрация</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-4">
<h1>Регистрация</h1>
<img src="/img/мкэ.png" align="left" width="300" height="200"> 
<form action="check.php" method="post">
<input type="text" class="form-control" name="логин"
id="логин" placeholder="Введите логин"><br>
<input type="пароль" class="form-control" name="пароль"
id="pass" placeholder="Введите пароль"><br>
<input type="text" class="form-control" name="ФИО"
id="ФИО" placeholder="Введите ФИО"><br>
<input type="text" class="form-control" name="ФИО"
id="email" placeholder="Введите e-mail"><br>
<h3>Введите код с картинки:</h3>
<br/>
 <img style="border: 1px solid gray; background: url('bg_capcha.png');" src = "captcha.php" width="120" height="40"/>
<br/>

	 <input type="text" name="capcha" />
	 <button class="btn btn-success"type="submit">Зарегистировать</button>
</form>
</div>
</body>
</html>