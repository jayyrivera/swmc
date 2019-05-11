<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
       
          <div class="col">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create New Account</h1>
              </div>
              <div class="alert alert-danger" role="alert" id="registeralert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span id="textalertregister"> </span>
              </div>
              <form id="registeraccount">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="regFname" name="regFname" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="regLname" name="regLname" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="regEmailAdd" name="regEmailAdd" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="regPass" name="regPass" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="regRepeatPass" placeholder="Repeat Password">
                  </div>
                </div>

                <div class="col-sm-12"> 
                    <select class="form-control form-control-user" id = "cRole" name ="cRole">
                    <option value="" disabled selected>Role</option>
                      <option>Operations</option>
                      <option>Principal</option>
                      <option>HR</option>
                      <option>Database Adminstrator</option>
                    </select>
                  </div>

                  <br>
                
                <button class="btn btn-primary btn-user btn-block" id="registerAccount">
                  Register Account
                </button>
               
               
           
              <hr>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <script type="text/javascript">

  $(function() {
    $("#registeralert").hide(); // to hide alert pane on load of page

    $('#registerAccount').on('click', function(e) {
        e.preventDefault(); // to prevent from refreshing
        //conditions for the required fields
        if($("#regFname").val() == "" || $("#regLname").val() == "" || $("#regEmailAdd").val() == "" || $("#regPass").val() == "" ||  $("#cRole").val() == "" ){
          $("#registeralert").show(); //to show alert pane
          $("#textalertregister").text("Please fill out all the fields!"); // set text alert pane
          return false; // to break
        }

        if($("#regPass").val() != $("#regRepeatPass").val()){
          $("#registeralert").show(); //to show alert pane
          $("#textalertregister").text("Please confirm password!"); // set text alert pane
          return false;
        }
        
        $("#registeralert").hide();
        var str = $( "#registeraccount" ).serialize();
        $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + str,
          url:"ajax/ajax_registerAccount.php",
          success:function(data) {

            if(data.status ==1){
              alert(data.message);
              window.location.href = "dashboard.php";
            }else{
              //error message here
              alert(data.message);
            }

          }
        });
    });
  });
  
  </script>

  

</body>

</html>
