 <?php
$servername = "localhost";
$username = "u401320649_root";
$password = "harihara_medicals";
$dbname = "u401320649_social_grub";
$conn = mysqli_connect("localhost","u401320649_root","harihara_medicals","u401320649_social_grub");

if(isset($_POST['submit'])){
    $pname =$_POST['pname'];
    $tablet1 =  $_POST['tablet1'];
	$dosage1 = $_POST['dosage1'];
	$bm1 = $_POST['bm1'];
	$am1 = $_POST['am1'];
	$m1 = $_POST['m1'];
	$a1 = $_POST['a1'];
	$n1 = $_POST['n1'];
	$tablet2 =  $_POST['tablet2'];
	$dosage2 = $_POST['dosage2'];
	$bm2 = $_POST['bm2'];
	$am = $_POST['am2'];
	$m2 = $_POST['m2'];
	$a2 = $_POST['a2'];
	$n2 = $_POST['n2'];
	$tablet3 =  $_POST['tablet3'];
	$dosage3 = $_POST['dosage3'];
	$bm3 = $_POST['bm3'];
	$am3 = $_POST['am3'];
	$m3 = $_POST['m3'];
	$a3 = $_POST['a3'];
	$n3 = $_POST['n3'];
	$tablet4 =  $_POST['tablet4'];
	$dosage4 = $_POST['dosage4'];
	$bm4 = $_POST['bm4'];
	$am4 = $_POST['am4'];
	$m4 = $_POST['m4'];
	$a4 = $_POST['a4'];
	$n4 = $_POST['n4'];
	$tablet5 =  $_POST['tablet5'];
	$dosage5 = $_POST['dosage5'];
	$bm5 = $_POST['bm5'];
	$am5 = $_POST['am5'];
	$m5 = $_POST['m5'];
	$a5 = $_POST['a5'];
	$n5 = $_POST['n5'];
	
$sql="INSERT INTO `prescription` (`patient_name`, `tablet_name1`, `dosage1`, `before_meals1`, `after_meals1`, `morning1`, `afternoon1`, `night1`, `tablet_name2`, `dosage2`, `before_meals2`, `after_meals2`, `morning2`, `afternoon2`, `night2`, `tablet_name3`, `dosage3`, `before_meals3`, `after_meals3`, `morning3`, `afternoon3`, `night3`, `tablet_name4`, `dosage4`, `before_meals4`, `after_meals4`, `morning4`, `afternoon4`, `night4`, `tablet_name5`, `dosage5`, `before_meals5`, `after_meals5`, `morning5`, `afternoon5`, `night5`) VALUES ('$pname','$tablet1','$dosage1','$bm1','$am1','$m1','$a1','$n1','$tablet2','$dosage2','$bm2','$am2','$m2','$a2','$n2','$tablet3','$dosage3','$bm3','$am3','$m3','$a3','$n3','$tablet4','$dosage4','$bm4','$am4','$m4','$a4','$n4','$tablet5','$dosage5','$bm5','$am5','$m5','$a5','$n5')";
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