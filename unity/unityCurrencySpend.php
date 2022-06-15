<?php
		$link = new mysqli("127.0.0.1", "chumm", "password1","chumm");
		if ($link->connect_errno) 
		{
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		else
		{
				$user_id = $_POST['username'];
				$new_value = $_POST['currency'];
				
				$result = mysqli_query($link,"UPDATE cga_testdata SET currency = '$new_value' WHERE username = '$user_id'");
				
				echo $user_id;
		}  
		//		while($row = $result->fetch_assoc())
	//			{
	//				echo $row['username'];
	//			}
?>