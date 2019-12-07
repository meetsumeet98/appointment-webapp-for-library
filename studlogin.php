<?php
	 
	 $email=$_POST['email'];
	 $pass=$_POST['password'];
	$con =mysqli_connect("fdb17.biz.nf", "3240914_lib", "Sumeet1998"); 
	 mysqli_select_db($con,"3240914_lib");
	
	
 
	 $query = "select * from students where email ='$email' AND password='$pass' ";
	 $result = mysqli_query($con,$query);
	 $num = mysqli_num_rows($result);
	 
	
	 if($num==1){
		 $query = "select * from students where email ='$email' ";
		 $result = mysqli_query($con,$query);
		 $row= mysqli_fetch_array($result);
                 @ob_start();
		  session_start();
		
		 $_SESSION['Role']='user';
		 $_SESSION['email']=$row['email'];
		 $_SESSION['reg_no']=$row['reg_no'];
		 $_SESSION['name']=$row['name'];
		 $_SESSION['branch']=$row['branch'];
		 $_SESSION['year']=$row['year'];
		 
		 header("Location: studentDashboard.php");
		 
}else{
	 
	 header("Location: studentLogin.php");
	  
 }
  mysqli_close($con);
?>		
	 



