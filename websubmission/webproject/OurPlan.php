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
    <link rel="stylesheet" href="livechat.css">
    <link rel="stylesheet" href="home.css">

    <title>ABC Mobile | Phone Plans</title>
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
     <!--12monthplan-->
     <div class="background"></div>

     
     <h1><img src="image/12months.png" alt="12monthimg" height="200px" width="800px" ></h1>
        

       <table id="phoneplan"style="width:85%" >
             <tr>
                 <th>IXiao 11</th>
                 <th>IShuang 12</th>
                 <th>IYuen 13</th>
             </tr>

             <tr>
               <th> <img src="image/iphblue.png" alt="iphoneblue" height="350px"></th>
               <th> <img src="image/iporange.jpeg" alt="iphoneorange" height="350px"></th> 
               <th> <img src="image/ipppurple.jpeg" alt="ippurple" height="350px"></th>
             </tr>

             <tr>
               <td class="mainc"><p1>With an IXiao 11</p1></td>
               <td class="mainc"><p1>With an IShuang 12 </p1></td>
               <td class="mainc2"><p1>With an IYuen 13</p1></td>
             </tr>

             <tr class="content">
                     <td class="maincc"><p2><ul>
                       <li>Model IXiao 11<br></li>
                       <li>Xos 13<br></li>
                       <li>Dual SIM<br></li>
                       <li>4G Capability<br></li>
                       <li>64 GB size<br></li>
                       <li>8GB RAM<br></li>
                     </ul></p2></td>
                         
           
                     <td class="maincc"><p2><ul >
                         <li>Model IShuang 12<br></li>
                       <li>Sos 13<br></li>
                       <li>Dual SIM <br></li>
                       <li>5G Capability<br></li>
                       <li>128 GB size<br></li>
                       <li>8GB RAM<br></li>
                         </ul> </p2></td>
                          
                     <td class="maincc"><p2><ul>
                         <li>Model IYuen 13<br></li>
                         <li>Yos 14<br></li>
                         <li>Dual SIM <br></li>
                         <li>5G Capability<br></li>
                         <li>256 GB size<br></li>
                         <li>8GB RAM<br></li>
                       </ul> </p2></td> </tr>

             <tr class="content">
               <td class="maincc">
                 <p2><ul>
                 <li>With 0mg ABC6 Postpaid Plan</li>
                 <li>With 1 year Contract</li>
                 <li>1GB High-Speed Data</li>
                 <li>Uses 4G Lte</li>
                 <li>Unlimited Free calls among ABC Postpaid users</li>
                 <li>RM0.20/min to call all other users</li>
                 <li>RM0.10/SMS among ABC Postpaid users</li>
                 <li>RM0.15/SMS to all other users</li>
                 <li>Sim Card (standard, micro, nano sizes)</li>
               </ul></p2></td>
                   
     
               <td class="maincc"><p2><ul >
                   <li>With Omg ABC36 Postpaid Plan</li>
                   <li>With 1 year Contract</li>
                   <li>5GB Ultra-Speed Data</li>
                   <li>Uses 5G</li>
                   <li>Unlimited Free calls among ABC Postpaid users</li>
                   <li>RM0.20/min to call all other users</li>
                   <li>RM0.05/SMS among ABC Postpaid users</li>
                   <li>RM0.10/SMS to all other users</li>
                   <li>Sim Card (standard, micro, nano sizes)</li>
                 </ul></p2></td>
                    
               <td class="maincc"><p2><ul>
                   <li>With Omg ABC66 Postpaid Plan</li>
                   <li>With 1 year Contract</li>
                   <li>18GB Ultra-Speed Data<br></li>
                   <li>Uses 5G<br></li>
                   <li>Unlimited Free calls among ABC Postpaid users</li>
                   <li>Unlimited Free calls to all other users</li>
                   <li>Unlimited Free SMS among ABC Postpaid users</li>
                   <li>Unlimited Free SMS to all other users</li>
                   <li>Sim Card (standard, micro, nano sizes)</li>
                 </ul></p2></td> </tr>



             <tr class="permonth">
               <td class="mainccc">RM 147.67 / Month</td>
               <td class="mainccc">RM 260.17 / Month</td>
               <td class="mainccc">RM 331.00 / Month</td>
             </tr>

             <tr class="subtotal">
                 <td class="maincccc3">Sub total RM 1772.00<br><small>save up RM 300</small></td>
                 <td class="maincccc">Sub total RM 3122.00<br><small>save up RM 310</small></td>
                 <td class="maincccc4">Sub total RM 3972.00<br><small>save up RM 320</small></td>
             </tr>
         </table>

         <!--24monthplan--> 
