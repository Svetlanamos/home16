<?php

require_once 'datebase.php';

/* Проверка выводимых данных, защита от скриптов */
$your_name = htmlspecialchars($_POST["name"]);
$surname = htmlspecialchars($_POST["surname"]);
$years = htmlspecialchars($_POST["years"]);
$genus = htmlspecialchars($_POST["genus"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
$repassword = htmlspecialchars($_POST["repassword"]);
/* e-mail адресата */
$myemail = "myemail@mail.ru";
/* Проверяем заполнены ли обязательные поля ввода, используя check_input
функцию */
$your_name = check_input($_POST["name"], "Введіть ім'я");
$surname = check_input($_POST["surname"], "Введіть прізвище");
$years = check_input($_POST["years"], "Введіть ваш вік");
$genus = check_input($_POST["genus"], "Введіть вашу стать");
$email = check_input($_POST["email"], "Ваш email");
$password = check_input($_POST["password"], "Password");
$repassword = check_input($_POST["repassword"], "Re-password");
/* Проверяем правильно ли записан e-mail */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
    show_error("<br /> Е-mail не дійсний!!!");
}


saveForm($your_name, $surname, $years, $genus, $email, $password, $repassword);

echo "Форма сохранена";


/* Создаем новую переменную, присвоив ей значение */
$message_to_myemail = "Доброго дня!
Повідомлення відправлене!
Відправник: $your_name
Прізвище: $surname
E-mail: $email
КІнець зв'язку!";
/* Отправляем сообщение, используя mail() функцию */
$from = "From: $your_name <$email> \r\n Reply-To: $email \r\n";
mail($myemail, $surname, $message_to_myemail, $from);
?>
<p>Ваше сообщение было успешно отправлено!</p>
<p>На <a href="index.php">Главную >>></a></p>
<?php
/* Если при заполнении формы были допущены ошибки сработает
следующий код: */
function check_input($data, $problem = "")
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0) {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
    ?>
    <html>
    <body>
    <p>Пожалуйста исправьте следующую ошибку:</p>
    <?php echo $myError; ?>
    </body>
    </html>
    <?php
    exit();
}

?>


