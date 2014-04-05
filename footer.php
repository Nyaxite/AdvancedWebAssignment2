<!--
	File Name:		footer.php
	Author Name: 	Michael Burnie
	Website: 		www.michaelburnie.com
	Description: 	This footer appears on all necessary pages, as it closes off HTML tags and closes the database connection.
-->
			</div><!--content end-->
			<div id="footer">
				<p>&copy; 2014 Michael Burnie. All Rights Reserved.</p>
			</div>
		</div><!--page end-->
		<?php mysqli_close($con);//close the db connection ?>
	</body>
</html>