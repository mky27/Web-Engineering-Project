// Button for up and down
var coll = document.getElementsByClassName("button-design");

for (let i = 0; i < coll.length; i++) {
    //add event listener method to attach a click event to the whole chat button
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
    //declare a variable to next element sibling of the class name "button design" which is "chat-content"
        var content = this.nextElementSibling;
    //If this is true, the "chat-content" div will collapse
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
    //else the "chat-content" will float up according to the scroll height since the scrollHeight property returns the height of the chat box in px
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }

    });
}

// Gets the first message
function firstBotMessage() {
    let firstMessage = "How's it going?"
    //replace the part with id("botStarterMessage") with this string varible(firstMessage) 
    document.getElementById("botStarterMessage").innerHTML = '<p class="botText"><span>' + firstMessage + '</span></p>';

}

firstBotMessage();

//Retrieves the response
function getHardResponse(userText) {
    //to get the response from another function by passing userText to it
    let botResponse = getBotResponse(userText);
    //to cover the botresponse with css style and assign to this variable
    let botHtml = '<p class="botText"><span>' + botResponse + '</span></p>';
    //use jquery to select the id("message") from html then use append() method to insert the content at the end of the selected element
    $("#message").append(botHtml);
    //everytime when send a message, the chat won't float up automatically and it will stay in one position
    document.getElementById("chat-bottom").scrollIntoView(true);
}

//Gets user input
function getResponse() {
    //to retrieve the text from the input box
    let userText = $("#textInput").val();

    //if the message send by user is empty, it will automatically replace by "I love ABC Mobile"
    if (userText == "") {
        userText = "I love ABC Mobile";
    }
     //to cover the user input with css style and assign to this variable
    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    //once the user send the message, the text in the input box will be empty
    //so the user won't have to delete message to send another message
    $("#textInput").val("");

    //use jquery to select the id("message") from html then use append() method to insert the content at the end of the selected element
    $("#message").append(userHtml);

    //Chat won't float up if the user send a message
    document.getElementById("chat-bottom").scrollIntoView(true);

    //Response time 
    //Everytime user send a message, the chatBot will reply after 0.5 second
    setTimeout(() => {
        getHardResponse(userText);
    }, 500)

}

// send text via button clicks
function sendButton() {
    getResponse();
}

//To get the current date and display it on the header of the chat box
const date = new Date();
document.getElementById("dateandtime").innerHTML = date;

