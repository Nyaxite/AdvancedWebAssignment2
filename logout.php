<?php
	// If the user is logged in, delete the session vars to log them out
	session_start();
	// End the session
	unset($_SESSION["user_id"]);

	// Redirect to the main page
	header('Location: http://www.michaelburnie.com');
?>