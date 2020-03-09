<!DOCTYPE html>
<html>
<head>
<title>How to display PHP contact form popup using jQuery</title>
<script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="./css/style.css" />
<style>
        body {
    color: #232323;
    font-size: 0.95em;    
    font-family: arial;
}

div#success {
    text-align: center;
    box-shadow: 1px 1px 5px #455644;
    background: #bae8ba;
    padding: 10px;
    border-radius: 3px;
    margin: 0 auto;
    width: 350px;
}

.inputBox {
    width: 100%;
    margin: 5px 0px 15px 0px;
    border: #dedede 1px solid;
    box-sizing: border-box;
    padding: 15px;
}

#contact-popup {
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: none;
    color: #676767;
}

.contact-form {
    width: 350px;
    margin: 0px;
    background-color: white;
    font-family: Arial;
    position: relative;
    left: 50%;
    top: 50%;
    margin-left: -210px;
    margin-top: -255px;
    box-shadow: 1px 1px 5px #444444;
    padding: 20px 40px 40px 40px;
}

#contact-icon {
    padding: 10px 5px 5px 12px;
    width: 58px;
    color: white;
    box-shadow: 1px 1px 5px grey;
    border-radius: 3px;
    cursor: pointer;
    margin: 60px auto;
}

.info {
    color: #d30a0a;
    letter-spacing: 2px;
    padding-left: 5px;
}

#send {
    background-color: #09F;
    border: 1px solid #1398f1;
    font-family: Arial;
    color: white;
    width: 100%;
    padding: 10px;
    cursor: pointer;
}

#contact-popup h1 {
    font-weight: normal;
    text-align: center;
    margin: 10px 0px 20px 0px;
}

.input-error {
    border: #e66262 1px solid;
}
    </style>
</head>

<body>
    <div id="contact-icon">
        <img src="./icon/icon-contact.png" alt="contact" height="50"
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
</body>
</html>

<?php
if (! empty($_POST["send"])) {
    $name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    
    $toEmail = "to_email@gmail.com";
    $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
    
    if (mail($toEmail, $subject, $message, $mailHeaders)) {
?>
    <div id="success">Your contact information is received successfully!</div>

<?php
    }
}
?>