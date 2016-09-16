<?php
session_start(); 
//team_dropdown.php

$query = "SELECT * FROM Team_Information
	  ORDER BY team_name ASC";
		
		$createList = mysql_query($query)
			      or die(mysql_error());
		
		$numRows = mysql_num_rows($createList);
                
			echo " <select name='team2' id='team2'>";
				for ($i = 0; $i < $numRows; $i++)
				{
				      $row = mysql_fetch_array($createList);
				      echo "<option value=" . $row['team_name'] . ">" . $row['team_name'] . "</option>"; 
				}
			echo "</select>";

?>