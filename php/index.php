

<?php

include_once('setting.php');

$connection = mysqli_connect(HOST, USER, PASSWORD, DB);

if(!$connection) exit("Ошыбка подключения к БД!");

$query = mysqli_query ( $connection,  'SELECT * FROM `auto` ' );

while ($row = mysqli_fetch_assoc($query))

{

    echo "<br>$row[title]";
    echo "<br>$row[text]";
}

?>