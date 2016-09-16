<?php
    if (isset($_SESSION['auth_id'])) {
	?>
	<div class="logout_button">
    	<a href="logout.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Log Out','','images/logout_button2_150w.gif',1)">
        <img src="images/logout_button_150w.gif" alt="Log Out" name="Log Out" width="150" height="68" border="0" id="Log Out" /></a>
    </div>
	<?php
    }
?>