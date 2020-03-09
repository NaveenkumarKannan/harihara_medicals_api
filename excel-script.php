<?php
//index.php
$connect = mysqli_connect("localhost","id12184471_hariharan","hariharan","id12184471_hariharan_medicals");
$message = '';

if(isset($_POST["upload"]))
{
 if($_FILES['product_file']['name'])
 {
  $filename = explode(".", $_FILES['product_file']['name']);
  if(end($filename) == "csv")
  {
   $handle = fopen($_FILES['product_file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $productname = mysqli_real_escape_string($connect, $data[0]);
    $company = mysqli_real_escape_string($connect, $data[1]);
    $category = mysqli_real_escape_string($connect, $data[2]);  
    $price = mysqli_real_escape_string($connect, $data[3]);
    $dosage = mysqli_real_escape_string($connect, $data[4]);
    $prescriptionrequired = mysqli_real_escape_string($connect, $data[5]);
    $SKU = mysqli_real_escape_string($connect, $data[6]);
    $expirydate = mysqli_real_escape_string($connect, $data[7]);
    $stock = mysqli_real_escape_string($connect, $data[8]);
    
    $query = "
     UPDATE products 
     SET productname = '$productname', 
     company = '$company', 
     category = '$category', 
     prescriptionrequired = '$prescriptionrequired',
    SKU = '$SKU',
    expirydate='$expirydate',
    stock = '$stock'
    ";
    mysqli_query($connect, $query);
   }
   fclose($handle);
   //header("location: index.php?updation=1");
  }
  else
  {
   $message = '<label class="text-danger">Please Select CSV File only</label>';
  }
 }
 else
 {
  $message = '<label class="text-danger">Please Select File</label>';
 }
}

if(isset($_GET["updation"]))
{
 echo "Updated successfully";
}
else
{
    echo "Updated Failed";
}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>HariHaran</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Update Mysql Database through Upload CSV File using PHP</a></h2>
   <br />
   <form method="post" enctype='multipart/form-data'>
    <p><label>Please Select File(Only CSV Formate)</label>
    <input type="file" name="product_file" /></p>
    <br />
    <input type="submit" name="upload" class="btn btn-info" value="Upload" />
   </form>
   <br />
   
    
  </div>
 </body>
</html>
