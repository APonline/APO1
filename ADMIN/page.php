<?php
//require_once('COMMON/header.php');

//connection
require_once('DB/db.php');
require_once('../CLASSES/classes.php');

$v = $_GET['id'];
	
	/*USER*/
	$userInfo = new userMF;
	$user = $userInfo->createUserSite($v,'admin');

		
?>

<div class="container">
	<h5 style="margin-bottom: -16px;"><?php echo $user['site']['info']['site_name']; ?></h5>
	<h1><i class="fa fa-file" aria-hidden="true"></i> PAGES</h1>
	<hr />
	
	<br />
	<input id="userDashSubmit" type="submit" value="Save" />
</div>

