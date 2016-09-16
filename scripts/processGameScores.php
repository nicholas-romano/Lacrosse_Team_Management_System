<?php
session_start(); 
//processGameScores.php

$query = "SELECT * FROM Game_Information";

$makeQuery = mysql_query($query);

$numRecords = mysql_num_rows($makeQuery);

echo "<div class='stats'>

<table>
		<tr>
			<th>Game Date</th>
			<th>Teams</th>
			<th>Final Score</th>
			<th>Tie</th>
		</tr>
	  </div>";
for ($i = 0; $i < $numRecords; $i++) 
{
	echo "<tr>" ;
		$row = mysql_fetch_array($makeQuery);
	echo "<div class='stats'>" .
		"<td rowspan='2'>" . $row['game_date'] . "</td>" .
	 	"<td>" . $row['team1_name'] . "</td>" .
	 	"<td>" . $row['team1_score'] . "</td>" .
	  	"<td rowspan='2'>" . $row['tie_game'] . "</td>" .
	 "</tr>
	 <tr>
	 	<td>" . $row[team2_name] . "</td>" .
			"<td>" . $row[team2_score] . "</td>" .
	"</tr>";		
}
echo "</table>" .
"</div>";


?>