<?php include 'header.php' ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

        <br>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <div class="row">
              <div class="col">
              <h3 class="m-0 font-weight-bold text-primary">Embarkation List</h3>
              </div>
              <div class="col">
              <a href="excelEmbark.php?export=true" class="btn btn-primary btn-icon-split" style="float: right;">
                    <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                    </span>
                    <span  class="text">Export to Excel</span>
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
        <!-- /.container-fluid -->




      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

    $(function() {  

    $.ajax({
        type: "GET",
          dataType: "json",
          url:"ajax/ajax_vesselPopulate.php",
          success :  function(result)
              {
                  //pass data to datatable
                  console.log(result);
                 var table = $('#embarkTable').DataTable({
                    "searching": true,
                    "ajax": "ajax/ajax_embarkationPopulate.php", 
                    "header": true,
                    "columns" : [
                      {"data": "status", "title": "Status"},
                      {"data": "rank", "title": "Rank"},
                      {"data": "firstname", "title": "First Name"},
                      {"data": "lastname", "title": "Last Name"},
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
              }
          });
        });

</script>

<?php include 'footer.php' ?>