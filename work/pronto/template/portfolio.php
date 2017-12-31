<div class='slider'>
	<!--demo reel-->
  <div class='sliderItem activeSlide' data-id='1'>
    <?php
      $proj = $GLOBALS['projects'];
      $projCount=0;
      for($x=0; $x<count($proj); $x++){
        if($proj[$x]['category']=="demo reel"){
          include('template/projectCard.php');
          $projCount++;
        }
      }

      if($projCount==0){
        echo "<h1 class='-x-small'>No Current Demo Reel.</h1>";
      }
    ?>
  </div>

	<!--web-->
  <div class='sliderItem' data-id='2'>
    <?php
      $proj = $GLOBALS['projects'];
      $projCount=0;
      for($x=0; $x<count($proj); $x++){
        if($proj[$x]['category']=="web"){
          include('template/projectCard.php');
          $projCount++;
        }
      }

      if($projCount==0){
        echo "<h1 class='-x-small'>No Current Web Projects.</h1>";
      }
    ?>
  </div>

	<!--graphic-->
  <div class='sliderItem' data-id='3'>
    <?php
      $proj = $GLOBALS['projects'];
      $projCount=0;
      for($x=0; $x<count($proj); $x++){
        if($proj[$x]['category']=="graphic"){
          include('template/projectCard.php');
          $projCount++;
        }
      }

      if($projCount==0){
        echo "<h1 class='-x-small'>No Current Graphic Projects.</h1>";
      }
    ?>
  </div>

	<!--creative-->
	<div class='sliderItem' data-id='4'>
  		<?php
  		  $proj = $GLOBALS['projects'];
        $projCount=0;
  			for($x=0; $x<count($proj); $x++){
          if($proj[$x]['category']=="creative"){
  					include('template/projectCard.php');
            $projCount++;
          }
        }

        if($projCount==0){
          echo "<h1 class='-x-small'>No Current Creative Projects.</h1>";
        }
  		?>
  </div>
</div>
