<!DOCTYPE html>
<html>
<head>
	<title>  </title>
</head>
<body>
<table>
	<tr>
		<th>Admin_id</th>
		<th>Username</th>
		<th>Email_id</th>
		<th>Password</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost","root","","harihara_medicals");
	if($conn-> connect_error) {
		die("connection failed:" .$conn-> connect_error);
	}
	$sql = "SELECT Admin_id , Username , Email_id , Password from admin";
	$result =  $conn ->query($sql);
	 if( $result->num_rows > 0 ){
	 	while ($row = $result ->fetch_assoc()) {
	 		echo "<tr><td>".$row["Admin_id"]."</td></tr>"."<tr><td>".$row["Username"]."</td></tr>"."<tr><td>".$row["Email_id"]."</td></tr>"."<tr><td>".$row["Password"]."</td></tr>";
	 		
	 	}
	 	 echo "</table>";
	 }
	 else{
	 	echo "0 result";

	 }
	 $conn ->close();
	?>

</table>
</body>
</html>