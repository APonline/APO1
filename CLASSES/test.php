<?php


//require_once('class.database.php');

class storeDetails
{
	// Declaring three private varaibles
	//public $conn;

	public function __construct(){

		//$db = new DatabaseConnection;
		//$this->conn = $db->connectDB();

	}

	public function getStoreDetail($keyword, $radius, $key, $location, $venueId, $facilityId)
  {

    //GP places API
    $gp = file_get_contents("https://maps.googleapis.com/maps/api/place/nearbysearch/json?key=".$key."&location=".$location."&keyword=".$keyword."&radius=".$radius."");

		echo $keyword ." - ". $radius ." - ". $key ." - ". $location ." - ". $venueId ." - ". $facilityId;
		echo "<br /><br />";

    //handle fetch
    if(!empty($gp)){
      echo $gp;
      exit;
    }else{
      echo "no";
			exit;
    }
  }

}




/*POSTING ACTION*/
if(isset($_GET['latitude']) && isset($_GET['longitude'])){
	//GooglePlaces Api Key
	$key = "AIzaSyDIzP6lts91F_1atFp9Kq0ygMDiGE8cI38";

  $keyword = "Oshawa";
  $radius = "10"; //meters

  //$latitude = '43.8917815';
  //$longitude = '-78.8802734';

	$latitude = $_GET['latitude'];
	$longitude = $_GET['longitude'];

  $location = "". $latitude .",". $longitude ."";

	//gidme data vars
	$venueId = $_GET['venueId'];
	$facilityId = $_GET['facilityId'];

  //New store details
  $newStore = new storeDetails;
  $newStore = $newStore->getStoreDetail($keyword, $radius, $key, $location, $venueId, $facilityId);
}

?>
