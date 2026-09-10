<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
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
.change .arrow {
    transform: rotate(180deg);
    width: 2vw; 
    height: 2vw; 
    float: right;
    margin-left: 10px; 
}
.arrow {
    width: 2vw; 
    height: 2vw; 
    float: right; 
    margin-left: 10px;
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
.service_icon {
    width: 3vw;
    height: 3vw;
    margin-right: 5px;
}
.service {
    width: 50%;
    margin-left: auto;
    margin-right: auto;
}
.heading {
    font-size: 2vw;
}
.description {
    width: 50%;
    margin-right: auto;
    margin-left: auto;
    text-align: center;
    font-size: 2vw;
    font-weight: 800;
}
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
#contact_container {
    margin-left: 5px;
    margin-top: 50px;
}
#contact_header {
    font-size: 2vw;
    font-weight: 800;
}
.contact {
    width: 3vw;
    height: 3vw;
    margin-left: 10px;
}
@keyframes fade {
  from {opacity: 0} 
  to {opacity: 1}
}
#copyright_container {
    text-align: center;
    margin-top: 100px;
}
#copyright {
    font-size: 1vw;
    color: black;
}
#ql_container {
    text-align: center;
}
#ql_header {
    font-size: 2vw;
}
#ql_container3 {
    list-style-type: none;
    display: flex;
    margin-left: 10%;
    margin-right: 10%;
}
.ql {
    font-size: 2vw;
    font-weight: 800;
    margin-left: 20%;
    margin-right: 20%;
}
#login_container {
    margin-left: 10px;
}
.label {
    font-size: 2vw;
    font-weight: 600;
    margin-left: 2px;
}
.detail {
    margin-top: 5px;
}
.prop_header {
    margin-top: -10px;
}
.input {
    outline: none;
    border: 2px solid white;
    padding: 2px;
    font-size: 2vw;
    width: 50%;
    color: #206C48;
    font-weight: 600;
    background-color: #206c4952;

}
#btn_container {
    margin-top: 20px;
}
#button {
    padding: 5px;
    font-size: 2vw;
    font-weight: 600;
    color: white;
    background-color: #206C48;
    border: 2px solid white;
    border-radius: 10%;
}
#data_container {
    font-size: 2vw;
    display: flex;
}
.cta {
    margin-left: 10px;
    color: white;
    height: fit-content;
    padding: 5px;
    background-color: #206C48;
    font-size: 2vw;
    font-weight: 600;
    border: 2px solid #206C48;
    border-radius: 10px;
}
.cta2 {
    margin-left: 10px;
    color: white;
    height: fit-content;
    padding: 5px;
    background-color: #206C48;
    font-size: 2vw;
    font-weight: 600;
    border: 2px solid #206C48;
    border-radius: 10px;
}
.data {
    font-size: 2vw;
    margin-left: 10px;
}
.data2 {
    font-size: 1vw;
}
.data5 {
    font-size: 3vw;
}
#welcome_text_container {
    text-align: center;
}
#welcome_text {
    text-align: center;
    font-size: 2vw;
}
.center2 {
    text-align: center;
}
.container5 {
    text-align: center;
    font-size: 2vw;
}
.container4 {
    text-align: center;
    width: 50%;
}
.container2 {
    width: 100%;
}
#container7 {
    margin: 3px;
    font-size: 2vw;
}
.space {
    margin-top: 50px;
}
.list {
    font-size: 1vw;
}
.main {
    display: block;
    margin: 5px;
}
.prop_header2 {
    background-color: #206C48;
    color: white;
    padding: 2px;
    width: 50%;
    margin-right: auto;
    margin-left: auto;
}
.data3 {
    background-color: #206c4952;
    padding: 2px;
    margin-bottom: 30px;
}
.ongoing {
    font-size: 2vw;
    color: white;
}
.ongoing2 {
    font-size: 2vw;
    color: white;
}
#status {
    font-size: 2vw;
    color: white;
}
#status2 {
    font-size: 2vw;
    color: white;
}
#mantra {
    font-style: italic;
}
.btn {
    padding: 5px;
    margin: 5px;
    width: fit-content;
    font-size: 1vw;
    font-weight: 600;
    color: white;
    background-color: #206C48;
    border: 2px solid #206C48;
    border-radius: 10px;
}
#trsn-board {
    display: none;
    background-color: #206c4952;
    padding: 2px;
    margin: 5px;
}
#complete, #finished {
    display: none;
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
    .container2 {
    width: 50%;
    }
    .main {
        display: flex;
        margin: 5px;
    }
}
    </style>
