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
              <h3 class="m-0 font-weight-bold text-primary">Applicant Report</h3>
              </div>
              <div class="col">
              <!-- <a href="excelList.php?export=true" class="btn btn-primary btn-icon-split" style="float: right;"> -->
              <!-- <a href="ajax/generate_pdf.php" class="btn btn-primary btn-icon-split" style="float: right;">
                    <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                    </span>
                    <span  class="text">Export to Excel</span>
                  </a> -->
                </div>
              </div>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" id="applicantStatus" width="100%" cellspacing="0">
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


<!-- DataTables JS -->
 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.js"></script>

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
                 var table = $('#applicantStatus').DataTable({
                  // "dom": 'Bftip',
                    "ajax": "ajax/ajax_applicantPopulate.php", 
                    "header": true,
                    "columns" : [
                      {"data": "applicant_status", "title": "Status"},
                      {"data": "firstname", "title": "First Name"},
                      {"data": "lastname", "title": "Last Name"},
                      {"data": "middlename", "title": "Middle Name"},
                      {"data": "gender", "title": "Gender"},
                      {"data": "age", "title": "Age"},
                      {"data": "birthdate", "title": "Birthdate"},
                      {"data": "mobileno", "title": "Mobile No."},
                      {"data": "address","title": "Address"},
                      ],
                      "sDom": "Bfrtip",
                          buttons: [
                              'copyHtml5',
                              'excelHtml5',
                              'csvHtml5',
                              'pdfHtml5'
                          ]
                   
                      //not all should be displayed on reports most data are confidential and not all people should know it. this is called filtering.
                  });
                

                //   $('#applicantStatus thead tr:eq(1) th').each( function () {
                //     var title = $('#applicantStatus thead tr:eq(1) th').eq( $(this).index() ).text();
                //     $(this).html( '<input type="text" placeholder="'+title+'" />' );
                // } ); 


                //     table.columns().every(function (index) {
                //         $('#applicanapplicantStatustList thead tr:eq(1) th:eq(' + index + ') input').on('keyup change', function () {
                //             table.column($(this).parent().index() + ':visible')
                //                 .search(this.value)
                //                 .draw();
                //         });
                //     });
              }
          });
      });
     </script>

<?php include 'footer.php' ?>