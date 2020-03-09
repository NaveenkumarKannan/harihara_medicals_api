<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harihara_medicals</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />
  
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<style>
/*img {
  border-radius: 50%;
}
</style>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                <a class="navbar-brand" href="index.html">
                   <img src="assets/img/H+.png" alt="" width="30" height="200"/>&nbsp;&nbsp;<font color="navy">HARIHARA_MEDICALS</font>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                
               &nbsp;&nbsp;
                <li class="dropdown">
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-cog fa-2x" aria-hidden="true"></i></a>
                        </li>
                   
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->
            

        </nav>
        <!-- end navbar top -->


        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                	<ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/images.png" alt="Avatar" style="width:50px">
                            </div>
                            <div class="user-info">
                                <div>Hari <strong>Hara</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>

                            <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                     <li>
                        <a href="banner.html"><i class="fa fa-bars" aria-hidden="true"></i> Banner</a>
                    </li>
                     <li>
                        <a href="product.php"><i class="fa fa-shopping-cart fa-fw"></i> Product</a>
                    </li>
                    <li>
                        <a href="order.php"><i class="fa fa-table fa-fw"></i>Order</a>
                    </li>
                    
                    <li>
                        <a href="new_admin.php"><i class="fa fa-user fa-fw"></i> + Add new admin</a>
                    </li>
                     <li>
                        <a href="prescription.php"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Prescription</a>
                    </li>
                    <li>
                        <a href="cust_prescription.php"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Customer prescription</a>
                    </li>
                    <li>
                        <a href="doctor.php"><i class="fa fa-plus fa-fw" aria-hidden="true"></i> Doctor</a>
                    </li>
                    <li class="selected">
                        <a href="user.php"><i class="fa fa-user fa-fw"></i> User</a>
                    </li>
                     <li>
                        <a href="invoice_page.php"><i class="fa fa-money" aria-hidden="true"></i>  Invoice</a>
                    </li>
                    <li>
                        <a href="notification.php"><i class="fa fa-bell-o fa-fw"></i> Notification</a>
                    </li>


                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
         
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">USER</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div style="overflow-x:auto;">
                            <div class="table-responsive">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr><th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Date of Birth</th>
                                            <th>Email_id</th>
                                            <th>Gender</th>
                                            <th>Address</th>
                                            <th>Weight</th>
                                            <th>Height</th>
                                            <th>BMI</th>
                                            <th>Bp_level</th>
                                            <th>Sugar_level</th>
                                            <th>Doctor_name</th>
                                            <th>Image</th>
                                            
                                            
                                            
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                           // require_once 'connection.php';
                           
$conn = mysqli_connect("localhost","u401320649_root","harihara_medicals","u401320649_social_grub");
                            if($conn-> connect_error) {
                                die("connection failed:" .$conn-> connect_error);
                            }
                            $sql = "SELECT * from user_register";
                            $result =  $conn ->query($sql);
                             if( $result->num_rows > 0 ){
                                while ($row = $result ->fetch_assoc()) {
                        
                                   echo "<tr><td>".$row["firstname"]."</td>"."<td>".$row["lastname"]."</td>"."<td>".$row["dob"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["weight"]."</td>"."<td>".$row["height"]."</td>"."<td>".$row["bmi"]."</td>"."<td>".$row["bp_level"]."</td>"."<td>".$row["sugar_level"]."</td>"."<td>".$row["preferred_doctor_name"]."</td>"."<td>".$row["image"]."</td>";
                                 // echo '<td><button type="button" class="btn btn-outline btn-info btn-xs" data-toggle="modal" data-target="#myedit" id="'.$row['productid'].'" class="delbutton" title="Click To Delete">Delete';
                                 //echo '<td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#mydelete">Delete</button>';
                                //echo '<td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#mydelete" >Delete</button></a></td>';
                                
                                                                                                                                                                                               
                                //echo '<td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myMol"><i class="fa fa-edit fa-fw"></i> <b><font color="#fff"></b

                                    
                                }
                                 echo "</table>";
                             }
                             else{
                                echo "0 result";
                        
                             }
                             $conn ->close();
                            ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ADD PRODUCT</h4>
        </div>
        <div class="modal-body">
        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="host.php">
                                        <div class="form-group">
                                            <label>Product name</label><input class="form-control" type="text" name="pname">
                                            <label>Company</label><input class="form-control" type=text name="company">
                                            <label>category</label><input class="form-control"type=text name="category">
                                            <label>Price</label><input class="form-control" type=number name="Price">
                                            <label>Dosage</label><input class="form-control" type=number name="Dosage">
                                            <label>Prescription required</label>
                                            <input class="form-control" type="text" name="prescrib">
                                           <!-- <select class="form-control" name="prescrib">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>-->
                                         
                                         <label>SKU</label><input class="form-control" type=number name="SKU">
                                            <label>Expiry date</label><input class="form-control" type=date name="expirydate">
                                            <label>Stock</label><input class="form-control" type=number name="stock">
                                          <!--<p class="help-block">Example block-level help text here.</p>-->
                                          <button type="submit" class="btn btn-primary" name="add">Save</button>
                                          </form>
                                          <?php
/*require_once 'connection.php';
if(isset($_POST['add'])){
	$pname =  $_POST['pname'];
	$company = $_POST['company'];
    $category = $_POST['category'];
    $Price = $_POST['Price'];
    $Dosage = $_POST['Dosage'];
    $prescrib = $_POST['prescrib'];
    $SKU = $_POST['SKU'];
    $Expiry_date = $_POST['expirydate'];
    $stock = $_POST['stock'];
    
    //$query = "INSERT into products(productname,company,category,price,dosage,prescriptionrequired,SKU,expirydate,stock) VALUES ('',$pname','$company','$category','$Price','$Dosage','$prescrib','$SKU','$Expiry_da,'$stock')";
    $query="INSERT INTO `product`(`Product_name`, `Company`, `Price`, `Dosage`, `Prescription_required`, `SKU`, `Expiry_date`, `Category`, `Stock`) VALUES ($pname, $company, $Price, $Dosage, $prescrib, $SKU, $Expiry_date)";
    
    mysqli_query($conn, $query);
    
   // $query="INSERT into products(productname,company,category,price,dosage,prescriptionrequired,SKU,expirydate,stock) VALUES ('$pname','$company','$category','$Price','$Dosage','$prescrib','$SKU','$Expiry_date,'$stock')";
   //$query = mysqli_query($conn, "INSERT INTO `products`(productname,company,category,price,dosage,prescriptionrequired,SKU,expirydate,stock)VALUES ('$pname','$company','$category','$Price','$Dosage','$prescrib','$SKU','$Expiry_date','$stock')"); 
//$result = mysqli_query($conn,$query);
if($query)
{
	?>
  <script>
  alert('Registered successfully');
        window.location.href='product table.php?success';
        </script>
	<?php

}
 else{
     ?>
    <script>
    alert('SORRYY !!!! Registeration Unsuccessfull');
                   </script>
  
<?php
	}
}*/

?>
                        
       
          </div>
        </div>
        </div>
        </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-- EDIT -->


<div class="modal fade" id="myMol" role="dialog">
    <div class="modal-dialog">
   
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit</h4>
        </div>
        <div class="modal-body">
        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            
                                    

  
</div>




<!-- DELETE-->

<div class="container">

  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="mydel" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this item</p>
         <button type="submit" class="btn btn-primary" name=del>yes</button>
  
       </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>