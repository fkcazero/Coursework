<?php

//include_once('setting.php');

$connect = mysqli_connect(`localhost`,`root`,``,`my_db`);

//mysqli_query($connection, "SET NAMES utf8");

if(!$connect) exit("Ошыбка подключения к БД!");

//if (isset($_POST[submit]))
{

}
?>


<form method = "post" action = "register.php"
    <input type = "text" name = "username" required/><br>
    <input type = "text" name = "login"required/><br>
    <input type = "text" name = "password" required/><br>
    <input type = "text" name = "r_password" required/><br>
    <input type = "submit" name = "submit" value = "Register"/>
</form>




