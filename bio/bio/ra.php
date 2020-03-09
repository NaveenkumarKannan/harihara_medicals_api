<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
  <meta name="description" content="admin login ">
	<title>Radssoon : Admin Login</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<form action="adminlogin.php" method="post" class="login-form">
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input type="text" class="login-username" autofocus="true" name="adminUsername" required="true" placeholder="Username" />
  <input type="password" class="login-password" required="true" name="adminPassword" placeholder="Password" />
  <input type="submit" name="login" value="Login" class="login-submit" />
</form>
<!-- <a href="#" class="login-forgot-pass">forgot password?</a> -->
<div class="underlay-photo"></div>
<div class="underlay-black"></div> 
</body>
</html>