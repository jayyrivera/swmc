<?php include 'header.php' ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h1 mb-2 text-primary">SWMC Manpower and Deployment System</h1>

        <br>

          <!-- DataTales Example -->
          <form class="vessel" id="rankRegister">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <div class="row">
              <div class="col">
              <h3 class="m-0 font-weight-bold text-primary">Add Rank</h3>
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
                                <div class="col-md-4">
                                <label>Rank</label>
                                <input type="text" class="form-control form-control-user" id="rankName" name="rankName" placeholder="Rank">
                                </div>
                                <div class="col-md-4">
                                <label>Rank Code</label>
                                <input type="text" class="form-control form-control-user" id="rankCode" name="rankCode" placeholder="Rank Code">
                                </div>
                                <div class="col-md-4">
                                <label>Rank Category</label>
                                <input type="text" class="form-control form-control-user" id="rankCat" name="rankCat" placeholder="Rank Cetegory">
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
                                <button class="btn btn-primary btn-user btn-block" id="registerRank">
                                            Register Rank
                                            </button>

            </div>
          </div>
        </form>
        </div>
        <!-- /.container-fluid -->


<script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

    $(function() {
      // $("#registeralert").hide();
    
        $('#registerRank').on('click', function(e) {
            e.preventDefault(); 
            if($("#rankName").val() == "" || $("#rankCode").val() == "" || $("#rankCat").val() == "" ){
          $("#registeralert").show(); //to show alert pane
          $("#textalertregister").text("Please fill out all the fields!"); // set text alert pane
          return false; // to break
        }
        var str = $( "#rankRegister" ).serialize();
        $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + str,
          url:"ajax/ajax_registerRank.php",
          success:function(data) {

            if(data.status ==1){
              alert(data.message);
              $('#rankRegister')[0].reset()
            }else{
              //error message here
              alert(data.message);
            }

          }
        });
    });

    });

</script>

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

<?php include 'footer.php' ?>