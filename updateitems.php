<?php
require('db.php');
session_start();

$item_name = $_POST['item_name'];
$item_salary = $_POST['item_salary'];
$username = $_SESSION['username'];

$query    = "INSERT into `items` (name, salary, username) VALUES ('$item_name', '$item_salary', '$username')";
$result   = mysqli_query($con, $query);