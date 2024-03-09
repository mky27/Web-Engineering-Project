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
    <link rel="stylesheet" href="Phones.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bitter:wght@400&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight:wght@700&display=swap" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Wellfleet&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Train+One&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="livechat.css">


    <title>ABC Mobile | Phones</title>
</head>

<body>
   <!-- Header-->
   <button onclick="topFunction()" id="topbtn" title="Scroll to top">T<br>o<br>p<br> &#9757;</button>

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

        <!-- Advertise1 -->
        <div class="adv">
          <div class="adv-1">
           <h1>IJuan pro 30 Max or IYuen 13 ?<br>Take your pick</h1>
           <p>Own a new devices with Malaysia's No.1 Fatest Mobile Network!</p> 
           <a href="IJuanpro30max.php" class="btn">SHOP NOW &#10153;</a> 
        </div>
        <div class="adv-1">
          <img src="image/ip1.png">
        </div>
        </div>
        <br>

        <!-- Advertise2 -->
        <div class="adv2">
          <div class="adv-2">
          <img src="image/ip2.png">
        </div>
          <div class="adv-2">
           <h1>Switch to ABC Postpaid</h1>
           <p>Switch now to save more on your mobile plan</p> 
           <a href="IYuen13.php" class="btn2">LEARN MORE</a> 
        </div>
        </div>
        <br><br><br><br>

        <!-- Latest Products-->
          <button class="small-container"><h1 style="font-family: 'Bungee Outline', cursive;">Latest Products</h1></button>
        <div class="row">
          <div class="column">
            <img src="image/pro2main.png" alt="p1" style="width:50%">
            <button>IYuen 13</button>
            <p><small><del>RM3928.00</del></small></p>
            <h2><small><sup>RM</sup></small>3608.00<small> &#10004; save up RM320</small></h2>
            <a href="IYuen13.php" class="info">BUY NOW <i class="fa fa-shopping-cart"></i></a>
          </div>
          
          <div class="column">
            <img src="image/pro1main.png" alt="p1" style="width:50%">
            <button>IHean 7</button>
            <p><small><del>RM3628.00</del></small></p>
            <h2><small><sup>RM</sup></small>3288.00<small> &#10004; save up RM340</small></h2>
            <a href="IHean7.php" class="info">BUY NOW <i class="fa fa-shopping-cart"></i></a>
          </div>
          
          <div class="column">
            <img src="image/pro3main.png" alt="p1" style="width:50%">
            <button>IJuan pro 30 Max</button>
            <p><small><del>RM5400.00</del></small></p>
            <h2><small><sup>RM</sup></small>5000.00 <small> &#10004; save up RM400</small></h2>
            <a href="IJuanpro30max.php" class="info">BUY NOW <i class="fa fa-shopping-cart"></i></a>
          </div>
        </div>
        <br><br><br><br>

        <!-- Featured Products-->
        <button class="small-container"><h1 style="font-family: 'Bungee Outline', cursive;">Featured Products</h1></button>
        <div class="row">
          <div class="column">
            <img src="image/pro7main.png" alt="p1" style="width:50%">
            <button>IKwong 3 Lite</button>
            <p><small><del>RM1708.00</del></small></p>
            <h2><small><sup>RM</sup></small>1508.00<small> &#10004; save up RM200</small></h2>
            <a href="IKwong3lite.php" class="info">BUY NOW <i class="fa fa-shopping-cart"></i></a>
          </div>
          
          <div class="column">
            <img src="image/pro4main1.png" alt="p1" style="width:50%">
            <button>IXiao 11</button>
            <p><small><del>RM1910.00</del></small></p>
            <h2><small><sup>RM</sup></small>1760.00<small> &#10004; save up RM150</small></h2>
            <a href="IXiao11.php" class="info">BUY NOW <i class="fa fa-shopping-cart"></i></a>
          </div>
          
          <div class="column">
            <img src="image/pro5main.png" alt="p1" style="width:50%">
            <button>IShuang 12</button>
            <p><small><del>RM3000.00</del></small></p>
            <h2><small><sup>RM</sup></small>2720.00 <small> &#10004; save up RM280</small></h2>
            <a href="IShuang12.php" class="info">BUY NOW <i class="fa fa-shopping-cart"></i></a>
          </div>
        </div>
        <br><br><br><br>

        <script>
          //Get the button
          var topbutton = document.getElementById("topbtn");
          
          // When the user scrolls down 60px from the top of the document, show the button
          window.onscroll = function() {scrollFunction()};
          
          function scrollFunction() {
            if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
              topbutton.style.display = "block";
            } else {
              topbutton.style.display = "none";
            }
          }
          
          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
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