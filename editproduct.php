<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
	include('connect.php');
	$id=$_GET['productid'];
	$result = mysql_query("SELECT * FROM products where productid='$id'");
		while($row = mysql_fetch_array($result))
			{
                echo "<tr><td>".$row["productid"]."</td>"."<td>".$row["productname"]."</td>"."<td>".$row["category"]."</td>"."<td>".$row["company"]."</td>"."<td>".$row["price"]."</td>"."<td>".$row["dosage"]."</td>"."<td>".$row["prescriptionrequired"]."</td>"."<td>".$row["SKU"]."</td>"."<td>".$row["expirydate"]."</td>"."<td>".$row["stock"]."</td>";
                                 
				}
?>
<form action="execeditproduct.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
	Name:<br><input type="text" name="type" value="<?php echo $type ?>" class="ed"><br>
	Rate:<br><input type="text" name="rate" value="<?php echo $rate ?>" class="ed"><br>
	Description:<br><textarea name="description" class="ed"><?php echo $description ?></textarea><br>
	<input type="submit" value="Edit" id="button1">
</form>