<?php
require ("../conn.php");


$query = mysqli_query($conn, "SELECT * FROM upload_prescription");
$data = array();
$qry_array = array();
$i = 0;
$total = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query)) {
    $data['doctor_name'] = $row['doctor_name'];
  $data['visiting_date'] = $row['visiting_date'];
  $data['place'] = $row['place'];
  $data['purpose_of_visit'] = $row['purpose_of_visit'];
  $data['upload_prescription'] = $row['upload_prescription'];
  
  $qry_array[$i] = $data;
  $i++;
}

if($query){
//   $response['success'] = 'true';
//   $response['message'] = 'Data Loaded Successfully';
//   $response['total'] = $total;
  $response['upload_prescription'] = $qry_array;
}else{
  $response['success'] = 'false';
  $response['message'] = 'Data Loading Failed';
}

echo json_encode($response);
?>