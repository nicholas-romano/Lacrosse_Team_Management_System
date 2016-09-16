<?php
session_start(); 
include "db.php";

$username = htmlentities($_POST['username']);
$password = htmlentities($_POST['password']);

$sql = "SELECT * FROM userauth WHERE
            Auth_Type = '$user_type' AND Username = '$username' AND Password = '$password'";
            
$query = mysql_query($sql)
        or die(mysql_error());

$numRows = mysql_num_rows($query);

if ($numRows == 1) {
    
    $row = mysql_fetch_array($query);
    
    //start a new session:
    session_start();
        $_SESSION['auth_id'] = $row['ID'] ;
        $_SESSION['auth_type'] = $row['Auth_Type'] ;
        $_SESSION['username'] = $row['Username'] ;
        $_SESSION['password'] = $row['Password'] ;
        
        header("Location: ../$user_type"."_form.php?user_type=$user_type");
    
}
else { 
    header("Location: ../user_auth.php?user_type=$user_type");
}

?>