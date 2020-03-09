<!DOCTYPE html>
<html>
<head>
<title>How to display PHP contact form popup using jQuery</title>
<script src=".C:/wamp/www/harihar-medicals/assets/scripts/vendor/jquery/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="C:/wamp/www/harihar-medicals/assets/css/style.css" />
</head>
<body>
    <div id="contact-icon">
        <img src="C:/wamp/www/harihar-medicals/assets/icon/icon-contact.png" alt="contact" height="50"
            width="50">
    </div>
    <!--Contact Form-->
    <div id="contact-popup">
        <form class="contact-form" action="" id="contact-form"
            method="post" enctype="multipart/form-data">
            <h1>Contact Us</h1>
            <div>
                <div>
                    <label>Name: </label><span id="userName-info"
                        class="info"></span>
                </div>
                <div>
                    <input type="text" id="userName" name="userName"
                        class="inputBox" />
                </div>
            </div>
            <div>
                <div>
                    <label>Email: </label><span id="userEmail-info"
                        class="info"></span>
                </div>
                <div>
                    <input type="text" id="userEmail" name="userEmail"
                        class="inputBox" />
                </div>
            </div>
            <div>
                <div>
                    <label>Subject: </label><span id="subject-info"
                        class="info"></span>
                </div>
                <div>
                    <input type="text" id="subject" name="subject"
                        class="inputBox" />
                </div>
            </div>
            <div>
                <div>
                    <label>Message: </label><span id="userMessage-info"
                        class="info"></span>
                </div>
                <div>
                    <textarea id="message" name="message"
                        class="inputBox"></textarea>
                </div>
            </div>
            <div>
                <input type="submit" id="send" name="send" value="Send" />
            </div>
        </form>
    </div>
<?php
if (! empty($_POST["send"])) {
    $name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    
    $toEmail = "to_email@gmail.com";
    $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
    
    if (! mail($toEmail, $subject, $message, $mailHeaders)) {
?>
    <div id="success">Your contact information is received successfully!</div>

<?php
    }
}
?>
<script>
$(document).ready(function () {
    $("#contact-icon").click(function () {
        $("#contact-popup").show();
    });
    //Contact Form validation on click event
    $("#contact-form").on("submit", function () {
        var valid = true;
        $(".info").html("");
        $("inputBox").removeClass("input-error");
        
        var userName = $("#userName").val();
        var userEmail = $("#userEmail").val();
        var subject = $("#subject").val();
        var message = $("#message").val();

        if (userName == "") {
            $("#userName-info").html("required.");
            $("#userName").addClass("input-error");
        }
        if (userEmail == "") {
            $("#userEmail-info").html("required.");
            $("#userEmail").addClass("input-error");
            valid = false;
        }
        if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
        {
            $("#userEmail-info").html("invalid.");
            $("#userEmail").addClass("input-error");
            valid = false;
        }

        if (subject == "") {
            $("#subject-info").html("required.");
            $("#subject").addClass("input-error");
            valid = false;
        }
        if (message == "") {
            $("#userMessage-info").html("required.");
            $("#message").addClass("input-error");
            valid = false;
        }
        return valid;

    });
});
</script>
</body>
</html>
