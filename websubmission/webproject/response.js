function getBotResponse(input) {
  

    //  responses
    if (input == "hello") {
        return "Hello there!";
    } 
    else if (input == "goodbye") {
        return "Talk to you later!";
    }

    else if (input ==  "I love ABC Mobile") {
        return "Thank you for the support! <3";
    }

    else if (input == "help"){
        return "Here is our keyword : <br>plan <br>coverage <br>review <br>aboutus <br>how ";
    }

    else if (input == "plan"){
        return 'Click on these links for info <br> <a href="OurPlan.php">Phone Plans</a> <br> <a href="Ourplandata.php">Data Plans</a>';
    }

    else if (input == "coverage"){
        return 'Click on this link for info <br> <a href="Coverage.php"  class="hov">Coverage</a>';
    }

    else if (input == "review"){
        return 'Click on these links for info <br> <a href="Reviews.php"  class="hov">Reviews</a>';
    }

    else if (input == "aboutus"){
        return 'Click on these links for info <br> <a href="About us.php"  class="active">About US</a>';
    }

    else if (input == "how"){
        return 'Click on these links for info <br> <a href="FAQ.php">FAQ</a> <br> <a href="T&C.php">Terms & Conditions</a> <br><a href="Howitworks.php">How it Works</a>';
    }

    else if (input == "thanks" || input == "thank" || input == "thank you" || input == "Thank you"){
        return "Glad to help ~";
    }

  
    else {
        return 'Try asking something else!<br> Type help for more info <br> Or contact us <br><a href="tel:03-1234 5000">03-1234 5000</a> <br> Or email us <br><a href="mailto:abcmobile@gmail.com">abcmobile@gmail.com</a>';
    }
}