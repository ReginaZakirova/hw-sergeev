<?php

$mysqli = new mysqli("127.0.0.1", "root", "root");

$sql = "CREATE DATABASE Segeev_DB";
if (mysqli_query($mysqli, $sql)) {
    echo "База данных создана";
}
$mysqli->query("USE Segeev_DB");

//create table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";
if ($mysqli->query($sql) === TRUE) {
    echo "Таблица Users создана<br>";
} else {
    echo $mysqli->error.'<br>';
}
$sql = "INSERT INTO users (login, password) 
        VALUES ( 'admin','".base64_encode('admin')."'), 
               ('root', '".base64_encode('root')."');";
$mysqli->query($sql);



?>