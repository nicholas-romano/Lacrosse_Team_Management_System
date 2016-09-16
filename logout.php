<?php
//Need the Session:
session_start();

//Delete the session variable:
session_unset();

//Reset the session array:
session_destroy();

header('Location: index.php');
?>