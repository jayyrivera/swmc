<?php include 'header.php' ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h1 mb-2 text-primary">SWMC Manpower and Deployment System</h1>

        <br>

          <!-- DataTales Example -->
          <form class="cert" id="certificateRegister">
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
                                <label>Certificate/Training Name</label>
                                <input type="text" class="form-control form-control-user" id="certificateName" name="certificateName" placeholder="Certificate/Training">
                                </div>
                                <div class="col-md-4">
                                <label>Category</label>
                                <input type="text" class="form-control form-control-user" id="certificateCat" name="certificateCat" placeholder="Category">
                                </div>
                            </div>

                            <br>
                                <button class="btn btn-primary btn-user btn-block" id="registerCert">
                                            Register
                                            </button>

            </div>
          </div>
        </form>
        </div>
        <!-- /.container-fluid -->


<script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

    $(function() {
    
        $('#registerCert').on('click', function(e) {
            e.preventDefault(); 
        var str = $( "#certificateRegister" ).serialize();
        $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + str,
          url:"ajax/ajax_certificatesRegister.php",
          success:function(data) {

            if(data.status ==1){
              alert(data.message);
              $('#registerCert')[0].reset()
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