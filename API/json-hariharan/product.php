<?php
require ("..\conn.php");

$query = mysqli_query($conn, "SELECT * FROM products");
$data = array();
$qry_array = array();
$i = 0;
$total = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query)) {
    $data['user_id'] = $row['user_id'];
  $data['id'] = $row['id'];
  $data['productname'] = $row['productname'];
  $data['company'] = $row['company'];
  $data['category'] = $row['category'];
  $data['price'] = $row['price'];
  $data['sku'] = $row['sku'];
  $data['expirydate'] = $row['expirydate'];
  $data['stock'] = $row['stock'];
  $data['image'] = $row['image'];
  $qry_array[$i] = $data;
  $i++;
}

if($query){
//   $response['success'] = 'true';
//   $response['message'] = 'Data Loaded Successfully';
//   $response['total'] = $total;
  $response['product'] = $qry_array;
}else{
  $response['success'] = 'false';
  $response['message'] = 'Data Loading Failed';
}

echo json_encode($response);
?>