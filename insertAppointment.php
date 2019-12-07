<?php
        @ob_start();
	session_start();
	 $email= $_SESSION['email'];
	 $reg_no= $_SESSION['reg_no'];
	 $name= $_SESSION['name'];
	 $branch= $_SESSION['branch'];
	 $year= $_SESSION['year'];
	 $slot= $_POST['slot'];
	 $_SESSION['slot'] = $slot;
	 echo $slot;
	 $con =mysqli_connect("fdb17.biz.nf", "3240914_lib", "Sumeet1998") or die("cant connect"); 
	 mysqli_select_db($con,"3240914_lib");
	 if($con){
		 echo"connected";
	 }	 
	 
	 
	 $query = "update appointments set time='$slot', email='$email', reg_no='$reg_no', name='$name', branch= '$branch',year='$year' where time='$slot'";
	 $result = mysqli_query($con,$query);
	 
	 
	 
mysqli_close($con);
header('Location: viewMyAppointment.php');
?>