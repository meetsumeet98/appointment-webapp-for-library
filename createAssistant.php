<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Register Assistants</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    
    <link rel = "icon" href =  "new/book.PNG" type = "image/x-icon"> 

  </head>

  <body class="bg-dark page-top">
	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1 " href="studentDashboard.php" style="margin-left: 570px; font-weight:bold; margin-top:20px; font-size: 25px;">LibraryPoint</a>
	</nav>
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register Assistants</div>
        <div class="card-body">
          <form name = "registerForm" method="POST" action="insertAssistant.php" onsubmit="return validateForm()">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="lastName" class="form-control" placeholder="Last name" required="required">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Email  (example@sggs.ac.in)</label>
              </div>
               <div class="form-group">
            </div>
            
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name ="conpass" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>

              </div>
            </div>
             <input type="submit" class="btn btn-primary btn-block" value="Register">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="assistantLogin.php">Login Page</a>
            
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
    //alert("submited "+firstName+lastName+email+password+conpass);


    var firstName = document.registerForm.firstName.value;
    var lastName = document.registerForm.lastName.value;
    var email= document.registerForm.email.value;
    var password =document.registerForm.password.value;
    var conpass=document.registerForm.conpass.value;

 
     
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    

    if(email.match(mailformat)){
     

        if(email.length - 11 == email.indexOf("@sggs.ac.in")){
          
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


   if(password!=conpass){
    alert("passwords dont match!");
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
