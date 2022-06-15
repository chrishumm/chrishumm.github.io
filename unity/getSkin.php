<?php
	$link = new mysqli("127.0.0.1", "chumm", "password1","chumm");
		if ($link->connect_errno) 
		{
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		else
		{
			$user_id = $_POST['username'];
			$result = mysqli_query($link,"SELECT * FROM cga_testdata WHERE username = '$user_id'");
			if (mysqli_num_rows($result) == 0) 
			{ 
				echo "test";
			}
			else
			{ 
				$result = mysqli_query($link,"SELECT * FROM cga_testdata WHERE username = '$user_id'");
				if (mysqli_num_rows($result) == 0) 
				{ 
				
				}
				else
				{
					while($row = mysqli_fetch_array($result))
					  {
						  echo $row['skins'];
					  }
				}
			}  
		}
		//		while($row = $result->fetch_assoc())
	//			{
	//				echo $row['username'];
	//			}
?>