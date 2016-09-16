<?php
session_start(); 
//processPlayerSubmission.php

$playerFirstName = ($_POST['fname']);

$playerLastName = ($_POST['lname']);

$playerAge = ($_POST['age']);

$playerAddress = ($_POST['address']);

$city = ($_POST['city']);

$state = ($_POST['state']);

$playerZipCode = ($_POST['zip']);

$playerPhone = ($_POST['phone']);

$playerTeamName = ($_POST['team1']);

$query = "SELECT * FROM Team_Roster WHERE
		 player_first_name = '$playerFirstName' AND player_last_name = '$playerLastName' AND team_name = 'playerTeamName'";
		 
$findMatch = mysql_query($query)
			or die(mysql_error());
			
$numRows = mysql_num_rows($findMatch);

if ($numRows == 1)
	{
		echo "<h2>The player name and information you entered already exists.</h2>
				<p>Please go to the Existing Player Form to update this player.</p>";	
	}
else
{
    $createNew = "INSERT INTO Team_Roster (player_first_name, player_last_name, player_age, player_address, city,
                   state, player_zip_code, player_phone, team_name)
                            
                   VALUES ('$playerFirstName', '$playerLastName', '$playerAge', '$playerAddress', '$city', '$state', '$playerZipCode',
                            '$playerPhone', '$playerTeamName');";
                            
                   $insertPlayer = mysql_query($createNew)
                          or die(mysql_error());
                                
                      echo "<h2>Thank you for registering your Player information.</h2>
                                <p><a href='index.php'>Return to the forms page.</a></p>";
                                      
                    
        }


?>