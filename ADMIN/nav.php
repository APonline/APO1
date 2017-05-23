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
	<h1><i class="fa fa-info-circle" aria-hidden="true"></i> NAVIGATION</h1>
	<hr />

	<form id="userdash">
		<?php
		echo '<input type="hidden" name="userId" value="' . $user['user']['memberID'] . '"  />';
		?>

			<?php
				
				echo '
				<div class="info-asset">
					';
				
					
					
					echo '<ul id="sortable">';
					foreach($user['site']['nav'] as $nav){	
						/*level of navs*/
						if($nav['level']==0){
							echo'
							<li class="sortableItem">
								<input type="text" name="siteName[]" value="' . $nav['name'] . '" />
		
								<a class="button" href="page.php?id='. $nav['db_id'] .'" target="_self">Manage</a>			
								<input type="checkbox" name="active" class="activeSite" value="'. $nav['active'] .'" '; if($nav['active']==1){echo 'checked';} echo' />
							</li>
							';
							
							echo '<ul class="subnav"></ul>';
						}
					}
					echo '</ul>';
					
					
					
					
					
				echo'
				<br />
				</div>';
			?>
		<br />
		<input id="userDashSubmit" type="submit" value="Save" />
	</form>
</div>

<script>
	$(document).ready(function(){
		$('#userDashSubmit').bind('click', submit);	    	
    	
    	$('ul#sortable').sortable({
			connectWith: '.subnav',
		});
		$('#sortable ul.subnav').sortable({
			connectWith: '#sortable',
		});
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