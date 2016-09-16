 <?php session_start();
    if (!isset($_SESSION['auth_id'])) {
	  $user_type = 'existing-player';
	  header("Location: user_auth.php?user_type=$user_type");
        }
        else if (($_SESSION['auth_type']) !== 'existing-player') {
	  $user_type = 'existing-player';
	  header("Location: user_auth.php?user_type=$user_type");
	}
	else {
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Existing Player Form</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="teams.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="scripts/validateExistingPlayerForm.js"></script>
    <?php include 'scripts/db.php' ?>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<script src="scripts/jquery-3.0.0.min.js"></script>
</head>
<body onload="MM_preloadImages('images/main_menu2_150w.gif')">
<script src="scripts/stats_form.js"></script>
<div id="wrapper">
    <div class="container">
	<?php include 'common/logout_button.php'; ?>
       <div class="main">
	    <a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Return to Main Menu','','images/main_menu2_150w.gif',1)">
		<img src="images/main_menu_150w.gif" alt="Return to Main Menu" width="150" height="68" border="0" id="Return to Main Menu" />
	    </a>
       </div>
       <div class="previous">
	    <a href="player_form_selection.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Back button','','images/back_button2_150w.gif',1)">
		    <img src="images/back_button_150w.gif" alt="Back button link" width="150" height="68" border="0" id="Back button" />
	    </a>
	</div>
       <div class="header">
	 <img src="images/existing_player_banner.png" width="850" height="100" alt="Update Player banner" />
       </div>
	
	<div class="content">
	    	<?php include 'common/user_type.php'; ?>
	     <h2>
		 <img src="images/arrows.png" width="45" height="45" alt="arrows" />
		 <img src="images/Update-player-information-and-statistics.png" width="425" height="45" alt="Update player information and statistics" />
	     </h2>
	     <form id="existing_player_form" onsubmit="return validateExistingPlayerForm()" action="existingPlayerSubmission.php" method="post">
		
		   <table class="form_styles">
			   <tr>
			     <td>Game Date:</td>
			     <td><input type="text" id="date" name="player_date" size="12" maxlength="12" /><span class="tinytext">mo/dy/year</span></td>
			   </tr>
			   <tr>
			     <td>First Name:</td>
			     <td><input type="text" name="fname" id="fname" size="20" maxlength="40" /></td>
			   </tr>
			   <tr>
			     <td>Last Name:</td>
			     <td><input type="text" name="lname" id="lname" size="20" maxlength="40" /></td>
			   </tr>
			   <tr>
			     <td>Team:</td>
			     <td>
				 <?php
				     include 'scripts/team_dropdown.php';
				 ?>
			     </td>
			   </tr>
		    </table>
		<h4><img src="images/arrows.png" width="45" height="45" alt="arrows" /><img src="images/Select-player-field-position-.png" width="350" height="50" alt="Select player field position:" /></h4>

		<ul class="position">
		    <li><input type="button" class="player_position_button" onclick="displayStatsForm(value)" value="Attacker" /></li>
		    <li><input type="button" class="player_position_button" onclick="displayStatsForm(value)" value="Middie" /></li>
		    <li><input type="button" class="player_position_button" onclick="displayStatsForm(value)" value="Defender" /></li>
		    <li><input type="button" class="player_position_button" onclick="displayStatsForm(value)" value="Goalie" /></li>
		</ul>
		<div class="position">
		    <div class="stats_form"></div>
		</div>

	    </form>
	 
       </div>
	   
   </div>
</div>
<?php
    include('common/footer.php');
  ?>
</body>
</html>
<?php } ?>