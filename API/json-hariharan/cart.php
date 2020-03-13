<?php
require ("..\conn.php");

$query = mysqli_query($conn, "SELECT * FROM cart");
$data = array();
$qry_array = array();
$i = 0;
$total = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query)) {
    $data['user_id'] = $row['user_id'];
    $data['cart_id'] = $row['cart_id'];
  $data['product_image'] = $row['product_image'];
  $data['product_name'] = $row['product_name'];
  $data['product_count'] = $row['product_count'];
  $data['price'] = $row['price'];
  
  $qry_array[$i] = $data;
  $i++;
}

if($query){
//   $response['success'] = 'true';
//   $response['message'] = 'Data Loaded Successfully';
//   $response['total'] = $total;
  $response['cart'] = $qry_array;
}else{
  $response['success'] = 'false';
  $response['message'] = 'Data Loading Failed';
}

echo json_encode($response);
?>