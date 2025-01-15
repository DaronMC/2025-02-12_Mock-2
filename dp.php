<?php
    $connection = mysqli_connect("localhost" ,"root", "", "test") // servername, username, password, database name
 
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Please try again";
    }
 
    else{
        echo "Connected to the server successfully";
    }