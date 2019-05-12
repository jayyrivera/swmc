<?php include 'header.php' ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h1 mb-2 text-primary">SWMC Manpower and Deployment System</h1>

        <br>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <div class="row">
              <div class="col">
              <h3 class="m-0 font-weight-bold text-primary">Select User</h3>
              </div>
              <div class="col">
              <a href="registration.php" class="btn btn-primary btn-icon-split" style="float: right;" >
                    <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">New Account</span>
                  </a>
                </div>
              </div>
            </div>
            <form id="userMain">
            <div class="card-body">
            <div class="row">
                                <div class="col-md-4">
                                <label>First Name</label>
                                    <!-- <input type="text" class="form-control form-control-user" id="firstName" name = "firstName" placeholder="First Name"> -->
                                    <select class="form-control" id="sel_name" name = "sel_name" >
                                    <option value="" disabled selected>Select Name</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                <label>Last Name</label>
                                    <!-- <input type="text" class="form-control form-control-user" id="lastName" name = "lastName" placeholder="Last Name"> -->
                                    <select class="form-control" id="sel_lname" name = "sel_lname">
                                    <option value="" disabled selected>Select Last Name</option>
                                    </select>
                                </div>
                            </div>

                            <br>

                             <div class="row">
                                <div class="col-md-8">
                                <label>Email Address:</label>
                                    <input type="text" class="form-control form-control-user" id="mainEmail" name = "mainEmail" placeholder="Email Address">
                                    </select>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-4">
                                <label>Password:</label>
                                    <input type="text" class="form-control form-control-user" id="mainPass" name = "mainPass" placeholder="********">
                                    </select>
                                </div>
                                <div class="col-md-4">
                                <label>Repeat Password:</label>
                                    <input type="text" class="form-control form-control-user" id="mainRepeat" name = "mainRepeat" placeholder="********">
                                    </select>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                <label>Role:</label>
                                    <!-- <input type="text" class="form-control form-control-user" id="firstName" name = "firstName" placeholder="First Name"> -->
                                    <select class="form-control" id="sel_role" name = "sel_role">
                                    <option value="" disabled selected>Select Role</option>
                                    <option>Operations</option>
                                    <option>Principal</option>
                                    <option>HR</option>
                                    <option>Database Adminstrator</option>
                                    </select>
                                </div>
                            </div>


                            <br>

                            <div class="row">
                            <div class="col-md-12">
                            <div class="alert alert-danger" role="alert" id="registeralert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <span id="textalertregister"> </span>
                              </div>
                              </div>
                                <div class="col-md-12">
                                <button class="btn btn-primary btn-user btn-block" id="updatUser">
                                    Update User
                                  </button>
                                </div>
                            </div>
            </div>
            </div>
            </div>


            
            </div>
            
            
          </div>
        </div>
        <!-- /.container-fluid -->


<script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

    $(function() {
      $("#registeralert").hide();
      $('#updatUser').on('click', function(e) {
        if($("#sel_lname").val() == "" || $("#mainEmail").val() == "" || $("#mainPass").val() == "" ||  $("#sel_role").val() == "" ){
          $("#registeralert").show(); //to show alert pane
          $("#textalertregister").text("Please fill out all the fields!"); // set text alert pane
          return false; // to break
        }

        if($("#mainPass").val() != $("#mainRepeat").val()){
          $("#registeralert").show(); //to show alert pane
          $("#textalertregister").text("Please confirm password!"); // set text alert pane
          return false;
        }
        
        $("#registeralert").hide();
    
      var str = $( "#userMain" ).serialize();
      console.log("data",str);
    
      e.preventDefault();
      $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + str,
          url:"ajax/ajax_updateAccounts.php",
          success:function(data) {
            if(data.status ==1){
              alert(data.message);
            }else{
              //error message here
              alert(data.message);
            }
          }
        });
        $('#userMain')[0].reset();
     }); 
 

     
  selectUser()
  populateBaseID()
    
  });

  function selectUser(){
    // $.ajax({
    //     type: "GET",
    //       dataType: "json",
    //       url:"ajax/ajax_selectNameEmbark.php",
    //       success :  function(result){
    //           console.log(result);
    //       }
    // });

    $.getJSON("ajax/ajax_userPopulate.php",function(data){
        console.log(data);
        var items="";
        $.each(data,function(index,item) 
        {
          items+="<option value='"+item.first_name+"'>"+item.first_name+"</option>";
        });
        $("#sel_name").html(items); 
      });
   
  }


  function populateBaseID(){
    $("#sel_name").change(function(){
        var deptid = $(this).val();
        console.log(deptid);

        $.ajax({
            url: 'ajax/ajax_getUsers.php',
            type: 'post',
            data: {depart:deptid},
            dataType: 'json',
            success:function(response){

              $.each(response, function(i,item){
                console.log(item.designation);

                $("#sel_lname").empty();
                $("#sel_lname").append("<option value='"+item.last_name+"'>"+item.last_name+"</option>");
                $("#mainEmail").val(item.email);
                $("#sel_role").empty();
                $("#sel_role").append("<option value='"+item.designation+"'>"+item.designation+"</option>");
                $("#sel_role").append(new Option("Operations", "Operations"));
                $("#sel_role").append(new Option("Principal", "Principal"));
                $("#sel_role").append(new Option("HR", "HR"));
                $("#sel_role").append(new Option("Database Adminstrator", "Database Adminstrator"));
              });
             

                var len = response.length;

                // $("#sel_lname").empty();
                // for( var i = 0; i<len; i++){
                //     var id = response[i]['applicantid'];
                //     var name = response[i]['lastname'];
                    
                //     $("#sel_lname").append("<option value='"+id+"'>"+name+"</option>");
                // }
                // $("#sel_mname").empty();
                // for( var i = 0; i<len; i++){
                //     var id = response[i]['applicantid'];
                //     var mname = response[i]['middlename'];
                    
                //     $("#sel_mname").append("<option value='"+id+"'>"+mname+"</option>");
                // }

               
                

            }
        });
    });
  }

</script>

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

<?php include 'footer.php' ?>