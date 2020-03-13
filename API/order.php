 <?php
require ("conn.php");

//if(isset($_POST['submit'])){
    $tname =$_POST['tname'];
    $tcount =  $_POST['tcount'];
	
$sql="INSERT INTO `order_details`(`tablet_name`, `tablet_count`)  VALUES ('$tname','$tcount')";

if (mysqli_query($conn, $sql)) {
    echo json_encode(array("response"=>"success"));
} else {
    echo json_encode(array("response"=>"error"));
}


mysqli_close($conn);
//}else
//{
//    echo"thappu da bhuvanesha";
//}
?>