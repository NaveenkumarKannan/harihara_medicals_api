 <?php
require ("conn.php");

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
            "UPDATE `user_register` SET `user_id`=[$user_id],`firstname`=['$fname'],`lastname`=['$lname'],`dob`=['$dob'],`email`=['$email'],`address`=['$address'],`gender`=['$gender'],`weight`=['$gender'],`height`=['$height'],`bmi`=['$bmi'],`bp_level`=['$bp'],`sugar_level`=['$sugar'],`preferred_doctor_name`=['$dname'],`image`=[$image] WHERE 1";

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
    echo "
    <script>
      alert('New record Inserted successfully');
      window.location.href='cart.php?success';

                   </script>";
      
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
//}
?>
