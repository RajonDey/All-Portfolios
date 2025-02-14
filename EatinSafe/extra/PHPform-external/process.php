<?php

// Information to be modified

$your_email = "rajondeyfiverr@gmail.com"; // email address to which the form data will be sent
$subject = "Contact Message"; // subject of the email that is sent
$thanks_page = "thankyou.html"; // path to the thank you page following successful form submission
$contact_page = "index.html"; // path to the HTML contact page where the form appears


// Nothing needs to be modified below this line

if (!isset($_POST['submit'])) {
    header( "Location: $contact_page" );
  }

if (isset($_POST["submit"])) {
	$nam = $_POST["name"];
	$ema = trim($_POST["email"]);
	$com = $_POST["comments"];
	$spa = $_POST["spam"];

	if (get_magic_quotes_gpc()) { 
	$nam = stripslashes($nam);
	$ema = stripslashes($ema);
	$com = stripslashes($com);
	}

$error_msg=array(); 

if (empty($nam) || !preg_match("/^[\s.'\-\pL]{1,60}$/u", $nam)) { 
$error_msg[] = "The name field must contain only letters, spaces and basic punctuation (.&nbsp;-&nbsp;')";
}

if (empty($ema) || !filter_var($ema, FILTER_VALIDATE_EMAIL)) {
	$error_msg[] = "Your email must have a valid format, such as name@mailhost.com";
}

$limit = 1000;

if (empty($com) || !preg_match("/^[0-9\/\-\s'\(\)!\?\.,:;\pL]+$/u", $com) || (strlen($com) > $limit)) { 
$error_msg[] = "The Comments field must contain only letters, digits, spaces and basic punctuation (&nbsp;'&nbsp;-&nbsp;,&nbsp;.&nbsp;:&nbsp;;&nbsp;/ and parentheses), and has a limit of 1000 characters";
}

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
		<div>
			<label for="name">Name</label>
			<input name="name" type="text" size="40" maxlength="60" id="name" value="'; if (isset($_POST["name"])) {echo $nam;}; echo '">
		</div>
		<div>
			<label for="email">Email Address</label>
			<input name="email" type="email" size="40" maxlength="60" id="email" value="'; if (isset($_POST["email"])) {echo $ema;}; echo '">
		</div>
		<div>
			<label for="comm">Comments</label>
			<textarea name="comments" rows="10" cols="50" id="comm">'; if (isset($_POST["comments"])) {echo $com;}; echo '</textarea>
		</div>
		<div class="hide">
			<label for="spam">What is two plus two?</label>
			<input name="spam" type="text" size="4" id="spam">
		</div>
		<div>
			<input type="submit" name="submit" value="Send">
		</div>
	</form>
</body>
</html>';
exit();
} 

$email_body = 
	"Name of sender: $nam\n\n" .
	"Email of sender: $ema\n\n" .
    "COMMENTS:\n\n" .
	"$com" ; 

// Assuming there's no error, send the email and redirect to Thank You page

if (isset($_REQUEST['comments']) && !$error_msg) {
mail ($your_email, $subject, $email_body, "From: $nam <$ema>" . "\r\n" . "Reply-To: $nam <$ema>" . "Content-Type: text/plain; charset=utf-8");
header ("Location: $thanks_page");
exit();
}  
}