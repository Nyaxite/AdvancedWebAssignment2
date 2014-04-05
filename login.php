<?php
/*
	File Name:		login.php
	Author Name: 	Michael Burnie
	Website: 		www.michaelburnie.com
	Description: 	This is the form that the user will login to see the business contacts. Information is sent to checklogin.php
*/

	//call the header php file
	require_once "header.php";
?>
<h2>Business Contacts</h2>

<form id='login' action='checklogin.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend> 
<label for='username' >UserName *:</label>
<input type='text' name='username' id='username'  maxlength="50" />
 
<label for='password' >Password *:</label>
<input type='password' name='password' id='password' maxlength="50" />
 
<input type='submit' name='Submit' value='Submit' />

<p><em>Hint: Try admin/admin</em></p>
</fieldset>
</form>

<?php
	//call the footer php file
	require_once "footer.php";
?>