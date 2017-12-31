<?php
		echo "
    <a class='link' data-action='project' href='".SITEPATH."/".$proj[$x]['url']."'>
      <div class='project-item'>
        <img class='project-item-main-img' src='".$proj[$x]['mainImg']."' />
        <div class='project-item-card'>
          <h1 class='-small'>".$proj[$x]['name']."</h1>
          <h2 class='-x-small'>".$proj[$x]['summary']."</h2>
          <br />
          <h4 class='-xx-small'>".$proj[$x]['date']."</h4>
          <p class='-x-small'>".$proj[$x]['description']."</p>
        </div>
      </div>
    </a>";
?>
