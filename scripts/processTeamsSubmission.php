<?php
session_start();
//processTeamsSubmission.php

$teamName = ($_POST['teamName']);

$color1 = ($_POST['colors1']);

$color2 =($_POST['colors2']);


$query = ("SELECT * FROM Team_Information WHERE
team_name = '$teamName'");

$teams = mysql_query($query)
	or die(mysql_error());

$numRecords = mysql_num_rows($teams);

if ($numRecords > 0)
{
	echo "<h2>The team name you entered is already in use. </h2>
			<p>Please enter a new team name.<br />
			<a href='teams_form.php'>Return to Team Form</p>";
}
else
{
	$createNew = "INSERT INTO Team_Information (team_name, team_color1, team_color2)
	
	VALUES ('$teamName', '$color1', '$color2');";
	
	$insertRecord = mysql_query($createNew)
		or die(mysql_error());
	
	$resetScore = mysql_fetch_array($teams);
	
	$queryResetWins = "update Team_Information set wins = 0 where team_name = '$teamName'";
	
	$insertZeroWins = mysql_query($queryResetWins)
		or die(mysql_error());
		
	$queryResetLoses = "update Team_Information set loses = 0 where team_name = '$teamName'";
	
	$insertZeroLoses = mysql_query($queryResetLoses)
		or die(mysql_error());
	
	$queryResetTies = "update Team_Information set ties = 0 where team_name = '$teamName'";
	
	$insertZeroTies = mysql_query($queryResetTies)
		or die(mysql_error());
		
	echo "<h2>Thank you for registering your team name and colors</h2>
		<p><a href='index.php'>Click here to return to the home page.</a></p>";
	
	}

?>