<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
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
#button2 {
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
#update7, #update8, #update9, #update10, #update11, #update12, #update13, #replace2 {
    display: none;
}
.msg_box {
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
        
         // Check connection
         if($conn === false){
             die("ERROR: Could not connect. " 
                 . mysqli_connect_error());
         }
         
         $email =  $_REQUEST['email'];
         $password = $_REQUEST['password'];
         
         $sql = "SELECT email, password FROM admin WHERE email = '$email'";
         $result = $conn->query($sql);
         $row = $result->fetch_assoc();
 
         if ($email === $row['email'] && $password === $row['password']) {
             $sql = "SELECT name from admin WHERE email = '$email'";
            //  $sql = "SELECT name, plotsBought, status, estate, price, amountPaid, remainder FROM customers WHERE email = '$email'";
         $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         echo '<div id="welcome_container">';
            echo '<h2 class="data4">Welcome, Admin ' . $row['name'] . '</h2>';
        echo '</div>';
         echo '<div class="msg_box">';
    echo '<form method="post" action="update_details.php">';
        echo '<div id="header_container">';
            echo '<h2 id="msg_header">' . "Update Customers' Details" . '</h2>';
         echo '</div>';
        echo '<div class="item">';
            echo '<label for="customer" class="label">' . "Customer's ID:" . '</label>';
            echo '<input class="input" name="customer" id="customer" type="number" required>';
        echo '</div>';
        echo '<div>';
        echo '<div class="item">';
            echo '<label for="detail" class="label">Information to Update:</label>';
            echo '<select name="detail" class="input" id="detail" type="text">';
            echo '<option class="option" id="name" value="name" selected>' . "Buyer's Name" . "</option>";
                echo '<option class="option" id="status" value="status">' . 'Status' . '</option>';
                echo '<option class="option" id="plots_bought" value="plots_bought">' . 'Plots Bought Before' . '</option>';
                echo '<option class="option" id="address" value="address">' . "Buyer's Address" . '</option>';
                echo '<option class="option" id="village" value="village">' . "Buyer's Village" . '</option>';
                echo '<option class="option" id="town" value="town">' . "Buyer's Town" . '</option>';
                echo '<option class="option" id="lga" value="lga">' . "Buyer's L.G.A." . '</option>';
                echo '<option class="option" id="state" value="state">' . "Buyer's State" . '</option>';
                echo '<option class="option" id="nationality" value="nationality">' . "Buyer's Nationality" . '</option>';
                echo '<option class="option" id="residence" value="residence">' . "Buyer's Residence" . '</option>';
                echo '<option class="option" id="occupation" value="occupation">' . "Buyer's Occupation" . '</option>';
                echo '<option class="option" id="email" value="email">' . "Buyer's Email" . '</option>';
                echo '<option class="option" id="phone" value="phone">' . "Buyer's Phone" . '</option>';
                echo '<option class="option" id="estate" value="estate">' . "Estate" . '</option>';
                echo '<option class="option" id="plots" value="plots">' . 'No. of Plots' . '</option>';
                echo '<option class="option" id="price" value="price">' . "Price" . '</option>';
                echo '<option class="option" id="amount_paid" value="amount_paid">' . "Amount Paid" . '</option>';
                echo '<option class="option" id="remainder" value="remainder">' . 'Amount Remaining' . '</option>';
                echo '<option class="option" id="signature" value="signature">' . 'Signature' . '</option>';
                echo '<option class="option" id="kin-name" value="kin-name">' . "Kin's Name" . '</option>';
                echo '<option class="option" id="kin-address" value="kin-address">' . "Kin's Address" . '</option>';
                echo '<option class="option" id="kin-phone" value="kin-phone">' . "Kin's Phone" . '</option>';
                echo '<option class="option" id="password" value="password">' . "Password" . '</option>';
                echo '<option class="option" id="completed" value="completed">' . "Transaction Completed" . '</option>';
            echo '</select>';
            echo "<button class='btn' type='button' onclick='update()'>";
            echo 'GO';
         echo "</button>";
        echo '</div>';
        echo '</div>';
        ?>
            <script>
                function update() {
                    var detail = document.getElementById('detail');
                var others_update = document.getElementById('update1');
                var phone_update = document.getElementById('update2');
                var email_update = document.getElementById('update3');
                var file_update = document.getElementById('update4');
                var plots_update = document.getElementById('update5');
                var status_update = document.getElementById('update6');
                var selectedItem = detail.options[detail.selectedIndex].value;
                var container = document.getElementById('replace');
                    var customer = document.getElementById('customer').value;
                    var button = document.getElementById('button');

                    if (selectedItem === "phone") {
                        container.style.display = "inline";
                       phone_update.style.display = "inline";
                       plots_update.style.display = "none";
                       others_update.style.display = "none";
                        email_update.style.display = "none";
                       file_update.style.display = "none";
                       status_update.style.display = "none";
                    } else if (selectedItem === "email") {
                        container.style.display = "inline";
                        email_update.style.display = "inline";
                        plots_update.style.display = "none";
                        phone_update.style.display = "none";
                       others_update.style.display = "none";
                       file_update.style.display = "none";
                       status_update.style.display = "none";
                    } else if (selectedItem === "kin-phone") {
                        container.style.display = "inline";
                        plots_update.style.display = "none";
                        email_update.style.display = "none";
                        phone_update.style.display = "inline";
                       others_update.style.display = "none";
                       file_update.style.display = "none";
                       status_update.style.display = "none";
                    } else if (selectedItem === "plots_bought") {
                        container.style.display = "inline";
                        plots_update.style.display = "inline";
                        email_update.style.display = "none";
                        phone_update.style.display = "none";
                       others_update.style.display = "none";
                       file_update.style.display = "none";
                       status_update.style.display = "none";
                    } else if (selectedItem === "plots") {
                        container.style.display = "inline";
                        plots_update.style.display = "inline";
                        email_update.style.display = "none";
                        phone_update.style.display = "none";
                       others_update.style.display = "none";
                       file_update.style.display = "none";
                       status_update.style.display = "none";
                    } else if (selectedItem === "price") {
                        container.style.display = "inline";
                        plots_update.style.display = "inline";
                        email_update.style.display = "none";
                        phone_update.style.display = "none";
                       others_update.style.display = "none";
                       file_update.style.display = "none";
                       status_update.style.display = "none";
                    } else if (selectedItem === "amount_paid") {
                        container.style.display = "inline";
                        plots_update.style.display = "inline";
                        email_update.style.display = "none";
                        phone_update.style.display = "none";
                       others_update.style.display = "none";
                       file_update.style.display = "none";
                       status_update.style.display = "none";
                    } else if (selectedItem === "remainder") {
                        container.style.display = "inline";
                        plots_update.style.display = "inline";
                        email_update.style.display = "none";
                        phone_update.style.display = "none";
                       others_update.style.display = "none";
                       file_update.style.display = "none";
                       status_update.style.display = "none";
                    } else if (selectedItem === "status") {
                        container.style.display = "inline";
                        status_update.style.display = "inline";
                        email_update.style.display = "none";
                        phone_update.style.display = "none";
                       others_update.style.display = "none";
                       file_update.style.display = "none";
                       plots_update.style.display = "none";
                    } else if (selectedItem === "completed") {
                        container.style.display = "inline";
                        status_update.style.display = "inline";
                        email_update.style.display = "none";
                        phone_update.style.display = "none";
                       others_update.style.display = "none";
                       file_update.style.display = "none";
                       plots_update.style.display = "none";
                    } else if (selectedItem === "signature") {
                        container.style.display = "inline";
                        file_update.style.display = "inline";
                        plots_update.style.display = "none";
                        phone_update.style.display = "none";
                       others_update.style.display = "none";
                        email_update.style.display = "none";
                        status_update.style.display = "none";
                    } else {
                        container.style.display = "inline";
                        file_update.style.display = "none";
                        plots_update.style.display = "none";
                        phone_update.style.display = "none";
                       others_update.style.display = "inline";
                        email_update.style.display = "none";
                        status_update.style.display = "none";
                    }
                }
                function noEntry() {
                    var detail = document.getElementById('detail');
                var others_update = document.getElementById('update1');
                var phone_update = document.getElementById('update2');
                var email_update = document.getElementById('update3');
                var file_update = document.getElementById('update4');
                var plots_update = document.getElementById('update5');
                var selectedItem = detail.options[detail.selectedIndex].value;
                var status = document.getElementById('status_detail');
                var completed = document.getElementById('completed_detail');
                var status_update = status.options[status.selectedIndex].value;
                var completed_update = completed.options[completed.selectedIndex].value;
                var container = document.getElementById('replace');
                    var customer = document.getElementById('customer').value;
                    var button = document.getElementById('button');
                    button.type = "button";
                    
                    if (selectedItem === "plots" && plots_update.value === '') {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "plots_bought" && plots_update.value === '') {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "price" && plots_update.value === '') {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "amount_paid" && plots_update.value === '') {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "remainder" && plots_update.value === '') {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "phone" && phone_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "kin-phone" && phone_update.value === '') {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "email" && email_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "status" && status_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "completed" && completed_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "signature" && file_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "name" && others_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "password" && others_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "village" && others_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "address" && others_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "town" && others_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "lga" && others_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "state" && others_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "nationality" && others_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "residence" && others_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "occupation" && others_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "estate" && others_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "kin-name" && others_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "kin-address" && others_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else {
                        button.type = "submit";
                    }
                    }

            </script>
        <?php
            echo '<div id="replace" class="item">';
                echo '<label class="label" for="replace_detail">' . 'Replace with:' . '</label>';
                        echo '<input class="input" id="update1" name="others_detail" type="text" placeholder="What should be there?">';
                        echo '<input class="input" id="update2" name="phone_detail" type="tel" placeholder="What should be there?">';
                        echo '<input class="input" id="update3" name="email_detail" type="email" placeholder="What should be there?">';
                        echo '<input class="input" id="update4" name="file_detail" type="file" placeholder="What should be there?">';
                        echo '<input class="input" id="update5" name="plots_detail" type="number" placeholder="What should be there?">';
                        echo '<select name="status_detail" class="input" id="update6" type="text">';
                        echo '<option class="option" value="" selected>' . 'Select' . '</option>';
                            echo '<option class="option" value="Yes">' . 'Yes' . '</option>';
                            echo '<option class="option" value="No">' . 'No' . '</option>';
                echo '</select>';
            echo '</div>';
        echo '<button id="button" onclick="noEntry()">' . 'Update Record' . '</button>';
    echo '</form>';
    echo '<div>';
    ?>
    <button class="btn btn2" onclick="window.location='./admin_login2.html'">
        View Customers' Database
        </button>
        <?php
        echo '<div class="msg_box">';
    echo '<form method="post" action="update_details2.php">';
        echo '<div id="header_container">';
            echo '<h2 id="msg_header">' . "Update Agents' Details" . '</h2>';
         echo '</div>';
        echo '<div class="item">';
            echo '<label for="agent" class="label">' . "Agent's ID:" . '</label>';
            echo '<input class="input" name="agent" id="agent" type="number" required>';
        echo '</div>';
        echo '<div>';
        echo '<div class="item">';
            echo '<label for="detail2" class="label">Information to Update:</label>';
            echo '<select name="detail2" class="input" id="detail2" type="text">';
            echo '<option class="option" id="name2" value="name2" selected>' . "Name" . "</option>";
                echo '<option class="option" id="email2" value="email2">' . 'Email' . '</option>';
                echo '<option class="option" id="phone2" value="phone2">' . 'Phone' . '</option>';
                echo '<option class="option" id="bank" value="bank">' . "Bank" . '</option>';
                echo '<option class="option" id="acc_no" value="acc_no">' . "Account Number" . '</option>';
                echo '<option class="option" id="acc_name" value="acc_name">' . "Account Name" . '</option>';
                echo '<option class="option" id="referrer2" value="referrer">' . "Referrer" . '</option>';
            echo '</select>';
            echo "<button class='btn' type='button' onclick='update2()'>";
            echo 'GO';
         echo "</button>";
        echo '</div>';
        echo '</div>';
        ?>
            <script>
                function update2() {
                    var detail = document.getElementById('detail2');
                var name_update = document.getElementById('update7');
                var phone_update = document.getElementById('update8');
                var email_update = document.getElementById('update9');
                var bank = document.getElementById('update10');
                var acc_no = document.getElementById('update11');
                var acc_name = document.getElementById('update12');
                var referrer = document.getElementById('update13');
                var selectedItem = detail.options[detail.selectedIndex].value;
                var container = document.getElementById('replace2');
                    var agent = document.getElementById('agent').value;
                    var button2 = document.getElementById('button2');

                    if (selectedItem === "phone2") {
                        container.style.display = "inline";
                       phone_update.style.display = "inline";
                       name_update.style.display = "none";
                       bank.style.display = "none";
                        email_update.style.display = "none";
                       acc_no.style.display = "none";
                       acc_name.style.display = "none";
                       referrer.style.display = "none";
                    } else if (selectedItem === "email2") {
                        container.style.display = "inline";
                        email_update.style.display = "inline";
                        phone_update.style.display = "none";
                       name_update.style.display = "none";
                       bank.style.display = "none";
                       acc_no.style.display = "none";
                       acc_name.style.display = "none";
                       referrer.style.display = "none";
                    } else if (selectedItem === "bank") {
                        container.style.display = "inline";
                        phone_update.style.display = "none";
                       name_update.style.display = "none";
                       bank.style.display = "inline";
                        email_update.style.display = "none";
                       acc_no.style.display = "none";
                       acc_name.style.display = "none";
                       referrer.style.display = "none";
                    } else if (selectedItem === "acc_no") {
                        container.style.display = "inline";
                        phone_update.style.display = "none";
                       name_update.style.display = "none";
                       bank.style.display = "none";
                        email_update.style.display = "none";
                       acc_no.style.display = "inline";
                       acc_name.style.display = "none";
                       referrer.style.display = "none";
                    } else if ((selectedItem === "acc_name")) {
                        container.style.display = "inline";
                        phone_update.style.display = "none";
                       name_update.style.display = "none";
                       bank.style.display = "none";
                        email_update.style.display = "none";
                       acc_no.style.display = "none";
                       acc_name.style.display = "inline";
                       referrer.style.display = "none";
                    } else if ((selectedItem === "name2")) {
                        container.style.display = "inline";
                        phone_update.style.display = "none";
                       name_update.style.display = "inline";
                       bank.style.display = "none";
                        email_update.style.display = "none";
                       acc_no.style.display = "none";
                       acc_name.style.display = "none";
                       referrer.style.display = "none";
                    } else {
                        container.style.display = "inline";
                        phone_update.style.display = "none";
                       name_update.style.display = "none";
                       bank.style.display = "none";
                        email_update.style.display = "none";
                       acc_no.style.display = "none";
                       acc_name.style.display = "none";
                       referrer.style.display = "inline";
                    }
                }
                function noEntry2() {
                    var detail = document.getElementById('detail2');
                var name_update = document.getElementById('update7');
                var phone_update = document.getElementById('update8');
                var email_update = document.getElementById('update9');
                var bank = document.getElementById('update10');
                var acc_no = document.getElementById('update11');
                var acc_name = document.getElementById('update12');
                var referrer = document.getElementById('update13');
                var selectedItem = detail.options[detail.selectedIndex].value;
                var container = document.getElementById('replace2');
                    var agent = document.getElementById('agent').value;
                    var button2 = document.getElementById('button2');
                    button2.type = "button";
                    
                    if (selectedItem === "name2" && name_update.value === '') {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "phone2" && phone_update.value === '') {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "email2" && email_update.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "bank" && bank.value === '') {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "acc_no" && acc_no.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "acc_name" && acc_name.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else if (selectedItem === "referrer" && referrer.value === "") {
                        window.alert('Please fill in the replacement field.');
                    } else {
                        button2.type = "submit";
                    }
                    }

            </script>
        <?php
            echo '<div id="replace2" class="item">';
                echo '<label class="label" for="replace_detail2">' . 'Replace with:' . '</label>';
                        echo '<input class="input" id="update7" name="name_detail" type="text" placeholder="What should be there?">';
                        echo '<input class="input" id="update8" name="phone_detail2" type="tel" placeholder="What should be there?">';
                        echo '<input class="input" id="update9" name="email_detail2" type="email" placeholder="What should be there?">';
                        echo '<input class="input" id="update10" name="bank" type="text" placeholder="What should be there?">';
                        echo '<input class="input" id="update11" name="acc_no" type="text" placeholder="What should be there?">';
                        echo '<input class="input" id="update12" name="acc_name" type="text" placeholder="What should be there?">';
                        echo '<input class="input" id="update13" name="referrer" type="text" placeholder="What should be there?">';
            echo '</div>';
        echo '<button id="button2" onclick="noEntry2()">' . 'Update Record' . '</button>';
    echo '</form>';
    echo '<div>';
    ?>
    <button class="btn btn2" onclick="window.location='./admin_login3.html'">
        View Agents' Database
        </button>
    <?php
         } else {
            header('Location: not_found.html, true');
         }
         mysqli_close($conn);
         ?>
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