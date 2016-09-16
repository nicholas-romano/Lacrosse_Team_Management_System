<?php
session_start(); 
//processCoachSubmission.php

$coachFirstName = ($_POST['fname']);


$coachLastName = ($_POST['lname']);


$coachAddress = ($_POST['address']);

$coachState = ($_POST['state']);

$coachZipCode = ($_POST['zip']);


$coachPhone = ($_POST['phone']);


$coachEmail = ($_POST['email']);


$coachTeam = ($_POST['team1']);



$searchPhone = ("SELECT * FROM Coach_Information WHERE
                coach_phone = '$coachPhone'");

$matchingPhone = mysql_query($searchPhone)
        or die(mysql_error());
        
$phoneCount = mysql_num_rows($matchingPhone);



$searchEmail = ("SELECT * FROM Coach_Information WHERE
                coach_email = '$coachEmail'");

$matchingEmail = mysql_query($searchEmail)
        or die(mysql_error());
        
$emailCount = mysql_num_rows($matchingEmail);


if ($phoneCount == 1)
{
    echo "<h2>Sorry, but the phone number you entered is already registered</h2><br />
    <p><a href='coach_form.php'>Return to Coach Form</a></p>";
}

if ($emailCount == 1)
{
    echo "<h2>Sorry, but the email address you entered is already registered</h2><br />
    <p><a href='coach_form.php'>Return to Coach Form</a></p>";
}

if ($phoneCount == 0 && $emailCount == 0)
{
        $createNew = "INSERT INTO Coach_Information (coach_first_name, coach_last_name, coach_address,
                      coach_state, coach_zip_code, coach_phone, coach_email, team_name)
                      
                      VALUES ('$coachFirstName', '$coachLastName', '$coachAddress', '$coachState', '$coachZipCode', '$coachPhone',
                      '$coachEmail', '$coachTeam');";
                      
                      $insertCoach = mysql_query($createNew)
                                or die(mysql_error());                              
        
        $addCoachFn = "UPDATE Team_Information set coach_first_name = '$coachFirstName' WHERE team_name = '$coachTeam'";                  
                    
                    $enterFirstName = mysql_query($addCoachFn)
                            or die(mysql_error());
                            
        $addCoachLn = "UPDATE Team_Information set coach_last_name = '$coachLastName' WHERE team_name = '$coachTeam'";                  
                    
                    $enterLastName = mysql_query($addCoachLn)
                            or die(mysql_error());
                            
        echo "<h2>Thank you for registering your information as a Coach.</h2>
                                    <p><a href='index.php'>Return to the forms page.</a></p>";
    
}

?>