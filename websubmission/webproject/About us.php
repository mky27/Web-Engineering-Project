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
    <link rel="stylesheet" href="About us.css">
    <link rel="stylesheet" href="livechat.css">
    <link rel="stylesheet" href="home.css">



    <title>ABC Mobile | About Us</title>
</head>

<body style="background-color: #e0e0eb;">
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
        <a href="About us.php"  class="active">About US</a>
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

      <!-- Heading -->
      <div style="z-index: -1;" class="background">
        <img style="  filter: blur(8px); width: 100%;border:2px solid black;" src="image/building3.png" >
        <div class="aboutus">
          <p> <span style="font-family:Arial Black;font-size: 55px;color:white;font-weight: 400;">About Us - ABCMobile</span><br>
            Since our creation in 2023,we have become masters of our craft. Our commitment to providing quality products, exceptional service and 
            incomparable customer care keeps our community coming back again and again. We will 
            never stop improving our quality of service. <br>Thank you for supporting us!
        </p>
        </div>
      </div><br><br>

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

      <!--Content-->
      <div style="z-index: -1;" class="background">
        <img src="image/malaysia.png" style="width: 100%;">
      <div class="ourstory">
        <span style="font-weight: 400;font-size: 50px;">Our Purpose</span>
        <hr style="width:70%;border:2px solid black;margin-bottom: 1.5em;">
          
        <div style="margin-left:18%;margin-right:40%;text-align: left;">The ABC Mobile is a company where we provide internet service for all Malaysians who are interested in our product and eligible as well. 
          We hope to provide a high quality and stable internet for all Malaysians who are tired of the current internet service we have. With that being said, what comes to our mind when we thought of starting up our business. 
          In most areas of Malaysia, internet is an issue especially in the midst of a global pandemic when internet becomes even more demanding than ever since everyone will be working from home. 
          This is why we wanted to start this company. 
          <br><br>
          We are also well aware of the low income that people are receiving over the few months which has made internet an unaffordable thing to have. 
          In order to meet the customers, demand and make sure that our cost is lower than all of the competitors outside, we have decided that we are going to set up a low cost, affordable and high-quality mobile data plan where all Malaysians who uses it not only has access to the internet and also not spending hefty fee for our service. 
          
          <br><br>
          So, this is the purpose of why we have decided that we start up our business through a website online, advertise it and make profit out of it. 
          We are aiming to reach out to the hears of every Malaysians that our product is the one that can make a change in our society. 
        </div>
      </div><br><br>
      </div>
      <br>
    
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

    <script>
      var xs = document.getElementById("xs");
      var jl = document.getElementById("jl");
      var kk = document.getElementById("kk");
      var zh = document.getElementById("zh");
      var ky = document.getElementById("ky");

      var xsspan = document.getElementsByClassName("xsclose")[0];
      var jlspan = document.getElementsByClassName("jlclose")[0];
      var kkspan = document.getElementsByClassName("kkclose")[0];
      var zhspan = document.getElementsByClassName("zhclose")[0];
      var kyspan = document.getElementsByClassName("kyclose")[0];



      var xsbutton = document.getElementById("xsbutton")
      var jlbutton = document.getElementById("jlbutton")
      var kkbutton = document.getElementById("kkbutton")
      var zhbutton = document.getElementById("zhbutton")
      var kybutton = document.getElementById("kybutton")

      xsbutton.onclick = function(){
        xs.style.display="block";
      }
      
      jlbutton.onclick = function(){
        jl.style.display="block";
        
      }
      kkbutton.onclick = function(){
        kk.style.display="block";
      }
      zhbutton.onclick = function(){
        zh.style.display="block";
      }
      kybutton.onclick = function(){
        ky.style.display="block";
      }

      xsspan.onclick = function() {
        xs.style.display = "none";
      }

      jlspan.onclick = function() {
        jl.style.display = "none";
      }
      
      kkspan.onclick = function() {
        kk.style.display = "none";
      }

      zhspan.onclick = function() {
        zh.style.display = "none";
      }

      kyspan.onclick = function() {
        ky.style.display = "none";
      }

      


     
    </script>

<script src="response.js"></script>
<script src="chat.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
      
</body>
</html>