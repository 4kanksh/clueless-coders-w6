<?php
    //start session
    session_start();
    //creating constants to store non repating data
    define('HOMEURL','https://localhost/dog/');
    define('LOCALHOST','loaclhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','cat');

$conn = mysqli_connect('localhost', 'root', '') or die(mysql_errno()); //database coonection
$db_select = mysqli_select_db($conn, 'cat') or die(mysql_error());   //selectin database

?>
