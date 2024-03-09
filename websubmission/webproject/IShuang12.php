<?php
// Include the dbconnect.php file
require_once "dbconnect.php";

session_start();

// Check if a session exists
if (isset($_SESSION['username'])) {
    // Set the logout button HTML
    $logoutButton = '<button id="login"><a href="logout.php" class="right"><img src="image/loginsmalllogo.png" alt="loginsmalogo" class="right" style="float: left">Logout</a></button>';
} else {
    // Set the login button HTML
    $loginButton = '<button id="login"><a href="login.php" class="right"><img src="image/loginsmalllogo.png" alt="loginsmalogo" class="right" style="float: left">Login</a></button>';
}
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="IShuang12.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="livechat.css">

    <title>ABC Mobile | Phones</title>
</head>

<body>
    <!-- Header-->
    <div class="headnav">
        <?php if (isset($logoutButton)) {
            echo $logoutButton;
        } else {
            echo $loginButton;
        } ?>
        <a href="Homepage.php" class="right" ><span style="color:yellow;"><b>ABC</b>mobile</span></a>
        <a href="Homepage.php" class="right" ><img src="image/MyLogo.PNG" alt= "" class ="right"></a>
        <div class="dropdown">
            <button class="dropbtn">Our Plans 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="OurPlan.php">Phone Plans</a>
              <a href="Ourplandata.php">Data Plans</a>
            </div>
          </div> 
        <a href="Phones.php"  class="active">Phones</a>
        <a href="Coverage.php"  class="hov">Coverage</a>
        <a href="Reviews.php"  class="hov">Reviews</a>
        <a href="About us.php"  class="hov">About US</a>
        <a href="purchases.php"  class="hov">My Plans</a>
        <div class="dropdown">
          <button  class="dropbtn">Help 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="FAQ.php">FAQ</a>
            <a href="T&C.php">Terms & Conditions</a>
            <a href="Howitworks.php">How it Works</a>
            <a href="shipping&delivery.php">Shipping & Delivery</a>

          </div>
        </div>  
    </div>

   <!--Chat Bar-->
  <div class="chat-bar-up-down">
    <button id="chat-button" type="button" class="button-design">
        <i id="chat-icon" style="color: #fff;" class="fa fa-comment-o"></i>
    </button>

<div class="chat-content">
    <div class="full-chat">
        <!-- Message Container -->
        <div class="outer-chat-box">
          <div class="chatbox-header">
            <table>
              <tr>
                <td rowspan="3"><span style="font-size: 50px;"><i class="fa fa-user-circle-o"></i></span></td>
                <td><span style="font-weight: bold;font-size: 15px;"> Customer Service </span></td>
              </tr>
              <tr>
                <td>
                  <span style="font-size: 10px;color:gray;" id="dateandtime"></span>
                </td>
              </tr>
              <tr>
                <td><span style="font-size: 10px;color:gray;">Active now</span> </td>

              </tr>
         
              </table>
          </div>
            <div class="chat-box">
                <!-- Message-->
                <div id="message">
                    <p id="botStarterMessage" class="bottext"></p>
                </div>

                <!-- User input -->
                <div class="chat-input-box">
                    <div id="userInput">
                        <input type="text" id="textInput" class="input-box" type="text" name="msg"
                        placeholder="Click on arrow to send a message.">
                        <p></p>
                    </div>

                    <div class="arrow">
                        <i id="chat-icon" style="color:#333;font-size:35px;" class="fa fa-location-arrow"
                        onclick="sendButton()"></i>
                    </div>
                </div>
                <div id="chat-bottom">
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

        <!-- Products Details -->
        <div class="hero">
            <div class="row">
                <div class="col">
                    <div class="slider">
                        <div class="product">
                            <img src="image/pro5a.png" alt="" onclick="clickme(this)">
                            <img src="image/pro5b.png" alt="" onclick="clickme(this)">
                        </div>
                        <div class="preview">
                            <img src="image/pro5a.png" id="imagebox">
                        </div>
                    </div>
                </div>
                <div class="col">
                <p style="color: gray;">Phones / Featured Products</p>
                <fieldset>
                <div class="content">
                    <h1 style="font-family: 'Bungee Outline', cursive; text-align: center;font-size: 35px;"><mark>IShuang 12</mark></h1>
                    <h2 style="text-align: center; font-size: 20px;"><small><sup>RM</sup></small>2720.00</h2>
                </div>
                <fieldset style="background-color: rgb(221, 221, 221);">
                    <div class="option">
                        <br><label for="choice"><b style="line-height: 20px;">Color : </b></label>
                        <select name="Color" id="choice">
                            <option value="choice2">Black</option>
                            <option value="choice3">Gold</option>
                        </select>  
                <br><br>
                <label for="choice"><b style="line-height: 20px;">Contract Plan : </b></label>
                <select name="Rateplan" id="choice">
                    <option value="choice1">-</option>
                    <option value="choice1">12 Months Postpaid Plan - Omg ABC36</option>
                    </select>
                 </div>

                 <h3>Product Details</h3>
                 <ul>
                     <li>Sos 13</li>
                     <li>128GB Capacity</li>
                     <li>8GB Ram</li>
                     <li>5G Capability</li>
                     <li>Dual SIM (Standard, Micro and Nano)</li>
                 </ul> 
                </fieldset>
                <div class="button">
                    <a href="DataPlanOrderForm.php"><button style="font-size: 16px;">Check Out <i class="fa fa-shopping-cart"></i></button></a>
                </div>
                </div>
                 </fieldset>
                </div>
                </div>
            </div>
        </div>

        <!-- Image slide-->
        <script>
            function clickme(smallImg){
                var fullImg = document.getElementById("imagebox");
                fullImg.src = smallImg.src;
            }
        </script>

        <!-- Footer -->
    <div class = "footer">
        <div class="visit">
            <p><b>Customer Careline</b></p>
            <p><a href="tel:03-1234 5000">03-1234 5000</a> or <a href="tel:12345">12345</a></p>
            <p><b>Email</b></p>
            <p><a href="mailto:abcmobile@gmail.com">abcmobile@gmail.com</a></p>
            <p><b>Follow us on <span style="padding-left: 15%">Download ABC App</span></b></p>
            <a href="https://www.facebook.com/" target="_blank"><img src="image/fblogo.png"></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="image/iglogo.png"></a>   
            <a href="https://twitter.com/" target="_blank"><img src="image/twitlogo.png"></a>  
            <span style="padding-left: 3%;">
              <a href="https://www.apple.com/my/app-store/" target="_blank"><img src="image/appleloho.png"></a>
              <a href="https://play.google.com/store" target="_blank"><img src="image/playstorelogo.png"></a>
              <a href="https://appgallery.huawei.com/#/Featured" target="_blank"><img src="image/huaweilogo.png"></a>

          </span>      
        </div>
        <hr style="width:75%">
        <div class="payment">
            <p>Price stated may be subject to Service Tax <span style="padding-left: 47%;">Copyright©2023, ABCmobile. All rights reserved.</span></p>
            <p>Send your complaints at the Consumer Forum Malaysia (CFM) | <a href="https://complaint.cfm.my/" target="_blank">www.complaint.cfm.my</a></p>
        </div>
        
    </div>
        
      
</body>
<script src="response.js"></script>
<script src="chat.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</html>