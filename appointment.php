 <?php
$servername = "localhost";
$username = "id12184471_hariharan";
$password = "hariharan";
$dbname = "id12184471_hariharan_medicals";
$conn = mysqli_connect("localhost","id12184471_hariharan","hariharan","id12184471_hariharan_medicals");

if(isset($_POST['submit'])){
    $dname =$_POST['dname'];
    $time =  $_POST['time'];
	$date = $_POST['date'];
	$experience = $_POST['experience'];
	$spcl = $_POST['spcl'];
	$fee = $_POST['fee'];
	
$sql="INSERT INTO `appointment`( `doctor_name`, `specialist`, `experience`, `date`, `fees`, `time`) VALUES ('$dname','$spcl','$experience','$date','$fee','$time')";
// //$sql = "INSERT INTO admin (Username, Email_id, Password)VALUES ( 'Doe', 'john@example.com','7y7y7y')";
// $sql="INSERT into products(productname,company,category,price,dosage,prescriptionrequired,SKU,expirydate,stock) VALUES ('pname','$dbname','ss',100,20,90,9,11/11/2020,1)";
if (mysqli_query($conn, $sql)) {
    echo "
    <script>
      alert('New record Inserted successfully');
      window.location.href='prescription.php?success';

                   </script>";
      
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>