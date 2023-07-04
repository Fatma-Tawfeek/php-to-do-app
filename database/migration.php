<?php 

// connection
$conn = mysqli_connect("localhost", "root", "");

if(!$conn) {
    echo "connect error" . mysqli_connect_error($conn);
}

$sql = "CREATE DATABASE IF NOT EXISTS todoapp";

// to make a query
mysqli_query($conn, $sql);

mysqli_close($conn);


// create tables
$conn = mysqli_connect("localhost", "root", "", "todoapp");

if(!$conn) {
    echo "connect error" . mysqli_connect_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS tasks(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(200) NOT NULL
)";

// to make a query
$result = mysqli_query($conn, $sql);

echo mysqli_error($conn);

mysqli_close($conn);