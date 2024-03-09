<?php
// Check if the user is logged in

require_once "dbconnect.php";

session_start();
if (!isset($_SESSION['username'])) {
    $isLoggedIn = false;
    $loginButton = '<button id="login"><a href="login.php" class="right"><img src="image/loginsmalllogo.png" alt="loginsmalogo" class="right" style="float: left">Login</a></button>';
} else {
    $isLoggedIn = true;
    $username2 = $_SESSION['username'];
     $logoutButton = '<button id="login"><a href="logout.php" class="right"><img src="image/loginsmalllogo.png" alt="loginsmalogo" class="right" style="float: left">Logout</a></button>';
}


$query = "SELECT content, star,username FROM review ORDER BY id DESC LIMIT 5";
$result = $connection->query($query);
$reviews = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }
}

// Check if the form is submitted
if ($isLoggedIn && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the review text and star rating from the form
    $review = $_POST['review'];
    $rating = $_POST['rating'];

    // Validate the review and rating (you can add more validation if required)
    if (empty($review) || empty($rating) || !is_numeric($rating)) {
        $error = "Please fill in all the fields with valid values.";
    } else {
        $stmt = $connection->prepare("INSERT INTO review (content, star, username) VALUES (?, ?, ?)");
$stmt->bind_param("sis", $review, $rating, $username2);
$stmt->execute();


        // Check if the query was successful
        if ($stmt->affected_rows > 0) {
            $success = "Thank you for your review!";
        } else {
            $error = "Failed to submit the review. Please try again.";
        }

    }
}
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


    <title>ABC Mobile | Reviews</title>
    <style>


.star.filled {
    color: yellow;
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
        <a href="Reviews.php"  class="active">Reviews</a>
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

<div class="Reviews">
    <div class="Review">
        <h2 class="title">REVIEWS</h2>
        <p class="subtitle">Recent Comments</p>
        <p class="line">i</p>
        <div class="reviews">
            <div class="review">
                <?php $count = 0; ?>
                <?php foreach ($reviews as $review) { ?>
                    <?php if ($count >= 3) break; ?>
                    <div class="Comment">
                        <img class="people" src="image/default.png" alt="default" width="150px">
                        <div class="name"><?php echo $review['username']; ?></div>
                        <div class="rating">
                            <?php
                            $rating = $review['star'];
                            for ($i = 1; $i <= 5; $i++) {
                                if ($i <= $rating) {
                                    echo '<span class="star">&#x2605;</span>'; // Full star
                                } else {
                                    echo '<span class="star">&#x2606;</span>'; // Empty star
                                }
                            }
                            ?>
                        </div>
                        <div class="Review-Comment">
                            <p><?php echo $review['content']; ?></p>
                        </div>
                    </div>
                    <?php $count++; ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
    
 <div class="RatingBox" style="z-index: -1; ">
    <h3 class="Heading">Ratings</h3>
    <div class="Rating-Review">
        <div class="LeftRating">
            <div class="rating-title">4.5</div>
            <div class="LeftRating-star">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star-half"></span>
            </div>
            <div class="RatingPerson"><i class="fas fa-users"> 666,666 Total </i></div>
        </div>
        <div class="RightRating" style="margin-top: 10px; margin-left:10px;">
            <div class="Bar-Rating">
                <div class="LeftBar">5</div>
                <div class="RigtBar">
                    <div class="RightBar-container">
                        <div class="bar-5" style="width: 80%;"></div>
                    </div>
                </div>
            </div>
            <div class="Bar-Rating">
                <div class="LeftBar">4</div>
                <div class="RigtBar">
                    <div class="RightBar-container">
                        <div class="bar-4" style="width: 70%;"></div>
                    </div>
                </div>
            </div>
            <div class="Bar-Rating">
                <div class="LeftBar">3</div>
                <div class="RigtBar">
                    <div class="RightBar-container">
                        <div class="bar-3" style="width: 10%;"></div>
                    </div>
                </div>
            </div>
            <div class="Bar-Rating">
                <div class="LeftBar">2</div>
                <div class="RigtBar">
                    <div class="RightBar-container">
                        <div class="bar-2" style="width: 15%;"></div>
                    </div>
                </div>
            </div>
            <div class="Bar-Rating">
                <div class="LeftBar">1</div>
                <div class="RigtBar">
                    <div class="RightBar-container">
                        <div class="bar-1" style="width: 35%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--User Choices-->
<div class="UserChoices" style="z-index: -1;">
    <h1 class="userchoice-text">Users's choices</h1>
    <p class="userchoice-text">3 Month Plans</p>
    <div class="container">
        <div class="skills daily">40%</div>
    </div>
    <p class="userchoice-text">6 Month Plans</p>
    <div class="container">
        <div class="skills weekly">55%</div>
    </div>
    <p class="userchoice-text">12 Month Plans</p>
    <div class="container">
        <div class="skills monthly">15%</div>
    </div>
</div>

<div class="leavereview">
    <?php if (isset($error)) { ?>
        <p class="error-message"><?php echo $error; ?></p>
    <?php } ?>

    <?php if (isset($success)) { ?>
        <p class="success-message"><?php echo $success; ?></p>
    <?php } ?>

    <?php if ($isLoggedIn) { ?>
        <form class="review-form" method="POST" action="Reviews.php">
            <p>
                <label for="review">Leave a Review:</label><br>
                <textarea name="review" id="review" rows="4" cols="50"></textarea>
            </p>
            <p>
                <label for="rating">Rating:</label><br>
                <select name="rating" id="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Submit Review" name="submit" class="submit-button">
            </p>
        </form>
    <?php } else { ?>
        <p class="login-message">Please log in to leave a review.</p>
    <?php } ?>
</div>

<br><br><br>
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
        

        
      
        </body>
<script src="response.js"></script>
<script src="chat.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</html>

