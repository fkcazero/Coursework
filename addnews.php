<?php

$name = $_POST["name"];
$text = $_POST["text"];
$name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
$text = htmlspecialchars($text);// Преобразуем спецсимволы в HTML-сущности
$mysqli = new mysqli("localhost", "root", "", "my_bd");
mysqli_query($mysqli, "SET NAMES utf8");
$mysqli->query("INSERT INTO `news` (`name`, `text`) VALUES ('$name', '$text')");

header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно

$mysqli = new mysqli("localhost", "root", "", "my_bd");
mysqli_query($mysqli, "SET NAMES utf8");
$result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'");
while ($row = $result_set->fetch_assoc())
{
    print_r($row);
    echo "<br />";
}
?>