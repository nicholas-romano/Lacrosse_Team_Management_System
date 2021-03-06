 <?php session_start();
    if (!isset($_SESSION['auth_id'])) {
          $user_type = 'game';
	  header("Location: user_auth.php?user_type=$user_type");
        }
        else if (($_SESSION['auth_type']) !== 'game') {
	  $user_type = 'game';
	  header("Location: user_auth.php?user_type=$user_type");
	}
	else {
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Game Form</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="teams.css" />
    <script type="text/javascript" src="scripts/validateGameForm.js"></script>
    <script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
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
<?php include 'scripts/db.php' ?>
</head>
<body onload="MM_preloadImages('images/main_menu2_150w.gif')">
    
<div id="wrapper">
 <div class="container">
	<?php include 'common/logout_button.php'; ?>
 	<div class="main">
    <a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Return to Main Menu','','images/main_menu2_150w.gif',1)">
	<img src="images/main_menu_150w.gif" alt="Return to Main Menu" width="150" height="68" border="0" id="Return to Main Menu" />
    </a>
    </div>      
  <div class="header">
    <img src="images/game_form_banner.png" width="850" height="100" alt="Game Form banner" />
  </div>
    
   <div class="content">
    	<?php include 'common/user_type.php'; ?>

    <h2>
	<img src="images/arrows.png" width="45" height="45" alt="arrows" />
	<img src="images/Complete-the-following-game-details.png" width="525" height="50" alt="Complete the following game details:" />
    </h2>
	<form id="game_form" onsubmit="return validateGameForm()" action="gameSubmission.php" method="post">
	    
	      <table class="form_styles">
		  <tr>
		    <td>Game Date:</td>
		    <td colspan="3"><input type="text" name="date" id="date" /><span class="tinytext">mo/dy/year</span></td>
		  </tr>
		  <tr>   
		    <td>Team 1: </td>
		    <td>
			<?php
			    include 'scripts/team_dropdown.php';
			?>	
		    </td>
		    <td class="align_right">vs Team 2: </td>
		    <td>
			<?php
			    include 'scripts/team2_dropdown.php';
			?>
		    </td>
		  </tr>
		  <tr>
		    <td>Team 1 Score:</td>
		    <td><input type="text" name="scoreone" id="scoreone" size="4" max="4" /></td>
		    <td class="align_right">Team 2 Score:</td>
		    <td class="align_left"><input type="text" name="scoretwo" id="scoretwo" size="4" max="4" /></td>
		  </tr>
		  <tr>  
		    <td colspan="4">    
			<input type="submit" value="Submit" />
		    </td>
		  </tr>
	    </table>
	    
	  
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