<?php
 
$error = 0;
$successMessage = '';
 
 
if ($_POST['Submit'] == 'Send')
{
  $reURL = 'https://www.google.com/recaptcha/api/siteverify';
  $reSecret   = '6Le6qDMUAAAAADDsFXbMWoHDG1xX6Iuq25_eQHsd';
  $reResponse = $_POST['g-recaptcha-response'];
  $reSubmission = json_decode(file_get_contents($reURL."?secret=".$reSecret."&response=".$reResponse), true);
 
	if($_POST['name'] == '')
  {
  	$error = 1;
    $errormessage[] = 'Name Field is empty';
  }
 
	if($_POST['phone'] == '')
  {
  	$error = 1;
      $errormessage[] = 'Phone Field is empty';
  }
 
  if($_POST['message'] == '')
  {
  	$error = 1;
    $errormessage[] = 'Message Field is empty';
  }
 
  if($reSubmission['success'] != 1)
  {
    $error = 1;
    $errormessage[] = 'Recaptcha failed to verify';
  }
 
  if($error != 1)
  {
  	$successMessage = 'Thank you, we will contact you shortly.';
 
    $message = 'Name: '. $_POST['name']."\n\n";
    $message .= 'Phone: '. $_POST['phone']."\n\n";
    $message .= "\n\n".$_POST['message']."\n\n";
 
    mail('kai.mueller@agrohorizon.com', 'Inquiry Form: Noreplied.com', $message);
  }
}
?>
