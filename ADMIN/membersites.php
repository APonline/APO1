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
	<h1><i class="fa fa-sitemap" aria-hidden="true"></i> SITES</h1>
	<hr />
	<h4>CURRENT ACTIVE SITE</h4>
		<table class="singleTable" style="width: 100%;text-align: center;">
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
	<br />
	<h4>SITES</h4>
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
					echo '<tr>';
					echo '
					<input type="hidden" name="url[]" value="'. $user['sites'][$i]['url'] .'" />
					<input type="hidden" name="live_site[]" value="'. $user['sites'][$i]['live_site'] .'" />';
					echo '<td><p>V'. $user['sites'][$i]['live_site'] .'</p></td>';
					echo '<td><p>'. $user['sites'][$i]['site_name'] .'</p></td>';
					echo '<td><p>'. $user['sites'][$i]['url'] .'</p></td>';
					echo '<td><p>'. $user['sites'][$i]['timezone'] .'</p></td>';
					echo '<td><input type="radio" name="active" class="activeSite" value="'. $user['sites'][$i]['live_site'] .'" '; if($user['sites'][$i]['active']==1){echo 'checked';} echo' /></td>';
					echo '<td><div class="editBtn button" data-id="site.php?id='. $user['sites'][$i]['live_site'] .'">Manage</div></td>';
					echo '</tr>';
				}
			?>  
		</table>
		<br />
		<input id="userDashSubmit" type="submit" value="Save" />
	</form>
</div>

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function(){
		$('#userDashSubmit').unbind('click', submit);
		$('#userDashSubmit').bind('click', submit);	
		$('.editBtn').unbind('click', editSite);
		$('.editBtn').bind('click', editSite);
	});
	
	function editSite(){
		var page = $(this).attr('data-id');
	
		$('#nav_main').removeClass('active');
		$('#nav_secondary').addClass('active');
		
		$('.pageTab').removeClass('active');	
		$('.pageTab[data-id="site.php"]').addClass('active');
		$('.pageTab[data-id="'+page+'"]').addClass('active');
		$('.pageTab.active').attr('data-id', page);
		$('#container').load(page);
	}
	
	function submit(e){
		e.preventDefault();
		
		var form = $('#userdash');
	
		var dataSet = {
			action: 'update',
			item: 'livesite',
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