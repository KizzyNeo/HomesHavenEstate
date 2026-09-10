<!DOCTYPE html>
<html>
<head>
    <title>Customer's Details</title>
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
        
        $address = $_REQUEST['address'];
        $village = $_REQUEST['village'];
        $town = $_REQUEST['town'];
        $lga =  $_REQUEST['lga'];
        $state = $_REQUEST['state'];
        $nationality = $_REQUEST['nationality'];
        $residence =  $_REQUEST['residence'];
        $occupation = $_REQUEST['occupation'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $estate =  $_REQUEST['estate'];
        $plots = $_REQUEST['plots'];
        $status = 'No';
        $completed = 'No';
        $signature = $_REQUEST['signature'];
        $kin_name =  $_REQUEST['kin-name'];
        $kin_address = $_REQUEST['kin-address'];
        $kin_phone = $_REQUEST['kin-phone'];

        $sql = "SELECT name, email, plots_bought from buyers WHERE email = '$email'";
        if (mysqli_query($conn, $sql)) {
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if ($row['plots_bought'] === 0) {
                $sql2 = "INSERT INTO buyers (address, village, town, lga, state, nationality, residence, occupation, email, phone, estate, plots, signature, kin_name, kin_address, kin_phone, status, completed) VALUES ('$address', '$village', '$town', '$lga', '$state', '$nationality', '$residence', '$occupation', '$email', '$phone', '$estate', '$plots', '$signature', '$kin_name', '$kin_address', '$kin_phone', $status, $completed)";
        if(mysqli_query($conn, $sql2)){
            header('Location: successful.html', true);
        } else{
            echo "ERROR: Hush! Sorry $sql2. " 
                . mysqli_error($conn);
        }
            } else {
                $sql3 = "UPDATE buyers SET 
        address = '$address', 
        village = '$village', 
        town = '$town', 
        lga = '$lga', 
        state = '$state', 
        nationality = '$nationality', 
        residence = '$residence', 
        occupation = '$occupation', 
        email = '$email', 
        phone = '$phone', 
        estate = '$estate', 
        plots = '$plots', 
        signature = '$signature', 
        kin_name = '$kin_name', 
        kin_address = '$kin_address', 
        kin_phone = '$kin_phone'
        WHERE email = '$email'";
        if (mysqli_query($conn, $sql3)) {
            header('Location: successful.html', true);
        } else {
            echo "ERROR: Hush! Sorry $sql3. " 
                . mysqli_error($conn);
        }
        
            }
        } else {
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
</body>
</html>