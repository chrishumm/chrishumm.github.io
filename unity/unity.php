<!DOCTYPE html>
<html>
<body>

<?php
		$link = new mysqli("127.0.0.1", "chumm", "password1","chumm");
		if (!$link) 
		{
		    die('Could not connect: ' . mysql_error()); //if cannot connect, exit
		}
		else
			{
				print("Connected");
				echo "<br>";
				$sql="CREATE DATABASE IF NOT EXISTS unity_game_project;";
				mysql_query($sql);
				mysql_select_db('unity_game_project',$link);
			$result = mysql_query("SELECT * FROM cgd_testdata WHERE highscores > 100"); //accessing mysql database
			
			while($row = mysql_fetch_array($result))
			  {
				echo "<table style='width:300px'><tr><th>Username</th><th>Password</th><th>Highscore</th></tr>";
				echo "<tr><td> ";
				echo $row['Username'] . "</td><td> " . $row['Password'] . "</td><td> " .  $row['highscores'];
				echo "</td></tr><br>";
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
			//				mysql_query("INSERT INTO cgd_testdata (id,Username, Password, highscores)
			//				VALUES ('George', 'Password1',105)");
			//	mysql_query("INSERT INTO cgd_testdata (id,Username, Password, highscores)
			//				VALUES ('Mike', 'Password1',97)");
			//	mysql_query("INSERT INTO cgd_testdata (id,Username, Password, highscores)
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
			// UPDATE cga_testdata SET hiscore = 11 WHERE id = 0
			
?>

</body>
</html> 

