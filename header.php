<!--
	File Name:		header.php
	Author Name: 	Michael Burnie
	Website: 		www.michaelburnie.com
	Description: 	This is the header that will appear on all required pages, making the database calls and calling the required CSS/JS files.
-->

<html>
	<head>
		<meta name="description" content="A site about Michael Burnie."/>
		<meta name="author" content="Michael Burnie"/>
		<meta charset="utf-8"/>
		<script type="text/javascript" src="../files/js/detectmobile.js"></script>
		<link rel="stylesheet" type="text/css" href="../files/css/styles-main.css"/>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Fauna+One|Roboto+Slab">
		<title>Business Contacts</title>
	</head>
	<body>
	<div id="business-contacts-page">
		<div id="header">
			<h1>Michael Burnie</h1>
			<nav>
				<ul>
					<li><a href="http://www.michaelburnie.com#home" id="nav-1" class="current">Home</a></li>
					<li><a href="http://www.michaelburnie.com#about" id="nav-2">About</a></li>
					<li><a href="http://www.michaelburnie.com#projects" id="nav-3">Projects</a></li>
					<li><a href="http://www.michaelburnie.com#services" id="nav-4">Services</a></li>
					<li><a href="http://www.michaelburnie.com#contact" id="nav-5">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div id="content">
<?php
	
	//setup connection to the database
	$host 		= "localhost"; 		// Host name 
	$username 	= "michaelb_dba1"; 	// MySQL username 
	$password 	= "demo1234"; 		// MySQL password 
	$db_name 	= "michaelb_db1"; 	// Database name 
	$table_name	= "COMP2068_Admin"; // Table name 
	session_start();
	// Connect to the server and select database.
	$con = mysqli_connect("$host", "$username", "$password")or die("Cannot connect to database!"); 
	mysqli_select_db($con, "$db_name")or die("Error selecting database!");
?>