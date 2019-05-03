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
              <h3 class="m-0 font-weight-bold text-primary">Applicant List</h3>
              </div>
              <div class="col">
            
                </div>
              </div>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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

      $('document').ready(function()
      {

          $.ajax({
            type: "GET",
          dataType: "json",
          url:"ajax/ajax_applicantPopulate.php",
          success :  function(result)
              {
                  //pass data to datatable
                  console.log(result); // just to see I'm getting the correct data.
                  $('#dataTable').DataTable({
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
              }
          });
      });
     </script>

<?php include 'footer.php' ?>