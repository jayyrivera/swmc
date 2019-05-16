<?php include 'header.php' ?>


  

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <div class="row">

          <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Applicants</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id = "countsAll"></div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-3x fa-users"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Vessels</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id = "countvess">500</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-3x fa-ship"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Emabrked</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id = "numberEmbarked">250</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-3x fa-user-check"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Active Applicants</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id = "appID">18</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-3x fa-user"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="sidebar-divider">

          <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" id="dataApplicants" name = "dataApplicant" width="100%" cellspacing="0" >
                <thead>
                  <tr id="filters">
                  </tr>
              </thead>
                </table>
              </div>
            </div>
            

         
      <!-- End of Main Content -->


    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

      $('document').ready(function()
      {

        $.ajax({
        type: "GET",
          dataType: "json",
          url:"ajax/ajax_allApplicantsCount.php",
          success :  function(result)
              {
                  $.each(result,function(index,item) 
                {
                    $('#countsAll').text(item.count);
                });
               
              }
     });

     $.ajax({
        type: "GET",
          dataType: "json",
          url:"ajax/ajax_countVessel.php",
          success :  function(result)
              {
                  $.each(result,function(index,item) 
                {
                    $('#countvess').text(item.count);
                });
               
              }
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
          url:"ajax/ajax_countActiveApplicants.php",
          success :  function(result)
              {
                  $.each(result,function(index,item) 
                {
                    $('#appID').text(item.count);
                });
               
              }
     });


          $.ajax({
            type: "GET",
          dataType: "json",
          url:"ajax/ajax_applicantPopulate.php",
          success :  function(result)
              {
                  //pass data to datatable
                  console.log(result); // just to see I'm getting the correct data.
                  $('#dataApplicants').DataTable({
                    "searching": true,
                    "ajax": "ajax/ajax_applicantPopulate.php", 
                    "header": true,
                    "columns" : [
                      {"data": "firstname", "title": "First Name"},
                      {"data": "lastname", "title": "Last Name"},
                      {"data": "middlename", "title": "Middle Name"},
                      {"data": "gender", "title": "Gender"},
                      {"data": "age", "title": "Age"},
                      {"data": "birthdate", "title": "Birthdate"},
                      {"data": "mobileno", "title": "Mobile No."},
                      {"data": "address","title": "Address"},
                      ]
                      
                  }) 
                     
                  $('#dataApplicants thead tr:eq(1) th').each( function () {
                    var title = $('#dataApplicants thead tr:eq(1) th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" placeholder="'+title+'" />' );
                } ); 


                    table.columns().every(function (index) {
                        $('#dataApplicants thead tr:eq(1) th:eq(' + index + ') input').on('keyup change', function () {
                            table.column($(this).parent().index() + ':visible')
                                .search(this.value)
                                .draw();
                        });
                    });  // just to see I'm getting the correct data.  // just to see I'm getting the correct data.
              }
          });
      });
     </script>
    <!-- End of Content Wrapper -->

<?php include 'footer.php' ?>