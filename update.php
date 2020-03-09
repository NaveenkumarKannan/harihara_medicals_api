<?php
	include('connection.php');
	$id=$_GET['id'];
	//$firstname=$_POST['productname'];
    //$lastname=$_POST['company'];
   // $conn = mysqli_connect("localhost","root","","harihara_medicals");
   $conn = mysqli_connect("localhost","id12184471_hariharan","hariharan","id12184471_hariharan_medicals");
    //$roomid = $_POST['roomid'];
    $pname = $_POST['pname'];
    $company = $_POST['company'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $dosage = $_POST['dosage'];
    $prescrib = $_POST['prescrib'];
    $SKU = $_POST['SKU'];
    $expirydate = $_POST['expirydate'];
    $Stock = $_POST['stock'];

    $query= "UPDATE products SET productname='$pname', company='$company', category='$category', price='$price', dosage='$dosage', prescriptionrequired='$prescrib',SKU='$SKU',expirydate='$expirydate', stock='$Stock' where productid='$id'";
	//header('location:product table.php');

    //$query = "INSERT into products VALUES ('','$pname','$company','$category','$Price','$Dosage','$prescrib','$SKU','$Expiry_date','$Stock')";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        ?>
      <script>
      alert('Registered successfully');
      window.location.href='product table.php?success';

                   </script>
        <?php
    
    }
     else{
         ?>
        <script>
        alert('SORRYY !!!! Registered Unsuccessfull');
                       </script>
      
    <?php
        }
    
    ?>

	