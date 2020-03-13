<?php
require ("..\conn.php");


$query = mysqli_query($conn, "SELECT * FROM reminder");
$data = array();
$qry_array = array();
$i = 0;
$total = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query)) {
    $data['id'] = $row['id'];
  $data['description'] = $row['description'];
  $data['date'] = $row['date'];
  $data['title'] = $row['title'];
  $data['location'] = $row['location'];
  $data['time'] = $row['time'];
 
  $qry_array[$i] = $data;
  $i++;
}

if($query){
//   $response['success'] = 'true';
//   $response['message'] = 'Data Loaded Successfully';
//   $response['total'] = $total;
  $response['reminder'] = $qry_array;
}else{
  $response['success'] = 'false';
  $response['message'] = 'Data Loading Failed';
}

echo json_encode($response);
?>