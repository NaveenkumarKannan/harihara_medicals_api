 <?php
$servername = "localhost";
$username = "u401320649_root";
$password = "harihara_medicals";
$dbname = "u401320649_social_grub";
$conn = mysqli_connect("localhost","u401320649_root","harihara_medicals","u401320649_social_grub");

//if(isset($_POST['submit'])){
    $dname =$_POST['dname'];
    $spcl =  $_POST['spcl'];
	$experience = $_POST['experience'];
	$date = $_POST['date'];
	$fee = $_POST['fee'];
	$time = $_POST['time'];

	
$sql="INSERT INTO `appointment`(`id`, `doctor_name`, `specialist`, `experience`, `date`, `fees`, `time`)  VALUES ('','$dname','$spcl','$experience','$date','$fee','$time')";
// //$sql = "INSERT INTO admin (Username, Email_id, Password)VALUES ( 'Doe', 'john@example.com','7y7y7y')";
// $sql="INSERT into products(productname,company,category,price,dosage,prescriptionrequired,SKU,expirydate,stock) VALUES ('pname','$dbname','ss',100,20,90,9,11/11/2020,1)";
if (mysqli_query($conn, $sql)) {
    echo "
    <script>
      alert('New record Inserted successfully');
      window.location.href='appointment.php?success';

                   </script>";
      
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
//}
?>

