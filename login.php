<?php
include("connection.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($conn,"select * from admin where email_id='$user_id' and password='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$user_id;
	}
}
if (isset($_SESSION["login"]))
{
header("Location: index.php");
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<div class="floating-box">

<form name="form1" method="post">


   <label for="uname">User Name</label>
   <input type="text" id="loginid2" name="user_id"><br><br>

   <label for="pwd">Password</label>
   <input type="password" id="pass2" name="pass"><br><br>
   <input name="submit" type="submit" id="submit" value="Login"><br>

<?php
		  if(isset($found))
		  {
		  	echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="login.php">Please try again</p>';
		  }
		  ?>
 </center>
</form>

</div>
<center>
</body>
</html>