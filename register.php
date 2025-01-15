<?php
    require('db.php');
 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $md5password = md5($password);
 
            $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$md5password', '$email')"
   
            $result = mysqli_query($connection, $query);
 
            if ($result) {
                echo "User has been created";
            }
 
            else {
                echo "There was a problem, try again";
            }
   
   
   
   
    }
 
?>