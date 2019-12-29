 <?php 

include("connection.php");

$q1=mysqli_query($conn,"select * from users where user_type='lecturer'");
$r1=mysqli_num_rows($q1);


$q2=mysqli_query($conn,"select * from users where user_type='student' ");
$r2=mysqli_num_rows($q2);


?>
 <h1 class="page-header">Dashboard</h1>
		           <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
        
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="400" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Total Lecturers</h4>
              <span class="text-muted"><?php echo $r1; ?></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="400" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Total Students</h4>
              <span class="text-muted"><?php echo $r2; ?></span>
            </div>
            
          </div>