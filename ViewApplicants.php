<?php include 'header.php' ?>



        <!-- Begin Page Content --> 
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h1 mb-2 text-primary">SWMC Manpower and Deployment System</h1>

        <br>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
             
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataApplicants" name = "dataApplicant" width="100%" cellspacing="0" >
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
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
              }
          });
      });
     </script>
      <!-- End of Footer -->

 

    </div>

 
    
    <!-- End of Content Wrapper -->

   
    

<?php include 'footer.php' ?>