<nav>
	<div id='logo'><a href="<?php echo SITEPATH ?>/home"><img src="<?php echo SITEPATH; ?>/assets/img/logo.svg" /></a></div>
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
	
	<subnav>
		<div id="openLegend">- View Legend -</div>
		<div class="subnavInner">
		<?php
			echo "<div class='legend'><img src='".SITEPATH."/assets/img/rating.svg' width='20' /> RATING</div>";
			echo "<div class='legend'><img src='".SITEPATH."/assets/img/veggie.svg' width='20' /> VEGGIE</div>";
			echo "<div class='legend'><img src='".SITEPATH."/assets/img/spicy.svg' width='20' /> SPICY</div>";
			echo "<div class='legend'><img src='".SITEPATH."/assets/img/seasonal.svg' width='20' /> SEASONAL</div>";
			echo "<div class='legend'><img src='".SITEPATH."/assets/img/available.svg' width='20' /> EXTINCT</div>";
			echo "<div class='legend'><img src='".SITEPATH."/assets/img/hasChallenge.svg' width='20' /> FOOD CHALLENGE</div>";
			echo "<div class='legend'><img src='".SITEPATH."/assets/img/fusion.svg' width='20' /> FUSION</div>";
			echo "<div class='legend'><img src='".SITEPATH."/assets/img/hasMods.svg' width='20' /> MODDED</div>";
		?>
		</div>
	</subnav>
</nav>

<div id='shade'></div>
<section>

