<?php

	//call the header php file
	require_once "header.php";

	//check if the user has logged in
	if (isset($_SESSION['user_id'])) 
	{				
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		//query the database for the business contacts
		$result = mysqli_query($con,"SELECT * FROM COMP2068_Business_Contacts ORDER BY FIRST_NAME ASC");

		//create a business contacts table
		echo "<table border='1'>
			<tr>
				<th>Name</th>
				<th>Phone Number</th>
				<th>Address</th>
			</tr>";
		
		//populate the business contacts table
		while($row = mysqli_fetch_array($result))
		{
			$id = $row['CONTACT_ID'];
			$name = $row['FIRST_NAME'] . ' ' . $row['LAST_NAME'];
			$address = $row['ADDRESS'];
			$phone = $row['PHONE_NUMBER'];
			$full_details = $name . '\nAddress: '. $address . '\nPhone Number: ' . $phone;
			echo "<tr>";
			echo "<td><a href='#' onclick='alert(\"" . $full_details . "\");'>" . $name .  "</a></td>";
			echo "<td>" . $address . "</td>";
			echo "<td>" . $phone . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		
		//button that logs the user out of the session		
		echo '<form action="logout.php"><input type="submit" value="Logout"></form>';
	}
	else
	{
		//redirect the user to the home page
		header("location: http://www.michaelburnie.com");
	}
	
	//call the footer php file
	require_once "footer.php";
?>
