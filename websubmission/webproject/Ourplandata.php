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
    <link rel="stylesheet" href="OurPlan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="livechat.css">

    <title>ABC Mobile | Data Plans</title>
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
            <button style="background-color: rgb(104, 96, 96);color: white;" class="dropbtn">Our Plans 
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
    
  <!--Dataplan-->
  <div class="background"></div>

   
  <!--table 1-->  
  
     <h1 class="datacontent">
         ABCmobile Data Plans </h1> 

        <h5><br> <button id="changebutton"onclick="showfirst()" autofocus>3 Months 5G Super Value Plan</button><br>
            <br><button id="changebutton1"onclick="showsecond()">6 Months 5G Super Value Plan</button><br>
            <br><button id="changebutton2"onclick="showthird()">12 Months 5G Super Value Plan</button><br>
        </h5>
     <div class="threetable" id="threetable"><h1 class="threemonth">3 Months 5G Super Value ABC Contract Postpaid Plans</h1>
   
     <table id="special">
         <tr style="background: #ffba0a;">
            <th><p8>3GB<p9>/month<br>
             5G</p9> </p8></th>
 
            <th ><p8>9GB<p9>/month<br>
             5G</p9></p8></th>
            <th>
 
             <p8>UNLIMITED<br>
             <p9>5G</p9></p8></th>
         </tr>
 
         <tr class="money">
             <td>RM25/month</td>
             <td>RM45/month</td>
             <td>RM70/month</td>
         </tr>
        
         <tr class="content">
             <td><ul><li>3GB High-Speed Data</li>
                 <li>Uses 4G Lte</li> 
                 <li>3-in-1 Sim Card Kit</li>
                 <li>Free Mobile Hotspot</li>
                 <li>Wifi Calling & Text</li>
                 <li>Data speed reduce after 9GB but is unlimited</li>
                 <li>Sim card includes standard, micro and nano sizes</li><br><br></ul></td>
             <td><ul><li>9GB High-Speed Data</li>
                 <li>Uses 5G</li>
                 <li>3-in-1 Sim Card Kit</li>
                 <li>Free Mobile Hotspot</li>
                 <li>Wifi Calling & Text</li>
                 <li>Data speed reduce after 9GB but is unlimited</li>
                 <li>Sim card includes standard, micro and nano sizes</li><br><br></ul></td>
             <td><ul><li>UNLIMITED High-Speed Data</li>
                 <li>Uses 5G</li>
                 <li>3-in-1 Sim Card Kit</li>
                 <li>5GB Mobile Hotspot</li>
                 <li>Wifi Calling & Text</li>
                 <li>Data is UNLIMITED</li>
                 <li>Sim card includes standard, micro and nano sizes</li><br><br></ul></td>
         </tr>
         <tr class="money"style="background: orange">
             <td >Sub total RM75</td>
             <td >Sub total RM135</td>
             <td >Sub total RM210</td>
         </tr>
         </table></div>

         <!--6 table-->
         <div class="sixtable" id="sixtable"><h1 class="sixmonth">6 Months 5G Super Value ABC Contract Postpaid Plans</h1>
   
            <table id="special1">
                <tr style="background: rgb(22, 223, 156)">
                   <th><p8>3GB<p9>/month<br>
                    5G</p9> </p8></th>
        
                   <th ><p8>9GB<p9>/month<br>
                    5G</p9></p8></th>
                   <th>
        
                    <p8>UNLIMITED<br>
                    <p9>5G</p9></p8></th>
                </tr>
        
                <tr class="money">
                    <td>RM20/month</td>
                    <td>RM40/month</td>
                    <td>RM65/month</td>
                </tr>
               
                <tr class="content">
                    <td><ul><li>3GB High-Speed Data</li>
                        <li>Uses 4G Lte</li> 
                        <li>3-in-1 Sim Card Kit</li>
                        <li>Free Mobile Hotspot</li>
                        <li>Wifi Calling & Text</li>
                        <li>Data speed reduce after 9GB but is unlimited</li>
                        <li>Sim card includes standard, micro and nano sizes</li><br><br></ul></td>
                    <td><ul><li>9GB High-Speed Data</li>
                        <li>Uses 5G</li>
                        <li>3-in-1 Sim Card Kit</li>
                        <li>Free Mobile Hotspot</li>
                        <li>Wifi Calling & Text</li>
                        <li>Data speed reduce after 9GB but is unlimited</li>
                        <li>Sim card includes standard, micro and nano sizes </li><br><br></ul></td>
                    <td><ul><li>UNLIMITED High-Speed Data</li>
                        <li>Uses 5G</li>
                        <li>3-in-1 Sim Card Kit</li>
                        <li>5GB Mobile Hotspot</li>
                        <li>Wifi Calling & Text</li>
                        <li>Data is UNLIMITED</li>
                        <li>Sim card includes standard, micro and nano sizes</li><br><br></ul></td>
                </tr>
                <tr class="money"style="background: rgb(1, 199, 133)">
                    <td >Sub total RM120</td>
                    <td >Sub total RM240</td>
                    <td >Sub total RM390</td>
                </tr>
                </table></div>
                <!--twelve-->
                <div class="twelvetable" id="twelvetable"><h1 class="twelvemonth">12 Months 5G Super Value ABC Contract Postpaid Plans</h1>
   
                    <table id="special2">
                        <tr style="background: rgba(74, 182, 245, 0.897)">
                           <th><p8>3GB<p9>/month<br>
                            5G</p9> </p8></th>
                
                           <th ><p8>9GB<p9>/month<br>
                            5G</p9></p8></th>
                           <th>
                
                            <p8>UNLIMITED<br>
                            <p9>5G</p9></p8></th>
                        </tr>
                
                        <tr class="money">
                            <td>RM15/month</td>
                            <td>RM35/month</td>
                            <td>RM60/month</td>
                        </tr>
                       
                        <tr class="content">
                            <td><ul><li>3GB High-Speed Data</li>
                                <li>Uses 4G Lte</li> 
                                <li>3-in-1 Sim Card Kit</li>
                                <li>Free Mobile Hotspot</li>
                                <li>Wifi Calling & Text</li>
                                <li>Data speed reduce after 9GB but is unlimited</li>
                                <li>Sim card includes standard, micro and nano sizes</li><br><br></ul></td>
                            <td><ul><li>9GB High-Speed Data</li>
                                <li>Uses 5G</li>
                                <li>3-in-1 Sim Card Kit</li>
                                <li>Free Mobile Hotspot</li>
                                <li>Wifi Calling & Text</li>
                                <li>Data speed reduce after 9GB but is unlimited</li>
                                <li>Sim card includes standard, micro and nano sizes</li><br><br></ul></td>
                            <td><ul><li>UNLIMITED High-Speed Data</li>
                                <li>Uses 5G</li>
                                <li>3-in-1 Sim Card Kit</li>
                                <li>5GB Mobile Hotspot</li>
                                <li>Wifi Calling & Text</li>
                                <li>Data is UNLIMITED</li>
                                <li>Sim card includes standard, micro and nano sizes</li><br><br></ul></td>
                        </tr>
                        <tr class="money"style="background: rgba(45, 154, 218, 0.897)">
                            <td >Sub total RM180</td>
                            <td >Sub total RM420</td>
                            <td >Sub total RM720</td>
                        </tr>
                        </table></div>

    <!---->
    <script>
        function showfirst() {
          document.getElementById("threetable").style.display = "block";
          document.getElementById("sixtable").style.display = "none";
          document.getElementById("twelvetable").style.display = "none";
        }
        
        function showsecond() {
          document.getElementById("threetable").style.display = "none";
          document.getElementById("sixtable").style.display = "block";
          document.getElementById("twelvetable").style.display = "none";
        }
        
        function showthird() {
          document.getElementById("threetable").style.display = "none";
          document.getElementById("sixtable").style.display = "none";
          document.getElementById("twelvetable").style.display = "block";
        }
        </script>
    <!---->
                
 
     <h2><img src="image/planlogo.png" alt="planlogo" ><br>
       <img src="image/pvsp.png" alt="pvsp" width="650px" height="170px" ></h2>
       
     <table id="data">
         <tr>
             <th></th>
             <th class="paid">ABC Prepaid Plan</th> 
             <th class="paid">ABC Postpaid Plan</th>
             <th></th>
           </tr>
           <tr>         
            <td class="left">
           
        </td>
 <!--prepaid-->
             <td class="mid">
                 <h2>PreVN <p4>15</p4></h2>
                 <p3><ul>
                     <img src ="image/sim.png" alt="simcard" width="30px" height="30px"><p7>Mobile Data</p7>
                    <li>15GB data 4G LTE</li>
                    <img src ="image/phone.png" alt="phone" width="30px" height="30px"><p7>Calls</p7>
                     <li>RM0.30/min to call all other users</li>
                    <img src="image/SMS.png" alt="SMS" width="30px" height="30px"><p7>SMS</p7>
                     <li>RM0.20/SMS to all other users</li>
                     <img src="image/wifi.png" alt="WIFI" width="30px" height="30px"><p7>ABCsocial</p7>
                     <li>Extra 10GB for app IG,FB and Twiter
                         <img src="image/iglogo.png" alt="iglogo" width="15px" height="15px">
                         <img src="image/fblogo.png" alt="fblogo" width="15px" height="15px">
                         <img src="image/twitlogo.png" alt="twitlogo" width="15px" height="15px">&nbsp;&nbsp;&nbsp;&nbsp;</li>
                     <img src="image/clock.jpg" alt="clock" width="30px" height="30px"><p7>Validity</p7>
                     <li>Valid for 30 days</li>
                     <img src="image/cardslot.jpg" alt="cardslot" width="30px" height="30px"><p7>Sim Card</p7>
                     <li>(standard, micro, nano sizes)</li>
                 </ul></p3>
                      <h3><small>RM</small>45&nbsp;<br></h3><br>
 
 
 
                      <h2>PreVN <p4>15+</p4></h2>
                      <p3><ul>
                          <img src ="image/sim.png" alt="simcard" width="30px" height="30px"><p7>Mobile Data</p7>
                         <li>15GB data 5G </li>
                         <img src ="image/phone.png" alt="phone" width="30px" height="30px"><p7>Calls</p7>
                         <li>RM0.30/min to call all other users</li>
                        <img src="image/SMS.png" alt="SMS" width="30px" height="30px"><p7>SMS</p7>
                         <li>RM0.20/SMS to all other users</li>
                         <img src="image/wifi.png" alt="WIFI" width="30px" height="30px"><p7>ABCsocial</p7>
                         <li>Extra 10GB for app IG,FB and Twiter
                             <img src="image/iglogo.png" alt="iglogo" width="15px" height="15px">
                             <img src="image/fblogo.png" alt="fblogo" width="15px" height="15px">
                             <img src="image/twitlogo.png" alt="twitlogo" width="15px" height="15px"></li>
                         <img src="image/clock.jpg" alt="clock" width="30px" height="30px"><p7>Validity</p7>
                         <li>Valid for 30 days</li>
                         <img src="image/cardslot.jpg" alt="cardslot" width="30px" height="30px"><p7>Sim Card</p7>
                         <li>(standard, micro, nano sizes)</li>
                      </ul></p3>
                           <h3><small>RM</small>65&nbsp;<br></h3><br>
 
                 <p5>&nbsp;Add on & Top up</p5><br>
                 <p6>&nbsp;-RM4 for 1GB (4G LTE)<br>
                     &nbsp;-RM18 for 5GB (4G LTE)<br>
                     &nbsp;-RM32 for 10GB (4G LTE)</p6>
 
 <!--postpaid-->
             <td class="mid">
                 <h2>Omg ABC<p4> 6</p4></h2>
                 <p3><ul>
                     <img src ="image/sim.png" alt="simcard" width="30px" height="30px">
                     <p7>Mobile Data</p7>
                    <li>1GB data 4G LTE, unlimited slow data</li> 
                    <img src ="image/phone.png" alt="phone" width="30px" height="30px">
                    <p7>Calls</p7>
                     <li>Unlimited Free calls among ABC Postpaid users</li>
                     <li>RM0.20/min to all other users</li>
                     <img src="image/SMS.png" alt="SMS" width="30px" height="30px">
                    <p7>SMS</p7>
                     <li>RM0.10/SMS among ABC Postpaid users</li>
                     <li>RM0.15/SMS to all other users</li>
                     <li>Sim Card (standard, micro, nano sizes)</li></ul>
                 </p3>
                      <h3><small>RM</small>6<small>/month &nbsp;</small><br></h3>
 <!--36-->
                 <h2>Omg ABC<p4> 36</p4></h2>
                      <p3><ul>
                          <img src ="image/sim.png" alt="simcard" width="30px" height="30px">
                          <p7>Mobile Data</p7>
                         <li>5GB data 5G, unlimited slow data</li>
                          <img src ="image/phone.png" alt="phone" width="30px" height="30px">
                         <p7>Calls</p7>
                          <li>Unlimited Free calls among ABC Postpaid users</li>
                          <li>RM0.20/min to all other users</li>
                          <img src="image/SMS.png" alt="SMS" width="30px" height="30px">
                          <p7>SMS</p7>
                          <li>RM0.05/SMS among ABC Postpaid users</li>
                          <li>RM0.10/SMS to all other users</li>
                          <li>Sim Card (standard, micro, nano sizes)</li></ul>
                      </p3>
                           <h3><small>RM</small>36<small>/month&nbsp; </small><br></h3>
 
 <!--66-->
 
                 <h2>Omg ABC<p4> 66</p4></h2>
                     <p3><ul>
                         <img src ="image/sim.png" alt="simcard" width="30px" height="30px">
                         <p7>Mobile Data</p7>
                        <li>18GB data 5G, unlimited slow data</li>
                        <img src ="image/phone.png" alt="phone" width="30px" height="30px">
                        <p7>Calls</p7>
                         <li>Unlimited Free calls among ABC Postpaid users</li>
                         <li>Unlimited Free calls to all other users</li>
                         <img src="image/SMS.png" alt="SMS" width="30px" height="30px">
                         <p7>SMS</p7>
                         <li>Unlimited Free SMS among ABC Postpaid users</li>
                         <li>Unlimited Free SMS to all other users</li>
                         <li>Sim Card (standard, micro, nano sizes)</li></ul>
                     </p3>
                          <h3><small>RM</small>66<small>/month&nbsp;</small><br></h3>
 
                 <h4><a href="OurPlan.php" class="linkphone">Check Postpaid With Phone Plans ... </a></h4>
 
             
            </td>
 <td class="right">
           
        </td>
 
            </tr></table>
       <!--Button-->
       <p style="text-align: center;"><a href="DataPlanOrderForm.php"><button  id="nicebutton">Check It Out </button></a></p>

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
