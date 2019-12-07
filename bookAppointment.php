<?php
	@ob_start();
	session_start();
	$datetime1 = new DateTime('today');

	$datetime = new DateTime('tomorrow');
 
	$today= $datetime->format('d-m-Y');
	$tomorrow= $datetime1->format('d-m-Y');

	
	if(!isset($_SESSION['Role']))
		header('Location: studentLogin.php');


	 $checkemail= $_SESSION['email'];
	 
	 $con =mysqli_connect("fdb17.biz.nf", "3240914_lib", "Sumeet1998") or die("cant connect"); 
	 mysqli_select_db($con,"3240914_lib");
	
	 
	 $exist= "select email from appointments where email= '$checkemail';";
	 $execute = mysqli_query($con,$exist);
	 $value= mysqli_num_rows($execute);
 
	 $query = "select time from appointments where email is null;";
	 
	 $result = mysqli_query($con,$query);
	 $num = mysqli_num_rows($result);
	 mysqli_close($con);
	 

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>book Appointment</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    
    <link rel = "icon" href =  "new/book.PNG" type = "image/x-icon"> 

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="studentDashboard.php">LibraryPoint</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            
            <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="studentDashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
       
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="studentDashboard.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">book Appointment</li>
          </ol>
          
              <div  style="height: 80%" class="bg-light" >
                <div class="dropdown " >
    			
			<?php
			echo"
			<form method='POST' action='insertAppointment.php' > "
			
			
			?>
			<?php if($num>=1 && $value== null){ ?>
			<span style='align-items: center; height: 30px; width: 250px; margin-left: 45%; padding-top: 10%;'>
			
				<?php echo $today;?>
				
				
				</span><br>
			<?php } ?>	
			
                <?php if($num>=1 && $value== null){ echo" 
				<select name='slot' style='align-items: center; height: 30px; width: 250px; margin-left: 40%; margin-top: 40px;'>
    			<option>Select Time Slot</option> " ?>
    			   <?php	
    						
    						for($i=1;$i<=$num;$i++){
    							$row = mysqli_fetch_array($result);
    					 ?>	
                    <option><?php echo $row['time']; ?></option>
      				<?php 
      						}
      						echo "  </select><br>
      								<input style='margin-top: 30px; margin-left: 40%; width: 250px;' type='submit' class='btn btn-primary  bg-success' value='Book My Appointment'></form>";
      						}else{
								if($value!=null)
									echo "<h4 style='margin-left:200px; margin-top:100px;'>You already have an appointment.</h4> ";
								else
									echo "<h4 style='margin-left:200px; margin-top:100px;'>All slots are booked. Please check after some time. </h4> ";
      						}
      						
      						
                  
      			   ?>
                </div>
              </div>
         </form>   

         

        </div>
       

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