<hr style="border-width: thick;">          
 <h1><img src="image/24months.png" alt="24monthimg" height="200px"  width="800px"></h1>
        

     <table id="phoneplan"style="width:85%">
         <tr>
             <th>IKwong 3 Lite</th>
             <th>IHean 7</th>
             <th>IJuan pro 30 MAX</th>
         </tr>
         <tr>
           <th> <img src="image/iphblue.png" alt="iphoneblue" height="350px"></th>
               <th> <img src="image/iporange.jpeg" alt="iphoneorange" height="350px"></th> 
               <th> <img src="image/ipppurple.jpeg" alt="ippurple" height="350px"></th>
         </tr>

         <tr>
           <td class="mainc"><p1>With an IKwong 3 Lite</p1></td>
           <td class="mainc"><p1>With an IHean 7</p1></td>
           <td class="mainc2"><p1>With an IJuan pro 30 MAX</p1></td>
         </tr>

         <tr class="content">
                     <td class="maincc"><p2><ul>
                       <li>Model IKwong 3 Lite<br></li>
                       <li>Kos 3<br></li>
                       <li>Dual SIM <br></li>
                       <li>4G Capability<br></li>
                       <li>64 GB size<br></li>
                       <li>4GB RAM<br></li>
                     </ul></p2></td>
                         
           
                     <td class="maincc"><p2><ul >
                       <li>Model IHean 7<br></li>
                       <li>Hos 7<br></li>
                       <li>Dual SIM <br></li>
                       <li>5G Capability<br></li>
                       <li>128 GB size<br></li>
                       <li>8GB RAM<br></li>
                     </ul> </p2></td>
                          
                     <td class="maincc"><p2><ul>
                       <li>Model IJuan pro 30 MAX<br></li>
                       <li>Jos 14<br></li>
                       <li>Dual SIM<br></li>
                       <li>5G Capability<br></li>
                       <li>256 GB size<br></li>
                       <li>16GB RAM<br></li>
                     </ul> </p2></td> </tr>
                       
                     <tr class="content">
                       <td class="maincc"><p2><ul>
                         <li>With 0mg ABC6 Postpaid Plan</li>
                         <li>With 2 year Contract</li>
                         <li>1GB High-Speed Data</li>
                         <li>Uses 4G Lte</li>
                         <li>Unlimited Free calls among ABC Postpaid users</li>
                         <li>RM0.20/min to call all other users</li>
                         <li>RM0.10/SMS among ABC Postpaid users</li>
                         <li>RM0.15/SMS to all other users</li>
                         <li>Sim Card (standard, micro, nano sizes)</li>
                       </ul></p2></td>
                           
             
                       <td class="maincc"><p2><ul >
                           <li>With Omg ABC36 Postpaid Plan</li>
                           <li>With 2 year Contract</li>
                           <li>5GB Ultra-Speed Data</li>
                           <li>Uses 5G</li>
                           <li>Unlimited Free calls among ABC Postpaid users</li>
                           <li>RM0.20/min to call all other users</li>
                           <li>RM0.05/SMS among ABC Postpaid users</li>
                           <li>RM0.10/SMS to all other users</li>
                           <li>Sim Card (standard, micro, nano sizes)</li>
                         </ul></p2></td>
                            
                       <td class="maincc"><p2><ul>
                           <li>With Omg ABC66 Postpaid Plan</li>
                           <li>With 2 year Contract</li>
                           <li>18GB Ultra-Speed Data<br></li>
                           <li>Uses 5G<br></li>
                           <li>Unlimited Free calls among ABC Postpaid users</li>
                           <li>Unlimited Free calls to all other users</li>
                           <li>Unlimited Free SMS among ABC Postpaid users</li>
                           <li>Unlimited Free SMS to all other users</li>
                           <li>Sim Card (standard, micro, nano sizes)</li>
                         </ul></p2></td> </tr>

         </tr>
         <tr class="permonth">
           <td class="mainccc">RM 67.25 / Month</td>
           <td class="mainccc">RM 155.17 / Month</td>
           <td class="mainccc">RM 257.67 / Month</td>
         </tr>

         <tr class="subtotal">
             <td class="maincccc3">Sub total RM 1614.00<br><small>save up RM 330</small></td>
             <td class="maincccc">Sub total RM 3724.00<br><small>save up RM 340</small></td>
             <td class="maincccc4">Sub total RM 6184.00<br><small>save up RM 400</small></td>
           </tr>
       </table>

