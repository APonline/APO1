<?php
foreach(glob('CLASSES/*.php') as $file) {
	if($file!='CLASSES/password.php'&&$file!='CLASSES/user.php'){
		include_once $file;
	}
}

if(isset($_GET['action'])){
}else{
	require('DB/config.php');
}

//check if already logged in move to home page
if( $user->is_logged_in() ){ 
	$MFstate='dashboard'; 
}else{
	$MFstate='login';
} 

//process login form if submitted
if(isset($_POST['login'])){
	$username = isset($_POST['username']) ? $_POST['username'] : "";
	$password = isset($_POST['password']) ? $_POST['password'] : "";	
	if($user->login($username,$password)){ 
	
		//require_once('includes/db.php');
		$_SESSION['username'] = $username;
		$user = $_SESSION['username'];
				
		$MFstate='dashboard';
	} else {
		$MFstate = 'login';
		$error[] = 'Wrong username or password or your account has not been activated.';
	}
}else{
	$MFstate = 'login';
}

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=300, user-scalable=yes" name="viewport"> 
	<title>ADMIN - <?  echo $MFstate; ?></title>
    
    <!--FOOTER-->
	<script src="ASSETS/JS/external/jquery/jquery.js"></script>
	<script src="ASSETS/JS/jquery-ui.js"></script>
	<script src="ASSETS/JS/main.js"></script>
	<link rel="stylesheet" type="text/css" href="ASSETS/CSS/main.css">
	<link rel="stylesheet" type="text/css" href="ASSETS/LIB/font-awesome/css/font-awesome.css">
</head>
<body>

