<?php

//include_once('setting.php');

$connect = mysqli_connect(`localhost`,`root`,``,`my_db`);

mysqli_query($connect, "SET NAMES utf8");

if(!$connect) exit("Ошыбка подключения к БД!");

$query = mysqli_query( $connect, " SELECT * FROM `auto` ");

?>