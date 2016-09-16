<?php
    if (isset($_SESSION['auth_type'])) {
	?>
	<div class="label_type">
	    <?php
	    
	     $label_type = $_SESSION['auth_type'];
	     
		switch ($label_type) {
			
		    case 'team':
			?><h2>Team Permission Settings Enabled</h2><?php
		    break;
			
		    case 'coach':
			?><h2>Coach Permission Settings Enabled</h2><?php 
				
		    break;
		    case 'game':
			?><h2>Game Permission Settings Enabled</h2><?php
            	
		    break;
		    case 'new-player':
			?><h2>New Player Permission Settings Enabled</h2><?php 
            	
		    break;
		    case 'existing-player':
			?><h2>Existing Player Permission Settings Enabled</h2><?php 	
		    break;
		}
	    ?>
	    
	</div>
	<?php
    }
	
?>