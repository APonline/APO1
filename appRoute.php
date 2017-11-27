<?php

/*PAGE VIEWS*/
//Home
$route->add("", function() {
	$siteTitle = "Andrew Phillips Online";
	$siteDesc = "The Digital Portfolio of Designer/Developer Andrew Phillips. 
	With works ranging from E-commerce web apps, Professional sports marketing, 
	to unique independent projects, you are sure to find and endless passion
	for beautiful coding and creativity.";
	
	define("siteTitle", $siteTitle);
	define("siteDesc", $siteDesc);
	
	getClasses();
	
	$GLOBALS['active'] = "";
	
	getHead();
	include('view/home.php');
	getFoot();
});
//Portfolio
$route->add("/portfolio", function() {
	$siteTitle = "Andrew Phillips Online";
	$siteDesc = "The Digital Portfolio of Designer/Developer Andrew Phillips. 
	With works ranging from E-commerce web apps, Professional sports marketing, 
	to unique independent projects, you are sure to find and endless passion
	for beautiful coding and creativity.";
	
	define("siteTitle", $siteTitle);
	define("siteDesc", $siteDesc);
	
	getClasses();
	
	$GLOBALS['active'] = "portfolio";
	
	getHead();
	include('view/portfolio.php');
	getFoot();
});
//Resume
$route->add("/resume", function() {
	$siteTitle = "Andrew Phillips Online";
	$siteDesc = "The Digital Portfolio of Designer/Developer Andrew Phillips. 
	With works ranging from E-commerce web apps, Professional sports marketing, 
	to unique independent projects, you are sure to find and endless passion
	for beautiful coding and creativity.";
	
	define("siteTitle", $siteTitle);
	define("siteDesc", $siteDesc);
	
	getClasses();
	
	$GLOBALS['active'] = "resume";
	
	getHead();
	include('view/resume.php');
	getFoot();
});
//Contact
$route->add("/contact", function() {
	$siteTitle = "Andrew Phillips Online";
	$siteDesc = "The Digital Portfolio of Designer/Developer Andrew Phillips. 
	With works ranging from E-commerce web apps, Professional sports marketing, 
	to unique independent projects, you are sure to find and endless passion
	for beautiful coding and creativity.";
	
	define("siteTitle", $siteTitle);
	define("siteDesc", $siteDesc);
	
	getClasses();
	
	$GLOBALS['active'] = "contact";
	
	getHead();
	include('view/contact.php');
	getFoot();
});
/*PAGE VIEWS*/




$route->submit();

function getHead(){
	include("template/header.php");
	include('template/navigation.php');
	return;
}
function getClasses(){
	include('model/class.mrClean.php');
	//include('model/class.posts.php');
}
function getFoot(){
	include("template/footer.php");
	return;
}

function makeSEOURL($toURL){	
	//Lower case everything
	$toURL = strtolower($toURL);
	//Make alphanumeric (removes all other characters)
	$toURL = preg_replace("/[^a-z0-9_\s-]/", "", $toURL);
	//Clean up multiple dashes or whitespaces
	$toURL = preg_replace("/[\s-]+/", " ", $toURL);
	//Convert whitespaces and underscore to dash
	$toURL = preg_replace("/[\s_]/", "-", $toURL);
	return $toURL;
}

function undoSEOURL($toName){
	$toName = str_replace('-', ' ', $toName);
	$toName = preg_replace('/(?<!\s)-(?!\s)/', ' ', $toName); 
	$toName = ucwords($toName);
	return $toName;
}


?>
