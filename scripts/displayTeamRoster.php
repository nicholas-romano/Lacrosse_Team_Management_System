<?php
session_start(); 
//displayTeamRoster.php

$team = stripslashes($_GET['team']);

$query = "SELECT * FROM Team_Roster WHERE
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

echo  "<div>" .
        "<table>
            <tr>";
        echo "<div>
                <th>Player First Name</th>
                <th>Player Last Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip Code</th>
                <th>Phone Number</th>
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
                                            echo $row['player_age'];
                                            echo "</td><td>";
                                            echo $row['player_address'];
                                            echo "</td><td>";
                                            echo $row['city'];
                                            echo "</td><td>";
                                            echo $row['state'];
                                            echo "</td><td>";
                                            echo $row['player_zip_code'];
                                            echo "</td><td>";
                                            echo $row['player_phone'];
                                            echo "</td>";
                                            echo "</div>";
                                            echo "</tr>";
                                    }
        
        echo "</table>" .
      "</div>";

?>
