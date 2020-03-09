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
                </button>
                <a class="navbar-brand" href="index.html">
                    <h3 style="color:white;"><b>HARIHARA_MEDICALS</b></h3>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">Andrew Smith</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-success">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    <!-- dropdown tasks -->
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-tasks -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
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
                    <li>
                        <!-- user image section-->
                     <!--   <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div>Hari <strong>hara</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>-->
                        <!--end user image section-->
                    </li><br><br>
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
                        <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                     <li class="selected">
                        <a href="product.html"><i class="fa fa-edit fa-fw"></i> Product</a>
                    </li>
                    <li>
                        <a href="order.html"><i class="fa fa-table fa-fw"></i>Order</a>
                    </li>
                    
                    <li>
                        <a href="news_feed.html"><i class="fa fa-edit fa-fw"></i>News Feed</a>
                    </li>
                    <li>
                        <a href="new_admin.php"><i class="fa fa-edit fa-fw"></i> + Add new admin</a>
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
                    <h1 class="page-header">PRODUCTS</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             PRODUCT<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">ADD</button>

                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr><th>Product Id</th>
                                            <th>Product Name</th>
                                            <th>category</th>
                                            <th>Company</th>
                                            <th>Price</th>
                                            <th>Dosage</th>
                                            <th>Prescription required</th>
                                            <th>SKU</th>
                                            <th>Expiry date</th>
                                            <th>stock</th>
                                            <th>Edit/Delete</th>
                                            
                                            
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                           // require_once 'connection.php';
                            
                            $conn = mysqli_connect("localhost","root","","harihara_medicals");
                            if($conn-> connect_error) {
                                die("connection failed:" .$conn-> connect_error);
                            }
                            $sql = "SELECT * from products";
                            $result =  $conn ->query($sql);
                             if( $result->num_rows > 0 ){
                                while ($row = $result ->fetch_assoc()) {
                        
                                   echo "<tr><td>".$row["productid"]."</td>"."<td>".$row["productname"]."</td>"."<td>".$row["category"]."</td>"."<td>".$row["company"]."</td>"."<td>".$row["price"]."</td>"."<td>".$row["dosage"]."</td>"."<td>".$row["prescriptionrequired"]."</td>"."<td>".$row["SKU"]."</td>"."<td>".$row["expirydate"]."</td>"."<td>".$row["stock"]."</td>";
                                 // echo '<td><button type="button" class="btn btn-outline btn-info btn-xs" data-toggle="modal" data-target="#myedit" id="'.$row['productid'].'" class="delbutton" title="Click To Delete">Delete';
                                 //echo '<td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#mydelete">Delete</button>';
                                //echo '<td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#mydelete" >Delete</button></a></td>';
                                echo '<td><button type="button" class="btn btn-outline btn-primary data-toggle="modal" data-target="#myedit">Edit</button>';
                                echo '<button type="butoon" class="btn btn-outline btn-danger ><b><font color="#fff"><a href="d.php?id=' . $row['productid'] . '">Delete</a></font></b></button></td>';
                                   echo '</tr>';
                                   

                                    
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
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <label>Product name</label><input class="form-control" type="text" name=pname>
                                            <label>Company</label><input class="form-control" type=text name=company>
                                            <label>category</label><input class="form-control"type=text name=category>
                                            <label>Price</label><input class="form-control" type=number name=Price>
                                            <label>Dosage</label><input class="form-control" type=number name=Dosage>
                                            <label>Prescription required</label>
                                            <select class="form-control" name=prescrib>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                         
                                         <label>SKU</label><input class="form-control" type=number name=SKU>
                                            <label>Expiry date</label><input class="form-control" type=number name=expirydate>
                                            <label>Stock</label><input class="form-control" type=number name=stock>
                                          <!--<p class="help-block">Example block-level help text here.</p>-->
                                          <button type="submit" class="btn btn-primary" name=add>Save</button>

                                          <?php
require_once 'connection.php';
if(isset($_POST['add'])){
	$pname =  $_POST['pname'];
	$company = $_POST['company'];
    $category = $_POST['category'];
    $Price = $_POST['Price'];
    $Dosage = $_POST['Dosage'];
    $prescrib = $_POST['prescrib'];
    $SKU = $_POST['SKU'];
    $Expiry_date = $_POST['expirydate'];
    $Stock = $_POST['stock'];

	/*if($name =='' || $email == '' || $password == ''){
		$error = "Field must not be empty !!";
	}else {*/
		//$query = "insert into admin(Username,Email_id, Password) values('$name', '$email', '$password')";
        //$create = $db->insert($query);
        $query = "INSERT into products VALUES ('','$pname','$company','$category','$Price','$Dosage','$prescrib','$SKU','$Expiry_date','$Stock')";
$result = mysql_query($query);
if($result)
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
    alert('SORRYY !!!! Registered Unsuccessfull');
                   </script>
  
<?php
	}
}

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





<div class="modal fade" id="myedit" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">EDIT PRODUCT</h4>
        </div>
        <div class="modal-body">
        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <label>Product name</label><input class="form-control" type="text" name=pname>
                                            <label>Company</label><input class="form-control" type=text name=company>
                                            <label>category</label><input class="form-control"type=text name=category>
                                            <label>Price</label><input class="form-control" type=number name=Price>
                                            <label>Dosage</label><input class="form-control" type=number name=Dosage>
                                            <label>Prescription required</label>
                                            <select class="form-control" name=prescrib>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                         
                                         <label>SKU</label><input class="form-control" type=number name=SKU>
                                            <label>Expiry date</label><input class="form-control" type=number name=expirydate>
                                            <label>Stock</label><input class="form-control" type=number name=stock>
                                          <!--<p class="help-block">Example block-level help text here.</p>-->
                                          <button type="submit" class="btn btn-primary" name=update>Update</button>

                                          <?php
require_once 'connection.php';
if(isset($_POST['update'])){
	$pname =  $_POST['pname'];
	$company = $_POST['company'];
    $category = $_POST['category'];
    $Price = $_POST['Price'];
    $Dosage = $_POST['Dosage'];
    $prescrib = $_POST['prescrib'];
    $SKU = $_POST['SKU'];
    $Expiry_date = $_POST['expirydate'];
    $Stock = $_POST['stock'];

	/*if($name =='' || $email == '' || $password == ''){
		$error = "Field must not be empty !!";
	}else {*/
		//$query = "insert into admin(Username,Email_id, Password) values('$name', '$email', '$password')";
        //$create = $db->insert($query);
        $query = "UPDATE products SET VALUES ('','$pname','$company','$category','$Price','$Dosage','$prescrib','$SKU','$Expiry_date','$Stock')";
$result = mysql_query($query);
if($result)
{
	?>
  <script>
  alert('Updated successfully');
        window.location.href='product table.php?success';
        </script>
	<?php

}
 else{
     ?>
    <script>
    alert('SORRYY !!!! update Unsuccessfull');
                   </script>
  
<?php
	}
}

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







<!-- DELETE-->

<div class="container">

  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="mydelete" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this item</p>
         <button type="submit" class="btn btn-primary" name=del>yes</button>
                   <?php
/*include('connection.php');

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];

$result = mysql_query("DELETE FROM products WHERE id=$id")
or die(mysql_error());

header("Location: view.php");
}
else

{
header("Location: view.php");
}
*/

/*
          if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM products WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	//header('location: .php');
}
else{
}*/
?>
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