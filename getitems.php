<?php
require('db.php');
include 'db.php';

session_start();
$username = $_SESSION['username'];
$return_arr = array();

$query    = "SELECT * FROM `items` WHERE username='$username' ";

$result   = mysqli_query($con, $query);

while($row = mysqli_fetch_array($result)){
    $name = $row['name'];
    $salary = $row['salary'];

    $return_arr[] = array("name" => $name,
                    "salary" => $salary);
}
// echo $username;
// Encoding array in JSON format
echo json_encode($return_arr);