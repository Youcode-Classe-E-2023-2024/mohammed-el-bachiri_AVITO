<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'avito_database';

$connect = mysqli_connect($hostname, $username, $password, $database);

if($connect == false){
    die("Could not connect to Database !");
}
$announcement_table = "CREATE TABLE IF NOT EXISTS announcement(ID INT PRIMARY KEY AUTO_INCREMENT,  Title VARCHAR(100), Category VARCHAR(30), Description TEXT, Price INT)";

$result = mysqli_query($connect, $announcement_table);

if($result == false){
    die("Could not Add Table !");
}

?>