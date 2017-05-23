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
	<h1><i class="fa fa-info-circle" aria-hidden="true"></i> INFO</h1>
	<hr />

	<form id="userdash">
		<?php
		echo '<input type="hidden" name="userId" value="' . $user['user']['memberID'] . '"  />';
		?>
			<?php
				echo '
				<div class="info-asset">
					<b>VERSION:</b>
					<input type="text" name="liveSite[]" value="' . $user['site']['info']['live_site'] . '" placeholder="1" />
				</div>
				<div class="info-asset">
					<b>NAME:</b>
					<input type="text" name="siteName[]" value="' . $user['site']['info']['site_name'] . '" placeholder="My Site Title" />
				</div>
				<div class="info-asset">
					<b>URL:</b>
					<input type="text" name="url[]" value="' . $user['site']['info']['url'] . '" placeholder="http://www.siteurl.com" />
				</div>
				<div class="info-asset">
					<b>META IMAGE:</b>
					<input type="text" name="urlImg[]" value="' . $user['site']['info']['urlImg'] . '" placeholder="http://www.andrewphillips.online/css/images" />
				</div>
				<div class="info-asset">
					<b>DESCRIPTION:</b>	
					<textarea rows="4" cols="50" name="description[]" placeholder="Site description">' . $user['site']['info']['description'] . '</textarea>
				</div>
				<div class="info-asset">
					<b>KEYWORDS:</b>
					<input type="text" name="keywords[]" value="' . $user['site']['info']['keywords'] . '" placeholder="America/Toronto" />
				</div>';
				
				echo '
				<h2>Asset Paths</h2>
				<div class="asset-block-panel">
				';
				
					echo '
					<div class="info-asset asset-block">
						<b>CSS PATH:</b>
						<input type="text" name="css[]" value="' . $user['site']['info']['css'] . '" placeholder="My Site Title" />
					</div>';
					echo '
					<div class="info-asset asset-block">
						<b>IMAGES PATH:</b>
						<input type="text" name="images[]" value="' . $user['site']['info']['images'] . '" placeholder="My Site Title" />
					</div>';
					echo '
					<div class="info-asset asset-block">
						<b>JS PATH:</b>
						<input type="text" name="js[]" value="' . $user['site']['info']['js'] . '" placeholder="My Site Title" />
					</div>
				</div>
				<div class="clear"></div>
				';
				
				
				
				echo '
				<div class="info-asset">	
					<b>TIMEZONE:</b>
					<input type="text" name="timeZone[]" value="' . $user['site']['info']['timezone'] . '" placeholder="My Site Title" />
				</div>';
				echo '
				<div class="info-asset">
					<b>GA TRACKING:</b>
					<textarea rows="4" cols="50" name="GATracking[]" placeholder="Google Analytics Tracking">' . $user['site']['info']['GA_tracking'] . '</textarea>
				</div>';

			?>
		<br />
		<input id="userDashSubmit" type="submit" value="Save" />
	</form>
</div>

<script>
	$(document).ready(function(){
		$('#userDashSubmit').bind('click', submit);	    	
	});
	
	function submit(e){
		e.preventDefault();
		
		var form = $('#userdash');
	
		var dataSet = {
			action: 'update',
			data: form.serialize()
		}
	
		$.ajax({
			type: "POST",
			data: dataSet,
			url: "../CLASSES/classes.php",
			dataType: "json",
			async: false,
			success: function(data) {
			  result=data;
			}
		});
	}

</script>