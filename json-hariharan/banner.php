<?php
$servername = "localhost";
$username = "u401320649_root";
$password = "harihara_medicals";
$dbname = "u401320649_social_grub";
$conn = mysqli_connect("localhost","u401320649_root","harihara_medicals","u401320649_social_grub");

$query = mysqli_query($conn, "SELECT * FROM banner");
$data = array();
$qry_array = array();
$i = 0;
$total = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query)) {
  $data['banner_image'] = $row['banner_image'];
  
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