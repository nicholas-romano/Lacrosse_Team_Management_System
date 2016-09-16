<?php
session_start(); 
//displayTeamRoster.php

$team = stripslashes($_GET['team']);

$query = "SELECT * FROM Player_Statistics WHERE
         team_name = '$team' 
         ORDER BY player_last_name ASC";

$teamListing = mysql_query($query)
    or die(mysql_error());
$numRecords = mysql_num_rows($teamListing);

$coach = "SELECT * FROM Coach_Information WHERE
          team_name = '$team'
          ORDER BY coach_last_name ASC";

$coachListing = mysql_query($coach)
    or die(mysql_error());
$numCoaches = mysql_num_rows($coachListing);

echo "<h2>" . $team . "</h2>";

$coaches = mysql_fetch_array($coachListing);
echo "<p>Coach Name: " .
          "<b>" . $coaches['coach_first_name'] . "&nbsp;"
                . $coaches['coach_last_name'] . "</b>" . "</p>";

echo  "<div class='stats'>" .
        "<table border='4px'>
            <tr>";
        echo "<div class='stats'>
                <th>Player First Name</th>
                <th>Player Last Name</th>
                <th>Position</th>
                <th>Total Goals</th>
                <th>Total Blocks</th>
                <th>Total Assists</th>
            </tr>
              </div>";
                for ($i = 0; $i < $numRecords; $i++)
                                    {
                                      echo "<tr>";
                                      $row = mysql_fetch_array($teamListing);
                                      echo "<div class='stats'>";
                                            echo "<td>";
                                            echo $row['player_first_name'];
                                            echo "</td><td>";
                                            echo $row['player_last_name'];
                                            echo "</td><td>";
                                            echo $row['position'];
                                            echo "</td><td>";
                                            echo $row['total_goals'];
                                            echo "</td><td>";
                                            echo $row['total_blocks'];
                                            echo "</td><td>";
                                            echo $row['total_assists'];
                                            echo "</td>";
                                            echo "</div>";
                                            echo "</tr>";
                                    }
        
        echo "</table>" .
      "</div>";

?>
