<?php 
//connection
require_once('ADMIN/DB/db.php');
require_once('CLASSES/classes.php');


//version of site
if(isset($_GET['v'])){
	$v = $_GET['v'];
	
	/*USER*/
	$userInfo = new userMF;
	$userSite = $userInfo->createUserSite($v,'site');
}else{
	/*USER*/
	$userInfo = new userMF;
	$userSite = $userInfo->createUserSite($v,'site');	
}

//version
$v = 'V'.$userSite['site']['info']['live_site'];

//version of site
$commonSet = 'COMMON/'.$userSite['MF'].'/';

//timezone
date_default_timezone_set($userSite['site']['info']['timezone']);

//site version
$lvl = 'VERSIONS/'.$v.'/';


//Sets version permissions to hidden
//Allows view for $v
$folders = scandir('VERSIONS/');
foreach($folders as $dir) {
 if($dir=="."||$dir==".."){
 }else{
 	if($dir==$v){
  		chmod('VERSIONS/'.$dir, 0755);
  	}else{
  		chmod('VERSIONS/'.$dir, 0755);
  	}
  }
}
  
/*if overriding config exists*/
if(file_exists(''.$lvl.'config/config.php')==1){
	include(''.$lvl.'config/config.php');

	/*if standard vars are not overwritten*/
	if(!isset($siteTitle)){
		$siteTitle = $userSite['site']['info']['name'];
	}
	if(!isset($url)){
		$url = $userSite['site']['info']['url'];
	}
	if(!isset($urlImg)){
		$urlImg = $userSite['site']['info']['urlImg'];
	}
	if(!isset($desc)){
		$desc = $userSite['site']['info']['description'];
	}
	if(!isset($keywords)){
		$keywords = $userSite['site']['info']['keywords'];
	}
	if(!isset($css)){
		$css = $userSite['site']['info']['css'];
	}
	if(!isset($images)){
		$images = $userSite['site']['info']['images'];
	}
	if(!isset($js)){
		$js = $userSite['site']['info']['js'];
	}
}else{
	$siteTitle = $userSite['site']['info']['name'];
	$url = $userSite['site']['info']['url'];
	$urlImg = $userSite['site']['info']['urlImg'];
	$desc = $userSite['site']['info']['description'];
	$keywords = $userSite['site']['info']['keywords'];
	$css = $userSite['site']['info']['css'];
	$images = $userSite['site']['info']['images'];
	$js = $userSite['site']['info']['js'];
}


/*-- Site Build --*/

//header
require_once(''.$commonSet.'header.php');

//site
require_once('VERSIONS/'.$v.'/index.php');

//footer
require_once(''.$commonSet.'footer.php');

?>