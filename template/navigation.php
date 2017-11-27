<nav class='gradient'>
	<div id='logo'>
		<p>ANDREW PHILLIPS</p>
		<a href="<?php echo SITEPATH ?>/home"><img src="<?php echo SITEPATH; ?>/assets/img/logo.svg" style='width: 100%;' /></a>
		<p>ONLINE</p>
	</div>
	<ul>
		<?php
		$dir = $GLOBALS['dir'];
		$nav = $GLOBALS['nav'];
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
	<div id="menu"><img src="<?php echo SITEPATH; ?>/assets/img/menu.png" style="width:100%;"></div>
	<div id='icon'><img class="rotate" src="<?php echo SITEPATH; ?>/assets/img/burgerload.png" height="79" /></div>
</nav>

<div id='shade'></div>
<section>

