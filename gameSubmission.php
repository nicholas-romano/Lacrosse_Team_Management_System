 <?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Game Submission Confirmation</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="teams.css" />
    <?php include 'scripts/db.php'; ?>
</head>
<body>
    <div id="wrapper">
        <?php include 'scripts/processGameSubmission.php'; ?>
    </div>
</body>
</html>