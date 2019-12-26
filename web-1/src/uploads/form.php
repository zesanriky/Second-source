<!DOCTYPE html>
<html>
<head>

<style>

@import "http://fonts.googleapis.com/css?family=Raleway";
/*----------------------------------------------
CSS Settings For HTML Div ExactCenter
------------------------------------------------*/
h3,p,label {
text-align:center;
font-family:'Raleway',sans-serif;
color:#006400
}
h2 {
font-family:'Raleway',sans-serif
}
input {
width:100%;
margin-bottom:20px;
padding:5px;
height:30px;
box-shadow:1px 1px 12px gray;
border-radius:3px;
border:none
}
textarea {
width:100%;
height:80px;
margin-top:10px;
padding:5px;
box-shadow:1px 1px 12px gray;
border-radius:3px
}
#send {
width:103%;
height:45px;
margin-top:40px;
border-radius:3px;
background-color:#cd853f;
border:1px solid #fff;
color:#fff;
font-family:'Raleway',sans-serif;
font-size:18px
}
div#feedback {
text-align:center;
height:520px;
width:330px;
padding:20px 25px 20px 15px;
background-color:#f3f3f3;
border-radius:3px;
border:1px solid #cd853f;
font-family:'Raleway',sans-serif;
float:left
}
.container {
width:960px;
margin:40px auto
}
</style>



<title>FeedBack Form With Email Functionality</title>
</head>
<!-- Body Starts Here -->
<body>
<div class="container">
<!-- Feedback Form Starts Here -->
<div id="feedback">
<!-- Heading Of The Form -->
<div class="head">
<h3>FeedBack Form</h3>
<p>This is feedback form. Send us your feedback !</p>
</div>
<!-- Feedback Form -->
<form action="#" id="form" method="post" name="form">
<input name="vname" placeholder="Your Name" type="text" value="">
<input name="vemail" placeholder="Your Email" type="text" value="">
<input name="sub" placeholder="Subject" type="text" value="">
<label>Your Suggestion/Feedback</label>
<textarea name="msg" placeholder="Type your text here..."></textarea>
<input id="send" name="submit" type="submit" value="Send Feedback">
</form>
<h3><?php include "secure_email_code.php"?></h3>
</div>
<!-- Feedback Form Ends Here -->
</div>
</body>
<!-- Body Ends Here -->
</html>


