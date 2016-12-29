<?php

/* Принимаем данные из формы */
    $name = $_POST["name"];
    $page_id = $_POST["page_id"];
    $text_comment = $_POST["text_comment"];
    $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
    $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности
    $mysqli = new mysqli("localhost", "root", "", "my_bd");// Подключается к базе данных
    mysqli_query($mysqli, "SET NAMES utf8");
    $mysqli->query("INSERT INTO `comments` (`name`, `page_id`, `text_comment`) VALUES ('$name', '$page_id', '$text_comment')");// Добавляем комментарий в таблицу
    header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно


    $page_id = 1;// Уникальный идентификатор страницы (статьи или поста)
    $mysqli = new mysqli("localhost", "root", "", "my_bd");
    mysqli_query($mysqli, "SET NAMES utf8");
    $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
    while ($row = $result_set->fetch_assoc())
    {
        print_r($row); //Вывод комментариев
        echo "<br />";
    }
?>