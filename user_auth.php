 <?php session_start();
   if ($user_type !== 'team' && $user_type !== 'coach' && $user_type !== 'game' && $user_type !== 'new-player' && $user_type !== 'existing-player') {
      header('Location: index.php');
   }
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml"> 
 <head>
    <title>User Authentication</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="teams.css" />
    <?php include 'scripts/db.php' ?>
    <script tupe="text/javascript">
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
 <body>
    <div id="wrapper">
        
        <div class="container">
	    <?php include 'common/logout_button.php'; ?>
	    <div class="main">
	       <a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Main Menu','','images/main_menu2_150w.gif',1)">
		 <img src="images/main_menu_150w.gif" alt="Return to Main Menu link" width="150" height="68" border="0" id="Main Menu" />
	       </a>
	    </div>
            <div class="header">
		  		<?php include 'common/user_type_banner.php'; ?>
	    	</div>
            <div class="content">
	       <?php include 'common/user_type.php'; ?>
           
                    <form action="scripts/authenticateUser.php?user_type=<?=$user_type ?>" method="post">
			
                        <table class="form_styles" summary="Authenticate User Credentials">
                            <tr>
                                <td>Username</td>
                                <td><input type="text" id="username" name="username" size="20" maxlength="20" /></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" id="password" name="password" size="20" maxlength="20" /></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="Submit">
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
