<?php

include_once('setting.php');

$connection = mysqli_connect(HOST, USER, PASSWORD, DB);

mysqli_query($connection, "SET NAMES utf8");

if(!$connection) exit("Ошыбка подключения к БД!");

$query = mysqli_query( $connection, "SELECT * FROM `auto` ORDER BY time DESC");

