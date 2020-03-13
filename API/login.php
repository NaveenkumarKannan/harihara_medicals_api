<?php
require ("conn.php");

$user_id= $_POST["user_id"];
//$user_id = "";
$mysql_qry = "select * from user_register where user_id = '$user_id';";


$result = mysqli_query($conn,$mysql_qry);
if($result->num_rows == 0){
     // row not found, do stuff...
     $result_array["success"]=false;
     $result_array["message"]="You're not registered, Kindly register as a new user.";
}else {
    // do other stuff...
    //$response = array();

    while($row = mysqli_fetch_array($result)) 
    {
    	$user_id= $row['user_id'];
    	$name= $row['firstname']." ".$row['lastname'];
        
        $result_array["success"]=true;
    	//array_push($response,array("user_id"=>$user_id,"name"=>$name));
        $result_array["message"]="Login Sucessful! Welcome, $name";
        $result_array["data"]=$row;
        //$result_array["data"]=array("user_id"=>$user_id,"name"=>$name);
    }
    //echo json_encode(array("login_result"=>"success","data"=>$response));
}
echo json_encode($result_array);
$conn->close();
?>