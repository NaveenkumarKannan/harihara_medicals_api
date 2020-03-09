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


body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("assets/img/doctor.jpg");
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
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
                    <li >
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
                     <li class="selected">
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
          <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
           
            

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">DOCTOR</h1>
                
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">
    
                           
                        </div>
                        <div class="panel-body">
                                                      <form role="form" method="post" action="doc.php">
                                                       
                            Doctor Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="dname" placeholder="Doctor name"><br><br>
                            Specialist&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" name="spcl" placeholder="Specialist"><br><br>
                            Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" placeholder="Address"><br><br>
                            Clinic Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cname" placeholder="Clinic name"><br><br>
                            Qualification&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="qualification" placeholder="qualification"><br><br>
                            Fees&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="fee" placeholder="Fees"><br><br>
                            Experience&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="experience" placeholder="Experience"><br><br>
                            Phone Number1&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="phone1" placeholder="phone number"><br><br>
                            Phone Number2&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="phone2" placeholder="phone number"><br><br>
                            Lab facilities&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lab" placeholder="Lab facilities"><br><br></h1>
                             <input type="submit" name="submit" value="Submit">
                            
                            
</form>

                            
                            <div></div>
                            
                            
                            
                            
                            
                        </div>
                    
                             
            
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
