<?php
session_start(); 
//processGameSubmission.php

$gameDate = ($_POST['date']);

$teamOneName = ($_POST['team1']);

$teamTwoName = ($_POST['team2']);

$teamOneScore = ($_POST['scoreone']);

$teamTwoScore = ($_POST['scoretwo']);

   if ($teamOneScore > $teamTwoScore) {
   		$winner = $teamOneName;
   		$loser = $teamTwoName;
   		$tie = 0;
   } elseif ($teamOneScore < $teamTwoScore) {
   		$winner = $teamTwoName;
   		$loser = $teamOneName;
   		$tie = 0;
   } else {
        $winner = "";
        $loser = "";
        $tie = 1;
   }
	$createGame = "INSERT INTO Game_Information (game_date, team1_name, team2_name, team1_score,
                            team2_score, winning_team, losing_team, tie_game)
                            
                            VALUES ('$gameDate', '$teamOneName', '$teamTwoName', '$teamOneScore', '$teamTwoScore','$winner','$loser','$tie');";
                                
                            $insertGame = mysql_query($createGame)
                                or die(mysql_error());
                                
                            echo "<h2>Thank you for registering your Game information.</h2>
                                    <p><a href='index.php'>Return to the forms page.</a></p>";
		
	
					 
		$query = "update Team_Information set wins = wins+1 where team_name = '$winner'";
		
			$insertWin2 = mysql_query($query)
                            or die(mysql_error());
										  
	
		$query = "update Team_Information set loses = loses+1 where team_name = '$loser'";
                                
                        $insertWin2 = mysql_query($query)
                            or die(mysql_error());
	
	    if ($tie == 1) { 
	
			$query = "update Team_Information set ties = ties+1 where team_name = '$teamOneName'";
                                
                        $insertWin2 = mysql_query($query)
                            or die(mysql_error());
	
			$query = "update Team_Information set ties = ties+1 where team_name = '$teamTwoName'";
                                
                        $insertWin2 = mysql_query($query)
                            or die(mysql_error());
		}

?>