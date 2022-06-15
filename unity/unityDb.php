<?php
		$link = new mysqli("127.0.0.1", "chumm", "password1","chumm");
		if ($link->connect_errno) 
		{
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		else
		{
			$name = $_POST['username'];
			$password = $_POST['password'];
			$result = mysqli_query($link,"SELECT * FROM cga_testdata WHERE username = '$name'");
				if (mysqli_num_rows($result) == 0) 
				{ 
					mysqli_query($link,"INSERT INTO cga_testdata (username, password)
							VALUES ('$name','$password')");
							echo "Success";
				}
				else
				{
					echo "Exists";
				}
		}
			//**********************Creating Table*********************************/
							//$sql="CREATE TABLE cgd_testdata(Username CHAR(30),Password CHAR(30), id MEDIUMINT NOT NULL AUTO_INCREMENT, PRIMARY KEY (id), highscores int(10))";
							//mysql_query($sql);
			//	  			{
			// 						 echo "Table persons created successfully";
			
			//				}
			//	 			 else
			//	 			 {
			//  					 echo "Error creating table: " . mysql_error($link);
			// 	 			 }
			//**********************************************************************/
			
			//******//**************Inserting Values into my table *****************/
			
				//mysql_query("INSERT INTO cgd_testdata (Username, Password, highscores)
				//			VALUES ('Chris', 'Password',35)");
			//******************************************/*****************************/
			
			//*********************Querying entire table***********************************//
			// Alternatively, we could use FROM to select which columns
			
			 //$result = mysql_query("SELECT * FROM cgd_testdata"); //accessing mysql database
			//
			//	while($row = mysql_fetch_array($result))
			//  {
			// 		 echo $row['Username'] . " " . $row['Password'] . " " .  $row['highscores'];
			// 		 echo "<br>";
			//  }
			//******************************************************************************/
			
			//*********************Adding and getting values within a range ***************/
			//First I add better data:
			//				mysql_query("INSERT INTO cgd_testdata (Username, Password, highscores)
			//				VALUES ('George', 'Password1',105)");
			//	mysql_query("INSERT INTO cgd_testdata (Username, Password, highscores)
			//				VALUES ('Mike', 'Password1',97)");
			//	mysql_query("INSERT INTO cgd_testdata (Username, Password, highscores)
			//				VALUES ('Pete', 'Password1',1001)");
			// Then I use FROM
			//			$result = mysql_query("SELECT * FROM cgd_testdata WHERE highscores > 100"); //accessing mysql database
			//
			//	while($row = mysql_fetch_array($result))
			// 	 {
			//		echo $row['Username'] . " " . $row['Password'] . " " .  $row['highscores'];
			//		echo "<br>";
			// 	 }
			//}
			//******************************************************************************/
?>
