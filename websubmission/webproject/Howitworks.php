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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="livechat.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Howitworks.css">
    


    <title>ABC Mobile | How it works</title>
</head>

<body style="background-color: beige;">
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
        <a href="Coverage.php"  class="hov">Coverage</a>
        <a href="Reviews.php"  class="hov">Reviews</a>
        <a href="About us.php"  class="hov">About US</a>
        <a href="purchases.php"  class="hov">My Plans</a>
        <div class="dropdown">
          <button style="background-color: rgb(104, 96, 96);color: white;" class="dropbtn">Help 
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
  
    <br>
    <br>
    <div class="banner" id ="banner">
      <div class="imgban" id="imgban3">

      </div>
      <div class="imgban" id="imgban2">
        
      </div>
      <div class="imgban" id="imgban1">
        
      </div>
      <script>
        var bannerStatus = 1;
        var bannerTimer = 4000;

        window.onload = function () {
          bannerLoop();
        }

        var startBannerLoop = setInterval(function(){
          bannerLoop();
        }, bannerTimer);

        document.getElementById("banner").onmouseenter = function(){
          clearInterval(startBannerLoop);
        }

        document.getElementById("banner").onmouseleave = function(){
          startBannerLoop = setInterval(function(){
          bannerLoop();
        }, bannerTimer);
        }

        document.getElementById("imgbanbtn.prev").onclick = function() {
          if (bannerStatus === 1){
            bannerStatus = 2;
          }
          else if (bannerStatus === 2){
            bannerStatus = 3;
          }
          else if (bannerStatus === 3){
            bannerStatus = 1;
          }
          bannerLoop();
        }

        document.getElementById("imgbanbtn.next").onclick = function() {
          bannerLoop();
        }

        function bannerLoop() {
          if (bannerStatus === 1){
            document.getElementById("imgban2").style.opacity = "0";
            setTimeout(function(){
            document.getElementById("imgban1").style.right = "0px";
            document.getElementById("imgban1").style.zIndex = "1000";
            document.getElementById("imgban2").style.right = "-1200px";
            document.getElementById("imgban2").style.zIndex = "1500";
            document.getElementById("imgban3").style.right = "1200px";
            document.getElementById("imgban3").style.zIndex = "500";
            }, 500);
            setTimeout(function(){
            document.getElementById("imgban2").style.opacity = "1";
            }, 1000);
            bannerStatus = 2;
          }
          else if (bannerStatus === 2){
            document.getElementById("imgban3").style.opacity = "0";
            setTimeout(function(){
            document.getElementById("imgban2").style.right = "0px";
            document.getElementById("imgban2").style.zIndex = "1000";
            document.getElementById("imgban3").style.right = "-1200px";
            document.getElementById("imgban3").style.zIndex = "1500";
            document.getElementById("imgban1").style.right = "1200px";
            document.getElementById("imgban1").style.zIndex = "500";
            }, 500);
            setTimeout(function(){
            document.getElementById("imgban3").style.opacity = "1";
            }, 1000);
            bannerStatus = 3;
          }
          else if (bannerStatus === 3){
            document.getElementById("imgban1").style.opacity = "0";
            setTimeout(function(){
            document.getElementById("imgban3").style.right = "0px";
            document.getElementById("imgban3").style.zIndex = "1000";
            document.getElementById("imgban1").style.right = "-1200px";
            document.getElementById("imgban1").style.zIndex = "1500";
            document.getElementById("imgban2").style.right = "1200px";
            document.getElementById("imgban2").style.zIndex = "500";
            }, 500);
            setTimeout(function(){
            document.getElementById("imgban1").style.opacity = "1";
            }, 1000);
            bannerStatus = 1;
          }
        }
      </script>
    </div>
  <br>

  
    <br><h2>Steps to subscribe to ABCmobile</h2>

    <table id="step"style="width: 80%; ">
      <tr> <td><p3>1. Check Coverage</p3></td>
    <td><p3>2. Choose Your Plan</p3></td>
    <td><p3>3. Buy!!!</p3></td></tr>
    
   <tr><td><a href="Coverage.php"><img style="width: 350px;"src="image/banner1.PNG"></a></td>
  <td><a href="OurPlan.php"><img style="width: 350px;" src="image/banner2.PNG"></a> </td>
<td><a href="DataPlanOrderForm.php"><img style="width: 350px;" src="image/banner3.PNG"></a></td></tr>
    
    <tr style="text-align:left;"><td ><div style="width: 350px;padding-bottom: 220px;"><p2>You have to ensure that your area is covered by ABCmobile otherwise it will not work as our line cannot reach your area yet. Also be sure to check frequently as we will be expanding our coverage periodically, so that everyone can enjoy the cheap and reliable internet service provider. Click here to check if your area is available. For more details please click on the image.</p2></div></td>
    <td><div style="width: 350px;padding-bottom: 100px;"><p2>Hooray! Your area is covered within ABCmobile's zone, now you can proceed to choose whatever plan you want. The choices of our subscribers varies, if you just want a basic package it is recommended for you to choose our 3GB per year plan which only costs RM15 per month.If you want to go the extreme we recommend you to choose our unlimited data plan per year which only cost RM60 per month which is still very cheap. In addition to that, we provide users another luxurious choice which is to subscribe to our phone plans where all of them are great deals. For more details please click on the image.</p2></div></td>
  <td><div style="width: 350px; padding-bottom: 190px;"><p2>Great choice! You chose a data plan that you like and then you can proceed to the next step and thats purchasing it. Its really simple, go to our shopping cart page by clicking the image and fill in the details and it is good to go, your sim card will be delivered by mail in about 3-5 days. To activate your plan just login to the ABCmobile application and follow the instructions there, be sure to install your sim before activating the plan.</p2></div></td></tr>

</table>

  </div>
  
 </div>
  </div>
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
          <p>Price stated may be subject to Service Tax <span style="padding-left: 47%;">Copyright©2023, VSVNmobile. All rights reserved.</span></p>
          <p>Send your complaints at the Consumer Forum Malaysia (CFM) | <a href="https://complaint.cfm.my/" target="_blank">www.complaint.cfm.my</a></p>
      </div>
      
  </div>
  </footer>
      
    
</body>
<script src="response.js"></script>
  <script src="chat.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</html>