
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Login</title>

<link rel = "icon" href =  "new/book.PNG" type = "image/x-icon"> 

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	<script type="C:\xampp\htdocs\supriya\bootstrap\validation.js"></script>

  </head>

  <body class="bg-dark page-top">

	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1 " href="studentDashboard.php" style="margin-left: 570px; font-weight:bold; margin-top:20px;font-size: 25px;">LibraryPoint</a>
	</nav>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Student Login</div>
        <div class="card-body">
          <form name = "myForm" action="studlogin.php" method="POST"  onsubmit="return validateForm()">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name = "email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name= "password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
           
            <input type="submit" class="btn btn-primary btn-block" value="Login">
          </form>
          
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Register an Account</a>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script>
function validateForm() {
  alert("submited ");
    //var x = document.forms["myForm"]["fname"].value;
    var email= document.forms["myForm"]["email"].value;
    var password = document.forms["myForm"]["password"].value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(email.match(mailformat)){
     

        if(email.length - 11 == email.indexOf("@sggs.ac.in")){
           
           if(!password.equals("")){
            document.myForm.email.focus();
            return true;
          }
           else{
            alert("password can't be empty!");
           }
        }
        else{
           alert("Wrong email");
           return false;
        }

       
    }
    else{
      alert("Wrong email");
      return false;
    }

    // if (x == "") {
    //     alert("Name must be filled out");
    //     return false;
    // }

}
</script>

  </body>

</html>
