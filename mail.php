<?php
/**
 *
 * @version 1.0.0
 * @usage https://DOMAIN.EXT/mail.php?to=RECEIVER&from=SENDER&subject=SUBJECT&txt=CONTENT
 * - DOMAIN.EXT is the domain hosting the script (string)
 * - RECEIVER is the receiver email address (email)
 * - SENDER is the sender email address (email)
 * - SUBJECT is the subject text (string)
 * - CONTENT is the message text (string)
 * - response_code is the parameter returned in json format (value can be 0 or 1 depending if the email has been sent or not)
 * @license MIT
 *
 */

// Get parameters from url
$emailReceiver = $_GET["to"];
$emailSender = $_GET["from"];

// Get sender name
$emailSendeName = format_name($emailSender);

// Set headers
$headers = "From: ".$emailSendeName." <".$emailSender.">\r\n";
$headers .= "Reply-To: ".$emailSender."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Set email params
$subject = $_GET["subject"];
$text = $_GET["txt"];

// Send the email
$result = mail($emailReceiver,$subject,$text,$headers);

// Format response code
$responseCode = '';
if(!$result) {   
	$responseCode = 0; 
} else {
	$responseCode = 1;
}

// Return the response code in json format
echo '{"response_code": "'.$responseCode.'"}';

// Format sender name
function format_name($emailSender) {
	
	// Initialize variables
	$emailSendeName = $emailSender;
	$e2 = [];
	$e3 = '';

	// Divide email address by @
	$e = explode("@", $emailSendeName);
	
	// If $e is an array
	if (is_array($e)) {
		
		// get the first part before the @
		$e2 = $e[0];
	}
	
	// If $e2 contains a value at its first index
	if ($e2[0]) {
		
		// Replace the common dot in between Name and Surname with a spacce
		$e3 = str_replace(".", " ", $e2);
		
		// Make uppercase first letter of each word
		$emailSendeName = ucwords($e3);
	}
	
	// Return sender name
	return $emailSendeName;
}

?>