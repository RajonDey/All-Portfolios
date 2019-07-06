<?php

// Information to be modified

$your_email = "rajondeylu@gmail.com"; // email address to which the form data will be sent
$subject = "Contact Message"; // subject of the email that is sent
$thanks_page = "ThankyouPage.html"; // path to the thank you page following successful form submission
$contact_page = "index.html"; // path to the HTML contact page where the form appears


// Nothing needs to be modified below this line

if (!isset($_POST['submit'])) {
    header( "Location: $contact_page" );
  }

if (isset($_POST["submit"])) {
	$fnam = $_POST["fname"];
	$lnam = $_POST["lname"];
	$ema = trim($_POST["email"]);
	$job = $_POST["jtitle"];
	$num = $_POST["number"];
	$time = $_POST["time"];
	$pro = $_POST["processor"];
	$con = $_POST["concerns"];
	$dat = $_POST["date"];
	
	
	$spa = $_POST["spam"];

	if (get_magic_quotes_gpc()) { 
	$fnam = stripslashes($fnam);
	$lnam = stripslashes($lnam);
	$ema = stripslashes($ema);
	$job = stripslashes($job);
	$num = stripslashes($num);
	$dat = stripslashes($dat);
	$time = stripslashes($time);
	$pro = stripslashes($pro);
	$con = stripslashes($con);
	
	
	}

$error_msg=array(); 

if (empty($fnam) || !preg_match("/^[\s.'\-\pL]{1,60}$/u", $fnam)) { 
$error_msg[] = "The name field must contain only letters, spaces and basic punctuation (.&nbsp;-&nbsp;')";
}

if (empty($ema) || !filter_var($ema, FILTER_VALIDATE_EMAIL)) {
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
		<div>
			<label for="fname">Name</label>
			<input name="fname" type="text" size="40" maxlength="60" id="fname" value="'; if (isset($_POST["fname"])) {echo $fnam;}; echo '">
		</div>
		<div>
			<label for="lname">Name</label>
			<input name="lname" type="text" size="40" maxlength="60" id="lname" value="'; if (isset($_POST["lname"])) {echo $lnam;}; echo '">
		</div>
		
		<div>
			<label for="email">Email Address</label>
			<input name="email" type="email" size="40" maxlength="60" id="email" value="'; if (isset($_POST["email"])) {echo $ema;}; echo '">
		</div>
		<div>
			<label for="jtitle">Email Address</label>
			<input name="jtitle" type="text" size="40" maxlength="60" id="jtitle" value="'; if (isset($_POST["jtitle"])) {echo $job;}; echo '">
		</div>
		<div>
			<label for="number">Work Phone Number:</label>
			<input name="number" type="tel" size="40" maxlength="60" id="number" value="'; if (isset($_POST["number"])) {echo $num;}; echo '">
		</div>
		
		<div>
			<label for="date">Preferred Sales Audit Date:</label>
			<input name="date" type="date" size="40" maxlength="60" id="date" value="'; if (isset($_POST["date"])) {echo $dat;}; echo '">
		</div>
		
		<div>
			<label for="time">Preferred Sales Audit Time:</label>
			<input name="time" type="time" size="40" maxlength="60" id="time" value="'; if (isset($_POST["time"])) {echo $time;}; echo '">
		</div>
		<div>
			<label for="processor">Current Processor </label>
			<input name="processor" type="text" size="40" maxlength="60" id="processor" value="'; if (isset($_POST["processor"])) {echo $pro;}; echo '">
		</div>
		<div>
			<label for="concerns">Current Concerns </label>
			<input name="concerns" type="text" size="40" maxlength="60" id="concerns" value="'; if (isset($_POST["concerns"])) {echo $con;}; echo '">
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
	"First Name of sender: $fnam\n\n".
	"Last Name of sender: $lnam\n\n".
	"Email of sender: $ema\n\n".
	"Job Title of sender: $job\n\n". 
	"Work Phone Number: $num\n\n". 
	"Preferred Sales Audit Date: $dat\n\n". 
	"Preferred Sales Audit Time: $time\n\n". 
	"Current Processor: $pro\n\n". 
	"Current Concerns: $con\n\n"; 

// Assuming there's no error, send the email and redirect to Thank You page

if (isset($_REQUEST['comments']) && !$error_msg) {
mail ($your_email, $subject, $email_body, "From: $fnam <$ema>" . "\r\n" . "Reply-To: $fnam <$ema>" . "Content-Type: text/plain; charset=utf-8");
header ("Location: $thanks_page");
exit();
}  
}