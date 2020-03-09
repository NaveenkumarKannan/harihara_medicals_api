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

    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<style>
/*img {
  border-radius: 50%;
}
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
                     <img src="assets/img/new.png" alt="" width="32" height="100"/>&nbsp;&nbsp;<font color="white">HARIHARA_MEDICALS</font>
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

             <li >
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                     <li>
                        <a href="banner.html"><i class="fa fa-bars" aria-hidden="true"></i> Banner</a>
                    </li>
                     <li class="selected">
                        <a href="product table.php"><i class="fa fa-shopping-cart fa-fw"></i> Product</a>
                    </li>
                    <li>
                        <a href="order.php"><i class="fa fa-table fa-fw"></i>Order</a>
                    </li>
                    
                    <li>
                        <a href="feed.php"><i class="fa fa-edit fa-fw"></i>News Feed</a>
                    </li>
                    <li>
                        <a href="new_admin.php"><i class="fa fa-edit fa-fw"></i> + Add new admin</a>
                    </li>
                    <li>
                        <a href="prescription.php"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Prescription</a>
                    </li>
                    <li>
                        <a href="cust_prescription.php"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Customer prescription</a>
                    </li>
                      <li>
                        <a href="user.php"><i class="fa fa-user fa-fw" aria-hidden="true"></i> User</a>
                    </li>
                     <li>
                        <a href="invoice_page.php"><i class="fa fa-money" aria-hidden="true"></i>  Invoice</a>
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
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">EDIT PRODUCTS</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->



                <?php
// including the database connection file
include_once("connection.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $pname = $_POST['productname'];
    $company = $_POST['company'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $sku = $_POST['sku'];
    $expirydate = $_POST['expirydate'];
    $stock = $_POST['stock'];
    $image = $_POST['image'];
    /*$name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];  */  
    
    // checking empty fields
    if(empty($pname) || empty($company) || empty($category) || empty($price) || empty($sku) || empty($expirydate) || empty($sku) || empty($stock) || empty($image)) {    
      echo "<font color='red'> field is empty.</font><br/>";   
       /* if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }  */      
    } else {    
        //updating the table
        $sql = "UPDATE products SET pname=:pname, company=:company, category=:category, price=:price, sku=:sku, expirydate=:expirydate, stock=:stock WHERE id=:productid";
        $query = $dbConn->prepare($sql);
                
        $query->bindparam(':id', $id);
        $query->bindparam(':productname', $pname);
        $query->bindparam(':company', $company);
        $query->bindparam(':category', $category);
        $query->bindparam(':price', $price);
        
        $query->bindparam(':sku', $sku);
        $query->bindparam(':expirydate', $expirydate);
        $query->bindparam(':stock', $stock);
        $query->bindparam(':image', $image);
        $query->execute();
        
        // Alternative to above bindparam and execute
        // $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
                
        //redirectig to the display page. In our case, it is index.php
        header("Location: product.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
//$conn = mysqli_connect("localhost","root","","harihara_medicals");
$servername = "localhost";
$username = "u401320649_root";
$password = "harihara_medicals";
$dbname = "u401320649_social_grub";
$conn = mysqli_connect("localhost","u401320649_root","harihara_medicals","u401320649_social_grub");

$sql = "SELECT * from products where id='$id'";
$result = mysqli_query($conn, $sql);
                            
 
//$conn = mysqli_connect("localhost","root","","harihara_medicals");
//$query=mysqli_query($conn,"select * from `products` where productid='$id'");
//$row=mysqli_fetch_array($query);
//selecting data associated with this particular id
/*$sql = "SELECT * FROM products WHERE id=:id";
$result =  $con->query($sql);
//$query = $conn->prepare($sql);
$result->execute(array(':id' => $id));*/

// $result =  $conn ->query($sql);
   //  if( $result->num_rows > 0 ){
        // if($result){
     // while ($row = $result ->fetch_assoc()) {
   while ($row=mysqli_fetch_array($result)){
    $pname = $row['productname'];
    $company = $row['company'];
    $category = $row['category'];
    $price = $row['price'];
    $sku = $row['sku'];
    $expirydate = $row['expirydate'];
    $stock = $row['stock'];
     $image = $row['image'];
    

}
/*}
else{
        echo "0 result";

     }
     $conn ->close();*/

?>
               <div class="row">
                <div class="col-lg-12">
                    <!--Collapsible Accordion Panel Group   -->
                    
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">

<!--<center><a href="addadmin.php"><i class="fa fa-edit fa-fw"></i> ADD</a>-->
<div class="form-group">
<form name="form1" method="POST" action="update.php?id=<?php echo $id; ?>">

   
                                            <label>Product Name</label>
                                            <input class="form-control" placeholder="Enter text" name="pname" value="<?php echo $pname;?>">
                                        
                                            <label>Company</label>
                                            <input class="form-control" placeholder="Enter text" name="company" value="<?php echo $company;?>">
                                            <label>Category</label>
                                            <input class="form-control" placeholder="Enter text" name="category" value="<?php echo $category;?>">
                                            <label>Price</label>
                                            <input class="form-control" placeholder="Enter text" name="price" value="<?php echo $price;?>">                                   
                                            
                                            <label>SKU</label>
                                            <input class="form-control" placeholder="Enter text" name="sku" value="<?php echo $sku;?>">
                                            <label>Expiry Date</label>
                                            <input class="form-control" placeholder="Enter text" name="expirydate" value="<?php echo $expirydate;?>">
                                            <label>Stock</label>
                                            <input class="form-control" placeholder="Enter text" name="stock" value="<?php echo $stock;?>">
                                            
    
                                            <!--  <table border="0">
            <tr> 
                <td>Product Name</td>
                <td><input type="text" name="pname" value="<?php// echo $pname;?>"></td>
            </tr>
            <tr> 
                <td>Company</td>
                <td><input type="text" name="company" value="<?php //echo $company;?>"></td>
            </tr>
            <tr> 
                <td>Category</td>
                <td><input type="text" name="category" value="<?php //echo $category;?>"></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input type="text" name="price" value="<?php //echo $price;?>"></td>
            </tr>
            <tr> 
                <td>Dosage</td>
                <td><input type="text" name="dosage" value="<?php// echo $dosage;?>"></td>
            </tr>
            <tr> 
                <td>Prescription Required</td>
                <td><input type="text" name="prescrib" value="<?php// echo $prescrib;?>"></td>
            </tr>
            <tr> 
                <td>SKU</td>
                <td><input type="text" name="SKU" value="<?php// echo $SKU;?>"></td>
            </tr>
            <tr> 
                <td>Expiry Date</td>
                <td><input type="text" name="expirydate" value="<?php //echo $expirydate;?>"></td>
            </tr>
            <tr> 
                <td>Stock</td>
                <td><input type="text" name="stock" value="<?php// echo $stock;?>"></td>
            </tr>
            <tr>-->
                <!--<input type="hidden" name="id" value=<?php// echo $_GET['id'];?>>-->
                <input type="hidden" name="id" value="<?php echo $id=$_GET['id'] ?>">
                <td><input type="submit" name="submit" ></td>
            </tr>
        </table>
    </form>
</div>
</div>


                    
                    
                </div>

               </div>

            </div>

    </div>
    


                                        </div>
                                    </div>
                                </div>
                               
                                </div>
                            </div>
                        </div>
                    </div> 
    
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>

