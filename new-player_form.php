 <?php session_start();
    if (!isset($_SESSION['auth_id'])) {
          $user_type = 'new-player';
	  header("Location: user_auth.php?user_type=$user_type");
        }
        else if (($_SESSION['auth_type']) !== 'new-player') {
	  $user_type = 'new-player';
	  header("Location: user_auth.php?user_type=$user_type");
	}
	else {
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>New Player Form</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="teams.css" />
    <script type="text/javascript" src="scripts/validatePlayerForm.js"></script>
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

</head>
<body onload="MM_preloadImages('images/main_menu2_150w.gif','images/back_button2_150w.gif')">
    
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
	      <img src="images/new_player_banner.png" width="850" height="100" alt="Update Player banner" />
	    </div>
     
       <div class="content">
	    <?php include 'common/user_type.php'; ?>
	   <h2>
	       <img src="images/arrows.png" width="45" height="45" alt="arrows" /><img src="images/Enter-new-player-contact-information.png" width="380" height="45" alt="Update player information and statistics" />
	   </h2>
	   <form id="player_form"  onsubmit="return validatePlayerForm()" action="playerSubmission.php" method="post">
	       
		 <table class="form_styles">
			 <tr>
			   <td>First Name:</td>
			   <td><input type="text" name="fname" id="fname" size="20" maxlength="40" /></td>
			 </tr>
			 <tr>
			   <td>Last Name:</td>
			   <td><input type="text" name="lname" id="lname" size="20" maxlength="40" /></td>
			 </tr>
			 <tr>
			   <td>Age</td>
			   <td><input type="text" name="age" id="age" size="4" maxlength="4" /></td>
			 </tr>
			 <tr>
			   <td>Address:</td>
			   <td><input type="text" name="address" id="address" size="30" maxlength="100" /><span class="tinytext">Exclude punctuation marks</span></td>
			 </tr>
			 <tr>
			    <td>City:</td>
			    <td><input type="text" name="city" id="city" size="20" maxlength="40" /></td>
			 </tr>
			 <tr>
			   <td>State:</td>
			   <td><select name="state" id="state">
			       <option value="Alabama">Alabama</option>
			       <option value="Alaska">Alaska</option>
			       <option value="Arizona">Arizona</option>
			       <option value="Arkansas">Arkansas</option>
			       <option value="California">California</option>
			       <option value="Colorado">Colorado</option>
			       <option value="Connecticut">Connecticut</option>
			       <option value="Delaware">Delaware</option>
			       <option value="District of Columbia">District of Columbia</option>
			       <option value="Florida">Florida</option>
			       <option value="Georgia">Georgia</option>
			       <option value="Hawaii">Hawaii</option>
			       <option value="Idaho">Idaho</option>
			       <option value="Illinois">Illinois</option>
			       <option value="Indiana">Indiana</option>
			       <option value="Iowa">Iowa</option>
			       <option value="Kansas">Kansas</option>
			       <option value="Kentucky">Kentucky</option>
			       <option value="Louisiana">Louisiana</option>
			       <option value="Maine">Maine</option>
			       <option value="Maryland">Maryland</option>
			       <option value="Massachusetts">Massachusetts</option>
			       <option value="Michigan">Michigan</option>
			       <option value="Minnesota">Minnesota</option>
			       <option value="Mississippi">Mississippi</option>
			       <option value="Missouri">Missouri</option>
			       <option value="Montana">Montana</option>
			       <option value="Nebraska">Nebraska</option>
			       <option value="Nevada">Nevada</option>
			       <option value="New Hampshire">New Hampshire</option>
			       <option value="New Jersey">New Jersey</option>
			       <option value="New Mexico">New Mexico</option>
			       <option value="New York">New York</option>
			       <option value="North Carolina">North Carolina</option>
			       <option value="North Dakota">North Dakota</option>
			       <option value="Ohio">Ohio</option>
			       <option value="Oklahoma">Oklahoma</option>
			       <option value="Oregon">Oregon</option>
			       <option value="Pennsylvania">Pennsylvania</option>
			       <option value="Rhode Island">Rhode Island</option>
			       <option value="South Carolina">South Carolina</option>
			       <option value="South Dakota">South Dakota</option>
			       <option value="Tennessee">Tennessee</option>
			       <option value="Texas">Texas</option>
			       <option value="Utah">Utah</option>
			       <option value="Vermont">Vermont</option>
			       <option value="Virginia">Virginia</option>
			       <option value="Washington">Washington</option>
			       <option value="West Virginia">West Virginia</option>
			       <option value="Wisconsin">Wisconsin</option>
			       <option value="Wyoming">Wyoming</option>
			       </select>
			   </td>
			 </tr>
			 <tr>
			   <td>Zip:</td>
			   <td><input type="text" name="zip" id="zip" size="7" maxlength="7" /></td>
			 </tr>
			 <tr>
			   <td>Phone:</td>
			   <td><input type="text" name="phone" id="phone" size="12" maxlength="12" /><span class="tinytext">Must be: 000-000-0000 or 000 000 0000</span></td>
			 </tr>
			 <tr>
			   <td>Team:</td>
			   <td>
			       <?php
				   include 'scripts/team_dropdown.php';
			       ?>
			   </td>
			 </tr>
			   <tr>
			      <td colspan="2"><input type="submit" value="Submit" />&nbsp;<input type="reset" value="Reset" /></td>
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