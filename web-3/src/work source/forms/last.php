
 <?php include 'Stuff.php';?>

<html>
<head>
<title>Sample reCaptcha PHP Form</title>
 
<!-- Include reCaptcha Script in HEAD -->
<script src='https://www.google.com/recaptcha/api.js'></script>
 
</head>
 
<body>
 
<?php
// Display Error Message(s)
if($error == 1)
{
  foreach ($errormessage as $l)
  {
    echo '<font color="red">'.$l.'</font>'."<br />";
  }
}
 
// Display Success Message
if(!empty($successMessage))
{
  echo '<font color="green">'.$successMessage.'</font>'."<br />";
}
?>
 
 
  <form method="post" action="/">
  <div>
    Name:
    <input name="name" type="text" size="30">
  </div>
 
  <div>
    Mobile:
    <input name="phone" type="text" size="30">
  </div>
 
  <div>
    Email:
    <input name="email" type="text" size="30">
  </div>
 
  <div>
    Message:
    <textarea name="message" cols="40" rows="4" ></textarea>
  </div>
 
  <div class="g-recaptcha" data-sitekey="6Le6qDMUAAAAAGQRHuSOiQ89LLt01aCaoTq5_OmJ"></div>
 
  <div>
    <input name="Submit" type="submit" id="Send" value="Submit" />
  </div>
  </form>
</body>
</html>
