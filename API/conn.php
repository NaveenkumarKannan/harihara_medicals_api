<?php 

if($_SERVER['HTTP_HOST']=="localhost" or $_SERVER['HTTP_HOST']=="192.168.43.228")
{	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "harihara_medicals";
	//local 
	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_PASSWORD', '');
	DEFINE ('DB_HOST', 'localhost'); //host name depends on server
	DEFINE ('DB_NAME', 'harihara_medicals');
}
else
{
	$servername = "localhost";
	$username = "u401320649_root";
	$password = "harihara_medicals";
	$dbname = "u401320649_social_grub";
	//$conn = mysqli_connect("localhost","u401320649_root","harihara_medicals","u401320649_social_grub");
	
	//local live 
	DEFINE ('DB_USER', 'u401320649_root');
	DEFINE ('DB_PASSWORD', 'harihara_medicals');
	DEFINE ('DB_HOST', 'localhost'); //host name depends on server
	DEFINE ('DB_NAME', 'u401320649_social_grub');
}
//$conn = mysqli_connect($servername, $username, $password,$dbname);
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$result_array = array();//"success"=>false,"message"=>"Not Connected. Database Connection Failure");
$result_array["success"]=false;
$result_array["message"]="Message";
if(!$conn){
	$result_array["success"]=false;
	$result_array["message"]="Not Connected. Database Connection Failure";
	echo json_encode($result_array);
}/*else{
	$result_array["success"]=true;
	$result_array["message"]="Connected to Database";
	echo json_encode($result_array);
	//echo json_encode(array("success"=>true,"message"=>"Connected to Database"));
}*/
?>