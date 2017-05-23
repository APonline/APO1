<?php
ob_start();
session_start();

//set timezone
//date_default_timezone_set('Europe/London');
date_default_timezone_set('UTC');

//database credentials
define('DBHOST','208.97.173.114');
define('DBUSER','apanemia');
define('DBPASS','milkmilk1');
define('DBNAME','aponline');

//application address
define('DIR','http://andrewphillips.online/');
define('SITEEMAIL','noreply@andrewphillips.online');

try {
	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('CLASSES/user.php');
include('CLASSES/phpmailer/mail.php');
$user = new User($db);
?>
