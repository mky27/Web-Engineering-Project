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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="livechat.css">
    <link rel="stylesheet" href="FAQ.css">
    <title>ABC Mobile | FAQ</title>
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
        <!--body-->
        <body class="FAQ">
            <header class ="faqhead">Frequently Asked Questions</header>
            <br>
            <div class="search-container" style="text-align: center;">
               <form action="http://www.google.com">
               <input type="text" placeholder="Search.." name="search" style="width: 50%;">
               <button type="submit">Submit<i class="fa fa-search"></i></button>
              </form>
            </div>
        <br>
        <button class="accordion">What is an e-sim?<span style="float: right;"><i class="fa fa-caret-down"></i></span></button>
        <div class="panel">
          <p>An eSIM is only an actual SIM that has gone computerized. Rather than you genuinely embeddings a SIM into your telephone to join the Mint organization, you introduce an eSIM onto your telephone/gadget. It implies you don't need to trust that your SIM will be conveyed, you can enact straight after buy. 
            In case you are new to ABCmobile, and have an opened, qualified gadget you can pick eSIM at season of procurement. 
            Assuming you are a current ABCmobile client, sign into the ABCmobile application, head to Options > SIM. The eSIMs is supported on all mobile devices.</p>
        </div>
        
        <button class="accordion">How do I activate my e-sim?<span style="float: right;"><i class="fa fa-caret-down"></i></span></button>
        <div class="panel">
          <p>It's quite simple and we walk you through the means. When you buy your arrangement and select an 'eSIM conveyance' then you can decide to either initiate your arrangement immediately, or enact later in two simple advances. 1. Initiate your arrangement On the request affirmation page there will be a huge orange catch 'Enact now'. Hit this in the event that you wish to enact your arrangement following buy. Assuming you need to pause, no issue. We will send you an email with a similar connection to actuate at your recreation. 2. Introduce your eSIM Once your arrangement is actuated, then, at that point you should introduce the eSIM onto the qualified gadget you will utilize Mint on. To do this you will check the QR code that shows up on screen after you actuate your arrangement. On the off chance that you close the screen prior to filtering, again no issue. We'll be circling back to an email that will contain the QR code.</p>
        </div>

        <button class="accordion">I'm experiencing difficulty with my esim help!<span style="float: right;"><i class="fa fa-caret-down"></i></span></button>
        <div class="panel">
          <p>1. You've scanned the QR code and opened the establishment interaction, however the screen is frozen on 'Cell Plan'. Close the window on your telephone, and rescan the QR Code.
            <br>
            2. In the event that you can't examine the QR code, check and ensure that you have your QR scanner empowered in your Settings.</p>
        </div>
        
        <button class="accordion">Can I get a new mobile number with ABCmobile?<span style="float: right;"><i class="fa fa-caret-down"></i></span></button>
        <div class="panel">
        <p>Indeed, you can demand another number during the SIM card initiation measure. You should enter your ZIP code and pick the choice, "Get another number." another number will auto produce dependent on the ZIP code and accessibility in your specific region code. Any similarity your new number bears to the topographical directions of the Lost City of Atlantis is absolutely incidental.</p>
        </div>
        
        <button class="accordion">About ABCmobile<span style="float: right;"><i class="fa fa-caret-down"></i></span></button>
        <div class="panel">
        <p>ABCmobile is a data plan company which was originally founded in 2023. ABCmobile is aim is to help connect everyone with our internet service so that even people with lower income are abble to afford it. For more details please visit our <a href="About us.php">About Us </a>website.</p>
        </div>
        
        <button class="accordion">What are the ABCmobile data plans?<span style="float: right;"><i class="fa fa-caret-down"></i></span></button>
        <div class="panel">
        <p>ABCmobile has 3 different data plans which is the 12 months plan, 24 months plan and 36 months plan. In each of the plans, customers can choose from 3 different packages and that comes with diferent prices and phones. For more details please visit <a href="OurPlan.php">Our Plan</a> page.</p>
        </div>

        <button class="accordion">How do I know if my area is covered?<span style="float: right;"><i class="fa fa-caret-down"></i></span></button>
        <div class="panel">
        <p>Need not to worry, ABCmobile is covered mostly across Malaysia including east and west Malaysia. To check out our tower coverage please visit our <a href="Coverage.php">Coverage</a> page.</p>
        </div>

        <button class="accordion">Help I still have other questions!<span style="float: right;"><i class="fa fa-caret-down"></i></span></button>
        <div class="panel">
        <p>If you still have questions you can always contact us with the live chat, or you can give us a call 03-1234 5000 or by <a href = "mailto: abcmobile@gmail.com">email</a></p>
        </div>

        <button class="accordion">Is there anything to be mindful with while subscribing to ABCmobile?<span style="float: right;"><i class="fa fa-caret-down"></i></span></button>
        <div class="panel">
        <p>Yes of course there is, for that please check out our <a href="T&C.php">terms and conditions</a> page</a></p>
        </div>
        <br>
        <br>
        <br>

        <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
        </script>
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
            <p>Price stated may be subject to Service Tax <span style="padding-left: 47%;">Copyright©2023, ABCmobile. All rights reserved.</span></p>
            <p>Send your complaints at the Consumer Forum Malaysia (CFM) | <a href="https://complaint.cfm.my/" target="_blank">www.complaint.cfm.my</a></p>
        </div>
        
    </div>
        
      
</body>

<script src="response.js"></script>
    <script src="chat.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</html>