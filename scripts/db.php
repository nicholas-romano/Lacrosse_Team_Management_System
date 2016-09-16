<?php
    //db.php
    $db_location = '<database_url>';
    $db_username = '<database_username';
    $db_password = 'database_password';
    $db_database = '<database_name>';
    
    $db_connection = mysql_connect($db_location,$db_username,$db_password)
        or die ("Error - Could not connect to MySQL Server");
    $db = mysql_select_db($db_database,$db_connection)
        or die ("Error - Could not open database");
        
?>