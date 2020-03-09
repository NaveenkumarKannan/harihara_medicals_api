<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
//$con = mysqli_connect("localhost","root","","harihara_medicals");
// Check connection
$conn = mysqli_connect("localhost","id12184471_hariharan","hariharan","id12184471_hariharan_medicals");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>