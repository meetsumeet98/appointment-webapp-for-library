
<?php
	@ob_start();
        session_start();
	$name= $_POST['name'];
	
	
	if(!isset($_SESSION['Role']))
		header('Location: adminLogin.php');
	
	echo $name;
	
	 $con =mysqli_connect("fdb17.biz.nf", "3240914_lib", "Sumeet1998") or die("cant connect"); 
	 mysqli_select_db($con,"3240914_lib");
	 

	 $query = "delete from assistants where name='$name';";
	 $result = mysqli_query($con,$query);
	 if($result){
	 
	header('Location: viewAssistants.php');
	 }
	 else
		 echo "Not deleted";
	
	 
	 
	
	 

?>