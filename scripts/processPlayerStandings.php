<?php
session_start(); 
//processPlayerStandings.php
$query = "SELECT * FROM Player_Information ORDER BY player_last_name ASC";

$listTable = mysql_query($query)
        or die(mysql_error());

$numRecords = mysql_num_rows($listTable);
	  	echo "<table>";
                       echo  "<tr>
				<th>Game Date</th>
				<th>First Name</th>
                                <th>Last Name</th>
                                <th>Team Name</th>
                                <th>Position</th>
                                <th>Goals</th>
                                <th>Blocks</th>
                                <th>Assists</th>
                            </tr>";
                            for ($i = 0; $i < $numRecords; $i++)
                                {
                                  echo "<tr>";
                                  $row = mysql_fetch_array($listTable);
				  echo "<td>";
				  echo $row['game_date'];
				  echo "</td><td>";
                                  echo $row['player_first_name'];
                                  echo "</td><td>";
                                  echo $row['player_last_name'];
                                  echo "</td><td>";
                                  echo $row['team_name'];
                                  echo "</td><td>";
                                  echo $row['position'];
                                  echo "</td><td>";
                                  echo $row['goals'];
                                  echo "</td><td>";
                                  echo $row['blocks'];
                                  echo "</td><td>";
                                  echo $row['assists'];
                                  echo "</td></tr>";
                                }
    
		echo "</table>";
?>