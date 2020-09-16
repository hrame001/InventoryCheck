/* Function that will be executed when the page is ready */
$(document).ready(function() {
    /* Event that will get triggered when the form is submitted */
    $(document).on('submit', '#form', function() {
        /* Assigns to the email variable the value of #email */
        var email = document.getElementById("email").value; 
        var subject = document.getElementById("subject").value; 
        var message = document.getElementById("message").value;
        
        var format = "*Email:* " + email + "\n*Subject:* " + subject + "\n*Message:* " + message;
        
        /* HTTP GET request towards Telegram */
        /* Source: URL(https://api.jquery.com/jquery.get/)*/
        $.ajax({
            url: "https://api.telegram.org/bot1128209307:AAENqhq0uZejLqb1-N0dOdq3xSF4LrGQZto/sendMessage?chat_id=326097872&parse_mode=markdown&text=" + encodeURI(format),
            type: 'GET',
            success: function (resp) {
                /* Show an alert window if the request is successful */
                alert("Thank you for your message!");
                location.reload();
            },
            error: function(e) {
                /* Show an alert window if the request is unsuccessful + the error code */
                alert('Error: ' + e);
            }  
        });
        
        /* Prevents the page from reloading when submitting the form */
        return false;
     });
}); 
