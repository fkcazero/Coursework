<?php
/**
 * Created by PhpStorm.
 * User: Anatolii
 * Date: 2016-12-18
 * Time: 16:38
 */

include_once('setting.php');

$connection = mysqli_connect(HOST, USER, PASSWORD, DB);

mysqli_query($connection, "SET NAMES utf8");

if(!$connection) exit("Ошыбка подключения к БД!");

$query = mysqli_query( $connection, "SELECT * FROM `auto` ORDER BY time DESC");

