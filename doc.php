 <?php
$servername = "localhost";
$username = "u401320649_root";
$password = "harihara_medicals";
$dbname = "u401320649_social_grub";
$conn = mysqli_connect("localhost","u401320649_root","harihara_medicals","u401320649_social_grub");

if(isset($_POST['submit'])){
    $dname =$_POST['dname'];
    $spcl =  $_POST['spcl'];
	$address = $_POST['address'];
	$cname = $_POST['cname'];
	$qualification = $_POST['qualification'];
	$fee = $_POST['fee'];
	$experience = $_POST['experience'];
	$phone1 = $_POST['phone1'];
	$phone2 =  $_POST['phone2'];
	$lab =$_POST['lab'];


	
$sql="INSERT INTO `doctor`( `name`, `specialist`, `address`, `hospital_name`, `qualification`, `fees`, `experience`, `phone_number1`, `phone_number2`, `lab_facility`)VALUES ('$dname','$spcl','$address','$cname','$qualification','$fee','$experience','$phone1','$phone2','$lab')";
// //$sql = "INSERT INTO admin (Username, Email_id, Password)VALUES ( 'Doe', 'john@example.com','7y7y7y')";
// $sql="INSERT into products(productname,company,category,price,dosage,prescriptionrequired,SKU,expirydate,stock) VALUES ('pname','$dbname','ss',100,20,90,9,11/11/2020,1)";
if (mysqli_query($conn, $sql)) {
    echo "
    <script>
      alert('New record Inserted successfully');
      window.location.href='doctor.php?success';

                   </script>";
      
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>