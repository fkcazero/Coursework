<?php

include_once('setting.php');

$connection = mysqli_connect(HOST, USER, PASSWORD, DB);

mysqli_query($connection, "SET NAMES utf8");

if(!$connection) exit("Ошыбка подключения к БД!");

$query = mysqli_query( $connection, "SELECT `id`, `title`, `file`, `date`, `time`, `author` FROM `auto` ORDER BY time DESC");

