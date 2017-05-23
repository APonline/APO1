<?php
$MF = $_SERVER['DOCUMENT_ROOT'] .'/ADMIN/DB/db.php';

require_once($MF);

/** User **/
class MF {
	// Declaring three private varaibles  
 	private $MFloggedIn;  
 	//private $font_color;  
 	//private $string_value;  
	//private $db;
	
	public function _contstants($args = array()){
		$this->MFloggedIn = array(
			'memberID'=> '',
			'username'=> '',
			'password'=> '',
			'email'=> ''
			);
	}
	
	public function loggedIn($args = array()){
		
		$username = $args['username'];
		$pass = $args['pass'];
		
		$MF = $this->MFloggedIn;
		
		$queryInfo = "SELECT * FROM MF_admin_members WHERE username=".$username." & password=".$pass."";
		$resultInfo = mysql_query($queryInfo) or die(mysql_error());
	
		while($row=mysql_fetch_array($resultInfo))
		{
			$MF['memberID'] = $row['memberID'];
			$MF['username'] = $row['username'];
			$MF['password'] = $row['password'];
			$MF['email'] = $row['email'];
		}
	
		return $MF;
	}
}
/** MF **/

/*post actions*/
if(isset( $_POST['action'] )) {
	
	if($_POST['action']=='update'){
	
		if($_POST['item']=='livesite'){
			$userInfo = new userMF();
			$result = $userInfo->updateLiveSite($_POST['data']);
	
			echo $result;
		}
	}
}


?>