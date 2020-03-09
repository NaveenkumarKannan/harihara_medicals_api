<?php
$servername = "localhost";
$username = "u401320649_root";
$password = "harihara_medicals";
$dbname = "u401320649_social_grub";
$conn = mysqli_connect("localhost","u401320649_root","harihara_medicals","u401320649_social_grub");

if(isset($_POST['add'])){
	$pname =  $_POST['pname'];
	$company = $_POST['company'];
	$category = $_POST['category'];
   
    $Price = $_POST['Price'];
   
    
    $SKU = $_POST['SKU'];
    $Expiry_date = $_POST['expirydate'];
    $stock = $_POST['stock'];

$sql="INSERT INTO `products`(id, `productname`, `company`, `category`, `price`, `sku`, `expirydate`, `stock`, `image`) VALUES ('','$pname', '$company', ' $category','$Price', '$SKU','$Expiry_date',  '$stock','')";

// //$sql = "INSERT INTO admin (Username, Email_id, Password)VALUES ( 'Doe', 'john@example.com','7y7y7y')";
// $sql="INSERT into products(productname,company,category,price,dosage,prescriptionrequired,SKU,expirydate,stock) VALUES ('pname','$dbname','ss',100,20,90,9,11/11/2020,1)";
if (mysqli_query($conn, $sql)) {
    echo "
    <script>
      alert('New record Inserted successfully');
      window.location.href='product table.php?success';

                   </script>";
      
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>