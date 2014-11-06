
<!-- sending email -->

<?php
$recipient = 'gatechsolutionltd@gmail.com';
  $email = $_POST['email'];
  $name = $_POST['name'];
  $subject = "Comments";
  $body = $_POST['message'];

   $messages = array();
   
    if (!preg_match("/^[\w\+\-.~]+\@[\-\w\.\!]+$/", $email)) {
		$messages[] = "That is not a valid email address.";
	}

	if (!preg_match("/^[\w\ \+\-\'\"]+$/", $name)) {
		$messages[] = "The real name field must contain only " .
					  "alphabetical characters, numbers, spaces, and " .
					   "reasonable punctuation. We apologize for any inconvenience.";
	}
	
	$body = $_POST['message'];
	if (preg_match('/^\s*$/', $body)) {
		$messages[] = "Your message was blank. Did you mean to say " .
					  "something?"; 
	}
	
	if (count($messages)) {
   
    foreach ($messages as $message) {
      echo("<p>$message</p>\n");
    }
	} else {
  
	mail($recipient,
      $subject,
      $body,
      "From: $name <$email>\r\n" .
      "Reply-To: $name <$email>\r\n"); 
    echo("<p>Your message has been sent. Thank you!</p>\n");
  }
?>