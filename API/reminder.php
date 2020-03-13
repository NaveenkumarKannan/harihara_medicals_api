 <?php
require ("conn.php");

//if(isset($_POST['submit'])){
    $user_id=$POST['user_id'];
    $desc =$_POST['desc'];
    $title =  $_POST['title'];
	$date = $_POST['date'];
	$loc = $_POST['loc'];
	$time = $_POST['time'];

	
$sql="INSERT INTO `reminder`(`user_id`, `id`, `description`, `date`, `title`, `location`, `time`)  VALUES ('$user_id','$desc','$date','$title','$loc','$time')";
// //$sql = "INSERT INTO admin (Username, Email_id, Password)VALUES ( 'Doe', 'john@example.com','7y7y7y')";
// $sql="INSERT into products(productname,company,category,price,dosage,prescriptionrequired,SKU,expirydate,stock) VALUES ('pname','$dbname','ss',100,20,90,9,11/11/2020,1)";
if (mysqli_query($conn, $sql)) {
    echo json_encode(array("response"=>"success"));
} else {
    echo json_encode(array("response"=>"error"));
}


mysqli_close($conn);
//}
?>