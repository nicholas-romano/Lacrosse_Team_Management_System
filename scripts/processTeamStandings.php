<?php
session_start(); 
$query = "SELECT * FROM Team_Information ORDER BY wins DESC";

$listTable = mysql_query($query)
        or die(mysql_error());

$numRecords = mysql_num_rows($listTable);
	  	echo "<table>";
                       echo  "<tr>
                                <th>Team Name</th>
                                <th>Team Color 1</th>
                                <th>Team Color 2</th>
                                <th>Wins</th>
                                <th>Loses</th>
                                <th>Ties</th>
                            </tr>";
                            for ($i = 0; $i < $numRecords; $i++)
                                {
                                  echo "<tr>";
                                  $row = mysql_fetch_array($listTable);
                                  echo "<td>";
                                  echo $row['team_name'];
                                  echo "</td><td>";
                                  echo $row['team_color1'];
                                  echo "</td><td>";
                                  echo $row['team_color2'];
                                  echo "</td><td>";
                                  echo $row['wins'];
                                  echo "</td><td>";
                                  echo $row['loses'];
                                  echo "</td><td>";
                                  echo $row['ties'];
                                  echo "</td></tr>"; 
                                }
    
		echo "</table>";
?>