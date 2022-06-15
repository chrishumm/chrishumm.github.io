<?php
		$link = new mysqli("127.0.0.1", "chumm", "password1","chumm");
		if ($link->connect_errno) 
		{
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		else
		{
			$user_id = $_POST['id'];
			$result = mysqli_query($link,"SELECT * FROM cga_testdata WHERE id = '$user_id'");
			if (mysqli_num_rows($result) == 0) 
			{ 
				echo "None";
			}
			else
			{ 
				$result = mysqli_query($link,"SELECT * FROM cga_testdata WHERE username = '$name' AND password = '$password'");
				if (mysqli_num_rows($result) == 0) 
				{ 
					echo "WrongPassword";
				}
				else
				{
					echo "Success";
				}
			}  
		}
		//		while($row = $result->fetch_assoc())
	//			{
	//				echo $row['username'];
	//			}
?>