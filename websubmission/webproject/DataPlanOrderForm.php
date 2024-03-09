<?php
// Include the dbconnect.php file
require_once "dbconnect.php";

session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Check if a session exists
if (!isset($_SESSION["username"])) {
    // Redirect the user to the login page
    header("Location: login.php");
    exit;
}

// Check if a session exists
if (isset($_SESSION['username'])) {
    // Set the logout button HTML
    $username2 = $_SESSION['username'];
    $logoutButton = '<button id="login"><a href="logout.php" class="right"><img src="image/loginsmalllogo.png" alt="loginsmalogo" class="right" style="float: left">Logout</a></button>';
} else {
    // Set the login button HTML
    $loginButton = '<button id="login"><a href="login.php" class="right"><img src="image/loginsmalllogo.png" alt="loginsmalogo" class="right" style="float: left">Login</a></button>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_FILES['receipt'])) {
        $file = $_FILES['receipt']['tmp_name'];
        $imageData = addslashes(file_get_contents($file));
        $fileExtension = pathinfo($_FILES['receipt']['name'], PATHINFO_EXTENSION);
        // Generate a unique filename for the image
        $filename = uniqid() . "." . $fileExtension;

        // Set the destination directory to save the image
        $destination = "receipt/" . $filename;

        // Check if the phone plan fields are filled
        if ($_POST['selectedPhonePlan'] != 'Choose a phone plan' && $_POST['phoneQuantity'] != 0) {
            $selectedPhonePlan = $_POST["selectedPhonePlan"];
            $phoneQuantity = $_POST["phoneQuantity"];

            // Prepare and execute the SQL statement for phone plan
            $stmt2 = $connection->prepare("INSERT INTO phoneplan (phonePlan, phoneQuantity, username) VALUES (?, ?, ?)");
            $stmt2->bind_param("sis", $selectedPhonePlan, $phoneQuantity, $username2);
            $stmt2->execute();
            $stmt2->close();
        }

        if ($_POST['selectedDataPlan'] != 'Choose a plan' && $_POST['dataQuantity'] != 0) {
            $selectedDataPlan = $_POST["selectedDataPlan"];
            $dataQuantity = $_POST["dataQuantity"];
            $currentDate = new DateTime();
            $status = "Recurring";
            
            if (strpos($selectedDataPlan, "3 Months") !== false) {
            $currentDate->add(new DateInterval('P3M'));
            }
            
            else if (strpos($selectedDataPlan, "6 Months") !== false) {
                $currentDate->add(new DateInterval('P6M'));
            }
            
            else if (strpos($selectedDataPlan, "12 Months") !== false) {
                $currentDate->add(new DateInterval('P1Y'));
            }
            
            else{
                $currentDate->add(new DateInterval('P1M'));
            }
            
            $currentDateFormatted = $currentDate->format('Y-m-d');
            
            // Prepare and execute the SQL statement for data plan
            $stmt1 = $connection->prepare("INSERT INTO dataplan (dataPlan, dataQuantity, username,endDate,status) VALUES (?, ?, ?,?,?)");
            $stmt1->bind_param("sisss", $selectedDataPlan, $dataQuantity, $username2, $currentDateFormatted, $status);
            $stmt1->execute();
            $stmt1->close();
        }

        if (move_uploaded_file($file, $destination)) {
            // Image file was successfully moved to the destination
            $planNone = "None";
            if ($_POST['selectedPhonePlan'] != 'Choose a phone plan' && $_POST['selectedDataPlan'] != 'Choose a plan' && $_POST['phoneQuantity'] != 0 && $_POST['dataQuantity'] != 0) {
                // Save the file path and extension in the database
                $query = $connection->prepare("INSERT INTO receipt (username, image_path, file_extension, dataPlan, phonePlan) VALUES (?, ?, ?,?,?)");
                $query->bind_param("sssss", $username2, $destination, $fileExtension, $selectedDataPlan, $selectedPhonePlan);
                $query->execute();
                $query->close();
            } else if ($_POST['selectedPhonePlan'] != 'Choose a phone plan' && $_POST['selectedDataPlan'] == 'Choose a plan' && $_POST['phoneQuantity'] != 0 && $_POST['dataQuantity'] == 0) {
                $query = $connection->prepare("INSERT INTO receipt (username, image_path, file_extension, dataPlan, phonePlan) VALUES (?, ?, ?,?,?)");
                $query->bind_param("sssss", $username2, $destination, $fileExtension, $planNone, $selectedPhonePlan);
                $query->execute();
                $query->close();
            } else if ($_POST['selectedPhonePlan'] == 'Choose a phone plan' && $_POST['selectedDataPlan'] != 'Choose a plan' && $_POST['phoneQuantity'] == 0 && $_POST['dataQuantity'] != 0) {
                $query = $connection->prepare("INSERT INTO receipt (username, image_path, file_extension, dataPlan, phonePlan) VALUES (?, ?, ?,?,?)");
                $query->bind_param("sssss", $username2, $destination, $fileExtension, $selectedDataPlan, $planNone);
                $query->execute();
                $query->close();
            }

            // Redirect the user to the thank you page
            header("Location: thankyou.php");
            exit;
        }
    }
}
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="OrderForm.css">
    <link rel="stylesheet" href="livechat.css">
    <link rel="stylesheet" href="home.css">

    <title>ABC Mobile | Plan Order Form</title>
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
<br>
    

    <!--Form for data plan selection-->
    <div style="background-color: #c9c5b9; width:40%; margin:auto; border-style: solid;">
    <br>
    <span style="padding-left:5%; font-weight: 900;">Data Plan Order Form</span><br>
    <div style="padding-left:3%;">
        <form id="form1" method="POST" action="DataPlanOrderForm.php" enctype="multipart/form-data" onsubmit="return validateForm()">
            <table>
                <tr>
                    <td>
                        Choose your plan
                    </td>
                    <td>
                        <select name="selectedDataPlan" id="choose-plan" onchange="myPlan()">
                            <option>Choose a plan</option>
                            <option value="3 Months Plan - 3GB/month">3 Months Plan - 3GB(5G)/month &#8594; RM75</option>
                             <option value="3 Months Plan - 9GB/month">3 Months Plan - 9GB(5G)/month &#8594; RM135</option>
                <option value="3 Months Plan - UNLIMITED">3 Months Plan - UNLIMITED(5G) &#8594; RM210</option>
                <option value="6 Months Plan - 3GB/month">6 Months Plan - 3GB(5G)/month &#8594; RM120</option>
                <option value="6 Months Plan - 9GB/month">6 Months Plan - 9GB(5G)/month &#8594; RM240</option>
                <option value="6 Months Plan - UNLIMITED">6 Months Plan - UNLIMITED(5G) &#8594; RM390</option>
                <option value="12 Months Plan - 3GB/month">12 Months Plan - 3GB/(5G)month &#8594; RM180</option>
                <option value="12 Months Plan - 9GB/month">12 Months Plan - 9GB/(5G)month &#8594; RM420</option>
                <option value="12 Months Plan - UNLIMITED">12 Months Plan - UNLIMITED(5G) &#8594; RM720</option>
                <option value="PreVN15">PreVN 15 - 15GB(4G)/month &#8594; RM45</option>
                <option value="PreVN15+">PreVN 15+ - 15GB(5G)/month &#8594; RM65</option>
                <option value="OmgABC 6">OmgABC 6 - 1GB(4G)/month &#8594; RM6</option>
                <option value="OmgABC 36">OmgABC 36 - 5GB(5G)/month &#8594; RM36</option>
                <option value="OmgABC 66">OmgABC 66 - 18GB(5G)/month &#8594; RM66</option>
                        </select>
                    </td>
                </tr>
                <tr>
           <td>
                Quantity: 
                </td>
                <td>
                <input name="dataQuantity" id="quantityplan" onchange="myPlan()" type="number" min=0 max=10 default=1 value=0>
                </td>
             </tr>
             <tr>
             <td>
             Chosen Plan:</td><td>
              <span id="plan"></span><br></td></tr>
            <tr><td>
             Quantity: </td><td>    <span id="quantity">0</span><br></td></tr>

             <tr><td>
             Total Price : </td><td>RM <span id="price">0.00</span><br></td></tr>

                <!-- Phone plan form fields -->
                <tr>
                    <td>
                        Choose your phone plan
                    </td>
                    <td>
                        <select name="selectedPhonePlan" id="choose-phone-plan" onchange="myPlan()">
                            <option>Choose a phone plan</option>
                            <option value="IXiao 11">IXiao 11</option>
                            <option value="IShuang 12">IShuang 12</option>
                <option value="IYuen 13">IYuen 13 </option>
                <option value="IKwong 3 Lite">IKwong 3 Lite </option>
                <option value="IHean 7">IHean 7 </option>
                <option value="IJuan pro 30 MAX">IJuan pro 30 MAX</option>
                <option value="12 Months Plan - IXiao 11">12 Months Plan - IXiao 11</option>
                <option value="12 Months Plan - IShuang 12">12 Months Plan - IShuang 12</option>
                <option value="12 Months Plan - IYuen 13">12 Months Plan - IYuen 13 </option>
                <option value="24 Months Plan - IKwong 3 Lite">24 Months Plan - IKwong 3 Lite </option>
                <option value="24 Months Plan - IHean 7">24 Months Plan - IHean 7 </option>
                <option value="24 Months Plan - IJuan pro 30 MAX">24 Months Plan - IJuan pro 30 MAX </option>
                <option value="36 Months Plan - IHean 7">36 Months Plan - IHean 7 </option>
                <option value="36 Months Plan - IJuan pro 30 MAX">36 Months Plan - IJuan pro 30 MAX </option>
                <option value="36 Months Plan - IYuen 13">36 Months Plan - IYuen 13 </option>
                        </select>
                    </td>
                </tr>
                 <tr>
           <td>
                Quantity: 
                </td>
                <td>
                  <input name="phoneQuantity" id="quantity-phone" onchange="myPlan()" type="number" min=0 max=10 default=1 value=0>
                </td>
             </tr>
             <tr>
             <td>
             Chosen Plan:</td><td>
              <span id="phoneplan"></span><br></td></tr>

              <tr>
                  <td>Phone</td>
                  <td style="background-color: white;height:370px;text-align: center;"><span id="phoneimage"></span></td>
              </tr>
            <tr><td>
             Quantity: </td><td>    <span id="phonequantity">0</span><br></td></tr>

             <tr><td>
             Total Price : </td><td>RM <span id="phoneprice">0.00</span><br></td></tr>

                <!-- File upload field -->
                <tr>
    <td>
        Attach Receipt:
    </td>
    <td>
        <input type="file" name="receipt" id="receipt" accept="image/*">
    </td>
