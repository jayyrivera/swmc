<?php include 'header.php' ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

        <br>

          <!-- DataTales Example -->
          <form class="request" id="requestPrincipal">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <div class="row">
              <div class="col">
              <h3 class="m-0 font-weight-bold text-primary">Request</h3>
              </div>
              <div class="col">
              <!-- <a href="registration.php" class="btn btn-primary btn-icon-split" style="float: right;" data-toggle="modal" data-target="#myModal">
                    <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">New Account</span>
                  </a> -->
                </div>
              </div>
            </div>
            
            <div class="card-body">
            <div class="row">
                                <div class="col-md-12">
                                <label>Vessel:</label>
                                <select class="form-control" id="request_vessel" name = "request_vessel" >
                                </select>
                                </div>
                        
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                <label>Operation Date:</label>
                                <input type="date" name="dateEnrolledRequest" id = "dateEnrolledRequest" min="1000-01-01" max="3000-12-31" class="form-control">
                                </div>
                        
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                <label>Due Date:</label>
                                <input type="date" name="due_date" id = "due_date" min="1000-01-01" max="3000-12-31" class="form-control">
                                </div>
                        
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                <label>Destination:</label>
                                <input type="text" class="form-control form-control-user" id="destination" name="destination" placeholder="Destination">
                                </div>
                        
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-10">
                                <label>Total Capacity:</label>
                                <input type="number" class="form-control form-control-user" id="capacity" name="capacity" placeholder="Capacity">
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                <label>Remarks:</label>
                                <textarea class="form-control" rows="3" id="remarksReq" name = "remarksReq"></textarea>
                                </div>
                            </div>

                            <br>

                            <div class = "col-md-12">
                              <div class="alert alert-danger" role="alert" id="registeralert">
                                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                              <span id="textalertregister"> </span>
                                          </div>
                              </div>

                            <br>
                                <button class="btn btn-primary btn-user btn-block" id="registerRequest">
                                            Request
                                            </button>
                                            

            </div>
          </div>
        </form>
        </div>
        <!-- /.container-fluid -->


<script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">
   
    $(function() {

     
      $("#registeralert").hide();
        $.getJSON("ajax/ajax_selectVessel.php",function(data){
        console.log(data);
        var items="";
        $.each(data,function(index,item) 
        {
          items+="<option value='"+item.vesselname+"'>"+item.vesselname+"</option>";
        });
        $("#request_vessel").html(items); 
      });

      $('#registerRequest').on('click', function(e) {

        if($("#request_vessel").val() == "" || $("#dateEnrolledRequest").val() == "" || $("#due_date").val() == "" || $("#destination").val() == "" ||  $("#capacity").val() == "" ){
          $("#registeralert").show(); //to show alert pane
          $("#textalertregister").text("Please fill out all the fields!"); // set text alert pane
          return false; // to break
        }


        var str = $( "#requestPrincipal" ).serialize();
      console.log(str)
    
      e.preventDefault();
      $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + str,
          url:"ajax/ajax_registerRequest.php",
          success:function(data) {
            if(data.status ==1){
              alert(data.message);
            }else{
              //error message here
              alert(data.message);
            }
          }
        });
        $('#requestPrincipal')[0].reset();
             });
    });

    function addss(){
       
    }

</script>

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

<?php include 'footer.php' ?>