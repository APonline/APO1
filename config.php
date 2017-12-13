<?php

$sitePath = 'http://' . $_SERVER['HTTP_HOST'] . "/APO/dev/web.APO";
define("SITEPATH", $sitePath);

//Clean Name
function cleanName($toName){
	$toName = str_replace('-', ' ', $toName);
	$toName = preg_replace('/(?<!\s)-(?!\s)/', ' ', $toName);
	$toName = ucwords($toName);
	return $toName;
}

	//site nav
	$navSite = array();
	$navSite[] = array("name"=>"Home","url"=>"");
	$navSite[] = array("name"=>"Portfolio","url"=>"portfolio");
	$navSite[] = array("name"=>"Resume","url"=>"resume");
	$navSite[] = array("name"=>"Contact","url"=>"contact");

	$GLOBALS['nav'] = $navSite;

	//site nav
	$workSite = array();
	$workSite[] = array("name"=>"Demo Reel","url"=>"work/demo-reel");
	$workSite[] = array("name"=>"Web","url"=>"work/web");
	$workSite[] = array("name"=>"Graphic","url"=>"work/graphic");
	$workSite[] = array("name"=>"Creative","url"=>"work/creative");

	$GLOBALS['work'] = $workSite;

	//site nav
	$projectDir = array();

foreach (glob("projects/*") as $filename) {
	$dir = explode('/',$filename);
	$name = $dir[1];
	$json = file_get_contents($sitePath."/projects/$name/info.json");
	$json = json_decode($json, TRUE);

	$date = $json['date'];
	$category = $json['category'];
	$summary = $json['summary'];
	$description = $json['description'];
	$status = $json['status'];
	$link = $json['link'];

		//Gets screenshots
		$screenshots = array();
		foreach (glob($filename."/screenshots/*") as $fileName) {
			$dir = explode('/',$fileName);
			$imgName = $dir[3];
			$imgName = explode('.',$imgName);
			$imgName = $imgName[0];

			$screenshots = array(
				"name"=>$imgName,
				"link"=>$fileName
			);
		}

		//project array
		$projectDir[] = array(
			"category"=>$category,
			"date"=>$date,
			"status"=>$status,
			"name"=>cleanName($name),
			"url"=>"project/".$name."",
			"mainImg"=>"projects/".$name."/main.png",
			"summary"=>$summary,
			"description"=>$description,
			"screenshots"=>$screenshots,
			"link"=>$link,
		);
}



$GLOBALS['projects'] = $projectDir;

require_once("model/class.route.php");
$route = new Route();
//$u = $_REQUEST['uri'];
//$GLOBALS['active'] = $u;


require_once("appRoute.php");
?>
