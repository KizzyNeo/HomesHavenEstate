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
    <title>Customers' Records</title>
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
    margin-top: 300px;
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
#welcome_container {
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
    color: white;
    background-color: #206c499d;

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
.data4 {
    font-size: 2vw;
    color: #206C48;
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
    width: 50%;
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
    display: flex;
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
    font-size: 2vw;
    font-weight: 600;
    color: white;
    background-color: #206C48;
    border: 2px solid white;
    border-radius: 10px;
}
.btn2 {
    margin-top: 20px;
}
#trsn-board {
    display: none;
    background-color: #206c4952;
    padding: 2px;
    margin: 5px;
}
.option {
    background-color: #206C48;
    color: white;
}
#update1, #update2, #update3, #update4, #update5, #update6, #replace {
    display: none;
}
#msg_box {
    width: 80%;
    height: fit-content;
    box-shadow: 10px 10px 5px lightblue;
    margin-right: auto;
    margin-left: auto;
    margin-top: 30px;
    padding: 10px;
}
#header_container {
    text-align: center;
}
#msg_header {
    font-size: 3vw;
    color: #206C48;
}
th {
    padding: 5px;
    font-size: 2vw;
}
td {
    font-size: 2vw;
    width: fit-content;
    padding: 5px;
}
table, tr, td, th {
    border: 2px solid #206C48;
    border-collapse: collapse;
}
table {
    overflow-x: scroll;
    white-space: nowrap;
    display: block;
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
    <div class="fade-in-element" id="menu" style="background-color: white; color: #206C48; width: 100%; 
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

// Create connection
$servername = "localhost";
       $username = "homesha1_admin";
       $password = "Admin.HomesHavenEstate";
       $dbname = "homesha1_homeshavenestate";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email =  $_REQUEST['email'];
         $password = $_REQUEST['password'];
         
         $sql = "SELECT email, password FROM admin WHERE email = '$email'";
         $result = $conn->query($sql);
         $row = $result->fetch_assoc();
 
         if ($email === $row['email'] && $password === $row['password']) {
             $_SESSION['email'] = '$email';
            
$sql2 = "SELECT id, name, status, plots_bought, address, village, town, lga, state, nationality, residence, occupation, email, phone, estate, plots, kin_name, kin_address, kin_phone, date_created, password, referrer FROM buyers";
$result = $conn->query($sql2);
?>

    <h1 id="welcome_text">Clients' Records</h1>
    <div style="text-align: center;">
        <table style="width: 80%; margin-left: auto; margin-right: auto; margin-bottom: 20px;">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Status</th>
            <th>Plots Bought</th>
            <th>Address</th>
            <th>Village</th>
            <th>Town</th>
            <th>L.G.A.</th>
            <th>State</th>
            <th>Nationality</th>
            <th>Residence</th>
            <th>Occupation</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Desired Estate</th>
            <th>No. of Plots</th>
            <th>Kin's Name</th>
            <th>Kin's Address</th>
            <th>Kin's Phone</th>
            <th>Date Registered</th>
            <th>Password</th>
            <th>Referrer</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["status"]. "</td><td>" . $row["plots_bought"]. "</td><td>" . $row["address"]. "</td><td>" . $row["village"]. "</td><td>" . $row["town"]. "</td><td>" . $row["lga"]. "</td><td>" . $row["state"]. "</td><td>" . $row["nationality"]. "</td><td>" . $row["residence"]. "</td><td>" . $row["occupation"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["estate"]. "</td><td>" . $row["plots"]. "</td><td>" . $row["kin_name"]. "</td><td>" . $row["kin_address"]. "</td><td>" . $row["kin_phone"]. "</td><td>" . $row["date_created"]. "</td><td>" . $row["password"]. "</td><td>" . $row["referrer"]. "</td></tr>";
            }
        } else {
            echo "No result found.";
        }
    } else {
        header ('Location: not_found.html', true);
    }
        $conn->close();
        ?>
    </table>
    </div>
    <script>
        var loader = document.getElementById("loader");
window.addEventListener("load", function() {
  loader.style.display = "none";
})
    </script>
    <div id="copyright_container">
    <small id="copyright">&copy; 2025 Homes Haven Realty Solutions</small>
    </div>
    <script src="script.js">
        </script>
</body>
</html>