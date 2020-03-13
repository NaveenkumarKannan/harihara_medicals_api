 <?php
require ("conn.php");

 //if(isset($_POST['submit'])){
   $image = $_FILES['image']['name'];
            $target = "report/" . basename($image);

            $sql = "
            INSERT INTO `report`(`report_image`) VALUES  ('$image')";

            $ok = 1;

            $imageFileType = $_FILES['image']['type'];

            if ($imageFileType = "jpg" or $imageFileType = "png" or $imageFileType = "jpeg") {

              if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                //echo "The file " . basename($_FILES['image']['name']) . " is uploaded";
              }
            }

            mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
    echo json_encode(array("response"=>"success"));
} else {
    echo json_encode(array("response"=>"error"));
}

  //}
          
          ?>

