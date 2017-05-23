<nav class="ani-U">
	<?php
	$nav = $userSite['site']['nav'];
	
	foreach($nav as $navLink){
		if($navLink['name']=='Home'){
			echo '
			<img class="ani-L homeIcon action-btn" data-id="' . ($navLink['order'] + 1) . '" data-action="change page" src="' . $lvl . $images . '/logoSmall.png">
			';
		}
	}
	?>
	<ul>
		<?php
		foreach($nav as $navLink){
			if($navLink['level'] == 0){
				if($navLink['name']=='Home'){
				}else{
					echo '
					<li class="mainNav action-btn" data-id="' . ($navLink['order'] + 1) . '" data-action="change page">' . $navLink['name'] . '</li>
					';
					$subNav=0;
				}
			}
			
			if($navLink['level'] == 1 && $subNav == 0){
				echo '
				<subnav data-id="' . ($navLink['parent_order'] + 1) . '">
					<ul>
				';
				$parent= $navLink['parent_order'];
				foreach($nav as $navSubLink){
					if($navSubLink['level'] == 1 && $navSubLink['parent_order'] == $parent){
						echo '
						<li class="action-btn" data-id="' . ($navSubLink['order'] + 1) . '" data-action="change subpage">' . $navSubLink['name'] . '</li>
						';
					}
				}
				
				echo '
					</ul>
				</subnav>
				';
				$subNav=1;
			}
		}
		?>
	</ul>
</nav>