<?php include 'header.php' ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h1 mb-2 text-primary">SWMC Manpower and Deployment System</h1>

        <br>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <div class="row">
              <div class="col">
              <h3 class="m-0 font-weight-bold text-primary">Vessels</h3>
              </div>
              <div class="col">
                </div>
              </div>
            </div>
            
            <div class="card-body">
            <div class="row">
                                <div class="col-md-4">
                                <label>Select Vessel No.</label>
                                    <!-- <input type="text" class="form-control form-control-user" id="firstName" name = "firstName" placeholder="First Name"> -->
                                    <select class="form-control" id="sel_vesselNo" name = "sel_vesselNo">
                                    <option value="" disabled selected>Select Vessel No.</option>
                                    </select>
                                </div>
                            </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->


<script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

    $(function() {

     
  selectUser()
//   populateBaseID()
    
  });

  function selectUser(){
    // $.ajax({
    //     type: "GET",
    //       dataType: "json",
    //       url:"ajax/ajax_selectNameEmbark.php",
    //       success :  function(result){
    //           console.log(result);
    //       }
    // });

    $.getJSON("ajax/ajax_selectVesselNo.php",function(data){
        console.log(data);
        var items="";
        $.each(data,function(index,item) 
        {
          items+="<option value='"+item.vesselid+"'>"+item.vesselno+"</option>";
        });
        $("#sel_vesselNo").html(items); 
      });
   
  }


  function populateBaseID(){
    $("#sel_name").change(function(){
        var deptid = $(this).val();
        console.log(deptid);

        $.ajax({
            url: 'ajax/ajax_autoPopulateNamesEmbark.php',
            type: 'post',
            data: {depart:deptid},
            dataType: 'json',
            success:function(response){
                console.log(response);

                var len = response.length;

                $("#sel_lname").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['applicantid'];
                    var name = response[i]['lastname'];
                    
                    $("#sel_lname").append("<option value='"+id+"'>"+name+"</option>");
                }
                $("#sel_mname").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['applicantid'];
                    var mname = response[i]['middlename'];
                    
                    $("#sel_mname").append("<option value='"+id+"'>"+mname+"</option>");
                }
            }
        });
    });
  }

</script>

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

<?php include 'footer.php' ?>