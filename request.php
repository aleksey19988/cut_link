<?php
include 'tokenGenerator.php';

//Устанавливаем корректный часовой пояс для последующего скрипта
date_default_timezone_set('Europe/Moscow');

//Подключаемся к БД
$connect = new mysqli('localhost', 'root', '', 'cut_link');

//Проверяем, успешно ли подключение
if ($connect->connect_error !== null) {
    die("Подключение завершилось с ошибкой!:" . mysqli_connect_error());
}

//Если запрос не пустой
if (!empty($_GET['inputLink'])) {
    $requestLink = $_GET['inputLink'];//Ссылка из input-a
    $token = tokenGenerator();//Генерирую токен
    $datetime = date("F j, Y, g:i a");//Формирую дату и время создания короткой ссылки
    $writeToDb = $connect->query("INSERT INTO `links` (link, token, datetime) VALUES ('$requestLink', '$token', '$datetime')");//Записываю данные в БД
    //Если при записи в БД что-то пошло не так
    if (!$writeToDb) {
        echo "<script type='text/javascript'>alert('Ошибка!');</script>";
    }
} else {
    $URI = $_SERVER['REQUEST_URI'];
    $token = substr($URI, 10);

    //Проверяем, есть ли такой токен в БД
    $sel = $connect->query("SELECT * FROM links WHERE token = '$token'")->fetch_assoc();

    if (empty($sel)) {
        echo "<script type='text/javascript'>alert('Ссылка не найдена в базе данных. Попробуйте ещё раз');</script>";
    } else {
        header("Location: " . $sel['link']);
    }
}

$links = $connect->query("SELECT * FROM links")->fetch_all();
