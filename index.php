
<title>Автоновости</title>

<?php

include_once('setting.php');

$connection = mysqli_connect(HOST, USER, PASSWORD, DB);
mysqli_query($connection, "SET NAMES utf8");

if(!$connection) exit("Ошыбка подключения к БД!");

$query = mysqli_query ( $connection,  'SELECT * FROM `auto` ' );

while ($row = mysqli_fetch_assoc($query))

{?>

    <h1><?php echo $row['title']?></h1>
    <p><?php echo $row['text']?></p>
    <p>Дата публикации: <?php echo $row['date']?> / <?php echo $row['time']?></p>
    <p>Автор новости: <?php echo $row['author']?></p>

    <hr />

<?php }?>
