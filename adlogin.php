<?php
	 
	 $email=$_POST['email'];
	 $pass=$_POST['password'];
	 $con =mysqli_connect("fdb17.biz.nf", "3240914_lib", "Sumeet1998") or die("cant connect"); 
	 mysqli_select_db($con,"3240914_lib");
	
 
	 $query = "select * from admin where email ='$email' AND password='$pass' ";
	 $result = mysqli_query($con,$query);
	 $num = mysqli_num_rows($result);
	 
	
	 if($num==1){
		 $query = "select * from admin where email ='$email' ";
		 $result = mysqli_query($con,$query);
		 $row= mysqli_fetch_array($result);
		  session_start();
		
		 $_SESSION['Role']='admin';
		 $_SESSION['email']=$row['email'];
		 $_SESSION['name']=$row['name'];
		 
		 header("Location: adminDashboard.php");
		 
}else{
	 
	 header("Location: adminLogin.php");
	  
 }
  mysqli_close($con);
?>		
	 



