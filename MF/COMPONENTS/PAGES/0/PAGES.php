<?php 	
	foreach($userSite['site']['pages'] as $page){
		if($page['id']==1){
			echo '<div class="pg'.$page['id'].' page active" data-id="'.$page['id'].'" data-name="'.$page['name'].'">';
				include('VERSIONS/'.$v.'/pages/'.$page['id'].'.php');
			echo '</div>';
		}else{
			echo '<div class="pg'.$page['id'].' page inactive" data-id="'.$page['id'].'" data-name="'.$page['name'].'">';
				include('VERSIONS/'.$v.'/pages/'.$page['id'].'.php');
			echo '</div>';
		}
	}	
?>