<?php include 'header.php' ?>

    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Embarked</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" id = "numberEmbarked"></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-3x fa-user-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">ALL LIST NG EMBARKATION</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">25</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-3x fa-ship"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <hr class="sidebar-divider">

        <br>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col">
                        <h3 class="m-0 font-weight-bold text-primary">Embakation</h3>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-primary btn-icon-split" style="float: right;" data-toggle="modal" data-target="#myModal">
                            <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                    </span>
                            <span class="text">Embark</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="embarkTable" width="100%" cellspacing="0">
                    <thead>
                  <tr id="filters">
                  </tr>
              </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Embarkation</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form class="emarked" id="embarkForm">
                <div class="modal-body">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Basic Information</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                <label>Status</label>
                                    <select class="form-control" id="vesselStatus" name = "vesselStatus">
                                        <option value="" disabled selected>Status</option>
                                        <option>Line up</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label> Select Rank</label>
                                    <!-- <input type="text" class="form-control form-control-user" id="rank" name = "rank" placeholder="Rank"> -->
                                    <select class="form-control" id="sel_rank" name = "sel_rank">
                                    <option value="" disabled selected>Select Rank</option>
                                    </select>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-4">
                                <label>First Name</label>
                                    <!-- <input type="text" class="form-control form-control-user" id="firstName" name = "firstName" placeholder="First Name"> -->
                                    <select class="form-control" id="sel_name" name = "sel_name">
                                    <option value="" disabled selected>Select Name</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                <label>Last Name</label>
                                    <!-- <input type="text" class="form-control form-control-user" id="lastName" name = "lastName" placeholder="Last Name"> -->
                                    <select class="form-control" id="sel_lname" name = "sel_lname"  disabled>
                                    <option value="" disabled selected>Select Last Name</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                <label>Middle Name</label>
                                    <!-- <input type="text" class="form-control form-control-user" id="middleName" name = "middleName" placeholder="Middle Name"> -->
                                    <select class="form-control" id="sel_mname" name = "sel_mname"  disabled>
                                    <option value="" disabled selected>Select Middle Name</option>
                                    </select>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-4">
                                <label>Vessel</label>
                                    <!-- <input type="text" class="form-control form-control-user" id="vessel" name = "vessel" placeholder="Vessel"> -->
                                    <select class="form-control" id="sel_vessel" name = "sel_vessel" >
                                    </select>
                                </div>
                                <div class="col-md-4">
                                <label>Type</label>
                                    <!-- <input type="text" class="form-control form-control-user" id="sel_type" name = "sel_type" placeholder="Type"  disabled> -->
                                    <select class="form-control" id="sel_type" name = "sel_type" disabled>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                <label>Gross</label>
                                    <!-- <input type="text" class="form-control form-control-user" id="sel_gross" name = "sel_gross" placeholder="Gross Tonage"  disabled> -->
                                    <select class="form-control" id="sel_gross" name = "sel_gross" disabled>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Flight Details & Immigration Date Stamp</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Date Enrolled</label>
                                    <input type="date" name="dateEnrolled" id = "dateEnrolled" min="1000-01-01" max="3000-12-31" class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-user" id="port" name = "port" placeholder="Port">
                                </div>
                                <div class="col-md-6">
                                    <!-- <select class="form-control" id="disembarkedFlight" name = "disembarkedFlight">
                                        <option value="" disabled selected>Disembarked</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select> -->
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Disembarked</label>
                                    <input type="date" name="disembarked" id ="disembarked" min="1000-01-01" max="3000-12-31" class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-user" id="duration" name = "duration" placeholder="Duration">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Seamans Book Date Stamp</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Embarked Date</label>
                                    <input type="date" name="embarkedDate" id ="embarkedDate" min="1000-01-01" max="3000-12-31" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Disembarked Date</label>
                                    <input type="date" name="disembarkedDate" id ="disembarkedDate" min="1000-01-01" max="3000-12-31" class="form-control">
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Evaluation</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-user" id="performance" name = "performance" placeholder="Performance Evaluation">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-user" id="will" name = "will" placeholder="Willingness to join">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-user" id="availability" name = "availability" placeholder="Availability">
                                </div>

                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-user" id="next" name = "next" placeholder="Next Vessel">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-user" id="license" name = "license" placeholder="License">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-user" id="comment" name = "comment" placeholder="Comment from the principal">
                                </div>

                            </div>
                        </div>
                    </div> -->

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Remarks</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="form-control" rows="3" id="remards" name = "remards"></textarea>
                                </div>
                                <div class = "col-md-12">
                                <div class="alert alert-danger" role="alert" id="registeralert">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <span id="textalertregister"> </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                </form>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id = "addEmabarked" name = "addEmabarked">Add</button>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

    $(function() {
        $.fn.dataTable.ext.errMode = 'none';
     
        $("#registeralert").hide();
     $('#addEmabarked').on('click', function(e) {

        if($("#vesselStatus").val() == "" || $("#sel_rank").val() == "" || $("#sel_name").val() == "" || $("#sel_lname").val() == "" ||  $("#sel_mname").val() == "" ||  $("#sel_vessel").val() == "" ||  $("#sel_type").val() == ""
        ||  $("#sel_gross").val() == "" ||  $("#dateEnrolled").val() == "" ||  $("#port").val() == "" ||  $("#disembarked").val() == "" ||  $("#duration").val() == "" ||  $("#embarkedDate").val() == "" ||  $("#disembarkedDate").val() == "" ||  $("#remards").val() == "" ){
          $("#registeralert").show(); //to show alert pane
          $("#textalertregister").text("Please fill out all the fields!"); // set text alert pane
          return false; // to break
        }
 
      var str = $( "#embarkForm" ).serialize();
      console.log(str)
      $("#sel_type").text();
      $("#sel_gross").text();
      e.preventDefault();
      $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + str,
          url:"ajax/ajax_embarkationApplicant.php",
          success:function(data) {
            if(data.status ==1){
              alert(data.message);
            }else{
              //error message here
              alert(data.message);
            }
          }
        });
        $('#embarkForm')[0].reset();
     }); 

     $.ajax({
        type: "GET",
          dataType: "json",
          url:"ajax/ajax_countOfEmbarked.php",
          success :  function(result)
              {
                  $.each(result,function(index,item) 
                {
                    $('#numberEmbarked').text(item.count);
                });
               
              }
     });

      $.ajax({
        type: "GET",
          dataType: "json",
          url:"ajax/ajax_vesselPopulate.php",
          success :  function(result)
              {
                  
                  //pass data to datatable
                  console.log("RESULT",result);
                  $('#embarkTable').DataTable({
                    "searching": true,
                    "responsive": true,
                    "ajax": "ajax/ajax_embarkationPopulate.php", 
                    "header": true,
                    "columns" : [
                      {"data": "status", "title": "Status"},
                      {"data": "rank", "title": "Rank"},
                      {"data": "firstname", "title": "First Name"},
                      {"data": "lastname", "title": "Last Name"},
                      {"data": "vessel", "title": "Vessel"},
                    //   {"data": "type", "title": "Type"},
                    //   {"data": "grossTonage", "title": "Gross Tonage"},
                      {"data": "dateEnrolled", "title": "Date Enrolled"},
                      {"data": "port_fdids_1", "title": "Port"},
                      {"data": "duration","title": "Duration"},
                    //   {"data": "disembarked_fdids_1","title": "Dismebarked (Flight)"},
                      {"data": "embarkedDate_sbds","title": "Embarked (Seamans Book)"},
                      {"data": "disembarkedDate_sbds","title": "Disembarked (Seamans Book)"},
                    //   {"data": "performanceEvaluation","title": "Performance"},
                    //   {"data": "willingnessToJoin","title": "Williness to Join"},
                    //   {"data": "availability","title": "Availability"},
                    //   {"data": "nextVessel","title": "Next Vessel"},
                    //   {"data": "license","title": "License"},  
                    //   {"data": "commentFromPrin","title": "Comments"},  
                      {"data": "remarks","title": "Remarks"}
                      ]
                      
                  }) 

                  $('#embarkTable thead tr:eq(1) th').each( function () {
                    var title = $('#embarkTable thead tr:eq(1) th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" placeholder="'+title+'" />' );
                } ); 


                    table.columns().every(function (index) {
                        $('#embarkTable thead tr:eq(1) th:eq(' + index + ') input').on('keyup change', function () {
                            table.column($(this).parent().index() + ':visible')
                                .search(this.value)
                                .draw();
                        });
                    });  // just to see I'm getting the correct data.
                   // just to see I'm getting the correct data.
              }
          });
          selectUser();
          populateBaseID();
          selectRank();
          populateVessel();
        
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

    $.getJSON("ajax/ajax_selectActiveEmbark.php",function(data){
        console.log("dsadddddddddddddddddddddddd",data);
        var items="";
        $.each(data,function(index,item) 
        {
          items+="<option value='"+item.applicantId+"'>"+item.firstname+"</option>";
        });
        $("#sel_name").html(items); 
      });

      $.getJSON("ajax/ajax_selectVessel.php",function(data){
        console.log(data);
        var items="";
        $.each(data,function(index,item) 
        {
          items+="<option value='"+item.vesselname+"'>"+item.vesselname+"</option>";
        });
        $("#sel_vessel").html(items); 
      });
   
  }

  function selectRank(){
    // $.ajax({
    //     type: "GET",
    //       dataType: "json",
    //       url:"ajax/ajax_selectNameEmbark.php",
    //       success :  function(result){
    //           console.log(result);
    //       }
    // });

    $.getJSON("ajax/ajax_selectRank.php",function(data){
        console.log(data);
        var items="";
        $.each(data,function(index,item) 
        {
          items+="<option value='"+item.rank+"'>"+item.rank+"</option>";
        });
        $("#sel_rank").html(items); 
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

  function populateVessel(){
    $("#sel_vessel").change(function(){
        var deptid = $(this).val();
        console.log(deptid);

        $.ajax({
            url: 'ajax/ajax_autoPopulateVessel.php',
            type: 'post',
            data: {depart:deptid},
            dataType: 'json',
            success:function(response){
                console.log(response);

                var len = response.length;

                $("#sel_gross").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['grosstonage'];
                   
                    
                    $("#sel_gross").append("<option value='"+id+"'>"+id+"</option>");
                }
                $("#sel_type").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['type'];
                  
                    
                    $("#sel_type").append("<option value='"+id+"'>"+id+"</option>");
                }
            }
        });
    });
  }

</script>

    <?php include 'footer.php' ?>