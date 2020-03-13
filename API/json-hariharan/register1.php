<?php
require ("../conn.php");


$query = mysqli_query($conn, "SELECT * FROM user_register");
$data = array();
$qry_array = array();
$i = 0;
$total = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query)) {
    $data['user_id'] = $row['user_id'];
    $data['firstname'] = $row['firstname'];
  $data['lastname'] = $row['lastname'];
  $data['dob'] = $row['dob'];
  $data['email'] = $row['email'];
  $data['address'] = $row['address'];
  $data['gender'] = $row['gender'];
  $data['weight'] = $row['weight'];
  $data['height'] = $row['height'];
  $data['bmi'] = $row['bmi'];
  $data['bp_level'] = $row['bp_level'];
  $data['sugar_level'] = $row['sugar_level'];
  $data['preferred_doctor_name'] = $row['preferred_doctor_name'];
  $data['image'] = $row['image'];
  
  $qry_array[$i] = $data;
  $i++;
}

if($query){
//   $response['success'] = 'true';
//   $response['message'] = 'Data Loaded Successfully';
//   $response['total'] = $total;
  $response['special_request'] = $qry_array;
}else{
  $response['success'] = 'false';
  $response['message'] = 'Data Loading Failed';
}

echo json_encode($response);
?>