<!--36monthplan-->
<hr style="border-width: thick;">
 <h1><img src="image/36months.png" alt="36monthimg" height="200px"  width="800px"></h1>
        
         <table id="phoneplan" style="width:85%">
             <tr>
                 <th>IHean 7</th>
                 <th>IJuan pro 30 MAX</th>
                 <th>IYuen 13</th>
             </tr>
             <tr>
               <th> <img src="image/iphblue.png" alt="iphoneblue" height="350px"></th>
               <th> <img src="image/iporange.jpeg" alt="iphoneorange" height="350px"></th> 
               <th> <img src="image/ipppurple.jpeg" alt="ippurple" height="350px"></th>
             </tr>
             <tr>
               <td class="mainc"><p1>With an IHean 7</p1></td>
               <td class="mainc"><p1>With an IJuan pro 30 MAX</p1></td>
               <td class="mainc2"><p1>With an IYuen 13</p1></td>
             </tr>
             <tr class="content">
                 <td class="maincc"><p2><ul>
                     <li>Model IHean 7<br></li>
                     <li>Hos 7<br></li>
                     <li>Dual SIM <br></li>
                     <li>5G Capability<br></li>
                     <li>128 GB size<br></li>
                     <li>8GB RAM<br></li>
                 </ul></p2></td>
                     
       
                 <td class="maincc"><p2><ul >
                     <li>Model IJuan pro 30 MAX<br></li>
                         <li>Jos 14<br></li>
                         <li>Dual SIM<br></li>
                         <li>5G Capability<br></li>
                         <li>256 GB size<br></li>
                         <li>16GB RAM<br></li>
                     </ul> </p2></td>
                      
                 <td class="maincc"><p2><ul>
                     <li>Model IYuen 13<br></li>
                     <li>Yos 14<br></li>
                     <li>Dual SIM <br></li>
                     <li>5G Capability<br></li>
                     <li>256 GB size<br></li>
                     <li>16GB RAM<br></li>
                   </ul> </p2></td> </tr>
                   
                   <tr class="content">
                     <td class="maincc"><p2><ul>
                       <li>With 0mg ABC6 Postpaid Plan</li>
                       <li>With 3 year Contract</li>
                       <li>1GB High-Speed Data</li>
                       <li>Uses 4G Lte</li>
                       <li>Unlimited Free calls among ABC Postpaid users</li>
                       <li>RM0.20/min to call all other users</li>
                       <li>RM0.10/SMS among ABC Postpaid users</li>
                       <li>RM0.15/SMS to all other users</li>
                       <li>Sim Card (standard, micro, nano sizes)</li>
                     </ul></p2></td>
                         
           
                     <td class="maincc"><p2><ul >
                         <li>With Omg ABC36 Postpaid Plan</li>
                         <li>With 3 year Contract</li>
                         <li>5GB Ultra-Speed Data</li>
                         <li>Uses 5G</li>
                         <li>Unlimited Free calls among ABC Postpaid users</li>
                         <li>RM0.20/min to call all other users</li>
                         <li>RM0.05/SMS among ABC Postpaid users</li>
                         <li>RM0.10/SMS to all other users</li>
                         <li>Sim Card (standard, micro, nano sizes)</li>
                       </ul></p2></td>
                          
                     <td class="maincc"><p2><ul>
                         <li>With Omg ABC66 Postpaid Plan</li>
                         <li>With 3 year Contract</li>
                         <li>18GB Ultra-Speed Data<br></li>
                         <li>Uses 5G<br></li>
                         <li>Unlimited Free calls among ABC Postpaid users</li>
                         <li>Unlimited Free calls to all other users</li>
                         <li>Unlimited Free SMS among ABC Postpaid users</li>
                         <li>Unlimited Free SMS to all other users</li>
                         <li>Sim Card (standard, micro, nano sizes)</li>
                       </ul></p2></td> </tr>
   

         
             </tr>
             <tr class="permonth">
               <td class="mainccc">RM 85.17 / Month</td>
               <td class="mainccc">RM 161.00 / Month</td>
               <td class="mainccc">RM 152.11 / Month</td>
             </tr>
 
             <tr class="subtotal">
                 <td class="maincccc3">Sub total RM 3066.00<br><small>save up RM 350</small></td>
                 <td class="maincccc">Sub total RM 5796.00<br><small>save up RM 500</small></td>
                 <td class="maincccc4">Sub total RM 5476.00<br><small>save up RM 400</small></td>
               </tr>
           </table>
           <hr style="border-width: thick;">      
       <!--button-->

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