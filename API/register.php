 <?php
require ("conn.php");

//if(isset($_POST['submit'])){
    $user_id=$_POST['user_id'];
    $fname =$_POST['fname'];
    $lname =  $_POST['lname'];
    $dob = $_POST['dob'];
	$mail = $_POST['mail'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$current_weight = $_POST['current_weight'];
  $current_height = $_POST['current_height'];
  $heightInMs = $current_height/100;
  $bmi = $current_weight/($heightInMs*$heightInMs);
  //$bmi = number_format((float)$bmi, 1, '.', '');  //It is also correct
  $bmi = round($bmi, 1);  //It is also correct
	$bp = $_POST['bp'];
	$sugar = $_POST['sugar'];
	$dname = $_POST['dname'];
	
	 $image = $_FILES['image']['name'];
            $target = "register/" . basename($image);

            $sql = 
            "INSERT INTO `user_register`(`user_id`, `firstname`, `lastname`, `dob`, `email`, `address`, `phone`, `gender`, `weight`, `height`, `bmi`, `bp_level`, `sugar_level`, `preferred_doctor_name`, `image`)  
            VALUES ('$user_id','$fname','$lname','$dob','$mail','$address','$phone','$gender','$current_weight','$current_height','$bmi','$bp','$sugar','$dname','$image')";

            $ok = 1;

            $imageFileType = $_FILES['image']['type'];

            if ($imageFileType = "jpg" or $imageFileType = "png" or $imageFileType = "jpeg") {

              if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                //echo "The file " . basename($_FILES['image']['name']) . " is uploaded";
              }
            }

	

// //$sql = "INSERT INTO admin (Username, Email_id, Password)VALUES ( 'Doe', 'john@example.com','7y7y7y')";
// $sql="INSERT into products(productname,company,category,price,dosage,prescriptionrequired,SKU,expirydate,stock) VALUES ('pname','$dbname','ss',100,20,90,9,11/11/2020,1)";
$result = mysqli_query($conn, $sql);
if ($result) {
//if (mysqli_query($conn, $sql)) {
  $mysql_qry = "select * from user_register where user_id = '$user_id';";
  $result = mysqli_query($conn,$mysql_qry);
  if($result->num_rows == 0) {
      // row not found, do stuff...
      $result_array["success"]=false;
      $result_array["message"]="You're already registered, Kindly login.";
  }else {
      // do other stuff...
      //$response = array();

      while($row = mysqli_fetch_array($result)) 
      {
        $user_id= $row['user_id'];
        $name= $row['firstname']." ".$row['lastname'];
          
          $result_array["success"]=true;
        //array_push($response,array("user_id"=>$user_id,"name"=>$name));
          $result_array["message"]="You have registered sucessfully.";
          $result_array["data"]=$row;
          //$result_array["data"]=array("user_id"=>$user_id,"name"=>$name);
      }
      //echo json_encode(array("login_result"=>"success","data"=>$response));
  }
} else {
  $result_array["success"]=false;
  $result_array["message"]="Error.";
}
echo json_encode($result_array);
mysqli_close($conn);
//}
?>

