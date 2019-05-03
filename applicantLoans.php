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
              <h3 class="m-0 font-weight-bold text-primary">Loans</h3>
              </div>
              <div class="col">
              <a href="#" class="btn btn-primary btn-icon-split" style="float: right;" data-toggle="modal" data-target="#myModal">
                    <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add Loan records</span>
                  </a>
                </div>
              </div>
            </div>
            
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="loanData" name = "dataApplicant" width="100%" cellspacing="0" >
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Modal -->
        <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Loans</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form class="vessel" id="loanAccounts">
                
            <div class="modal-body">
            <div class="row">
                                <div class="col-md-4">
                                    <!-- <input type="text" class="form-control form-control-user" id="firstName" name = "firstName" placeholder="First Name"> -->
                                    <select class="form-control" id="sel_name" name = "sel_name">
                                    <option value="" disabled selected>Select Name</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="text" class="form-control form-control-user" id="lastName" name = "lastName" placeholder="Last Name"> -->
                                    <select class="form-control" id="sel_lname" name = "sel_lname">
                                    <option value="" disabled selected>Select Last Name</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="text" class="form-control form-control-user" id="middleName" name = "middleName" placeholder="Middle Name"> -->
                                    <select class="form-control" id="sel_mname" name = "sel_mname">
                                    <option value="" disabled selected>Select Middle Name</option>
                                    </select>
                                </div>
                            </div>

                            <br>

                <div class="row">
                    <div class="col-md-4">
                    <select class="form-control" id = "loan_cat" name ="loan_cat">
                    <option value="" disabled selected>Loan Category</option>
                      <option>abc</option>
                      <option>abcd</option>
                      <option>abce</option>
                    </select>
                    </div>
                    <div class="col-md-4">
                    <select class="form-control" id = "loan_type" name ="loan_type">
                    <option value="" disabled selected>Loan Type</option>
                      <option>abc</option>
                      <option>abc</option>
                      <option>abc</option>
                    </select>
                    </div>
                    <div class="col-md-4">
                    <select class="form-control" id = "loanStatus" name ="loanStatus">
                    <option value="" disabled selected>Status</option>
                      <option>Actve</option>
                      <option>Completed</option>
                    </select>
                    </div>
                </div>

                <br>

              

                <!-- <br>

                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-user" id="vesselGross" name ="vesselGross" placeholder="Gross Tonage">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-user" id="vesselJSU" name ="vesselJSU" placeholder="JSU">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-user" id="vesselEngine" name ="vesselEngine" placeholder="Engine Make">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-user" id="vesselPort" name ="vesselPort" placeholder="Port Registry">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-user" id="vesselOff" name ="vesselOff" placeholder="Official No">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-user" id="vesselCBA" name ="vesselCBA" placeholder="CBA">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-user" id="vesselIMO" name ="vesselIMO" placeholder="IMO No.">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-user" id="vesselAbr" name ="vesselAbr" placeholder="Vessel Abr">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-user" id="vesselStatus" name ="vesselStatus" placeholder="Status">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-user" id="vesselHp" name ="vesselHp" placeholder="HP (KW)">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-user" id="classificationVessel" name ="ClassificationVessel" placeholder="Classification">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-user" id="vesselType" name ="vesselType" placeholder="Type">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-6">
                        <label>Date Enrolled</label>
                        <input type="date"  min="1000-01-01" max="3000-12-31" name ="dateEnrolled" id="dateEnrolled" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Year Built</label>
                        <input type="date"  min="1000-01-01" max="3000-12-31" name ="yearBuilt" id="yearBuilt" class="form-control">
                    </div>

                </div>

            </div> -->
            </form>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" id="registerLoan" class="btn btn-primary" data-dismiss="modal">Add</button>
            </div>
        </div>
    </div>
</div>

 <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

    $(function() {

     
  
     $('#registerLoan').on('click', function(e) {
      
    
      var str = $( "#loanAccounts" ).serialize();
      console.log(str)
    
      e.preventDefault();
      $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + str,
          url:"ajax/ajax_loanRegistration.php",
          success:function(data) {
            if(data.status ==1){
              alert(data.message);
            }else{
              //error message here
              alert(data.message);
            }
          }
        });
        $('#loanAccounts')[0].reset();
     }); 
 

      $.ajax({
        type: "GET",
          dataType: "json",
          url:"ajax/ajax_loanPopulate.php",
          success :  function(result)
              {
                  //pass data to datatable
                  console.log("loans", result);
                  $('#loanData').DataTable({
                    "searching": true,
                    "ajax": "ajax/ajax_loanPopulate.php", 
                    "header": true,
                    "columns" : [
                      {"data": "loan_existing", "title": "Status"},
                      {"data": "firstname", "title": "First Name"},
                      {"data": "lastname", "title": "Last Name"},
                      {"data": "loan_type", "title": "Loan Type"},
                      {"data": "loan_category", "title": "Loan Category"},
                      ]
                      
                  })  // just to see I'm getting the correct data.
              }
          });
          selectUser();
          populateBaseID();
        
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

    $.getJSON("ajax/ajax_selectNameEmbark.php",function(data){
        console.log(data);
        var items="";
        $.each(data,function(index,item) 
        {
          items+="<option value='"+item.applicantid+"'>"+item.firstname+"</option>";
        });
        $("#sel_name").html(items); 
      });
   
  }


  function populateBaseID(){
    $("#sel_name").change(function(){
        var deptid = $(this).val();
        console.log(deptid);

        $.ajax({
            url: 'ajax/ajax_autoPopulateNamesEmbark.php',
            type: 'post',
            data: {depart:deptid},
            dataType: 'json',
            success:function(response){
                console.log(response);

                var len = response.length;

                $("#sel_lname").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['applicantid'];
                    var name = response[i]['lastname'];
                    
                    $("#sel_lname").append("<option value='"+id+"'>"+name+"</option>");
                }
                $("#sel_mname").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['applicantid'];
                    var mname = response[i]['middlename'];
                    
                    $("#sel_mname").append("<option value='"+id+"'>"+mname+"</option>");
                }
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