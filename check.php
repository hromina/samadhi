<?php
session_start();
if($_POST['capcha'] == $_SESSION['capcha']) 
{
$логин = filter_var(trim($_POST['логин']),FILTER_SANITIZE_STRING);
$пароль = filter_var(trim($_POST['пароль']),FILTER_SANITIZE_STRING);
$ФИО = filter_var(trim($_POST['ФИО']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
if (mb_strlen($login)<5 || mb_strlen($login)>90)
  {
  echo "Недопустимая длина логина";
  exit;
  }
else if (mb_strlen($name)<3 || mb_strlen($name)>50)
  {
  echo "Недопустимая длина имени";
  exit;
  }
  else if (mb_strlen($pass)<2 || mb_strlen($pass)>100)
    {
    echo "Недопустимая длина пароля(от 2 до 100 символов)";
    exit;
    }
$mysql = new mysqli('localhost','root','root','регистрация');
$mysql->query("INSERT INTO `users` ( `логин`, `пароль`, `ФИО`, `email`) 
VALUES ('$логин', '$пароль', '$ФИО', '$email')") ;

$mysql->close();
header('location: /' );
}
else  
{
	print "Неверная капча";
}

 ?>

