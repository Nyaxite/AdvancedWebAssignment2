<?php
/*
	File Name:		logoout.php
	Author Name: 	Michael Burnie
	Website: 		www.michaelburnie.com
	Description: 	This page will redirect the user to the homepage when they click the logout button.
*/

	// If the user is logged in, delete the session vars to log them out
	session_start();
	// End the session
	unset($_SESSION["user_id"]);

	// Redirect to the main page
	header('Location: http://www.michaelburnie.com');
?>