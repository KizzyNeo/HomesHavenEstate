<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Agents' SignUp</title>
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
        $bank = $_REQUEST['bank'];
        $acc_no =  $_REQUEST['acc_no'];
        $acc_name = $_REQUEST['acc_name'];

        $sql = "INSERT INTO agents (name, email, phone, bank, acc_no, acc_name) VALUES ('$name', '$email', '$phone', '$bank', '$acc_no', '$acc_name')";
        
        if(mysqli_query($conn, $sql)){
            header('Location: successful3.html', true);
        } else{
            echo '<h2 class="note">' . 'Unsuccessful. Please try again.'. '</h2>';
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
</body>

</html>
