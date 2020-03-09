<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harihara_Medicals</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />


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
                    
                        <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="banner.html"><i class="fa fa-sliders" aria-hidden="true"></i>Banner</a>
                    </li>
                     <li>
                        <a href="product.php"><i class="fa fa-shopping-cart fa-fw"></i> Product</a>
                    </li>
                    <li>
                        <a href="order.php"><i class="fa fa-table fa-fw"></i>Order</a>
                    </li>
                    
                    <li class="selected">
                        <a href="feed.php"><i class="fa fa-edit fa-fw"></i>News Feed</a>
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
                      <li>
                        <a href="user.php"><i class="fa fa-user fa-fw" aria-hidden="true"></i> User</a>
                    </li>
                     <li>
                       <a href="invoice_page.php"><i class="fa fa-money" aria-hidden="true"></i>  Invoice</a>
                    </li>
                      <li>
                        <a href="notification.php"><i class="fa fa-bell-o fa-fw" aria-hidden="true"></i> Notification</a>
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
                 <!--page header-->
                <div class="col-lg-12">
                    <h1 class="page-header">News Feed</h1>
                </div>
                 <!--end page header-->
            </div>
            <div class="row">
                 <!--Default Pannel, Primary Panel And Success Panel   -->
                 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add News feed
                        </div>
                        <div class="panel-body">
                          <!--  <textarea rows="4" cols="120"
                             placeholder =" Enter the comments" size="100">
                             </textarea><br>-->
                            
</script>



      <button class="btn btn-info btn-sm"><a href="im.php"><i class="fa fa-camera"></i> photo</button></a>

<!--<button class="btn"><i class="fa fa-camera"></i> video</button>-->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">ADD COMMENTS</button>




                       
                    </div>
                </div>


                <?php
   // $conn = mysqli_connect("localhost","root","","harihara_medicals");
  $servername = "localhost";
$username = "u401320649_root";
$password = "harihara_medicals";
$dbname = "u401320649_social_grub";
$conn = mysqli_connect("localhost","u401320649_root","harihara_medicals","u401320649_social_grub");
    if($conn-> connect_error) {
        die("connection failed:" .$conn-> connect_error);
    }
    $sql = "SELECT Text from news_feed";
    $result =  $conn ->query($sql);
     if( $result->num_rows > 0 ){
        while ($row = $result ->fetch_assoc()) {
        	echo "<div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            POST
                        </div>
                        <div class=\"panel-body\">
                            <p>".$row["Text"]."</p>
                        </div>
                        <div class=\"panel-footer\">
                            
                        </div>
                    </div>
                </div>";
            //echo "<tr><td>".$row["Comments"]."</td>";
            
        }
      
     }
     else{
        echo "0 result";

     }
     $conn ->close();
    ?>
     </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>


<!-- ADD POST HERE -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Comment</h4>
        </div>
        <div class="modal-body">
        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                
                                    <form role="form" method="post" action="comment.php">
                                        <div class="form-group">
                                            <label>Enter your comments here </label>
                                        <!-- <textarea rows="2" cols="100" placeholder =" Enter the comments" size="" style="width: 556px; height: 86px;">
                             </textarea>--><!--<input class="form-control" type="file" size="" name=photo>-->
                                           <input type="text" placeholder="enter you comments here" name="comment"style="width: 556px; height: 86px;"> <button type="submit" class="btn btn-primary" name="add">Add</button>
                  
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
    
  </div>
  
</div>


    
<!-- PHOTO -->



</body>
</html>

