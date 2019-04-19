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
              <h3 class="m-0 font-weight-bold text-primary">Vessels</h3>
              </div>
              <div class="col">
              <a href="#" class="btn btn-primary btn-icon-split" style="float: right;" data-toggle="modal" data-target="#myModal">
                    <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add record</span>
                  </a>
                </div>
              </div>
            </div>
            
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="vesselsData" name = "dataApplicant" width="100%" cellspacing="0" >
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
                <h4 class="modal-title">Add Vessel</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form class="vessel" id="vesselAccount">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                        <input type="text" class="form-control form-control-user" id="vesselNo" name ="vesselNo" placeholder="Vessel No.">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control form-control-user" id="vesselName" name ="vesselName" placeholder="Vessel Name">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control form-control-user" id="vesselPrincipal" name ="vesselPrincipal" placeholder="Principal">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control form-control-user" id="vesselFlag" name ="vesselFlag" placeholder="Flag">
                    </div>
                </div>

                <br>

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

            </div>
            </form>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" id="registerVessel" class="btn btn-primary" data-dismiss="modal">Add</button>
            </div>
        </div>
    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

    $(function() {

     
  
     $('#registerVessel').on('click', function(e) {
      
    
      var str = $( "#vesselAccount" ).serialize();
      console.log(str)
    
      e.preventDefault();
      $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + str,
          url:"ajax/ajax_vesselRegistration.php",
          success:function(data) {
            if(data.status ==1){
              alert(data.message);
            }else{
              //error message here
              alert(data.message);
            }
          }
        });
        $('#vesselAccount')[0].reset();
     }); 

      $.ajax({
            type: "GET",
          dataType: "json",
          url:"ajax/ajax_vesselPopulate.php",
          success :  function(result)
              {
                  //pass data to datatable
                  console.log(result);
                  $('#vesselsData').DataTable({
                    "searching": true,
                    "ajax": "ajax/ajax_vesselPopulate.php", 
                    "header": true,
                    "columns" : [
                      {"data": "vesselno", "title": "Vessel No"},
                      {"data": "vesselname", "title": "Vessel Name"},
                      {"data": "principal", "title": "Principal"},
                      {"data": "flag", "title": "Flag"},
                      {"data": "grosstonage", "title": "Gross Tonage"},
                      {"data": "jsu", "title": "JSU"},
                      {"data": "enginemake", "title": "Engine Make"},
                      {"data": "portregistry","title": "PortRegistry"},
                      {"data": "officialno","title": "Official No."},
                      {"data": "cba","title": "CBA"},
                      {"data": "imono","title": "IMO No."},
                      {"data": "vesselabr","title": "Vessel Abr"},
                      {"data": "status","title": "Status"},
                      {"data": "hpkw","title": "HP (KW)"},
                      {"data": "classification","title": "Classification"},
                      {"data": "type","title": "Type"},  
                      {"data": "dateenrolled","title": "Date Enrolled"},  
                      {"data": "yearbuilt","title": "Year Built"}
                      ]
                      
                  })  // just to see I'm getting the correct data.
              }
          });
  });

</script>

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

<?php include 'footer.php' ?>