</tr>



                <!-- Submit button -->
                <tr>
                </tr>
            </table>
        </form>
        <br>
    </div>
</div>
<br>


    <!--Cart-->
    <div style="background-color: #c9c5b9;width:40%;margin:auto;border-style: solid;"><br><span style="padding-left:5%;font-weight: 900;"><span id="quantitynumber" >0</span><i class="fa fa-shopping-cart"></i>Cart</span><br>
       
        <div style="padding-left:3%;">
            <hr>
            <table  style="width:100%;">
                <tr>
                    <td>
                        Product
                    </td>
                    <td style="text-align: right;">
                        Price (RM)
                    </td>
                </tr>
                <tr>
                    <td>
                        <span id="dataproduct">Data Plan</span>
                    </td>
                    <td style="text-align: right;">
                        <span id="totaldata">0</span>.00
                    </td>
                </tr>

                <tr >
                    <td>
                        <span id="phoneproduct">Phone Plan</span>
                    </td>
                    <td style="text-align: right;">
                        <span id="totalphone" style="text-align: right;">0</span>.00
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                  </tr>
                <tr >
                    <td>
                        Total
                    </td>
                    <td style="text-align: right;">
                        <span id="totalphonedata">0</span>.00
                    </td>
                </tr>
            </table>
           <br>
        <br>

        </div>
    </div>
    <br>
    <div style="padding-left: 80%;">
  <button type="submit" form="form1" style="width:200px;height:50px;border-radius: 5px;cursor:pointer;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Confirm Payment</button>
</div>


  
    <br><br>
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
<script src="PlanOrderForm.js"></script>
</html>