<worknav>
	<ul>
		<?php
		$dir = $GLOBALS['dir'];
		$nav = $GLOBALS['work'];
		$active = $GLOBALS['active'];
		$active = "work/demo-reel";

			$pgId = 1;
			for($x=0; $x<count($nav); $x++){
				$pageCurr = $nav[$x]['url'];


				if($active==$pageCurr){
					$GLOBALS['page'] = $nav[$x]['name'];
					echo "<li class='active'><a data-id='".$pgId."' class='link' data-action='work-category' href='".SITEPATH."/".$nav[$x]['url']."'>".$nav[$x]['name']."</a></li>";
				}else{
					echo "<li><a data-id='".$pgId."' class='link' data-action='work-category' href='".SITEPATH."/".$nav[$x]['url']."'>".$nav[$x]['name']."</a></li>";
				}
				$pgId++;
			}
		?>
	</ul>
</worknav>
