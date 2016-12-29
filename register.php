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

<body>

<title>Регистрация пользователя</title>

<?php

$mysqli = mysqli_connect ("localhost", "root", "", "my_bd");

if (isset($_POST['submit']))
{
    $username = $_POST['username'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $r_password = $_POST['r_password'];
    if($password == $r_password)
    {
        $password = md5($password);
        $mysqli = new mysqli("localhost", "root", "", "my_bd");// Подключается к базе данных
        $mysqli->query("INSERT INTO `registr` (`username`, `login`, `password`) VALUES ('$username', '$login', '$password')");

    }else

    {
        die('Пароли не совпадают!');
    }
    echo 'Вы зарегистрировались!';
}

if (isset($_POST[`enter`])) {
    $e_login = $_POST['e_login'];
    $e_password = md5($_POST['e_password']);

    $res = $mysqli->query("SELECT * FROM `registr` WHERE login='$e_login'");
    $user_data = mysqli_fetch_array($query);
    while ($row = $res->fetch_assoc())
        $mysqli = mysqli_connect("localhost", "root", "", "my_bd");
    mysqli_query($mysqli, "SET NAMES utf8");
    if ($user_data['password'] == $e_password) {
        session_start();
        $_SESSION['name'] = $e_login;
    } else {
        echo 'Неверный логин или пароль!';
    }

    if (isset($_POST['logout'])) ;
    unset($_SESSION['name']);
    session_destroy();
}
?>


<form method = "post" action = "register.php">
    <br><br><br>
    <input type = "text" name = "username" placeholder=" Username" required/><br><br>
    <input type = "text" name = "login" placeholder=" Login" required/><br><br>
    <input type = "password" name = "password" placeholder=" Password" required/><br><br>
    <input type = "password" name = "r_password" placeholder=" Repeat Password" required/><br><br>
    <input type = "submit" name = "submit" value = "Зарегистрироваться"/><br>
</form>

<?php

if(isset($_SESSION['name']))
{
    echo 'Вы вошли!
    <form method="post" action="register.php">
    <input type="submit" name="logout" value="Выйти"
    </form>';
}
else
{
    echo'<form method = "post" action = "register.php">
    <br><br><br>
    <input type = "text" name = "e_login" placeholder=" Login" required/><br><br>
    <input type = "password" name = "e_password" placeholder=" Password" required/><br><br>
    <input type = "submit" name = "enter" value = "Войти"/>
    </form>';
}

?>
