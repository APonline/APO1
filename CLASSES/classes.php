<?php
$db = $_SERVER['DOCUMENT_ROOT'] .'/ADMIN/DB/db.php';

require_once($db);

/** User **/
class userMF {
	/*admin array*/
	public $user = array(
			'info' => '',
			'sites' => ''
			);
		
	/*front end object*/	
	public $userSite = array(
			'MF' => '',
			'user' => '',
			'site' => array(
				'info' => '',
				'nav' => '',
				'pages' => ''
				)
			);
	
	
	/*** MF data ***/
		/* Gets the user member info */
		public function MFdata()
		{	
			$queryInfo = "SELECT * FROM MF_data";
			$resultInfo = mysql_query($queryInfo) or die(mysql_error());
		
			while($row=mysql_fetch_array($resultInfo))
			{
				$MF = $row['common_version'];
			}
		
			//return data
			return $MF;
		}
	/*** MF data ***/
	
	
	/*** Creates the user & site(s) ***/
		/* Creates the user */
		public function createUser()
		{
			$user['info'] = $this->userdata();
			$userid = $user['info']['memberID'];
			$user['sites'] = $this->usersites($userid);
		
			return $user;		
		}
		
		/* Creates the user live site */
		public function createUserSite($v,$access)
		{			
			$userSite['MF'] = $this->MFdata();
			$userSite['user'] = $this->userdata();
			$userid = $userSite['user']['memberID'];
			
			/*gets single site object*/
			if($v==''||empty($v)){
				$querySite = "SELECT live_site FROM MF_user_dashboard WHERE user_id = '".$userid."' && active = 1";
			}else{
				$querySite = "SELECT live_site FROM MF_user_dashboard WHERE user_id = '".$userid."' && live_site = '".$v."'";
			}
			$resultSite = mysql_query($querySite) or die(mysql_error());
		
			while($row = mysql_fetch_array($resultSite))
			{
				$siteid = $row['live_site'];
			}
			
			$userSite['site'] = $this->usersite($userid, $siteid, $access);
		
			return $userSite;		
		}
	
		/* Gets the user member info */
		public function userdata()
		{	
			$queryInfo = "SELECT * FROM MF_admin_members WHERE memberID = 1";
			$resultInfo = mysql_query($queryInfo) or die(mysql_error());
		
			while($row=mysql_fetch_array($resultInfo))
			{
				$memberID = $row['memberID'];
				$username = $row['username'];
				$email = $row['email'];
		
				$userItem = array(
					'memberID' => $memberID,
					'username' => $username,
					'email' => $email

				);
				$user['info'] = $userItem;
			}
		
			//return data
			return $user['info'];
		}
		
		/* Gets the users sites info */
		public function usersites($userid)
		{	
			$querySites = "SELECT * FROM MF_user_dashboard WHERE user_id = '".$userid."'";
			$resultSites = mysql_query($querySites) or die(mysql_error());
		
			while($row = mysql_fetch_array($resultSites))
			{
				$live_site = $row['live_site'];
				$site_name = $row['site_name'];
				$url = $row['url'];
				$timezone = $row['timezone'];
				$active = $row['active'];


				$userItem = array(
					'live_site' => $live_site,
					'site_name' => $site_name,
					'url' => $url,
					'timezone' => $timezone,
					'active' => $active
				);
	
				$user['sites'][] = $userItem;
			}
		
			//return data
			return $user['sites'];
		}
		
		/* Gets the users sites info */
		public function usersite($userid, $siteid, $access)
		{	
			$userSiteInfo = array(
				'info' => '',
				'nav' => '',
				'pages' => ''
			);
		
			/*site dashboard info*/
			$querySites = "SELECT * FROM MF_user_dashboard WHERE user_id = '".$userid."' && live_site = '".$siteid."'";
			$resultSites = mysql_query($querySites) or die(mysql_error());
		
			while($row = mysql_fetch_array($resultSites))
			{
				$live_site = $row['live_site'];
				$site_name = $row['site_name'];
				$url = $row['url'];
				$urlimg = $row['urlImg'];
				$description = $row['description'];
				$keywords = $row['keywords'];
				$css = $row['css'];
				$images = $row['images'];
				$js = $row['js'];
				$timezone = $row['timezone'];
				$GA_tracking = $row['GA_tracking'];


				$Item = array(
					'live_site' => $live_site,
					'site_name' => $site_name,
					'url' => $url,
					'urlImg' => $urlimg,
					'description' => $description,
					'keywords' => $keywords,
					'css' => $css,
					'images' => $images,
					'js' => $js,
					'timezone' => $timezone,
					'GA_tracking' => $GA_tracking
				);
	
				$userSiteInfo['info'] = $Item;
			}
			/*site dashboard info*/
			
			//admin or site active status
			if($access=='admin'){
				$active = 'active = 1 || active = 0';
			}else{
				$active = 'active = 1';
			}
			
			/*site nav*/
			$querySitesNav = "SELECT * FROM MF_user_nav WHERE user_id = '".$userid."' && live_site = '".$siteid."' && ".$active."";
			$resultSitesNav = mysql_query($querySitesNav) or die(mysql_error());
		
			$nav = array();
			while($row = mysql_fetch_array($resultSitesNav))
			{
				$parent_order = $row['parent_order'];
				$name = $row['name'];
				$level = $row['level'];
				$order = $row['order'];
				$id = $row['id'];
				$active = $row['active'];

				$navItem = array(
					'db_id' => $id,
					'parent_order' => $parent_order,
					'name' => $name,
					'level' => $level,
					'order' => $order,
					'active' => $active
				);
	
				$nav[] = $navItem;
			}

			$userSiteInfo['nav'] = $nav;
			/*site nav*/
			
			/*site pages*/
			$querySitesPages = "SELECT * FROM MF_user_nav WHERE user_id = '".$userid."' && live_site = '".$siteid."' && parent_order = '0' && level = '0' && ".$active."";
			$resultSitesPages = mysql_query($querySitesPages) or die(mysql_error());
			
			$page = array();
			while($row = mysql_fetch_array($resultSitesPages))
			{
				$name = $row['name'];
				$order = $row['order'];

				$pageItem = array(
					'id' => intval($order) + 1,
					'name' => $name
				);
	
				$page[] = $pageItem;
			}
			
			$userSiteInfo['pages'] = $page;
			/*site pages*/
		
			//return data
			return $userSiteInfo;
		}	
	/*** Creates the user & site(s) ***/
	
	
	/*** Update user ***/
		/* Updates the user live site */
		public function updateLiveSite($args)
		{
			$session_data = array();
			
			//parse data
			parse_str($args, $session_data);
			
			//set count
			$count = 0;
			foreach($session_data['url'] as $url){
				$count++;
			}
						
			//update loop
			for($i=0;$i<$count;$i++) {
				//set active
				if($session_data['live_site'][$i]==$session_data['active']){
					$active = 1;
				}else{
					$active = 0; 
				}
				echo $active . "<br />";
				mysql_query(
				"UPDATE MF_user_dashboard set 
					active='" . $active . "' 
				WHERE user_id='" . $session_data['userId'] . "' && live_site='" . $session_data['live_site'][$i] . "'");
			}
			
			return "Success";
		}
		
	/*** Delete user ***/
		/* Updates the user live site  */
		public function deleteUser()
		{
		
		}
}


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