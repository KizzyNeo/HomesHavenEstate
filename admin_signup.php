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
    <title>Admin SignUp</title>
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
    animation: FadeIn 5s;
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
.center {
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
.error_msg {
    color: red;
    text-align: center;
    margin-top: 200px;
    font-size: 2vw;
}
#msg_container {
    text-align: center;
    margin-top: 10%;
}
.msg {
    font-size: 2vw;
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

        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $password = $_REQUEST['password'];
        $code = $_REQUEST['code'];

        $sql = "SELECT code FROM admin WHERE id = '1'";
        $result = $conn->query($sql);
         $row = $result->fetch_assoc();
        if ($code === $row['code']) {
            $sql = "INSERT INTO admin (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
            if(mysqli_query($conn, $sql)){
                echo '<div id="msg_container">';
        echo '<div>'.
            '<h1 class="msg">Sign Up Successful!</h1>'.
        '</div>';
            } else{
                echo '<h2 class="note">' . 'Unsuccessful. Please try again.'. '</h2>';
            }
            
        ?>
        <div>
            <button id="button" onclick="window.location='./admin_login.html'">
                Login as Admin
            </button>
        </div>
        <?php
    echo '</div>';
            // echo '<h2 class="error_msg">' . 'An error occurred. Please try again.' . '</h2>';
    } else {
        echo '<h2 class="error_msg">' . 'Code incorrect. Please try again.' . '</h2>';
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
