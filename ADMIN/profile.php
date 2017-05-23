<?php
//require_once('COMMON/header.php');

//connection
require_once('DB/db.php');
require_once('../CLASSES/classes.php');

/*USER*/
$userInfo = new userMF;
$user = $userInfo->createUser();
		
?>

<div class="container">
	<h1><i class="fa fa-user" aria-hidden="true"></i> PROFILE</h1>
	<hr />
	<b>USERNAME:</b> <?php echo $user['info']['username']; ?><br />
	
	<b>EMAIL:</b> <?php echo $user['info']['email']; ?><br />
	
	<br />
	<input id="userDashSubmit" type="submit" value="Save" />
</div>
