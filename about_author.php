<?php
include_once('setting.php');
$connection = mysqli_connect(HOST, USER, PASSWORD, DB);
mysqli_query($connection, "SET NAMES utf8");
$query = mysqli_query($connection, "SELECT `name` FROM `about_author`");