 <?php
$servername = "localhost";
$username = "u401320649_root";
$password = "harihara_medicals";
$dbname = "u401320649_social_grub";
$conn = mysqli_connect("localhost","u401320649_root","harihara_medicals","u401320649_social_grub");

//if(isset($_POST['submit'])){
    $user_id=$_POST['user_id'];
    $fname =$_POST['fname'];
    $lname =  $_POST['lname'];
    $dob = $_POST['dob'];
	$mail = $_POST['mail'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	
	$current_weight = $_POST['current_weight'];
	$current_height = $_POST['current_height'];
	$bmi = $_POST['bmi'];
	$bp = $_POST['bp'];
	$sugar = $_POST['sugar'];
	$dname = $_POST['dname'];
	
	 $image = $_FILES['image']['name'];
            $target = "register/" . basename($image);

            $sql = 
            "INSERT INTO `user_register`(`user_id`, `firstname`, `lastname`, `dob`, `email`, `address`, `gender`, `weight`, `height`, `bmi`, `bp_level`, `sugar_level`, `preferred_doctor_name`, `image`)  VALUES ('','$fname','$lname','$dob','$mail','$address','$gender','$current_weight','$current_height','$bmi','$bp','$sugar','$dname','$image')";

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

