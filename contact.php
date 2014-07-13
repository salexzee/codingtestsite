<?php

$hasError = false;
$sent = false;

if(isset($_POST['submitform'])) {
	$name = trim(htmlspecialchars($_POST['inputName'], ENT_QUOTES));
	$email = trim($_POST['inputEmail']);
	$message = trim(htmlspecialchars($_POST['inputMessage'], ENT_QUOTES));
	
	$fieldsArray = array(
		'inputName' => $name,
		'inputEmail' => $email,
		'inputMessage' => $message
	);

	$errorArray = array();

	foreach($fieldsArray as $key => $val) {
		switch ($key) {
			case 'inputName':
			case 'inputMessage':
				if(empty($val)) {
					$hasError = true;
					$errorArray[$key] = ucfirst($key) . " field was left empty.";
				}
				break;
			case 'inputEmail':
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					$hasError = true;
					$errorArray[$key] = "Invalid Email Address entered";
				} else {
					$email = filter_var($email, FILTER_SANITIZE_EMAIL);
				}
				break;
		}
	}

	if($hasError !== true) {
		$to = "samwebb@samwebb.me";
		$subject = "Message from contact form";
		$msgcontents = "Name: $name<br>Email: $email<br>Message: $message";
		$headers = "MIME-Version: 1.0 \r\n";
		$headers .= "Content-type: text/html; charset=iso=8859-1 \r\n";
		$headers .= "From: $name <$email> \r\n";
		$mailsent = mail($to, $subject, $msgcontents, $headers);
		if($mailsent) {
			$sent = true;
			unset($name);
			unset($email);
			unset($message);
		}
	}
}

?>


<?php include("inc/header.php"); ?>




			<main class="container firstPara">
				<p class="lead">If you'd like to contact me, please send me an email. Alternatively, you can find me on Twitter or GitHub.</p>


				<form role="form" id="contactForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
				
					<?php
						if($sent === true) {
							echo '<h2 class="success">Thanks, your messages has been sent successfully.</h2>';
						} elseif ($hasError === true) {
							echo '<ul class="errorlist">';
							foreach($errorArray as $key => $val) {
								echo '<li>' .ucfirst($key). ' field error - $val</li>';
							}
							echo '</ul>';
						}
					?>
				
					<div class="form-group col-xs-12 col-sm-6">
						<label for="inputName">Name</label>
						<input type="text" class="form-control" name="inputName" id="inputName" placeholder="Enter name" value='<?php echo (isset($name) ? $name : ""); ?>'>
					</div>
					<div class="form-group col-xs-12 col-sm-6">
						<label for="inputEmail">Email</label>
						<input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Enter email" value='<?php echo (isset($email) ? $email : ""); ?>'>
					</div>
					<div class="form-group col-xs-12">
						<label for="inputMessage">Message</label>
						<textarea type="textarea" class="form-control" name="inputMessage" id="inputMessage" placeholder="Enter message..." value='<?php echo (isset($message) ? $message : ""); ?>'></textarea>
					</div>
					<button type="submit" class="btn btn-default col-xs-12" value="send" name="submitform">Submit</button>
				</form>


			</main>

<?php include("inc/footer.php"); ?>