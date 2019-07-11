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
              <h3 class="m-0 font-weight-bold text-primary">Principal Request</h3>
              </div>
              <div class="col">
              
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
                <h4 class="modal-title">Requests</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form class="vessel" id="vesselAccount">
            <div class="modal-body">
            <div class="row">
                                <div class="col-md-12">
                                <label>Vessel:</label>
                                <input type="text" class="form-control form-control-user" id="request_vessel" name="request_vessel" placeholder="Destination" disabled>
                                <!-- <select class="form-control" id="request_vessel" name = "request_vessel" disabled> -->
                                </select>
                                </div>
                        
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                <label>Operation Date:</label>
                                <input type="text" class="form-control form-control-user" id="dateEnrolledRequest" name="dateEnrolledRequest"  disabled>
                                <!-- <input type="date" name="dateEnrolledRequest" id = "dateEnrolledRequest" min="1000-01-01" max="3000-12-31" class="form-control"> -->
                                </div>
                        
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                <label>Due Date:</label>
                                <input type="text" class="form-control form-control-user" id="due_date" name="due_date"  disabled>
                                <!-- <input type="date" name="due_date" id = "due_date" min="1000-01-01" max="3000-12-31" class="form-control"> -->
                                </div>
                        
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                <label>Destination:</label>
                                <input type="text" class="form-control form-control-user" id="destination" name="destination" placeholder="Destination" disabled>
                                </div>
                        
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-10">
                                <label>Total Capacity:</label>
                                <input type="number" class="form-control form-control-user" id="capacity" name="capacity" placeholder="Capacity" disabled>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                <label>Remarks:</label>
                                <textarea class="form-control" rows="3" id="remarksReq" name = "remarksReq" disabled></textarea>
                                </div>
                            </div>

                            <br>

            </div>
          </div>
            </form>
            <!-- Modal footer -->

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

 
     $('#vesselsData').on('click', 'tr', function () {
        var name = $('td', this).eq(4).text();
    
        console.log(name);
        // $('#DescModal').modal("show");
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
                    "ajax": "ajax/ajax_requestPrincipalList.php", 
                    "header": true,
                   
                    "columns" : [
                      {"data": "vesselname", "title": "Vessel Name"},
                      {"data": "operation_date", "title": "Operation Date"},
                      {"data": "due_date", "title": "Due Date"},
                      {"data": "destination", "title": "Destination"},
                      {"data": "total_capacity", "title": "Total Capacity"},
                      {"data": "remarks", "title": "Remarks",render: function ( data, type, row ) {
                            return data.length > 10 ?
                                data.substr( 0, 10 ) +'…' :
                                data;
                        }},
                      {"render": function(data, type, row) {return '<button class="btn btn-primary" data-toggle="modal" data-remarks="'+row.remarks+'" data-total_capacity="'+row.total_capacity+'" data-destination="'+row.destination+'" data-due_date="'+row.due_date+'" data-vesselname="'+row.vesselname+'" data-operation_date="'+row.operation_date+'"data-status="'+row.status+'" data-target="#myModal">CLICK</button>'} }
                      
                      ],
                      
                      
                  })  // just to see I'm getting the correct data.
              }
              
          });
          $("#myModal").on('show.bs.modal', function (e) {
    var triggerLink = $(e.relatedTarget);
    var vesselname = triggerLink.data("vesselname");
    var operation_date = triggerLink.data("operation_date");
    var due_date = triggerLink.data("due_date");
    var destination = triggerLink.data("destination");
    var total_capacity = triggerLink.data("total_capacity");
    var remarks = triggerLink.data("remarks");
    // $(this).find(".modal-body").html("<h5>id: "+fieldname+"</h5>");
    document.getElementById("request_vessel").value = vesselname
    document.getElementById("dateEnrolledRequest").value = operation_date
    document.getElementById("due_date").value = due_date
    document.getElementById("destination").value = destination
    document.getElementById("capacity").value = total_capacity
    document.getElementById("remarksReq").value = remarks
});
     
          
         

        
  });

</script>

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

<?php include 'footer.php' ?>