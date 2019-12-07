<?php
	@ob_start();
        session_start();
	if(!($_SESSION['Role']=='admin'))
		 header("Location: adminLogin.php");
	 
	 $con =mysqli_connect("fdb17.biz.nf", "3240914_lib", "Sumeet1998") or die("cant connect"); 
	 mysqli_select_db($con,"3240914_lib");
	 
	 $name= $_POST['firstName'].''.$_POST['lastName'];
	 echo $email= $_POST['email'];
	
	 echo $pass= $_POST['password'];

	 $query = "insert into assistants(email,name,password) values ('$email','$name','$pass')";
	 if(mysqli_query($con,$query)){
		 header("Location: viewAssistants.php");
	 }else
		 echo "not inserted";
	 
	mysqli_close($con);
	
	
	









?>