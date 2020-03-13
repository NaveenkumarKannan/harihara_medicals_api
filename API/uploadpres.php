 <?php
require ("conn.php");

//if(isset($_POST['submit'])){
    
    $dname =$_POST['dname'];
    $vdate =  $_POST['vdate'];
    $place = $_POST['place'];
	$pvisit = $_POST['pvisit'];
	
	
	 $image = $_FILES['image']['name'];
            $target = "prescription/" . basename($image);

            $sql = 
            "INSERT INTO `upload_prescription`(`doctor_name`, `visiting_date`, `place`, `purpose_of_visit`, `upload_prescription`) VALUES ('$dname','$vdate','$place','$pvisit','$image')";

            $ok = 1;

            $imageFileType = $_FILES['image']['type'];

            if ($imageFileType = "jpg" or $imageFileType = "png" or $imageFileType = "jpeg") {

              if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                //echo "The file " . basename($_FILES['image']['name']) . " is uploaded";
              }
            }

	

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

