<?php

// Information to be modified

$your_email = "Hello@gohiveapp.com"; // email address to which the form data will be sent
$subject = "Contact Message"; // subject of the email that is sent
$thanks_page = "ThankyouPage.html"; // path to the thank you page following successful form submission
$contact_page = "index.html"; // path to the HTML contact page where the form appears


// Nothing needs to be modified below this line

if (!isset($_POST['submit'])) {
    header( "Location: $contact_page" );
  }

if (isset($_POST["submit"])) {
	$option = trim($_POST["option"]);
	$mail = trim($_POST["mail"]);
	
	
	

	if (get_magic_quotes_gpc()) {
	$mail = stripslashes($mail);
	
	
	}

$error_msg=array(); 


if (empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	$error_msg[] = "Your email must have a valid format, such as name@mailhost.com";
}

$limit = 1000;


if (!empty($spa) && !($spa == "4" || strtolower($spa) == "four")) {
    echo "You failed the bot test!";
    exit ();
}

// Assuming there's an error, refresh the page with error list and repeat the form

if ($error_msg) {
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Error</title>
<style>
	body {background: #f7f7f7; font: 100%/1.375 georgia, serif;padding: 20px 40px;}
	form div {margin-bottom: 10px;}
	.content {width: 40%; margin: 0 auto;}
	h1 {margin: 0 0 20px 0; font-size: 175%; font-family: calibri, arial, sans-serif;}
	label {margin-bottom: 2px;}
	input[type="text"], input[type="email"], textarea {font-size: 0.75em; width: 98%; font-family: arial; border: 1px solid #ebebeb; padding: 4px; display: block;}
	input[type="radio"] {margin: 0 5px 0 0;}
	textarea {overflow: auto;}
	.hide {display: none;}
	.err {color: red; font-size: 0.875em; margin: 1em 0; padding: 0 2em;}
</style>
</head>
<body>
	<div class="content">
		<h1>O dear!</h1>
		<p>Unfortunately, your message could not be sent. The form as you filled it out is displayed below. Make sure each field completed, and please also address any issues listed below:</p>
		<ul class="err">';
foreach ($error_msg as $err) {
echo '<li>'.$err.'</li>';
}
echo '</ul>
	<form method="post" action="', $_SERVER['PHP_SELF'], '">
		
		
		<div id="brokerType1" class="select-style">
			<select class="select-option" name="option" id="option"'; if (isset($_POST["option"])) {echo $option;}; echo '">
				<option value="ARTIST">ARTIST</option>
				<option value="LISTENER">LISTENER</option>
			</select>
		</div>
		<div>
			<label for="mail">Email Address</label>
			<input name="mail" type="email" size="40" maxlength="60" id="mail" value="'; if (isset($_POST["mail"])) {echo $mail;}; echo '">
		</div>
		
		
		
		<div class="hide">
			<label for="spam">What is two plus two?</label>
			<input name="spam" type="text" size="4" id="spam">
		</div>
		<div>
			<input type="submit" name="submit" value="submit">
		</div>
	</form>
</body>
</html>';
exit();
} 



$email_body = 
	"Email Adress of sender: $option\n\n".
	"Email Adress of sender: $mail\n\n";

// Assuming there's no error, send the email and redirect to Thank You page

if (isset($_REQUEST['mail']) && !$error_msg) {
mail ($your_email, $subject, $email_body, "From: $option <$mail>" . "\r\n" . "Reply-To: $option <$mail>" . "Content-Type: text/plain; charset=utf-8");
header ("Location: $thanks_page");
exit();
} 

  
}