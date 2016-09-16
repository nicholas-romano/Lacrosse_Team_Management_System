
    
	    <?php
	   
		switch ($user_type) {
		    case 'team':
			?>
	    <img src="images/Team Authentication.png" width="850" height="100" alt="Team Authentication"/>
	    <?php
		    break;
		    case 'coach':
			?>
	    <img src="images/Coach Authentication.png" width="850" height="100" alt="Coach Authentication"/>
<?php
		    break;
		    case 'game':
			?>
	    <img src="images/Game Authentication.png" width="850" height="100" alt="Game Authentication"/>
	    <?php
		    break;
		    case 'new-player':
			?>
	    <img src="images/New Player Authentication.png" width="850" height="100" alt="New Player Authentication"/>
	    <?php
		    break;
		    case 'existing-player':
			?>
	    <img src="images/Existing Player Authentication.png" width="850" height="100" alt="Existing Player Authentication"/>
	    <?php
		    break;
		}

	    ?>	