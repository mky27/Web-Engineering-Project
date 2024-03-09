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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="livechat.css">
    <link rel="stylesheet" href="T&C.css">

    <title>ABC Mobile | Terms & Conditions</title>
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
          
    
    <div>
        <br>
        <div class="theader"><b>Terms and Conditions</b></div>
        <div class="tcontent">
        <br>
        <p1><b>THIS TERMS OF USE SETS OUT THE BASIS ON WHICH YOU AGREE TO ACCESS AND USE THE WEBSITE AND/OR ONLINE SERVICES (COLLECTIVELY REFERRED TO AS THE “SERVICES”). AS SUCH, PLEASE READ THIS TERMS OF USE CAREFULLY.</b></p1>
        <br>
        <br>
        <p1><b>1. Acess and use</b></p1>
        <br>
        <br>
        <p1><b>1.1</b> By viewing, accessing and using the Services, you agree to be bound by this Terms of use and the Maxis Group Privacy Statement(found at www.ABCmobile.com.my)</p1>
        <br>
        <br>
        <p1><b>1.2</b> We are entitled, from time to time, to vary, add to or otherwise amend this Terms of Use or any part thereof without any liability. Please visit this Website periodically to determine any changes. The prevailing Terms of Use will be updated on our Website, which will apply and supersede all previous versions. Continued use of the Services following any changes constitutes an acceptance of those changes. If you do not accept this Terms of Use (including any changes), please discontinue your access to the Services.</p1>
        <br>
        <br>
        <br>
        <p1><b>2. Your Use of the Services</b></p1>
        <br>
        <br>
        <p1><b>2.1</b> You are solely responsible for all acts or omissions that occur when using the Services. You equally agree to be bound by ABCmobile's Fair Usage Policy (found at www.ABCmobile.com.my). You are solely responsible for the content which you post or transmit through the Online Services and you acknowledge that Maxis are only the conduit for posting, distribution and transmission of data. You agree that:</p1>
        <ul>
            <li>your utilization of the Services may be for legal purposes and not for any reason against public interest, public request or public agreement and is as per this Terms of Use;</li>
            <li>every Content, product or administrations sent or made accessible through the Services, are the sole liability of the individual from which such Content, items or administrations started;</li>
            <li>you alone are responsible for every Content, product or administrations you communicate or make accessible through the Services or on any site;</li>
            <li>by utilizing the Services, you might be presented to outsider Content, items or administrations that might be slanderous, hostile, obscene, frightful or unlawful;</li>
            <li>you cannot utilize the Services to distribute slanderous, encroaching, disgusting or other unlawful material and post or communicate unlawful, annoying, hostile, oppressive, compromising, destructive, revolting, foul, security attacking, sexual/racially hostile or in any case offensive material of any sort or nature;</li>
            <li>you cannot utilize the Services to meddle with, harm, upset or unlawfully use or access any help, gear or PC network without due authorisation;</li>
            <li>you cannot utilize the Services in a way that outcomes in dispersion of infections, diversions, worms, delayed bombs, cancelbots, or other comparable hurtful or harming programming schedules which are intended to interfere with, obliterate or limit the usefulness of any program or equipment or media transmission hardware;</li>
            <li>you cannot utilize the Services to send garbage mail, spam, networking letters or spontaneous mass appropriation of email, or for any business purposes.</li>
            <li>you cannot utilize the Services to mimic some other individual or to make a bogus character.</li>
            <li>you cannot foster limited secret key just access pages, or secret pages or pictures (those not connected to or from another open page).</li>
            <li>you will inform Maxis promptly of any unapproved use or some other break of safety.</li>
            <li>You cannot participate in any movement, regardless of whether legal or unlawful, which we exclusively decide, to be hurtful to our clients, activities, notoriety, kindness or clients connection.</li>
            <li>You won't disturb or subvert the security of the different organizations and frameworks that are associated with the Services, or disregard the guidelines, arrangements, or methods of such organizations or frameworks. This might incorporate any inability to refresh programming use for you or site that is known to be helpless against pernicious movement or abuse. </li>
            <li>To make or endeavor any illicit or unapproved admittance to any part or segment of the Services, the organization or any outsider gear, records, frameworks or organizations to which you can interface through the Services straightforwardly or something else; or to do or endeavor any action that may be utilized as a forerunner to an endeavored framework entrance (for example port, secrecy, security or infiltration checks or other data gathering movement) on Maxis' or its specialist co-ops' workers or organization; </li>
            <li>You cannot utilize the Services for any fake, illicit or ill-advised purposes or exercises or to abuse anyone's privileges or in any capacity which might influence other clients' satisfaction in or admittance to the Services or cause disturbance, provocation, aggravation, bother or nervousness to anybody, including publicizing, working with, requesting or in any case taking part in ponzi plans, fraudulent business models, disavowal of administration assaults, pinging and mailbombing, falsely charging Mastercards or pilfering programming; </li>
            <li>The Services includes admittance to, utilization of and trade of data over the web and you recognize that such admittance to, utilization of and trade of data may not be secure. Maxis won't be at risk to you in the event that you endure misfortune or harm because of the data not being secure. </li>
            <li>You will follow every single material law, rules and guidelines and any guidelines, sees, headings, prerequisites or limitations which we might force on the utilization of the Services;</li>
        </ul>
        <p1><b>2.2</b> You are needed to give exact and complete data to us and illuminate us quickly of any progressions in a specifics or data given to us, including yet not restricted to any progressions in address or potentially contact points of interest;</p1>
        <br>
        <br>
        <p1><b>2.3</b> You hereby agree that ABCmobile merely facilitates the Services for you to send multimedia messages and does not expressly or impliedly endorse, authorise or sponsor the messages sent by you. You hereby release Maxis from any liability, disputes, claims, demands and/or damages of any kind arising from or in any way connected to the use of the Services.</p1>
        <br>
        <br>
        <br>
        <p1><b>3. ABCmobile's Rights</b></p1>
        <br>
        <br>
        <p1><b>3.1 </b>ABCmobile might decline, eliminate, adjust or deny admittance to any Content, items or administrations which you send or make accessible through the Services or on any site, including without constraint such Content, items or administrations that might be or alternately are affirmed to be slanderous, hostile, obscene, shocking or illicit or may host encroached any gathering's protected innovation rights. We will not be answerable for deciding the legitimacy of any charges in such manner. </p1>
        <br>
        <br>
        <p1><b>3.2 </b>ABCmobile isn't liable for the condition or Content of any outsider destinations which might be found on the Services. The link(s) are given exclusively to your comfort and don't demonstrate, explicitly or impliedly, any support, approval or sponsorship by ABCmobile of those site(s) or the items or administrations gave there. You access those locales and utilize their items and administrations exclusively at your own danger. ABCmobile isn't answerable for use or any exchanges performed on those locales. </p1>
        <br>
        <br>
        <p1><b>3.3 </b>ABCmobile might deny admittance to or eliminate any outsider Content, items or administrations that might be abusive, hostile, disgusting, questionable or illicit or may host encroached any get-together's licensed innovation rights, without notice to you. </p1>
        <br>
        <br>
        <p1><b>3.4 </b>Without bias to passage 3.3 above, ABCmobile might reject, eliminate, adjust, deny admittance to, suspend or end any outsider Content, items or administrations which you might access, utilize or procure through the sites, Services. ABCmobile and its Related Corporations won't be responsible to you or any outsider under this Clause 3. 
        <br>
        <br>
        <p1><b>3.5 </b>ABCmobile doesn't ensure that you will approach the Services consistently. You might encounter interferences to the Services and ABCmobile won't be obligated to you in the event that you endure misfortune or harm because of these interferences. You access those Content and utilize their items and administrations exclusively at your own danger. In no occasion will ABCmobile be obligated to you or anybody for any harm emerging from or occasioned by the utilization of these outsider Content. </p1>
        <br>
        <br>
        <p1><b>3.6 </b>On the off chance that you post Content or submit material, except if we demonstrate else, you award Maxis a non-elite, eminence free, never-ending, irreversible, completely sub-licensable right to utilize, duplicate, change, adjust, distribute, decipher, make subsidiary works from, circulate, and show such substance all through the world in any media. You award ABCmobile and sub-licensees the option to utilize the name that you submit regarding such Content. </p1>
        <br>
        <br>
        <p1><b>3.7 </b>You address and warrant that you own or in any case control every one of the rights to the Content that you post; that the Content is exact; that the utilization of the Content you supply doesn't abuse the ABCmobile Fair Usage Policy and won't make injury any individual or element. </p1>
        <br>
        <br>
        <p1><b>3.8 </b>ABCmobile might set up broad practices and cutoff points concerning utilization of this Services, including without constraint, the greatest number of times (and the most extreme span for which) you might get to the Services, in a given timeframe. </p1>
        <br>
        <br>
        <p1><b>3.9 </b>ABCmobile claims all authority to examine expected maltreatments or potentially any maltreatment as per your utilization of the Services. You are needed to completely help out any of ABCmobile's examinations in regard of these issue. </p1>
        <br>
        <br>
        <p1><b>3.10 </b>Any infringement of the Terms of Use warrants prompt end of your utilization of the Services.</p1>
        <br>
        <br>
        <br>
        <p1><b>4. Copyright and Trademark Notice</b></p1>
        <br>
        <br>
        <p1><b>4.1 </b>The Content in the Services are ensured by copyright, brand names as well as other licensed innovation rights and other pertinent laws of Malaysia. You might see the Services and utilize its Content for individual and non-business purposes. Any Content on the Services may not be replicated, circulated, communicated, distributed, showed, communicated, put away, adjusted, authorized, modified, hyperlinked or in any case utilized in any way or using any and all means without Maxis' earlier composed assent. You may not, without Maxis' earlier composed assent, embed a hyperlink to the Services (or any part thereof) on some other site. </p1>
        <br>
        <br>
        <p1><b>4.2 </b>You may not outline or use outlining procedures to encase any Content, brand name, logo, or other restrictive data (counting pictures, text, page, format, or type) of ABCmobile without express assent. You may not utilize any meta labels or some other "covered up text" using names, logos or brand names having a place with ABCmobile without express assent of ABCmobile. </p1>
        <br>
        <br>
        <p1><b>4.3</b>No permit or rights are conceded to you and your entrance or utilization of the Services ought not be interpreted as giving, by suggestion, estoppel or something else, any permit or right to utilize the brand names, trademarks, logos, or administration marks without ABCmobile's earlier composed assent. </p1>
        <br>
        <br>
        <p1><b>4.4</b>The assemblage (counting yet not restricted to the assortment, plan, and get together) of all Content on the Services is the select property of ABCmobile and secured by copyright. All product utilized on the Services is the property of ABCmobile or its product providers and secured by copyright.</p1>
        <br>
        <br>
        <br>
        <p1><b>5. Personal Information</b></p1>
        <br>
        <br>
        <p1><b>5.1 </b>You confirm that you have read and agree with the ABCmobile's Privacy Statement set out in ABCmobile's website at www.ABCmobile.com.my</p1>
        <br>
        <br>
        <br>
        <p1><b>6. Breach of Term, Termination and/or Suspension</b></p1>
        <br>
        <br>
        <p1><b>6.1 </b>ABCmobile holds the rights to limit, suspend or end your record or your admittance to the Services. </p1>
        <br>
        <br>
        <p1><b>6.2 </b>Nothing contained in this Terms of Use will be understood to restrict our activities or cures in any matter and we save whatsoever occasions all rights and cures accessible to us at law. </p1>
        <br>
        <br>
        <p1><b>6.3 </b>ABCmobile will not be responsible for any inability to play out its commitments thus brought about by demonstrations of God, revolt, war, demonstration of psychological oppression, public or neighborhood crises, prerequisites of government or other skilled specialists, modern debates of any sort, fire, lightning, blasts, flood, severe climate, subsidence, acts or oversights of outsider, outsider providers, administrators, specialist co-ops, project workers or specialists whom we might use to play out any piece of the Service(s), program breakdown, electrical force disappointment and additionally interference or disturbance of ABCmobile's organization or any reason outside ABCmobile's sensible control. </p1>
        <br>
        <br>
        <p1><b>6.4 </b>ABCmobile claims all authority to alter under any circumstance or suspend or end (briefly or forever) the Services whenever and every now and then with or without notice. You concur that ABCmobile will not be responsible to you or to some other gathering for such alteration, suspension or end of the Services. </p1>
        <br>
        <br>
        <p1><b>6.5 </b>Any penetrate or endeavored break to think twice about's as well as some other gathering's organization security is restricted and may bring about criminal and additionally respectful obligation.</p1>
        <br>
        <br>
        <br>
        <p1><b>7. Password Confidentiality</b></p1>
        <br>
        <br>
        <p1><b>7.1 </b>We are focused on shielding your protection on the web. We have found a way ways to guarantee that sensible measures have been set up to forestall unapproved access, revelations, misfortune or robberies of by and by recognizable data gathered and communicated through the Services. </p1>
        <br>
        <br>
        <p1><b>7.2 </b>You might be needed to enlist and give individual subtleties to get to certain Online Services. In such conditions, you might be needed to enter your secret key each time you access the Online Services. You are answerable for keeping up with the classification of your secret phrase and additionally client confirmation and for confining admittance to your PC, and you consent to acknowledge liability and liabilities for all exercises that happen under your secret phrase as well as client verification, if approved by you. You attempt to notice all safety efforts recommended by ABCmobile concerning your secret phrase or by and large in regard of the entrance and utilization of the Services. Should you have any motivation to accept that your secret word has been abused and additionally compromised whether by burglary, extortion or else, you will advise ABCmobile following becoming mindful of the equivalent and you will continue to change your secret word. </p1>
        <br>
        <br>
        <p1><b>7.3 </b>ABCmobile will not be obligated for any misfortune or harm which you and additionally any outsider endures or may endure because of directions or exchanges communicated through the Services after effective use of your secret phrase whether such utilization was approved by you. </p1>
        <br>
        <br>
        <p1><b>7.4 </b>You will keep ABCmobile completely reimburse against all misfortune or harm which ABCmobile endures or may experience in association, regardless of whether straightforwardly or by implication, with use of your secret word whether by you or any outsider, approved or something else. </p1>
        <br>
        <br>
        <p1><b>7.5 </b>ABCmobile claims all authority to nullify or suspend your secret phrase whenever without being obliged to offer you any clarification or earlier notification. ABCmobile will not be at risk for any misfortune or harm which you might endure because of such refutation as well as suspension. </p1>
        <br>
        <br>
        <p1><b>7.6 </b>ABCmobile maintains all authority to cease the secret phrase getting to framework concerning the Services whenever, without earlier notification. ABCmobile will not be at risk for any misfortune or harm which you might endure because of such cessation.</p1>
        <br>
        <br>
        <br>
        <p1><b>8. Liability</b></p1>
        <br>
        <br>
        <p1><b>8.1 </b>Despite anything actually in this contained, Maxis and our particular work force or potentially providers won't be responsible to you or some other gathering in agreement, misdeed (counting carelessness ) or in any case in regard of any case brought by you or by any outsider for any deficiency of benefit or income or loss of business or loss of information or for hindered or suspended interchanges or for any immediate, backhanded, exceptional, coincidental, weighty harms, correctional harms, or for any injury caused or endured by an individual or harm to property or any harms emerging out of or regarding the Services, regardless of whether ABCmobile, our faculty or providers were or ought to have known about the likelihood that such harm or misfortune would happen. The avoidance alluded to thus applies to any activity leading to a commitment, obligation or risk. We disavow all responsibility to the furthest reaches permitted by law. </p1>
        <br>
        <br>
        <p1><b>8.2 </b>By getting to and utilizing the Services, you consent to forgo and hold ABCmobile and our particular work force or potentially providers innocuous from any cases identifying with any activity taken by ABCmobile and our individual faculty and additionally providers including the direct of an examination, issuance of a notice, refusal, expulsion, alteration or forswearing of admittance to Content, items or benefits, suspending or ending the Services, or other fitting activity corresponding to any associated or asserted penetrate with this Terms of Use. <p1>
        <br>
        <br>
        <p1><b>8.3 </b>Without bias to the previous, where a court or a referee holds or discovers ABCmobile and our particular work force and additionally providers responsible to you for any penetrate or default, you concur that the measure of harms payable by ABCmobile and our separate staff or potentially providers to you will not whenever surpass the amount of RM1000.00.</p1>
        <br>
        <br>
        <br>
        <p1><b>9. Disclaimer</b></p1>
        <br>
        <br>
        <p1><b>9.1 </b>The Services (counting the data, names, pictures, pictures, logos and symbols with respect to or identifying with ABCmobile, its items and administrations or to outsider items and administrations (assuming any)) is given on an "with no guarantees" and "as accessible" premise and ABCmobile makes no express or inferred portrayal or guarantees comparable to the Services, any property or data in or any exchange performed through the Services including however not restricted to:</p1>
        <ul>
            <li>all guarantees of wellbeing, legitimateness, merchantability, fulfillment, qualification for reason, title, non-encroachment and similarity of the Services; </li>
            <li>the security, accessibility, openness, idealness, mistake free and continuous utilization of the Services; </li>
            <li>reality and precision of the Content or resulting adjustments thereto; </li>
            <li>the activities and exclusions of clients whether happened on or outside the Services; </li>
            <li>any cancellation, non-conveyance or inability to store any client interchanges or customized settings; </li>
            <li>the failure to utilize the Services or powerlessness to get any messages gotten or exchanges entered through the Services; </li>
            <li>the precision and unwavering quality of results acquired from the utilization of the Services and that any mistakes in the product will be adjusted; </li>
            <li>any inferred guarantee emerging from the course of managing or exchange; and </li>
            <li>any commitment, responsibility, right, guarantee in misdeed or in any case whether emerging from the carelessness of ABCmobile.</li>
        </ul>
        <p1><b>9.2 </b>To the full degree allowed by law, Maxis repudiate all such guarantees.</p1>
        <br>
        <br>
        <p1><b>9.3 </b>In no occasion will ABCmobile, their separate specialists and agents, providers, sellers or shippers who have a presence on the Services be responsible to you or any other person for any misfortune or injury or any immediate, circuitous, extraordinary, praiseworthy, considerable harms, or convoluted activity, emerging out of or regarding your entrance, utilization of, or your failure to access or utilize the Services.</p1>
        <br>
        <br>
        <br>
        <p1><b>10. Indemnity</b></p1>
        <br>
        <br>
        <p1><b>10.1 </b>You consent to reimburse ABCmobile, our offshoots, specialist co-ops, workers, chiefs and specialists in full against all cases, harms, misfortunes, liabilities, costs, requests, activities, punishments and expenses, emerging out of or regarding your entrance or utilization of the Services, your carelessness, or any exclusion, act or penetrate of this Terms of Use by you or some other people utilizing your record (regardless of whether explicitly approved by you). </p1>
        <br>
        <br>
        <br>
        <p1><b>11. Assignment</b></p1>
        <br>
        <br>
        <p1><b>11.1 </b>You are not allowed to relegate or novate any, or any part, of your privileges or potentially commitments under the Terms of Use to any gathering, without our earlier composed assent. </p1>
        <br>
        <br>
        <p1><b>11.2 </b>You concur and assent that we might dole out any, or any part, or all, of our privileges under the Terms of Use to our Related Corporations or any outsider by notice recorded as a hard copy to you. </p1>
        <br>
        <br>
        <p1><b>11.3 </b>You further concur and assent that we might novate any, or any part, or all, of our privileges as well as commitments under the Terms of Use, or the Terms of Use itself, to our Related Corporations or any outsider by notice recorded as a hard copy to you. Your proceeded with use, after assistance of such notification on you, of the Services will be considered as your agree to proceed with the Services after such novation. <br>
        <br>
        <br>
        <br>
        <p1><b>12. Governing Law</b></p1>
        <br>
        <br>
        <p1><b>12.1 </b>By getting to and utilizing the Services, you concur that such access or potentially use, just as this Terms of Use will be represented by and interpreted as per the laws of Malaysia and you consent to submit to the restrictive locale of the Malaysian courts.</p1>
    </div>
</div>
    <br><br><br><br>

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
            <p>Price stated may be subject to Service Tax <span style="padding-left: 47%;">Copyright©2023, ABCMobile. All rights reserved.</span></p>
            <p>Send your complaints at the Consumer Forum Malaysia (CFM) | <a href="https://complaint.cfm.my/" target="_blank">www.complaint.cfm.my</a></p>
        </div>
        
        
    </div>
        
      
</body>

<script src="response.js"></script>
    <script src="chat.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</html>