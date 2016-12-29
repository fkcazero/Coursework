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

<title>Гостевая страница</title>


<form name="comment" action="comment.php" method="post">
    <style>
p { text-indent: 25px; }
    </style>
    <br><br><br>
    <p>
        <label>  Имя:</label>
        <input type="text" name="name" />
    </p>
    <p>
        <label>  Комментарий:</label>
        <br />
        <textarea name="text_comment" cols="30" rows="10"></textarea>
    </p>
    <p>
        <input type="hidden" name="page_id" value="2" />
        <input type="submit" value="Отправить" />
    </p>
</form>

<footer id="footer">
    <ul class="icons">
        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
        <script src="//yastatic.net/share2/share.js"></script>
        <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter"></div>
    </ul>
</footer>
