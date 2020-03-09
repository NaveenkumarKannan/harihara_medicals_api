<?php
	include('connection.php');
    $id=$_GET['id'];
    
    /*$sql = "SELECT * from products where";
    $result =  $conn ->query($sql);
     if( $result->num_rows > 0 ){
        while ($row = $result ->fetch_assoc()) {*/



            $conn = mysqli_connect("localhost","root","","harihara_medicals");
	$query=mysqli_query($conn,"select * from `products` where productid='$id'");
	$row=mysqli_fetch_array();
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
	<!--	<label>Firstname:</label><input type="text" value="<?php// echo $row['firstname']; ?>" name="firstname">
		<label>Lastname:</label><input type="text" value="<?php// echo $row['lastname']; ?>" name="lastname">-->

<table border="0">
            <tr> 
                <td>Product Name</td>
                <td><input type="text" name="pname" value="<?php //echo $pname;?>"></td>
            </tr>
            <tr> 
                <td>Company</td>
                <td><input type="text" name="company" value="<?php //echo $company;?>"></td>
            </tr>
            <tr> 
                <td>Category</td>
                <td><input type="text" name="category" value="<?php //echo $category;?>"></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input type="text" name="price" value="<?php// echo $price;?>"></td>
            </tr>
            <tr> 
                <td>Dosage</td>
                <td><input type="text" name="dosage" value="<?php// echo $dosage;?>"></td>
            </tr>
            <tr> 
                <td>Prescription Required</td>
                <td><input type="text" name="prescrib" value="<?php// echo $prescrib;?>"></td>
            </tr>
            <tr> 
                <td>SKU</td>
                <td><input type="text" name="SKU" value="<?php// echo $SKU;?>"></td>
            </tr>
            <tr> 
                <td>Expiry Date</td>
                <td><input type="text" name="expirydate" value="<?php //echo $expirydate;?>"></td>
            </tr>
            <tr> 
                <td>Stock</td>
                <td><input type="text" name="stock" value="<?php// echo $stock;?>"></td>
            </tr>
           <tr>
                <td><input type="hidden" name="id" value=<?//php echo $_GET['id'];?>></td>
                <td><input type="submit" name="submit"></td>
            </tr>
          <!--  <input type="submit" name="submit">-->
            </table>

		<a href="product table.php">Back</a>
	</form>
</body>
</html>