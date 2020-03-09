<!DOCTYPE html>
<html>
<head>
  <title>Radssoon : Employee Logs</title>
<link rel="stylesheet" type="text/css" href="css/userslog.css">
<!-- <script>
  $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script> -->
<script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous">
</script>
<!-- <script src="js/jquery-2.2.3.min.js"></script> -->
<script src="js/user_log.js"></script>
<script>
  $(document).ready(function(){
      $.ajax({
        url: "user_log_up.php",
        type: 'POST',
        data: {
            'select_date': 1,
        }
      }).done(function(data) {
          $('#userslog').html(data);
        });
    
  });
</script>
</head>
<body>
<?php include'header.php'; ?> 
<main>
  <section>
  <!--User table-->
  <h1 class="slideInDown animated">Employees Records</h1>
  	<div class="form-style-5 slideInDown animated">
  		<form method="POST" action="Export_Excel.php">
  			<div class="d-flex justify-content-around align-items-center">
       <input type="date" name="date_sel" id="date_sel">
        <button type="button" name="user_log" id="user_log">Select Date</button>

        </div>
        <div style="display: flex;justify-content: space-around; align-items: center;">
          <input id="myInput" type="text" placeholder="Search..">

          <input type="submit" style="width:250px" name="To_Excel" value="Export to Excel">
        </div>  

  		</form>
  	</div>
  <div class="tbl-header slideInRight animated">
    <table cellpadding="0" cellspacing="0" border="1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Serial Number</th>
          <th>Fingerprint ID</th>
          <th>Date</th>
          <th>Time In</th>
          <th>Time Out</th>
        </tr>
      </thead>
     
    </table>
  </div>
  <div class="tbl-content slideInRight animated">
    <div id="userslog">
      
    </div>
  </div>
</section>
</main>
 <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#userslog tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 
</body>
</html>