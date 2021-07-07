<?php
require "db_connection.php";

$name = $_POST['name'];
$age = $_POST['age'];
$image = $_POST['image'];
$hobbies = $_POST['hobbies'];



if(empty($name) || empty($age)  && empty($image) || empty($hobbies))
    die("You didn't enter all the data");

$query = "INSERT INTO survey (name, age, image, hobbies) VALUES('$name', '$age', '$image', '$hobbies')";
$query_run = mysqli_query($conn, $query);

if(!$query_run)
    die("Database error");


header("Location: test.php");