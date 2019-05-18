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
              <h3 class="m-0 font-weight-bold text-primary">Documents</h3>
              </div>
              <div class="col-md-2">
              <!-- <a href="#" class="btn btn-primary btn-icon-split" style="float: right;" data-toggle="modal" data-target="#myModal">
                    <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add record</span>
                  </a> -->
                </div>
              </div>
            </div>
            
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="vesselsData" name = "dataApplicant" width="100%" cellspacing="0" >
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

        <!-- Modal -->
        <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Document</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form class="vessel" id="vesselAccount">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control form-control-user" id="docname" name ="docname" placeholder="Vessel No.">
                    </div>
                    <div class="col-md-4">
                        <input type="date" id="datepassed" name = "datepassed" class="form-control form-control-user" >
                    </div>
                    <div class="col-md-4">
                        <input type="date" id="datexp" name = "datexp" class="form-control form-control-user" >
                    </div>
                </div>

                <br>

                <div class="row">
                    
                    <br>
                    <div class = "col-md-12">
                    <div class="alert alert-danger" role="alert" id="registeralert">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <span id="textalertregister"> </span>
                                </div>
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
    var oData;
    $(function() {
    $("#registeralert").hide();
     
  
     $('#registerVessel').on('click', function(e) {
        // e.preventDefault();

        if($("#docname").val() == "" || $("#datepassed").val() == "" || $("#datexp").val() == "" ){
          $("#registeralert").show(); //to show alert pane
          $("#textalertregister").text("Please fill out all the fields!"); // set text alert pane
          return false; // to break
        }
       
    
      var str = $( "#vesselAccount" ).serialize();
      console.log(str );
    

      var test = str + "&applicantid="+oData.applicantid;
      
      console.log(test);
     
      $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + test,
          url:"ajax/ajax_documentUpdate.php",
          success:function(data) {
            if(data.status ==1){
              alert(data.message);
              $('#vesselsData').DataTable().ajax.reload();
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
          url:"ajax/ajax_documentPopulate.php",
          
          success :  function(result)
              {
                  //pass data to datatable
                  console.log(result);
                 var table = $('#vesselsData').DataTable({
                    "searching": true,
                    "ajax": "ajax/ajax_documentPopulate.php", 
                    "header": true,
                    "columns" : [
                      {"data": "firstname", "title": "First Name"},
                      {"data": "lastname", "title": "Last Name"},
                      {"data": "middlename", "title": "Middle Name"},
                      {"data": "documentName", "title": "Document Name"},
                      {"data": "date_passed", "title": "Date Passed"},
                      {"data": "exp_date", "title": "Date Expiry"}
                      ]
                      
                  })
                  var oTable = $('#vesselsData'). dataTable();
                    $('#vesselsData').on('click', 'tr', function(){
                     oData = oTable.fnGetData(this);
                    console.log(oData);
                    $('#myModal').modal("show");
                    $("#docname").val(oData.documentName);
                    $("#datepassed").val(oData.date_passed);
                    $("#datexp").val(oData.exp_date);
                    });

                  
                  
                  
                  $('#vesselsData thead tr:eq(1) th').each( function () {
                    var title = $('#vesselsData thead tr:eq(1) th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" placeholder="'+title+'" />' );
                } ); 


                    table.columns().every(function (index) {
                        $('#vesselsData thead tr:eq(1) th:eq(' + index + ') input').on('keyup change', function () {
                            table.column($(this).parent().index() + ':visible')
                                .search(this.value)
                                .draw();
                        });
                    });  // just to see I'm getting the correct data.  // just to see I'm getting the correct data.
              }
          });


      
  });

</script>

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

<?php include 'footer.php' ?>