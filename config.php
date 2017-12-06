<?php
$nav = array();
	//site nav
	$navSite = array();
	$navSite[] = array("name"=>"Home","url"=>"");
	$navSite[] = array("name"=>"Portfolio","url"=>"portfolio");
	$navSite[] = array("name"=>"Resume","url"=>"resume");
	$navSite[] = array("name"=>"Contact","url"=>"contact");

$GLOBALS['nav'] = $navSite;

$work = array();
	//site nav
	$workSite = array();
	$workSite[] = array("name"=>"Demo Reel","url"=>"work/demo-reel");
	$workSite[] = array("name"=>"Web","url"=>"work/web");
	$workSite[] = array("name"=>"Graphic","url"=>"work/graphic");
	$workSite[] = array("name"=>"Creative","url"=>"work/creative");

$GLOBALS['work'] = $workSite;


require_once("model/class.route.php");
$route = new Route();
//$u = $_REQUEST['uri'];
//$GLOBALS['active'] = $u;


$sitePath = 'http://' . $_SERVER['HTTP_HOST'] . "/APO/dev/web.APO";

define("SITEPATH", $sitePath);
require_once("appRoute.php");
?>
