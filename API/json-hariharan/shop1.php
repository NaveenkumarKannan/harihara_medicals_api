<?php
require ("..\conn.php");


$query = mysqli_query($conn, "SELECT * FROM shopping");
$data = array();
$qry_array = array();
$i = 0;
$total = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query)) {
  $data['Order_id'] = $row['Order_id'];
  $data['Customer_id'] = $row['Customer_id'];
  $data['Amount'] = $row['Amount'];
  $data['Payment'] = $row['Payment'];
 
  $qry_array[$i] = $data;
  $i++;
}

if($query){
//   $response['success'] = 'true';
//   $response['message'] = 'Data Loaded Successfully';
//   $response['total'] = $total;
  $response['order'] = $qry_array;
}else{
  $response['success'] = 'false';
  $response['message'] = 'Data Loading Failed';
}

echo json_encode($response);
?>