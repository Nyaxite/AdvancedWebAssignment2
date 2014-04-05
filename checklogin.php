<?php
	//call the header php file
	require_once "header.php";

	//username and password sent from form 
	$username = $_POST['username']; 
	$password = $_POST['password']; 

	//Strip the slashes to protect from MySQL injection
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysqli_real_escape_string($con, $username);
	$password = mysqli_real_escape_string($con, $password);
	
	//Setup the MySQL query
	$sql_query	= "SELECT * FROM $table_name WHERE username='$username' and password='$password'";
	$result		= mysqli_query($con, $sql_query);

	//Mysql_num_row is counting table row
	$count 		= mysqli_num_rows($result);

	//If result matched $username and $password, table row must be 1 row
	if($count == 1)
	{
		//Register $username as session and redirect to businesscontacts.php
		$row = mysqli_fetch_array($result);
		$_SESSION['user_id'] = $row['USER_ID'];
		header("location: businesscontacts.php");
	}
	else 
	{
		echo "Wrong Username or Password. Click <a href='login.php'>here</a> to return to the login page.";
	}
	
	//call the footer php file
	require_once "footer.php";
?>