<?php
require ("..\conn.php");

$query = mysqli_query($conn, "SELECT * FROM doctor");
$data = array();
$qry_array = array();
$i = 0;
$total = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query)) {
    $data['did'] = $row['did'];
  $data['name'] = $row['name'];
  $data['specialist'] = $row['specialist'];
  $data['address'] = $row['address'];
  $data['hospital_name'] = $row['hospital_name'];
  $data['qualification'] = $row['qualification'];
  $data['fees'] = $row['fees'];
  $data['experience'] = $row['experience'];
  $data['qualification'] = $row['qualification'];
  $data['phone_number1'] = $row['phone_number1'];
  $data['phone_number2'] = $row['phone_number2'];
  $data['lab_facility'] = $row['lab_facility'];
 
  $qry_array[$i] = $data;
  $i++;
}

if($query){
//   $response['success'] = 'true';
//   $response['message'] = 'Data Loaded Successfully';
//   $response['total'] = $total;
  $response['doctor'] = $qry_array;
}else{
  $response['success'] = 'false';
  $response['message'] = 'Data Loading Failed';
}

echo json_encode($response);
?>