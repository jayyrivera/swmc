<?php include 'header.php' ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h1 mb-2 text-primary">SWMC Manpower and Deployment System</h1>

        <br>

          <!-- DataTales Example -->
          <form class="vessel" id="loanRegister">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <div class="row">
              <div class="col">
              <h3 class="m-0 font-weight-bold text-primary">Loan Category</h3>
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
                                <label>Loan Category</label>
                                <input type="text" class="form-control form-control-user" id="loanCategory" name="loanCategory" placeholder="Loan Category">
                                </div>                        
                            </div>

                            <br>
                                <button class="btn btn-primary btn-user btn-block" id="registerCategory">
                                            Register Loan Category
                                            </button>

            </div>
          </div>

          <br>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <div class="row">
              <div class="col">
              <h3 class="m-0 font-weight-bold text-primary">Loan Type</h3>
              </div>
              </div>
            </div>
            
            <div class="card-body">
            <div class="row">
                                <div class="col-md-4">
                                <label>Loan Type</label>
                                <input type="text" class="form-control form-control-user" id="loanType" name="loanType" placeholder="Loan Type">
                                </div>
                                <div class="col-md-4">
                                <label>Loan Category</label>
                                    <select class="form-control" id="sel_loan_cat" name = "sel_loan_cat">
                                    <option value="" disabled selected>Select Category</option>
                                    </select>
                                </div>
                        
                            </div>

                            <br>
                                <button class="btn btn-primary btn-user btn-block" id="registerLoanType">
                                            Register Loan Type
                                            </button>

            </div>
          </div>


          
        </form>
        </div>
        <!-- /.container-fluid -->


<script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

    $(function() {
    
        $('#registerCategory').on('click', function(e) {
            e.preventDefault(); 
        var str = $( "#loanRegister" ).serialize();
        $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + str,
          url:"ajax/ajax_registerLoanCategory.php",
          success:function(data) {

            if(data.status ==1){
              alert(data.message);
              $('#loanRegister')[0].reset()
            }else{
              //error message here
              alert(data.message);
            }

          }
        });
    });

    $('#registerLoanType').on('click', function(e) {
            e.preventDefault(); 
        var str = $( "#loanRegister" ).serialize();
        console.log("STR", str);
        $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + str,
          url:"ajax/ajax_registerLoanType.php",
          success:function(data) {

            if(data.status ==1){
              alert(data.message);
              $('#loanRegister')[0].reset()
            }else{
              //error message here
              alert(data.message);
            }

          }
        });
    });

    registerLoanType()

    });

    function registerLoanType(){
      $.getJSON("ajax/ajax_selectLoanCategory.php",function(data){
        console.log(data);
        var items="";
        $.each(data,function(index,item) 
        {
          items+="<option value='"+item.category+"'>"+item.category+"</option>";
        });
        $("#sel_loan_cat").html(items); 
      });
    }

</script>

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

<?php include 'footer.php' ?>