<worknav>
	<ul>
		<?php
		$dir = $GLOBALS['dir'];
		$nav = $GLOBALS['work'];
		$active = $GLOBALS['active'];

			for($x=0; $x<count($nav); $x++){
				$pageCurr = $nav[$x]['url'];

				if($active==$pageCurr){
					$GLOBALS['page'] = $nav[$x]['name'];
					echo "<li class='active'><a href='".SITEPATH."/".$nav[$x]['url']."'>".$nav[$x]['name']."</a></li>";
				}else{
					echo "<li><a href='".SITEPATH."/".$nav[$x]['url']."'>".$nav[$x]['name']."</a></li>";
				}
			}
		?>
	</ul>
</worknav>
