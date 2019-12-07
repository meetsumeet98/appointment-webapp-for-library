<?php
	
	 $con =mysqli_connect("fdb17.biz.nf", "3240914_lib", "Sumeet1998") or die("cant connect"); 
	 mysqli_select_db($con,"3240914_lib");
	 
	 $name= $_POST['firstName'].''.$_POST['lastName'];
	 $email= $_POST['email'];
	 $regno= $_POST['regno'];
	 $pass= $_POST['password'];
	 $year= $_POST['dropdownlist'];
	 $branch= $_POST['dropdownlist1'];
	
	 
	 $query = "insert into students(email,reg_no,name,branch,year,password) values ('$email','$regno','$name','$branch','$year','$pass')";
	 if(mysqli_query($con,$query)){
		 echo" inserted";
		 header("Location: studentLogin.php");
	 }else
		 echo "not inserted";
	 
	 
	mysqli_close($con);









?>