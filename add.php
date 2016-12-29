<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/assets/css/ie8.css" /><![endif]-->
</head>
<body class="landing">
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <nav id="nav">
            <ul>
                <li><a href="http://localhost/Coursework0/">Главная</a></li>
                <li><a href="guests.php">Гостевая страница</a></li>
                <li><a href="kabinet.php">Личный кабинет</a></li>
                <li><a href="about_author.php">Об авторах</a></li>
                <li><a href="add.php">Добавление новости</a></li>
                <li><a href="news.php">Новости</a></li>
                <li><a href="register.php" class="button">Регистрация</a></li>
            </ul>
        </nav>
    </header>
</div>



<title>Добавление новости</title>

<?php
// зєднання з базою даних
$mysqli = mysqli_connect ("localhost", "root", "", "my_bd");
mysqli_query($mysqli, "SET NAMES utf8");

?>


<br><br><br>

<form name="addnews" action="addnews.php" method="post">
    <style>
        p { text-indent: 25px; }
    </style><br><br>
    <p>
        <label>  Имя автора: </label>
        <input type="text" name="name" />
    </p>
    <p>
        <label>  Новость: </label>
        <br />
        <textarea name="text" cols="30" rows="10"></textarea>
    </p>
    <p>
        <input type="submit" value="Отправить" />
    </p>
</form>