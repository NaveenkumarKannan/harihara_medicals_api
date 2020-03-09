<?php
$servername = "localhost";
$username = "u401320649_root";
$password = "harihara_medicals";
$dbname = "u401320649_social_grub";
$conn = mysqli_connect("localhost","u401320649_root","harihara_medicals","u401320649_social_grub");


$query = mysqli_query($conn, "SELECT * FROM appointment");
$data = array();
$qry_array = array();
$i = 0;
$total = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query)) {
    $data['user_id'] = $row['user_id'];
    $data['doctor_id'] = $row['doctor_id'];
  $data['doctor_name'] = $row['doctor_name'];
  $data['specialist'] = $row['specialist'];
  $data['experience'] = $row['experience'];
  $data['date'] = $row['date'];
  $data['fees'] = $row['fees'];
  $data['time'] = $row['time'];
  
 
  $qry_array[$i] = $data;
  $i++;
}

if($query){
//   $response['success'] = 'true';
//   $response['message'] = 'Data Loaded Successfully';
//   $response['total'] = $total;
  $response['appointment'] = $qry_array;
}else{
  $response['success'] = 'false';
  $response['message'] = 'Data Loading Failed';
}

echo json_encode($response);
?>