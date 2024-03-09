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
    <link rel="stylesheet" href="Coverage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface|Poppins">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="livechat.css">

    <title>ABC Mobile | Coverage</title>
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
        <a href="Phones.php"  class="hov">Phones</a>
        <a href="Coverage.php"  class="active">Coverage</a>
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
    <br>

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

    <!-- map -->
    <div class="map">
      <br>
    <span class="header">CHECK YOUR COVERAGE</span>
    <table  style="margin-left: auto;margin-right: auto;width: 1200px;box-shadow: 5px 10px 8px 10px #888888;border-radius: 50px 50px 50px 50px;">
      <tr>
        <td>
    <div>
    <iframe class="coverage" src="https://www.google.com/maps/d/u/0/embed?mid=1ce3yXZidWphx_2jq5lFrOkVhvPSdFIo&ehbc=2E312F" width="1200" height="600"></iframe>   
    </div> 
    </td>
    </tr> 
    <tr style="background-color: white;border-radius: 0px 0px 50px 50px;">
      <td style="background-color: white;border-radius: 0px 0px 50px 50px;height:100px;">
      </td>
    </tr>
    </table>
    </div>

    <br>
    <br>
    <br>
    <br><br><br><br>

    
    
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
            <p>Price stated may be subject to Service Tax <span style="padding-left: 47%;">Copyright©2023, ABCMobile. All rights reserved.</span></p>
            <p>Send your complaints at the Consumer Forum Malaysia (CFM) | <a href="https://complaint.cfm.my/" target="_blank">www.complaint.cfm.my</a></p>
        </div>
        
    </div>       
      
</body>
    <script src="response.js"></script>
    <script src="chat.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</html>