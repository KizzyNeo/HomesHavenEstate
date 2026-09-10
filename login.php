<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Login</title>
</head>

<body>
        <?php

$servername = "localhost";
       $username = "homesha1_admin";
       $password = "Admin.HomesHavenEstate";
       $dbname = "homesha1_homeshavenestate";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        $email =  $_REQUEST['email'];
        $password = $_REQUEST['password'];
        
        $sql = "SELECT email, password FROM buyers WHERE email = '$email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        // Taking all 5 values from the form data(input)

        if ($email === $row['email'] && $password === $row['password']) {
            $_SESSION['email'] = '$email';
            header('Location: customer.php', true);
        } else {
            header('Location: not_found.html', true);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
</body>

</html>
