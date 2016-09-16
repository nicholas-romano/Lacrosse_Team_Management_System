 <?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Player Form Selection</title>
<link href="teams.css" rel="stylesheet" type="text/css" />
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
</head>

<body onload="MM_preloadImages('images/team_standings2.gif','images/game_scores2.gif','images/back_button2_150w.gif')">

<div class="container">
    <?php include 'common/logout_button.php'; ?>
    <div class="main">
	<a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Return to Main Menu','','images/main_menu2_150w.gif',1)">
	  <img src="images/main_menu_150w.gif" alt="Return to Main Menu" width="150" height="68" border="0" id="Return to Main Menu" />
	</a>
    </div>
    <div class="header">
	<img src="images/Team_Records_banner.png" width="850" height="100" alt="Select Player Form Type Banner" />
    </div>

    <div class="content">
      <?php include 'common/user_type.php'; ?>
      <h2>
	<img src="images/arrows.png" width="45" height="45" alt="arrow image" />
	<img src="images/Choose-your-form-below.png" width="250" height="45" alt="Choose your form below:" />
      </h2>
      <div class="nav2">
      <p>
	<a href="team_standings.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Team Standings','','images/team_standings2.gif',1)">
	<img src="images/team_standings1.gif" alt="Team Standings link" name="Team Standings" width="300" height="125" border="0" id="Team Standings" /></a><a href="game_scores.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Game Scores','','images/game_scores2.gif',1)">
	<img src="images/game_scores1.gif" alt="Game Scores link" name="Game Scores" width="300" height="125" border="0" id="Game Scores" /></a>
      </p>
	  </div>
	  
    </div>
</div>
  <?php
    include('common/footer.php');
  ?>

</body>
</html>
