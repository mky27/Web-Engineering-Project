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
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="livechat.css">

    <title>ABC Mobile | Mainpage</title>
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


    <!-- Homepage -->
    <div style="z-index: -1;" class ="girlcalling">
        <img src="image/man_calling.png" style="border-radius: 10px;width:100%;" alt="" >
        <div class = "welcome">
            <h1><span style="font-weight:bold; ">Welcome to ABC Mobile</span></h1>
            <p>Stay connected and explore the world of seamless communication with our reliable mobile services. We are here to cater to all your communication needs, offering top-quality network coverage, innovative mobile plans, and a wide range of cutting-edge smartphones.</p>
            

            <h1><span>About us</span></h1>
            <p>Since opening in 2023,we have become masters of our craft. Our commitment to providing quality products, exceptional service and 
                incomparable customer care keeps our community coming back again and again. We will 
                never stop improving our quality of service. Thank you for supporting us!
            </p>

            <h1>Intro for new customer</h1>
            <p>To make it easier for new customer to experience ABC Mobile's services, our 3 month plans is the best way to get started</p>
            <p>Why 3 month plans first? It is because you will have chance to try us out with the lowest price which is starting at RM20 per month. After the
                first 3 months ends, we are sure that you will have a better idea on choosing our plans or if our services is right for you!</p>

        </div>
    </div>

 <br>

    <div class = "plan">
        
        <p id="3month" style="font-weight: bold; font-size: 40px; color:#4b0082;font-family: Verdana, Geneva, Tahoma, sans-serif;">Try out our 3 months plan first!</p>
        <table id="suggest" style="width:80%;">
            <tr >
                <td colspan="3" style="background-color: #4b0082; color: white; font-weight: bold; font-size: 30px; border-radius: 20px;">CHOOSE YOUR FAVOURITE PLAN</td>
            </tr>
            <tr style="background-color: #4b0082; color: white;">
                <td style="border-radius: 15px 15px 0px 0px;">
                    <span class="bolddata">3GB</span>/month<br>5G  
                </td>
                <td style="border-radius: 15px 15px 0px 0px;" >
                    <span class="bolddata">6GB</span>/month<br>5G  
                </td>
                <td style="border-radius: 15px 15px 0px 0px;">
                    <span class="bolddata">UNLIMITED</span><br>5G  
                </td>
            </tr>
            <tr style="background-color: white;">
                <td>RM25/month</td>
                <td>RM45/month</td>
                <td>RM70/month</td>
            </tr>
            <tr style="text-align: left;background-color: white;">
                <td>
                    <ul>
                    <li>3GB<br>High-Speed Data</li>
                    <li>Uses 5G</li>
                    <li>3-in-1 Sim Card Kit</li>
                    <li>Free Mobile Hotspot</li>
                    <li>Wifi Calling & Text</li>
                    <li>Data speed reduce after 3GB but is unlimited</li>
                    <li>Sim card includes standard, micro and nano sizes</li></ul>
                </td>
                <td>
                    <ul><li>9GB<br>High-Speed Data</li>
                        <li>Uses 5G</li>
                        <li>3-in-1 Sim Card Kit</li>
                        <li>Free Mobile Hotspot</li>
                        <li>Wifi Calling & Text</li>
                        <li>Data speed reduce after 9GB but is unlimited</li>
                        <li>Sim card includes standard, micro and nano sizes</li></ul>
                </td>
                <td>
                    <ul><li>UNLIMITED<br>High-Speed Data</li>
                        <li>Uses 5G</li>
                        <li>3-in-1 Sim Card Kit</li>
                        <li>5GB Mobile Hotspot</li>
                        <li>Wifi Calling & Text</li>
                        <li>Data is UNLIMITED</li>
                        <li>Sim card includes standard, micro and nano sizes</li></ul>
                </td>
            </tr>
            <tr style="background-color: white;">
                <td style="border-radius: 0px 0px 15px 15px;">Sub total RM75</td>
                <td style="border-radius: 0px 0px 15px 15px;">Sub total RM135</td>
                <td style="border-radius: 0px 0px 15px 15px;">Sub total RM210</td>
            </tr>

        </table>
    </div>

    <br><br>

    <div class="moreplan">
        <div style="color:#4b0082;font-weight: bold;">To find out more, click the button below</div>
        <a href="Ourplandata.php" >See All Plans</a></span>
    </div>

    <br><br><br><br>

    <div class = "howitworks">
        <h1>HOW IT WORKS</h1>
        <table id="howitworks" style="width: 100%; border:0px solid white;">
            <tr>
                <td style="background-color: #ECD662;border-radius: 15px;">
                    <img src = "image/GPSlogo.png"><br>
                    <span>Check coverage</span>                  
                </td>
                <td style="background-color: #5D8233;border-radius: 15px;">
                    <img src="image/phonelogo.png"><br>
                    <span>Use existing phone or buy a new one</span>
                </td>
                <td style="background-color: #284E78;border-radius: 15px;">
                    <img src="image/plansslogo.png"><br>
                    <span>Choose any plan you want</span>
                </td>
                <td style="background-color: #3E215D;border-radius: 15px;">
                    <img src="image/orderlogo.png"><br>
                    <span>Order and activate the plan</span>
                </td>
            </tr>
        </table>
    </div>

    <br><br><br>

    <div class="coverage" style="display: flex; align-items: center;">
        <img src="image/mapgif.gif" style="width: 30%; height: auto; margin-right: 20px; margin-bottom: 10px;" alt="">
        <div>
            <h1 style="margin-top: 0;">CHECK OUT THE COVERAGE</h1>
            <p style="font-size: 20px; text-align: left;">1. Before activating our plans, please check out the coverage map to verify our service in your area. <br>
                2. Please be aware that our services may not be functioning in some areas, such as forest areas and high-rise buildings. <br>
                3. Areas with the "Mobile Tower Logo" indicate that our services are available in those locations.
            </p>
            <div id="map">
                <div>Check it out now!</div>
                <a href="Coverage.php">Let's GO</a>
            </div>
        </div>
    </div>
    
    
    

    <br><br><br>

    <div class ="phone">
        <h1>No phone? NOT a problem! <br> Buy one from us</h1>

        <table id="suggestedphone" style="width:70%;padding-left: 25%;text-align: center;">

            <tr>
                <td style="background: linear-gradient(to bottom, #4b0082,#d8b9e6);color:white;font-weight: bold;font-size: large;">
                    <br>
                    Buy one with plan
                    <br><br>
                </td>
                <td style="background: linear-gradient(to bottom,#4b0082,#d8b9e6);color:white;font-weight: bold;font-size: large;">
                    Buy one directly 
                </td>
            </tr>
            <tr>
                <td style="border: 2px solid black">IXiao 11 <br> + <br> Premium Offer
                </td>
                <td style="border: 2px solid black">IShuang 12 <br> + <br> Premium Offer</td>
            </tr>
            
            <tr>
                <td style="border: 2px solid black"><img style="height:350px;" src="image/iphoneblue.png"></td>
                <td style="border: 2px solid black"><img style="height:350px;" src="image/iphoneorange.png"></td>
            </tr>

        
           <tr><td colspan="2"> <div style="font-weight: 900;font-size: 30px; text-align: center;">Find out for more!</td></div></tr>
            
                <tr><td><div id="moreplan" style="text-align: center;"><a href="OurPlan.php">Let's GO</a></div></td>
                    <td><div id="moreplan" style="text-align: center;"><a href="Phones.php">Let's GO</a></div></td></tr>
             
            </table>
            <br>
        </div>
    

    <br>
    <br>

    <!--Sim Card-->
    <div class="simcard">
        <table>
            <tr>
                <td>
        <img src="image/simcard.png" alt="sim card">
                </td>

                <td>
                    <span style="color:#C1900F;font-weight: bold;font-size: xx-large;">Get started with ABCMobile VALUE PACK!!!!</span><br>
                    <span>Want to become one of us? Register here and get your SIM delivered for FREE in anywhere in Malaysia!</span><br><br>
                    <span style="color:#0E36B9;font-weight: 900;">Top up and Earn Points</span> <br>Earn points for every sen you spend<br><br>
                    <span style="color:#0E36B9;font-weight: 900;">5G High Speed Data</span> <br> Play game,video in high speed without loading<br><br>
                    <span style="color:#0E36B9;font-weight: 900;">Free Data Everyday</span> <br> Claim your 1GB data for free everyday<br><br>   
                    <span style="color:#0E36B9;font-weight: 900;">Enjoy our super low flat rates</span> <br>- 10 sen per SMS <br>- 10 sen per MMS <br>- 22 sen per minutes for voice calls
                </td>
            </tr>
            <tr>
                <td>
                    <span style="font-size: small; padding-left:25%;"><i>*SIM pack worth RM7</i></span>
                </td>
            </tr>
        </table>
    </div>
    <br>

      
    

     <!-- Footer -->
    <div class = "footer">
        <div class="visit">
            <p><b>Customer Careline</b></p>
            <p><a href="tel:03-1234 5000">03-1234 5000</a> or <a href="tel:12345">12345</a></p>
            <p><b>Email</b></p>
            <p><a href="mailto:abcmobile@gmail.com">abcmobile@gmail.com</a></p>
            <p><b>Follow us on <span style="padding-left: 180px">Download ABC App</span></b></p>
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