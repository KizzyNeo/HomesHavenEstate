<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer SignUp</title>
    <style>
        .note {
            font-size: 2vw;
            text-align: center;
            margin-top: 30px;
        }
    </style>
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
        
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $password = $_REQUEST['password'];
        $referrer =  $_REQUEST['referrer'];

        $sql = "INSERT INTO buyers (name, email, phone, password, referrer) VALUES ('$name', '$email', '$phone', '$password', '$referrer')";
        
        if(mysqli_query($conn, $sql)){
            header('Location: login.html', true);
        } else{
            echo '<h2 class="note">' . 'Unsuccessful. Please try again.'. '</h2>';
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
</body>

</html>
