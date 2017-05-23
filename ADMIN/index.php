<?php
require_once('COMMON/header.php');

	if($MFstate=="login"){
		if(isset($error)){ $err_user = $_POST['username']; }
		
		//login
		echo'
		<loginbk></loginbk>
		<login>
			<form role="form" method="post" action="" autocomplete="off">
				<h2>LOGIN</h2>

				<input type="text" name="username" id="username" placeholder="User Name" value="'. $err_user .'" /><br />
				<input type="password" name="password" id="password" placeholder="Password" />
				
				<br /><br />
				<input type="submit" name="login" value="LOGIN" class="btn btn-primary btn-block btn-lg" tabindex="5" />
			</form>
		</login>
		';
	}else if($MFstate=="dashboard"){
		//dashboard
		
		echo'
		<nav>
			<div id="user">
				<div id="userImg">
				</div>
				<div id="userName">
					'.$user.'
					<br />
					<a href="logout.php">logout</a>
				</div>
			</div>
			
			<div id="nav">
				<ul class="navtype active" id="nav_main">
					<li class="pageTab" data-id="profile.php">
						<i class="fa fa-user" aria-hidden="true"></i>
						<p>Profile</p>
					</li>
					<li class="pageTab" data-id="membersites.php">
						<i class="fa fa-sitemap" aria-hidden="true"></i>
						<p>Sites</p>
					</li>
				</ul>
			
				<ul class="navtype" id="nav_secondary">
					<li class="pageTab" data-id="gotoMainNav">
						<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
						<p>Back</p>
					</li>
					<li class="pageTab" data-id="site.php">
						<i class="fa fa-info-circle" aria-hidden="true"></i>
						<p>Info</p>
					</li>
					<li class="pageTab" data-id="nav.php">
						<i class="fa fa-map" aria-hidden="true"></i>
						<p>Navigation</p>
					</li>
					<li class="pageTab" data-id="page.php">
						<i class="fa fa-file" aria-hidden="true"></i>
						<p>Pages</p>
					</li>
				</ul>
			</div>
		</nav>
		';
		
		echo'
			<div id="container">
			</div>
		';
	}

require_once('COMMON/footer.php');
?>