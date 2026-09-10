<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <style>
        @keyframes FadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
}
@keyframes fadeInText {
  from {
    transform: translateY(100px);
    opacity: 0;
  } to {
    transform: translateY(0);
    opacity: 1;
  }
}
.fade-in-element {
    animation: FadeIn 500ms;
}
.fadeInText {
    animation: fadeInText 300ms 0ms forwards;
}
#loader {
    border: 12px solid #444444;
    border-radius: 50%;
    border-top: 12px solid #206C48;
    width: 70px;
    height: 70px;
    animation: spin 1s linear infinite;
}
.center {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    margin: auto;
}
@keyframes spin {
    100% {
        transform: rotate(360deg);
    }
}
#slider {
  width: 600px;
  height: 400px;
  overflow: hidden;
}
        .container {
  display: inline-block;
  cursor: pointer;
}

.bar1, .bar2, .bar3 {
width: 14px;
height: 2px;
background-color: #206C48;
margin: 4px 0;
transition: 0.4s;
}

.change .bar1 {
transform: translate(0, 6px) rotate(-45deg);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
transform: translate(0, -6px) rotate(45deg);
}
#menu li {
    font-size: 2vw;
    padding: 10px;
    font-weight: 800;
    width: 100%;
}
#menu a li:hover{
    width: 100%;
    background-color: #206C48;
    color: white;
}
#menu ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
    text-align: center;
}
#lgr-menu {
    display: none;
}
#logo {
    width: 100%;
}
a {
    text-decoration: none;
    color: #206C48;
}
#copyright_container {
    text-align: center; 
    margin-top: 400px;
}
#copyright {
    font-size: 1vw;
    color: black;
}
#not_found {
    width: 30%;
    height: 30%;
    margin-top: 100px;
    margin-right: auto;
    margin-left: auto;
    padding: 50px;
    box-shadow: 10px 10px 5px lightblue;
}
.msg {
    font-size: 3vw;
    text-align: center;
}
#button {
    padding: 5px;
    font-size: 2vw;
    font-weight: 600;
    color: white;
    background-color: #206C48;
    border: 2px solid white;
    border-radius: 10px;
}
@media only screen and (min-width: 768px) {
    #lgr-menu {
        display: inline;
    }
    #lgr-menu ul {
    display: flex;
    list-style-type: none;
    width: 100%;
    padding: 0;
}
#lgr-menu li {
    margin-top: 5px;
    margin-right: 40px;
    padding: 2px;
    font-size: 1vw;
    font-weight: 800;
}
    .container {
        display: none
    }
    #logo {
        width: 60%;
    }
}
    </style>
</head>
<body style="margin: 0px; color: #206C48;">
    <div id="loader" class="center"></div>
    <div style="display: flex; width: 100%;">
    <div id="logo">
        <img src="./images/realty2.png" alt="logo" width="50px" height="50px" style="margin: 2px;">
    </div>
    <div id="lgr-menu" style="color: #206C48; width: 50%;">
        <ul style="float: right; width: 100%;">
            <a href="index.html"><li class="menu_item">Home</li></a>
            <a href="properties.html"><li class="menu_item">Properties</li></a>
            <a href="sign_up.html"><li class="menu_item">Login/Sign Up</li></a>
            <a href="agent.html"><li class="menu_item">Become an Agent</li></a>
            <a href="about.html"><li class="menu_item">About Us</li></a>
        </ul>
    </div>
    <div class="container" onclick="myFunction(this)" style="float: right; margin: 10px;">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
      </div>
    <div id="menu" style="background-color: white; color: #206C48; width: 100%; 
    height: fit-content; display: none; position: absolute;
     margin-top: 0px; z-index: 999;">
        <ul>
            <a href="index.html"><li>Home</li></a>
            <a href="properties.html"><li>Properties</li></a>
            <a href="sign_up.html"><li>Login/Sign Up</li></a>
            <a href="agent.html"><li>Become an Agent</li></a>
            <a href="about.html"><li>About Us</li></a>
        </ul>
    </div>
        <?php
        $servername = "localhost";
        $username = "homesha1_admin";
        $password = "Admin.HomesHavenEstate";
        $dbname = "homesha1_homeshavenestate";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        $agentID = $_REQUEST['agent'];
        $db =  "agents";
        $detail = $_REQUEST['detail2'];
        $replace1 = $_REQUEST['name_detail'];
        $replace2 = $_REQUEST['phone_detail2'];
        $replace3 = $_REQUEST['email_detail2'];
        $replace4 = $_REQUEST['bank'];
        $replace5 = $_REQUEST['acc_no'];
        $replace6 = $_REQUEST['acc_name'];
        $replace7 = $_REQUEST['referrer'];
        if (empty($replace1)) {
            
        } else {
            $replace = $replace1;
        } 
        if (empty($replace2)) {
            
        } else {
            $replace = $replace2;
        }
        if (empty($replace3)) {
            
        } else {
            $replace = $replace3;
        }
        if (empty($replace4)) {
            
        } else {
            $replace = $replace4;
        }
        if (empty($replace5)) {
            
        } else {
            $replace = $replace5;
        }
        if (empty($replace6)) {
            
        } else {
            $replace = $replace6;
        }
        if (empty($replace7)) {
            
        } else {
            $replace = $replace7;
        }

                $sql = "UPDATE $db SET $detail = '$replace' WHERE id = $agentID";
                $sql_check = "SELECT * FROM $db WHERE id = ?"; 
                $stmt = mysqli_prepare($conn, $sql_check); 
                mysqli_stmt_bind_param($stmt, "s", $agentID); 
                mysqli_stmt_execute($stmt); 
                $result1 = mysqli_stmt_get_result($stmt); 
                 
                if (mysqli_num_rows($result1) > 0) {
                if(mysqli_query($conn, $sql)){
                    echo '<div id="not_found">';
        echo '<h1 class="msg">' . 'Successful!' . '</h1>';
        echo '<h2 class="msg">' . 'Would you like to correct more?' . '</h2>';
        echo '<div class="msg">';
            echo '<button id="button" onclick="window.history.back()">';
               echo 'Yes, I want to.';
            echo '</button>';
        echo '</div>';
        ?>
        <div class="msg" style="margin-top: 10px;">
            <button id="button" onclick='window.location="./admin_login.html"'>
               No, I'm okay.
            </button>
                </div>
        </div>
        <?php
                } else{
                    echo '<h1 style="text-align: center; margin-top: 100px; margin-bottom: 100px; font-size: 2vw; color: red;">' . "An error occured. Please try again." . '</h1>';
                }
            } else {
                echo '<h1 style="text-align: center; margin-top: 100px; margin-bottom: 100px; font-size: 2vw; color: red;">' . "Client's record does not exist. Please verify and try again." . '</h1>';
            }
        
        // Close connection
        mysqli_close($conn);
        ?>
        <div id="copyright_container">
        <small id="copyright">&copy; 2025 Homes Haven Realty Solutions</small>
        </div>
        <script>
        var loader = document.getElementById("loader");
window.addEventListener("load", function() {
  loader.style.display = "none";
})
    </script>
    <script src="script.js">
    </script>
</body>
</html>