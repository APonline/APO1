<?php
$nav = array();
	//site nav
	$navSite = array();
	$navSite[] = array("name"=>"Home","url"=>"");
	$navSite[] = array("name"=>"portfolio","url"=>"portfolio");
	$navSite[] = array("name"=>"resume","url"=>"resume");
	$navSite[] = array("name"=>"contact","url"=>"contact");

$GLOBALS['nav'] = $navSite;

/*$sort = array();
	//site nav
	$sortSite = array();
	$sortSite[] = array("name"=>"Featured","url"=>"featured");
	$sortSite[] = array("name"=>"No.","url"=>"number");
	$sortSite[] = array("name"=>"Discovered","url"=>"discovered");
	$sortSite[] = array("name"=>"Rating","url"=>"rating");
	$sortSite[] = array("name"=>"Vegetarian","url"=>"vegetarian");
	$sortSite[] = array("name"=>"Spicy","url"=>"spicy");
	$sortSite[] = array("name"=>"Seasonal","url"=>"seasonal");
	$sortSite[] = array("name"=>"Extinct","url"=>"extinct");
	$sortSite[] = array("name"=>"Challenge","url"=>"challenge");
	$sortSite[] = array("name"=>"Price Hi","url"=>"price-hi");
	$sortSite[] = array("name"=>"Price LO","url"=>"price-lo");
	$sortSite[] = array("name"=>"Fusion","url"=>"fusion");
	$sortSite[] = array("name"=>"Modded","url"=>"modded");
	$sortSite[] = array("name"=>"Location","url"=>"location");
	$sortSite[] = array("name"=>"Kitchen","url"=>"kitchen");
	
$GLOBALS['sort'] = $sortSite;*/


require_once("model/class.route.php");
$route = new Route();
$u = $_REQUEST['uri'];
$GLOBALS['active'] = $u;


$sitePath = 'https://' . $_SERVER['HTTP_HOST'] . "";

define("SITEPATH", $sitePath);
require_once("appRoute.php");
?>

