<?php
// Connection to database
  $connection=mysqli_connect("208.97.173.114","apanemia","milkmilk1","dronewolfpack");
// Check connection
  if (mysqli_connect_errno())
    {
    echo 'NOT_OK';
    //echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }  
  
$item = $_GET["go"];


 mysqli_query($connection,"UPDATE dronewolf_hits SET counter = (counter + 1) WHERE item='" . $item . "'");
      
      
//echo $_GET["go"];
$targetUrl = "";

$arrUrl = array();


$arrUrl["Facebook"] = "https://www.facebook.com/dronewolfpack";
$arrUrl["Twitter"] = "https://twitter.com/dronewolfpack";
$arrUrl["Instagram"] = "https://instagram.com/dronewolfpack/";

$arrUrl["itunes"] = "https://itunes.apple.com/album/id1139364566?ls=1&app=itunes";
$arrUrl["google"] = "https://play.google.com/store/music/album/Drone_Wolf_Drone_Wolf?id=Bia2v2eccqemg7b5uf3alv4ftuu";
$arrUrl["spotify"] = "https://play.spotify.com/album/4y0gPXpxxiBRaebKiyh3tF";
$arrUrl["Shop"] = "http://dronewolf.bigcartel.com/";


$targetUrl = $arrUrl[$_GET["go"]];


 mysqli_close($connection);
//echo $targetUrl;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php if ($targetUrl != "") { ?>
		<meta http-equiv="REFRESH" content="0;url=<?php echo $targetUrl; ?>" />
		<?php } ?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
</html>