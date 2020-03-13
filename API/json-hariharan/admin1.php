<?php
require ("../conn.php");


$query = mysqli_query($conn, "SELECT * FROM admin");
$data = array();
$qry_array = array();
$i = 0;
$total = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query)) {
  $data['username'] = $row['username'];
  $data['admin_id'] = $row['admin_id'];
  $data['email_id'] = $row['email_id'];
   $qry_array[$i] = $data;
  $i++;
}

if($query){
//   $response['success'] = 'true';
//   $response['message'] = 'Data Loaded Successfully';
//   $response['total'] = $total;
  $response['admin'] = $qry_array;
}else{
  $response['success'] = 'false';
  $response['message'] = 'Data Loading Failed';
}

echo json_encode($response);
?>