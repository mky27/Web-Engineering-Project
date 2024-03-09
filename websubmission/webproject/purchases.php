<?php
require_once "dbconnect.php";

session_start();

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

// Query to fetch data plan purchases
$dataPlanQuery = "SELECT * FROM dataplan WHERE username = '$username2'";
$dataPlanResult = mysqli_query($connection, $dataPlanQuery);

// Query to fetch phone plan purchases
$phonePlanQuery = "SELECT * FROM phoneplan WHERE username = '$username2'";
$phonePlanResult = mysqli_query($connection, $phonePlanQuery);

// Check if there are no data plan purchases
if (mysqli_num_rows($dataPlanResult) == 0) {
  $dataPlanMessage = "No data plan purchases found.";
}

// Check if there are no phone plan purchases
if (mysqli_num_rows($phonePlanResult) == 0) {
  $phonePlanMessage = "No phone plan purchases found.";
}

$receiptsQuery = "SELECT * FROM receipt WHERE username = '$username2'";
$receiptsResult = mysqli_query($connection, $receiptsQuery);
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="livechat.css">
    <link rel="stylesheet" href="Reviews.css">
    <script src="https://kit.fontawesome.com/44f557ccce.js"></script>


    <title>ABC Mobile | Purchases</title>
<style>
h2 {
        padding: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        border: 1px solid black;
    }

th {
        background: linear-gradient(to bottom, #4b0082, #4b0082);
        padding: 10px;
        text-align: left;
        border: 1px solid black;
        color: white;
    }
    td {
        background:#d8b9e6;
        padding: 10px;
        text-align: left;
        border: 1px solid black;
    }

    th {
        background-color: #f2f2f2;
    }

    .error-message {
        color: red;
        font-weight: bold;
    }

    .table-container {
        padding: 0 20px; /* Add left and right padding */
    }
</style>
</head>
<body>
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
        <a href="purchases.php"  class="active">My Plans</a>
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

  <?php if (isset($dataPlanMessage)) { ?>
    <h2>Data Plan Purchases</h2>
    <p><?php echo $dataPlanMessage; ?></p>
  <?php } else { ?>
    <h2>Data Plan Purchases</h2>
    <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Data Plan</th>
          <th>Data Quantity</th>
          <th>End Date</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Iterate through data plan purchases and display each row in the table
        while ($row = mysqli_fetch_assoc($dataPlanResult)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['dataPlan'] . "</td>";
    echo "<td>" . $row['dataQuantity'] . "</td>";
    echo "<td>" . $row['endDate'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "<td><button onclick=\"cancelConfirmation(" . $row['id'] . ")\">Cancel</button></td>";
    echo "</tr>";
}
        ?>
      </tbody>
    </table>
    </div>
  <?php } ?>

  <?php if (isset($phonePlanMessage)) { ?>
    <h2>Phone Plan Purchases</h2>
    <p><?php echo $phonePlanMessage; ?></p>
  <?php } else { ?>
    <h2>Phone Plan Purchases</h2>
    <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Phone Plan</th>
          <th>Phone Quantity</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Iterate through phone plan purchases and display each row in the table
        while ($row = mysqli_fetch_assoc($phonePlanResult)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['phonePlan'] . "</td>";
          echo "<td>" . $row['phoneQuantity'] . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table></div>
  <?php } ?>
  
<?php if (mysqli_num_rows($receiptsResult) > 0) { ?>
    <h2>Receipts</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data Plan</th>
                    <th>Phone Plan</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Iterate through the retrieved receipts and display each row in the table
                while ($row = mysqli_fetch_assoc($receiptsResult)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['dataPlan'] . "</td>";
                    echo "<td>" . $row['phonePlan'] . "</td>";
                    echo "<td><a href='download.php?id=" . $row['id'] . "'>Download</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
<?php   }?>
    

  <script>
function cancelConfirmation(rowId) {
    if (confirm("Are you sure you want to cancel this subscription?")) {
        // Redirect to a PHP script to update the status
        window.location.href = "cancel_subscription.php?id=" + rowId;
    }
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