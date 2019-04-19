<?php include 'header.php' ?>

    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Embarked</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">25</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-3x fa-user-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
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
        </div>

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
                                    <select class="form-control" id="vesselStatus" name = "vesselStatus">
                                        <option value="" disabled selected>Status</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-user" id="rank" name = "rank" placeholder="Rank">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-user" id="firstName" name = "firstName" placeholder="First Name">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-user" id="lastName" name = "lastName" placeholder="Last Name">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-user" id="middleName" name = "middleName" placeholder="Middle Name">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-user" id="vessel" name = "vessel" placeholder="Vessel">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-user" id="type" name = "type" placeholder="Type">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-user" id="gross" name = "gross" placeholder="Gross Tonage">
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
                                    <select class="form-control" id="disembarkedFlight" name = "disembarkedFlight">
                                        <option value="" disabled selected>Disembarked</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
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

                    <div class="card shadow mb-4">
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
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Remarks</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="form-control" rows="3" id="remards" name = "remards"></textarea>
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

     
  
     $('#addEmabarked').on('click', function(e) {
      
    
      var str = $( "#embarkForm" ).serialize();
      console.log(str)
    
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
          url:"ajax/ajax_vesselPopulate.php",
          success :  function(result)
              {
                  //pass data to datatable
                  console.log(result);
                  $('#embarkTable').DataTable({
                    "searching": true,
                    "ajax": "ajax/ajax_embarkationPopulate.php", 
                    "header": true,
                    "columns" : [
                      {"data": "status", "title": "Status"},
                      {"data": "rank", "title": "Rank"},
                      {"data": "vessel", "title": "Vessel"},
                      {"data": "type", "title": "Type"},
                      {"data": "grossTonage", "title": "Gross Tonage"},
                      {"data": "dateEnrolled", "title": "Date Enrolled"},
                      {"data": "port_fdids_1", "title": "Port"},
                      {"data": "duration","title": "Duration"},
                      {"data": "disembarked_fdids_1","title": "Dismebarked (Flight)"},
                      {"data": "embarkedDate_sbds","title": "Embarked (Seamans Book)"},
                      {"data": "disembarkedDate_sbds","title": "Disembarked (Seamans Book)"},
                      {"data": "performanceEvaluation","title": "Performance"},
                      {"data": "willingnessToJoin","title": "Williness to Join"},
                      {"data": "availability","title": "Availability"},
                      {"data": "nextVessel","title": "Next Vessel"},
                      {"data": "license","title": "License"},  
                      {"data": "commentFromPrin","title": "Comments"},  
                      {"data": "remarks","title": "Remarks"}
                      ]
                      
                  })  // just to see I'm getting the correct data.
              }
          });
  });

</script>

    <?php include 'footer.php' ?>