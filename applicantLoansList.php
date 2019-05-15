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
              <h3 class="m-0 font-weight-bold text-primary">Loans List</h3>
              </div>
              <div class="col">
              <a href="excel.php?export=true" class="btn btn-primary btn-icon-split" style="float: right;">
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
              <table class="table table-bordered" id="loansList" width="100%" cellspacing="0">
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
    //     $('#loansExport').click(function(){  
          
    //        var excel_data = $('#loansList').html();  
    //        result = encodeURIComponent(excel_data);
    //     //    var page = "excel.php?data=" + result;  
    //     //    window.location = page;  
    //        console.log(excel_data);
    //   });   

        $.ajax({
        type: "GET",
          dataType: "json",
          url:"ajax/ajax_loanPopulate.php",
          success :  function(result)
              {
                  //pass data to datatable
                  console.log("loans", result);
                 var table = $('#loansList').DataTable({
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
                      
                  })
                  
                  $('#loansList thead tr:eq(1) th').each( function () {
                    var title = $('#loansList thead tr:eq(1) th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" placeholder="'+title+'" />' );
                } ); 


                    table.columns().every(function (index) {
                        $('#loansList thead tr:eq(1) th:eq(' + index + ') input').on('keyup change', function () {
                            table.column($(this).parent().index() + ':visible')
                                .search(this.value)
                                .draw();
                        });
                    });  // just to see I'm getting the correct data.  // just to see I'm getting the correct data.
              }
          });
        });

</script>

<?php include 'footer.php' ?>