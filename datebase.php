<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function saveForm($your_name, $surname, $years, $genus, $email, $password, $repassword)
{

    $host = 'localhost'; // адрес сервера
    $database = 'usersgroup'; // имя базы данных
    $user = 'root'; // имя пользователя
    $password = ''; // пароль

    $data = [
        'your_name' => $your_name,
        'surname' => $surname,
        'years' => $years,
        'genus' => $genus,
        'email' => $email,
        'password' => $password,
        'repassword' => $repassword,
    ];

    $dbh = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $sql = "INSERT INTO `userservis` (id, name,surname, years,genus, email, password, repassword) VALUES (NULL,:your_name,:surname,:years,:genus,:email,:password,:repassword)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
}

function dispaBlock()
{

    $host = 'localhost';
    $database = 'homesql';
    $user = 'root';
    $password = '';

    $dbh = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $sql = "SELECT * FROM block WHERE theme = 'bartik' AND module ='system'";

    $stmt = $dbh->query($sql);
    $block = $stmt->fetchAll();

    foreach ($block as $row) {
        echo $row['module'] . ' ' . $row['theme'] . '<br>';
    }

}

function dispaNode()
{

    $host = 'localhost';
    $database = 'homesql';
    $user = 'root';
    $password = '';

    $dbh = new PDO("mysql:host=$host;dbname=$database", $user, $password);

    $sql = "SELECT * FROM node WHERE type = 'delivery' AND title LIKE '8046%' AND MONTH(FROM_UNIXTIME(created)) = 10";

    $stmt = $dbh->query($sql);
    $node = $stmt->fetchAll();

    foreach ($node as $row) {
        echo $row['type'] . '    ' . $row['title'] . '   ' . date('Y-m-d', $row['created']) . '<br>';
    }

}


function dispaUserNode()
{

    $host = 'localhost';
    $database = 'homesql';
    $user = 'root';
    $password = '';

    $dbh = new PDO("mysql:host=$host;dbname=$database", $user, $password);

    $sql = "SELECT p2.name as user_name, p2.mail as mail, p1.* FROM node as p1 JOIN users as p2 ON p1.uid = p2.uid AND p2.name = 'serhiy' LIMIT 0, 20";

    $stmt = $dbh->query($sql);
    $node = $stmt->fetchAll();

    foreach ($node as $row) {
        echo $row['user_name'] . '  ' . $row['mail'] . '  ' . $row['type'] . '    ' . $row['title'] . '   ' . date('Y-m-d', $row['created']) . '<br>';
    }

}


function dispaCache()
{

    $host = 'localhost';
    $database = 'homesql';
    $user = 'root';
    $password = '';

    $dbh = new PDO("mysql:host=$host;dbname=$database", $user, $password);

    $sql = "SELECT * FROM variable WHERE name LIKE  'cache_%'";


    $stmt = $dbh->query($sql);
    $node = $stmt->fetchAll();

    foreach ($node as $row) {
        echo $row['name'] . '<br>';
    }

}
//variable



