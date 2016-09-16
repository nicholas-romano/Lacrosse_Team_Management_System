<?php
session_start(); 
//displayTeams.php

$query = "SELECT * FROM Team_Information ORDER BY team_name ASC";

$listTeams = mysql_query($query)
        or die(mysql_error());

$numTeams = mysql_num_rows($listTeams);

$teamCount = 0;

echo "<ul span class='listTeams'>";
            for ($i = 0; $i < $numTeams; $i++)
            {
                $teamName = mysql_fetch_array($listTeams);
                echo "<li>" ;
                echo "<a href=\"playerStandings.php?team="
                .$teamName["team_name"] . "\">"
                .$teamName["team_name"]
                ."</a></li>";
            $teamCount++;
            }
echo "</span></ul>";
           
?>