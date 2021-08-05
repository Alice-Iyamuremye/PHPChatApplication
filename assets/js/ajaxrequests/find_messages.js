

    // Ajax To find Messages accordingly to the chat
    chatBox = document.querySelector(".whrmsggoes")
            // Function To scroll the Mouse to the bottom 
    function scrollToBottom(){
                chatBox.scrollTop = chatBox.scrollHeight;
            }
            // Detect when the mouse enter the chatbox , so that the scrolling does not 
            // Happen as long as the user is inside the chatbox
            chatBox.onmouseenter = ()=>{
            chatBox.classList.add("active");
            }
        // As soon as the user leave then sroll to the latest message
        chatBox.onmouseleave = ()=>{
            chatBox.classList.remove("active");
            }

    //Function That will be called over and over again after some interval of time
        function get_messages_again(l) {
        url = "private/find_messages.php?chat=" + l;
        let xhr = new XMLHttpRequest();
        xhr.open("GET", url, true);
        xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var d = new Date();
            var t = d.toLocaleTimeString();
            let result = xhr.responseText;
            let target = document.querySelector(".whrmsggoes");
            target.innerHTML = result;
            document.querySelector(".textmessageid").value=l;
            // Check is user is in or out to do the scrolling after getting the data
            if(!chatBox.classList.contains("active")){
                scrollToBottom();
            }
        }
    }
    xhr.send();
}
    
var settfunc = "";
        function end_get_messages() {
        clearInterval(settfunc);
        }
    // sent Interval Function to call the getMessage function over and over
    function keepfindingtext(l) {
        // When New Contact is selected , we need to end the interval of the previous selection by clearing it
        // Create a new interval accordingly to the selected contact
        //End Previous Set Interval in case user was in a group
        end_group_messages(setfunc2);

        end_get_messages(settfunc);
        settfunc = setInterval(get_messages_again, 500, l);
    }





    // Find Group Messages



    //Function That will be called over and over again after some interval of time
        function get_group_messages_again(l) {
        url = "private/find_group_messages.php?chat=" + l;
        let xhr = new XMLHttpRequest();
        xhr.open("GET", url, true);
        xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var d = new Date();
            var t = d.toLocaleTimeString();
            let result = xhr.responseText;
            let target = document.querySelector(".whrmsggoes");
            target.innerHTML = result;
            document.querySelector(".textmessageid").value=l;
            // Check is user is in or out to do the scrolling after getting the data
            if(!chatBox.classList.contains("active")){
                scrollToBottom();
            }
        }
    }
    xhr.send();
}
    
var setfunc2 = "";
        function end_group_messages() {
        clearInterval(setfunc2);
        }
    // sent Interval Function to call the getMessage function over and over
    function keepfindinggroupmsg(l) {
        // When New Contact is selected , we need to end the interval of the previous selection by clearing it
        // Create a new interval accordingly to the selected contact
        //End Previous Set Interval in case user was in a contact
        end_get_messages(settfunc);

        end_group_messages(setfunc2);
        setfunc2 = setInterval(get_group_messages_again, 500, l);
    }



    