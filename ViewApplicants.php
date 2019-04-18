<?php include 'header.php' ?>



        <!-- Begin Page Content --> 
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h1 mb-2 text-primary">SWMC Manpower and Deployment System</h1>

        <br>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Newly Added Applicants</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataApplicants" name = "dataApplicants" width="100%" cellspacing="0" >
                  
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
                      "searching": false, //this is disabled because I have a custom search.
                      "aaData": [result], //here we get the array data from the ajax call.
                      "aoColumns": [
                  { "sTitle": "First Name" },
                  { "sTitle": "Last Name" },
                  { "sTitle": "Middle Name" },
                  { "sTitle": "Gender" },
                  { "sTitle": "Age" },
                  { "sTitle": "BirthDate" },
                  { "sTitle": "Mobile No." },
                  { "sTitle": "Address" },
                ] //this isn't necessary unless you want modify the header
                  //names without changing it in your html code. 
                  //I find it useful tho' to setup the headers this way.
        
                  });
              }
          });
      });
     </script>
      <!-- End of Footer -->

 

    </div>

 
    
    <!-- End of Content Wrapper -->

   
    

<?php include 'footer.php' ?>