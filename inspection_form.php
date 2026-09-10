<!DOCTYPE html>
<html>
<head>
    <title>Request Inspection</title>
</head>
<body>
        <?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "wccrmokp_user", "wccrmokpoko.12", "wccrmokp_messages");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];
        
        $sql = "INSERT INTO messages (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";
        
        if(mysqli_query($conn, $sql)){
            $recipient = "kizzyneo@gmail.com";

        // Additional headers
        // $headers = "From: $name <$email>";
    $subject = 'New Message';
    $headers = 'From: info@homeshaven.com.ng'       . "\r\n" .
                 'Reply-To: info@homeshaven.com.ng' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

        // Send email
        if (mail($recipient, $subject, $message, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email. Please try again later.";
        } 
        
    } else {
            // Not a POST request, display a 403 forbidden error
            header("HTTP/1.1 403 Forbidden");
            echo "You are not allowed to access this page.";
        }
        // Close connection
        mysqli_close($conn);
        ?>
</body>

</html>
