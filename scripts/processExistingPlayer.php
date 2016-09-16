<?php
session_start(); 
//processExistingPlayer.php


$gameDate = ($_POST['player_date']);

$playerFirstName = ($_POST['fname']);

$playerLastName = ($_POST['lname']);

$playerTeamName = ($_POST['team1']);

$attackerGoals = ($_POST['attacker_goals']);

$attackerAssists = ($_POST['attacker_assists']);

$middieGoals = ($_POST['middie_goals']);

$middieAssists = ($_POST['middie_assists']);

$defenderBlocks = ($_POST['defender_blocks']);

$defenderAssists = ($_POST['defender_assists']);

$goalieBlocks = ($_POST['goalie_blocks']);

$goalieAssists = ($_POST['goalie_assists']);

$attacker = "Attacker";
$middie = "Middie";
$defender = "Defender";
$goalie = "Goalie";

$string = $attackerGoals;
$number = 1;
$attackerGoalsScore = $string * ($number);

$string1 = $attackerAssists;
$number1 = 1;
$attackerAssistsScore = $string1 * ($number1);

$string2 = $middieGoals;
$number2 = 1;
$middieGoalsScore = $string2 * ($number2);

$string3 = $middieAssists;
$number3 = 1;
$middieAssistsScore = $string3 * ($number3);

$string4 = $defenderBlocks;
$number4 = 1;
$defenderBlocksScore = $string4 * ($number4);

$string5 = $defenderAssists;
$number5 = 1;
$defenderAssistsScore = $string5 * ($number5);

$string6= $goalieBlocks;
$number6 = 1;
$goalieBlocksScore = $string6 * ($number6);

$string7 = $goalieAssists;
$number7 = 1;
$goalieAssistsScore = $string7 * ($number7);

$query = "SELECT * FROM Game_Information WHERE
             game_date = '$gameDate'";
         
$matchingDates = mysql_query($query)
            or die(mysql_error());
                    
$numDates = mysql_num_rows($matchingDates);

