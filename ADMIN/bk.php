<?php
//connection
require_once('DB/db.php');
require_once('../CLASSES/classes.php');

/*USER*/
$userInfo = new userMF;
$user = $userInfo->createUser();
		
?>

<div class="container">
	<div><?php echo $user['info']['username']; ?>'s Sites:</div>
	<hr />
	<h1>Current Active Site</h1>
		<table style="width: 100%;text-align: center;">
			<tr>
				<th>Version</th>
				<th>Name</th>
				<th>Url</th>
				<th>Timezone</th>
			</tr>
			<?php
				for($i=0; $i<count($user['sites']); $i++){
					if($user['sites'][$i]['active']==1){
						echo '<tr>';
						echo '<td>V' . $user['sites'][$i]['live_site'] . '</td>';
						echo '<td>' . $user['sites'][$i]['site_name'] . '</td>';
						echo '<td>' . $user['sites'][$i]['url'] . '</td>';
						echo '<td>' . $user['sites'][$i]['timezone'] . '</td>';
						echo '</tr>';
					}
				}
			?>
		</table>
	<hr />
	<form id="userdash">
		<?php
		echo '<input type="hidden" name="userId" value="' . $user['info']['memberID'] . '"  />';
		?>
		<table style="width: 100%;text-align: center;">
			<tr>
				<th>Version</th>
				<th>Name</th>
				<th>Url</th>
				<th>Timezone</th>
				<th>Active</th>
				<th>Manage</th>
			</tr>
			<?php
				for($i=0; $i<count($user['sites']); $i++){
					echo '<tr style="height: 45px;">';
					echo '<td>V<input type="text" name="liveSite[]" value="' . $user['sites'][$i]['live_site'] . '" placeholder="1" /></td>';
					echo '<td><input type="text" name="siteName[]" value="' . $user['sites'][$i]['site_name'] . '" placeholder="My Site Title" /></td>';
					echo '<td><input type="text" name="url[]" value="' . $user['sites'][$i]['url'] . '" placeholder="http://www.siteurl.com" /></td>';
					echo '<td><input type="text" name="timeZone[]" value="' . $user['sites'][$i]['timezone'] . '" placeholder="America/Toronto" /></td>';
					echo '<td><input type="radio" name="active" class="activeSite" value="' . $user['sites'][$i]['live_site'] . '" '; if($user['sites'][$i]['active']==1){echo 'checked';} echo' /></td>';
					echo '<td><a href="site.php?id=' . $user['sites'][$i]['live_site'] . '"><button>Manage</button></a></td>';
					echo '</tr>';
				}
			?>
		</table>
		<input id="userDashSubmit" type="submit" value="Save" />
	</form>
</div>

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
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