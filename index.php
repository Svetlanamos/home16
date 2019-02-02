<?php
//require_once 'datebase.php';
//require_once 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<h1>Форма</h1>
<form action="function.php" method="post" target="_blank" name="f1">
    Ім'я користувача <input type="text" placeholder="Введіть ім'я" name="name" required=""><br><br>
    Прізвище користувача <input type="text" placeholder="Введіть прізвище" name="surname" required=""><br><br>
    Вік користувача <input type="text" placeholder="Введіть ваш вік" name="years" required=""><br><br>
    Стать користувача <input type="text" placeholder="Введіть вашу стать" name="genus" required=""><br><br>
    Електронна пошта <input type="email" placeholder="Ваш email" name="email" required="required"><br><br>
    Введіть пароль <input type="text" placeholder="Password" name="password" required=""><br><br>
    Підтвердіть пароль <input type="text" placeholder="Re-password" name="repassword" required=""><br><br>
    <input type="submit" value="Отправить" name="sab">
</form>


<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>