</head>
<body style="margin: 0px; color: #206C48;">
    <!-- <div id="loader" class="center"></div> -->
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
 
         if ($email === $row['email'] && $password === $row['password']) {
             $_SESSION['email'] = '$email';
             $sql2 = "SELECT name, plots, plots_bought, status, estate, price, amount_paid, remainder, completed FROM buyers WHERE email = '$email'";
         $result = $conn->query($sql2);
         $row = $result->fetch_assoc();

         echo '<div style="display: flex; width: 100%;">';
    echo '<div id="logo">';
        echo '<img src="./images/realty2.png" alt="logo" width="50px" height="50px" style="margin: 2px;">';
    echo '</div>';
    echo '<div id="lgr-menu" style="color: #206C48; width: 50%;">';
        echo '<ul style="float: right; width: 100%;">';
            echo '<a href="index.html"><li class="menu_item">Home</li></a>';
            echo '<a href="properties.html"><li class="menu_item">Properties</li></a>';
            echo '<a href="sign_up.html"><li class="menu_item">Login/Sign Up</li></a>';
            echo '<a href="agent.html"><li class="menu_item">Become an Agent</li></a>';
            echo '<a href="about.html"><li class="menu_item">About Us</li></a>';
        echo '</ul>';
    echo '</div>';
    echo '<div class="container" onclick="myFunction(this)" style="float: right; margin: 10px;">';
        echo '<div class="bar1"></div>';
        echo '<div class="bar2"></div>';
        echo '<div class="bar3"></div>';
      echo '</div>';
      echo '</div>';
    echo '<div class="fade-in-element" id="menu" style="background-color: white; color: #206C48; width: 100%; 
    height: fit-content; display: none; position: absolute;
     margin-top: 0px; z-index: 999;">';
        echo '<ul>';
            echo '<a href="index.html"><li>Home</li></a>';
            echo '<a href="properties.html"><li>Properties</li></a>';
            echo '<a href="sign_up.html"><li>Login/Sign Up</li></a>';
            echo '<a href="agent.html"><li>Become an Agent</li></a>';
            echo '<a href="about.html"><li>About Us</li></a>';
        echo '</ul>';
    echo '</div>';
             echo '<div id="data_container">';
             echo '<h4 class="data">' . 'Welcome, ' . '<span id="user_email">' . $row['name'] . '</span>' . '</h4>';
             if ($row['status'] === "No") {
                ?>
                <style type="text/css">
                #plotBtn{
                    display: inline;
                }
                #property {
                        display: none;
                    }
                    #price {
                        display: none;
                    }
                    #paid {
                        display: none;
                    }
                    #balance {
                        display: none;
                    }
                </style>
                <?php
            } elseif ($row['status'] === "Yes") {
                ?>
                <style type="text/css">
                    #plotBtn {
                        display: none;
                    }
                    #complete {
                        display: inline;
                    }
                </style>
                    <?php
            } else {
                ?>
                <style type="text/css">
                    #plotBtn {
                        display: inline;
                    }
                    #property {
                        display: none;
                    }
                    #price {
                        display: none;
                    }
                    #paid {
                        display: none;
                    }
                    #balance {
                        display: none;
                    }
                </style>
                <?php
            }
            if (!empty($row['estate'])) {
                ?>
                <style type="text/css">
                    #complete {
                        display: none;
                    }
                    #finished {
                        display: inline;
                    }
                </style>
                <?php
            } else {
                ?>
                <style type="text/css">
                    #complete {
                        display: inline;
                    }
                    #finished {
                        display: none;
                    }
                </style>
                <?php
            }
            if ($row['completed'] === "Yes") {
                ?>
                <style type="text/css">
                    #plotBtn {
                        display: "inline";
                    }
                    #finished {
                        display: "none";
                    }
                </style>
                <?php
            } elseif ($row['completed'] === "No" && $row['status'] === "Yes") {
                ?>
                <style type="text/css">
                    #complete {
                        display: none;
                    }
                    #finished {
                        display: inline;
                    }
                    #plotBtn {
                        display: none;
                    }
                </style>
                <?php
            } else {
                ?>
                <style type="text/css">
                    #plotBtn {
                        display: inline;
                    }
                    #complete {
                        display: none;
                    }
                </style>
                <?php
            }
            ?>
             <button id='plotBtn' class='cta' onclick="window.location='./purchase.html'">
             Buy a Plot(s)
             </button>
             <button id='complete' class='cta2' onclick="window.location='./client_details.html'">
                 Complete Transaction
             </button>
             <button id="finished" class="cta2">
                Transaction in Progress...
             </button>
             <?php
        echo '</div>';
         echo '<div class="main">';
             echo '<div class="container2 container5 data3">';
                 echo '<button class="btn" onclick="myFunctionZ(this)">';
                     echo 'View Ongoing Transaction <img class="arrow" src="./images/arrow1.png" alt="dropdown_arrow">';
                 echo '</button>';
                 echo '<div class="center2" id="trsn-board">';
                     echo '<h2 id="status">Status: <span id="status2">' . $row['status'] . '</span></h2>';
                     echo '<h2 id="property" class="ongoing">Property: <span class="ongoing2">' . $row['estate'] . '</span></h2>';
                     echo '<h2 id="price" class="ongoing">Price: <span class="ongoing2">' . '&#8358; ' . $row['price'] . '</span></h2>';
                     echo '<h2 id="paid" class="ongoing">Amount Paid: <span class="ongoing2">' . '&#8358; ' . $row['amount_paid'] . '</span></h2>';
                     echo '<h2 id="balance" class="ongoing">Remainder: <span class="ongoing2">' . '&#8358; ' . $row['remainder'] . '</span></h2>';
                 echo '</div>';
             echo '</div>';
             echo '<div class="data3 container2 container5">';
                echo '<h4 class="data2">You Have Purchased</h4>';
                echo '<h1 class="data5">' . $row['plots_bought'] . '</h1>';
                echo '<h4 class="data2">Land(s) So Far!</h4>';
                echo '<h5 class="data2">Thank You!</h5>';
                 echo '<h5 class="data2" id="mantra">Homes Haven Estate - Creating Wealth Through Real Estate!</h5>';
         echo '</div>';
         echo '</div>';
         echo '<div id="welcome_text_container container4">';
            echo '<h2 id="welcome_text">All for You!</h2>';
         echo '</div>';
         echo '<div class="slideshow-container" style="text-align: center; margin-left: auto; margin-right: auto; border-radius: 5%; height: fit-content; padding: 10px; width: 80%;">';
            echo '<div class="mySlides fade">';
                echo '<img src="./images/realty1.jpg" alt="landed_property" style="width: 100%; height: 100%; border-radius: 5%;">';
                echo '</div>';
                echo '<div class="mySlides fade">';
                    echo '<img src="./images/realty3.jpg" alt="landed_property" style="width: 100%; height: 100%; border-radius: 5%;">';
         echo '</div>';
         echo '</div>';
         echo '<br>';
         echo '<div style="text-align:center">';
             echo '<span class="dot"></span>';
             echo '<span class="dot"></span>';
         echo '</div>';
     echo '</div>';
         echo '<div class="container5">';
            echo '<p id="container7">';
                 echo "Our properties are located at strategic places and are well conditioned. We have served many customers and we'll" .
                 "gladly assist you to acheive your real estate goals.";
             echo '</p>';
         echo '</div>';
         echo '<div class="main">';
         echo '<div class="container2 container5">';
             echo '<h5 class="prop_header2">Our Properties at Mgbakwu, Anambra State</h5>';
             echo '<h5 class="prop_header">Why buy this?</h5>';
            echo '<ul style="text-align: left; list-style-type: circle; margin-top: -15px;">';
                 echo '<li class="list">Instant Allocation</li>';
                 echo '<li class="list">464 Square-Meters</li>';
                 echo '<li class="list">100% Dry Land</li>';
             echo '</ul>';
             echo '<h5 class="prop_header">Landmarks</h5>';
             echo '<ul style="text-align: left; list-style-type: circle; margin-top: -15px;">';
                echo '<li class="list">New Government House, Aroma, Awka</li>';
                 echo '<li class="list">Alex Ekwueme Square, Aroma, Awka</li>';
                 echo '<li class="list">Secretariat</li>';
                 echo '<li class="list">Aroma Junction</li>';
                 echo '<li class="list">Anambra State Polytechnic, Mgbakwu</li>';
                 echo '<li class="list">Federal Government Youth Development Center</li>';
                 echo '<li class="list">Purity FM</li>';
             echo '</ul>';
             echo '<h5 class="prop_header">Benefits</h5>';
             echo '<ul style="text-align: left; list-style-type: circle; margin-top: -15px;">';
                 echo '<li class="list">Registered Survey Plan</li>';
                 echo '<li class="list">Deed of Coveyance</li>';
                 echo '<li class="list">Irrevocable Power of Attorney</li>';
             echo '</ul>';
             echo '<div>';
             ?>
                 <button class="btn" onclick="window.location='./purchase.html'">
                     Place an Order
                 </button>
                 <?php
             echo '</div>';
     echo '</div>';
     echo '<div class="container2 container5">';
             echo '<h5 class="prop_header2">Our Properties at Ugwuoba, Enugu State</h5>';
             echo '<h5 class="prop_header">Why buy this?</h5>';
             echo '<ul style="text-align: left; list-style-type: circle; margin-top: -15px;">';
                 echo '<li class="list">Instant Allocation</li>';
                 echo '<li class="list">100% Dry Land</li>';
             echo '</ul>';
             echo '<h5 class="prop_header">Landmarks</h5>';
             echo '<ul style="text-align: left; list-style-type: circle; margin-top: -15px;">';
                 echo '<li class="list">15 Minutes Drive to Enugu City</li>';
                 echo '<li class="list">10 Minutes Drive to Awka</li>';
                 echo '<li class="list">Directly Facing Enugu/Onitsha Express Road</li>';
                 echo '<li class="list">Government Police College</li>';
             echo '</ul>';
             echo '<h5 class="prop_header">Benefits</h5>';
             echo '<ul style="text-align: left; list-style-type: circle; margin-top: -15px;">';
                 echo '<li class="list">Registered Survey Plan</li>';
                 echo '<li class="list">Irrevocable Power of Attorney</li>';
             echo '</ul>';
             ?>
             <div>
                 <button class="btn" onclick="window.location='./purchase.html'">
                     Place an Order
                 </button>
             </div>
             <?php
     echo '</div>';
     echo '</div>';
     echo '<div id="copyright_container">';
         echo '<small id="copyright">&copy; 2025 Homes Haven Realty Solutions</small>';
         echo '</div>';
         }  else {
            header('Location: not_found.html', true);
        }

        mysqli_close($conn);
        ?>
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