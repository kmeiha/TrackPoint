<?php
    $con = mysqli_connect("localhost","root","","project_db","3306");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>