if ($numDates > 0)
{
  $searchName = "SELECT * FROM Team_Roster WHERE
              player_first_name = '$playerFirstName' AND player_last_name = '$playerLastName'";
              
            $matchingNames = mysql_query($searchName)
                or die(mysql_error());
                
            $numNames = mysql_num_rows($matchingNames);

            if ($numNames == 1)
	    {
    		if ($attackerGoals != NULL && $attackerAssists != NULL)
        	{
                    $createNew = "INSERT INTO Game_Statistics (game_date, player_first_name, player_last_name, team_name, position, goals, blocks, assists)
                                    
                                    VALUES ('$gameDate', '$playerFirstName', '$playerLastName', '$playerTeamName', '$attacker',
                                    '$attackerGoalsScore', NULL, '$attackerAssistsScore');";
                            
                            $insertPlayer = mysql_query($createNew)
                                or die(mysql_error());
                                
                        $query2 = "SELECT * FROM Player_Statistics WHERE
                        player_last_name = '$playerLastName' AND player_first_name = '$playerFirstName' AND position = '$attacker'";
                  
                        $searchPlayer = mysql_query($query2);
        
                        $numRows = mysql_num_rows($searchPlayer);
                        
                        $row = mysql_fetch_array($searchPlayer);
    
                        if ($numRows == 1)
                        {
                 
                            $addTotal = "UPDATE Player_Statistics set total_goals = total_goals + '$attackerGoalsScore' WHERE player_last_name = '$playerLastName' AND player_first_name = '$playerFirstName'";
                    
                                      $addGoals = mysql_query($addTotal)
                                          or die(mysql_error());
                    
                            $addTotal2 = "UPDATE Player_Statistics set total_assists = total_assists + '$attackerAssistsScore' WHERE player_last_name = '$playerLastName' AND player_first_name = '$playerFirstName'";
                    
                                      $addAssists = mysql_query($addTotal2)
                                          or die(mysql_error());
                                          
                                          echo "<h2>Thank you for registering your information as an Attacker.</h2>
                                                  <p><a href='index.php'>Return to the forms page.</a></p>";
                            
                        }
                        else
                        {  
                        $createNew2 = "INSERT INTO Player_Statistics (player_first_name, player_last_name, team_name, position, total_goals, total_assists)
                                      VALUES ('$playerFirstName', '$playerLastName', '$playerTeamName', '$attacker', '$attackerGoalsScore', '$attackerAssistsScore')";
                                      
                                          $insertPlayer2 = mysql_query($createNew2)
                                              or die(mysql_error());
                                              
                                          echo "<h2>Thank you for registering your information as an Attacker.</h2>
                                                  <p><a href='index.php'>Return to the forms page.</a></p>";
                                          
                        }
                }

                if ($middieGoals != NULL && $middieAssists != NULL)
                {     
                    $createNew = "INSERT INTO Game_Statistics (game_date, player_first_name, player_last_name, team_name, position,
                                    goals, blocks, assists)
                            
                            VALUES ('$gameDate', '$playerFirstName', '$playerLastName', '$playerTeamName', '$middie',
                                    '$middieGoalsScore', NULL, '$middieAssistsScore');";
                            
                            $insertPlayer = mysql_query($createNew)
                                or die(mysql_error());
                                
                    $query2 = "SELECT * FROM Player_Statistics WHERE
                    player_last_name = '$playerLastName' AND player_first_name = '$playerFirstName' AND position = '$middie'";
              
                    $searchPlayer = mysql_query($query2);
    
                    $numRows = mysql_num_rows($searchPlayer);
                    
                    $row = mysql_fetch_array($searchPlayer);
    
                    if ($numRows == 1)
                    {
             
                        $addTotal = "UPDATE Player_Statistics set total_goals = total_goals + '$middieGoalsScore' WHERE player_last_name = '$playerLastName' AND player_first_name = '$playerFirstName'";
                
                                  $addGoals = mysql_query($addTotal)
                                      or die(mysql_error());
                
                        $addTotal2 = "UPDATE Player_Statistics set total_assists = total_assists + '$middieAssistsScore' WHERE player_last_name = '$playerLastName' AND player_first_name = '$playerFirstName'";
                
                                  $addAssists = mysql_query($addTotal2)
                                      or die(mysql_error());
                                      
                                      echo "<h2>Thank you for registering your information as a Middie.</h2>
                                              <p><a href='index.php'>Return to the forms page.</a></p>";
                        
                    }
                    else
                    {  
                    $createNew2 = "INSERT INTO Player_Statistics (player_first_name, player_last_name, team_name, position, total_goals, total_assists)
                                  VALUES ('$playerFirstName', '$playerLastName', '$playerTeamName', '$middie', '$middieGoalsScore', '$middieAssistsScore')";
                                  
                                      $insertPlayer2 = mysql_query($createNew2)
                                          or die(mysql_error());
                                          
                                      echo "<h2>Thank you for registering your information as a Middie.</h2>
                                              <p><a href='index.php'>Return to the forms page.</a></p>";
                    }
                }
        
                if ($defenderBlocks != NULL && $defenderAssists != NULL)
                {     
                    $createNew = "INSERT INTO Game_Statistics (game_date, player_first_name, player_last_name, team_name, position,
                                    goals, blocks, assists)
                            
                            VALUES ('$gameDate', '$playerFirstName', '$playerLastName', '$playerTeamName', '$defender',
                                     NULL, '$defenderBlocksScore', '$defenderAssistsScore');";
                            
                            $insertPlayer = mysql_query($createNew)
                                or die(mysql_error());
                                
                    $query2 = "SELECT * FROM Player_Statistics WHERE
                    player_last_name = '$playerLastName' AND player_first_name = '$playerFirstName' AND position = '$defender'";
              
                    $searchPlayer = mysql_query($query2);
    
                    $numRows = mysql_num_rows($searchPlayer);
                    
                    $row = mysql_fetch_array($searchPlayer);
    
                    if ($numRows == 1)
                    {
             
                        $addTotal = "UPDATE Player_Statistics set total_blocks = total_blocks + '$defenderBlocksScore' WHERE player_last_name = '$playerLastName' AND player_first_name = '$playerFirstName'";
                
                                  $addGoals = mysql_query($addTotal)
                                      or die(mysql_error());
                
                        $addTotal2 = "UPDATE Player_Statistics set total_assists = total_assists + '$defenderAssistsScore' WHERE player_last_name = '$playerLastName' AND player_first_name = '$playerFirstName'";
                
                                  $addAssists = mysql_query($addTotal2)
                                      or die(mysql_error());
                                      
                                      echo "<h2>Thank you for registering your information as a Defender.</h2>
                                              <p><a href='index.php'>Return to the forms page.</a></p>";
                        
                    }
                    else
                    {  
                    $createNew2 = "INSERT INTO Player_Statistics (player_first_name, player_last_name, team_name, position, total_blocks, total_assists)
                                  VALUES ('$playerFirstName', '$playerLastName', '$playerTeamName', '$defender', '$defenderBlocksScore', '$defenderAssistsScore')";
                                  
                                      $insertPlayer2 = mysql_query($createNew2)
                                          or die(mysql_error());
                                          
                                      echo "<h2>Thank you for registering your information as a Defender.</h2>
                                              <p><a href='index.php'>Return to the forms page.</a></p>";
                    }
                }
        
                if ($goalieBlocks != NULL && $goalieAssists != NULL)
                {     
                     $createNew = "INSERT INTO Game_Statistics (game_date, player_first_name, player_last_name, team_name, position,
                                    goals, blocks, assists)
                            
                            VALUES ('$gameDate', '$playerFirstName', '$playerLastName', '$playerTeamName', '$goalie',
                                     NULL, '$goalieBlocksScore', '$goalieAssistsScore');";
                            
                            $insertPlayer = mysql_query($createNew)
                                or die(mysql_error());
                                
                    $query2 = "SELECT * FROM Player_Statistics WHERE
                    player_last_name = '$playerLastName' AND player_first_name = '$playerFirstName' AND position = '$goalie'";
              
                    $searchPlayer = mysql_query($query2);
    
                    $numRows = mysql_num_rows($searchPlayer);
                    
                    $row = mysql_fetch_array($searchPlayer);
    
                    if ($numRows == 1)
                    {
             
                        $addTotal = "UPDATE Player_Statistics set total_blocks = total_blocks + '$goalieBlocksScore' WHERE player_last_name = '$playerLastName' AND player_first_name = '$playerFirstName'";
                
                                  $addGoals = mysql_query($addTotal)
                                      or die(mysql_error());
                
                        $addTotal2 = "UPDATE Player_Statistics set total_assists = total_assists + '$goalieAssistsScore' WHERE player_last_name = '$playerLastName' AND player_first_name = '$playerFirstName'";
                
                                  $addAssists = mysql_query($addTotal2)
                                      or die(mysql_error());
                                      
                                      echo "<h2>Thank you for registering your information as a Goalie.</h2>
                                              <p><a href='index.php'>Return to the forms page.</a></p>";
                        
                    }
                    else
                    {  
                    $createNew2 = "INSERT INTO Player_Statistics (player_first_name, player_last_name, team_name, position, total_blocks, total_assists)
                                  VALUES ('$playerFirstName', '$playerLastName', '$playerTeamName', '$goalie', '$goalieBlocksScore', '$goalieAssistsScore')";
                                  
                                      $insertPlayer2 = mysql_query($createNew2)
                                          or die(mysql_error());
                                          
                                      echo "<h2>Thank you for registering your information as a Goalie.</h2>
                                              <p><a href='index.php'>Return to the forms page.</a></p>";
                    }
        
                }
            }
	    else
	    {
                echo "<h4>The player name you entered does not match our records. 
                Please check the spelling or go to the New Player Form and enter a new player.</h4>	
                <p><a href='index.php'>Return to the forms page.</a></p>";
	    }

}
else
{
    echo "<h4>The game date you entered has either not been recorded or is incorrect. Please enter the correct game date.</h4>
          <p><a href='index.php'>Return to the forms page.</a></p>";
}


?>