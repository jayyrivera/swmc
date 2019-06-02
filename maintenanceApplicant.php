<?php include 'header.php' ?>




<!-- Begin Page Content -->
<body class="bg-gradient-primary">
<form class="applicant" id="registerApplicant"  method="POST" enctype="multipart/form-data">
<div class="container-fluid">

      <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Applicant Registration</h1>
        </div>

            <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Application Personal Data</h6>
            </div>
            <div class="card-body">

        

 <!-- Personal Background -->
            <div class="row">
              <div class="col-md-4">
                <div class="box">
                <img id="image" class ="box" style = "height: -webkit-fill-available; width: -webkit-fill-available;" />
                </div>
              
                <div class="col-md-12"> 
                
                        <input class="form-control form-control-user" type="file" name="files" id="files" multiple >
                        <br>
                        <!-- <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" id="submit" /> -->
                
                  </div>
              </div>
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-4"> 
                  <label>First Name</label>
                                    <!-- <input type="text" class="form-control form-control-user" id="firstName" name = "firstName" placeholder="First Name"> -->
                                    <select class="form-control" id="sel_name" name = "sel_name">
                                    <option value="" disabled selected>Select Name</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                <label>Last Name</label>
                                    <input type="text" class="form-control form-control-user" id="lastName" name = "lastName" placeholder="Last Name">
                                    <!-- <select class="form-control" id="sel_lname" name = "sel_lname" disabled>
                                    <option value="" disabled selected>Select Last Name</option> -->
                                    </select>
                                </div>
                                <div class="col-md-4">
                                <label>Middle Name</label>
                                    <input type="text" class="form-control form-control-user" id="middleName" name = "middleName" placeholder="Middle Name">
                                    <!-- <select class="form-control" id="sel_mname" name = "sel_mname" disabled>
                                    <option value="" disabled selected>Select Middle Name</option> -->
                                    </select>
                                </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-sm-4"> 
                    <select class="form-control" id = "cStatus" name ="cStatus">
                    <option value="" disabled selected>Civil Status</option>
                      <option>Married</option>
                      <option>Single</option>
                      <option>Divorced</option>
                      <option>Widowed</option>
                    </select>
                  </div>
                  <div class="col-sm-3"> 
                    <select class="form-control" id = "genderID" name ="genderID">
                    <option value="" disabled selected>Gender</option>
                      <option>Male</option>
                      <option>Female</option>

                    </select>
                  </div>
                  <div class="col-md-3">
                      <input type="text" class="form-control form-control-user" id = "ageID" name ="ageID" placeholder="Age">
                  </div>
                  <div class="col-md-2">
                      <input type="text" class="form-control form-control-user" id="suffixID" name = "suffixID" placeholder="Suffix">
                  </div>
              </div>

              <br>
              
                <div class="row">
                  <div class="col-md-12">
                      <input type="text" class="form-control form-control-user" id="address" name ="address" placeholder="Address">
                </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-6">
                      <input type="text" class="form-control form-control-user" id="religion" name = "religion" placeholder="Religion">
                </div>
                <div class="col-md-6">
                      <input type="text" class="form-control form-control-user" id="citizenship" name = "citizenship" placeholder="Citizenship">
                </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-6">
                  <input type="date" id="dob" name = "dob" class="form-control form-control-user" >
                </div>
                <div class="col-md-6">
                      <input type="text" class="form-control form-control-user" id="placeofbirth" name = "placeofbirth" placeholder="Place of Birth">
                </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-2">
                  <input type="text" class="form-control form-control-user" id="height" name = "height" placeholder="Height">
                </div>
                <div class="col-md-2">
                      <input type="text" class="form-control form-control-user" id="weight" name = "weight" placeholder="Weight">
                </div>
                <div class="col-md-4">
                      <input type="text" class="form-control form-control-user" id="cellphone" name = "cellphone" placeholder="Cellphone">
                </div>
                <div class="col-md-4">
                      <input type="text" class="form-control form-control-user" id="telephone" name = "telephone" placeholder="Telephone">
                </div>
              </div>

              <br>

              <div class="row">
              <div class="col-sm-12"> 
                    <select class="form-control" id = "applicant_status" name ="applicant_status">
                    <option value="" disabled selected>Status</option>
                      <option>Active</option>
                      <option>Not Active</option>
                    </select>
                  </div>
              </div>
             



            </div>
            </div>
        </div>
    </div>

     <!-- Family Background -->
      <div class="card mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Family Background</h6>
          </div>
          <div class="card-body">

          <div class="row">
          <div class="col-md-12">
          <h1 class="h6 text-gray-900 mb-4">Name of Spouse:</h1>
                <div class="row">
                  <div class="col-md-3"> 
                      <input type="text" class="form-control form-control-user" id="firstNameSpouse" name = "firstNameSpouse" placeholder="First Name" >
                  </div>
                  <div class="col-md-3">
                      <input type="text" class="form-control form-control-user" id="lastNameSpouse" name = "lastNameSpouse" placeholder="Last Name">
                  </div>
                  <div class="col-md-3">
                      <input type="text" class="form-control form-control-user" id="middleNameSpouse" name = "middleNameSpouse" placeholder="Middle Name">
                  </div>
                  <div class="col-md-2">
                      <input type="text" class="form-control form-control-user" id="suffixSpouse" name = "suffixSpouse" placeholder="Suffix">
                  </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-2"> 
                      <input type="text" class="form-control form-control-user" id="children" name = "children" placeholder="No. of Children">
                  </div>
              </div>

              <br>

              <h1 class="h6 text-gray-900 mb-4">Father's name:</h1>
              <div class="row">
              <div class="col-md-3"> 
                      <input type="text" class="form-control form-control-user" id="fatherfirstName" name = "fatherfirstName" placeholder="First Name">
                  </div>
                  <div class="col-md-3">
                      <input type="text" class="form-control form-control-user" id="fatherlastName" name = "fatherlastName" placeholder="Last Name">
                  </div>
                  <div class="col-md-3">
                      <input type="text" class="form-control form-control-user" id="fathermiddleName" name = "fathermiddleName" placeholder="Middle Name">
                  </div>
                  <div class="col-md-2">
                      <input type="text" class="form-control form-control-user" id="fatherSuffix" name = "fatherSuffix" placeholder="Suffix">
                  </div>
              </div>


              <br>

              <h1 class="h6 text-gray-900 mb-4">Mothers's name:</h1>
              <div class="row">
              <div class="col-md-3"> 
                      <input type="text" class="form-control form-control-user" id="motherFirstName" name = "motherFirstName" placeholder="First Name">
                  </div>
                  <div class="col-md-3">
                      <input type="text" class="form-control form-control-user" id="motherLastName"  name = "motherLastName" placeholder="Last Name">
                  </div>
                  <div class="col-md-3">
                      <input type="text" class="form-control form-control-user" id="motherMiddleName" name = "motherMiddleName" placeholder="Middle Name">
                  </div>
                  <div class="col-md-2">
                      <input type="text" class="form-control form-control-user" id="motherSuffix"  name = "motherSuffix" placeholder="Suffix">
                  </div>
              </div>

         </div>  
        </div>
      </div>
    </div>

<!--Educational and Goverment Identities -->
    <div class="card mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Educational and Goverment Identities</h6>
          </div>
          <div class="card-body">

          <div class="row">
                  <div class="col-md-10"> 
                      <input type="text" class="form-control form-control-user" id="school" name = "school" placeholder="Last School Attended">
                  </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-3"> 
                      <input type="text" class="form-control form-control-user" id="fromEducation" name = "fromEducation" placeholder="From">
                  </div>
                  
                  <h6>TO</h6>

                  <div class="col-md-3"> 
                      <input type="text" class="form-control form-control-user" id="yearEducation" name = "yearEducation" placeholder="YEAR">
                  </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-3"> 
                      <input type="text" class="form-control form-control-user" id="sssno" name = "sssno" placeholder="SSS No.">
                  </div>

                  <div class="col-md-3"> 
                      <input type="text" class="form-control form-control-user" id="srcNo" name = "srcNo" placeholder="SRC/SID No.">
                  </div>

                  <div class="col-md-3"> 
                      <input type="text" class="form-control form-control-user" id="ofwNo" name = "ofwNo" placeholder="OFW E-Card No.">
                  </div>

                  <div class="col-md-3"> 
                      <input type="text" class="form-control form-control-user" id="phNo" name = "phNo" placeholder="Philhealth No.">
                  </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-3"> 
                      <input type="text" class="form-control form-control-user" id="pgbno" name ="pgbno"  placeholder="Pag-ibig No.">
                  </div>

                  <div class="col-md-3"> 
                      <input type="text" class="form-control form-control-user" id="passno" name = "passno" placeholder="Passport No.">
                  </div>
              </div>
          </div>
      </div>
      <div class="card mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Legal Beneficiaries and Dependents</h6>
          </div>
          <div class="card-body">

          <h1 class="h6 text-gray-900 mb-4">Beneficiaries:</h1>

          <div class="table-responsive">
                    <table class="table table-bordered" id="ben_table">
                    <tr>
                    <th width="30%">Name</th>
                    <th width="10%">Relationship</th>
                    <th width="45%">Address</th>
                    <th width="5%"></th>
                    </tr>
                    <tr>
                    <td contenteditable="true" class="item_name"></td>
                    <td contenteditable="true" class="item_rel"></td>
                    <td contenteditable="true" class="item_add"></td>
                    <td></td>
                    </tr>
                    </table>
                    <div align="right">
                        <button type="button" name="addBen" id="addBen" class="btn btn-success btn-xs">+</button>
                    </div>
            </div>

        

              <br>

              <h1 class="h6 text-gray-900 mb-4">Dependents:</h1>

              <div class="table-responsive">
                    <table class="table table-bordered" id="dep_table">
                    <tr>
                    <th width="30%">Name</th>
                    <th width="10%">Relationship</th>
                    <th width="45%">Date of Birth</th>
                    <th width="5%"></th>
                    </tr>
                    <tr>
                    <td contenteditable="true" class="item_namedep"></td>
                    <td contenteditable="true" class="item_reldep"></td>
                    <td contenteditable="true" class="item_dobdep"></td>
                    <td></td>
                    </tr>
                    </table>
                    <div align="right">
                        <button type="button" name="addDep" id="addDep" class="btn btn-success btn-xs">+</button>
                    </div>
            </div>

           
          </div>
      </div>
      <div class="card mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Allottee</h6>
          </div>
          <div class="card-body">

          <div class="row">
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="nameAllottee1" name = "nameAllottee1" placeholder="Name">
                  </div>
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="relAllottee1" name = "relAllottee1" placeholder="Relationship">
                  </div>
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="addAllottee1" name = "addAllottee1" placeholder="Address">
                  </div>
              </div>

              <br>

              <div class="row">
              <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="nameAllottee2" name = "nameAllottee2" placeholder="Name">
                  </div>
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="relAllottee2"  name = "relAllottee2" placeholder="Relationship">
                  </div>
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="addAllottee2" name = "addAllottee2" placeholder="Address">
                  </div>
              </div>

              <br>

              <div class="row">
              <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="nameAllottee3" name = "nameAllottee3" placeholder="Name">
                  </div>
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="relAllottee3" name = "relAllottee3" placeholder="Relationship">
                  </div>
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="addAllottee3" name = "addAllottee3" placeholder="Address">
                  </div>
              </div>

              <br>

              <div class="row">
              <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="nameAllottee4" name = "nameAllottee4" placeholder="Name">
                  </div>
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="relAllottee4"  name = "relAllottee4" placeholder="Relationship">
                  </div>
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="addAllottee4" name = "addAllottee4" placeholder="Address">
                  </div>
              </div>

              <br>

              <div class="row">
              <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="nameAllottee5" name = "nameAllottee5" placeholder="Name">
                  </div>
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="relAllottee5" name = "relAllottee5" placeholder="Relationship">
                  </div>
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="addAllottee5" name = "addAllottee5" placeholder="Address">
                  </div>
              </div>

              <br>

              <div class="row">
              <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="nameAllottee6" name = "nameAllottee6" placeholder="Name">
                  </div>
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="relAllottee6" name = "relAllottee6" placeholder="Relationship">
                  </div>
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="addressAllotte6" name = "addressAllotte6" placeholder="Address">
                  </div>
              </div>
              </div>
              </div>

              <div class="card mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">RPS</h6>
          </div>
          <div class="card-body">
          <div class="row">
                  <div class="col-md-6"> 
                      <input type="text" class="form-control form-control-user" id="agency" name = "agency" placeholder="Agency">
                  </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-6"> 
                      <input type="text" class="form-control form-control-user" id="principal" name = "principal" placeholder="Principal">
                  </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-6"> 
                      <input type="text" class="form-control form-control-user" id="vessel" name = "vessel" placeholder="Vessel">
                  </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-12"> 
                  <button class="btn btn-primary btn-user btn-block" id="registerApplicants">
                  Register Applicant
                </button>
                  </div>
                  </div>
                      <div class="alert alert-danger" role="alert" id="loginAlert">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       <span id="textLoginAlert"> </span>
                      </div>
              </div>

          </div>
    </div>
    </form>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

    
   $(function() {

    document.getElementById("files").onchange = function () {
            var reader = new FileReader();

            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                document.getElementById("image").src = e.target.result;
            };

            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        };

    var count = 1;
    $("#loginAlert").hide(); 

    $('#registerApplicants').on('click', function(e) {

        if($("#firstName").val() == "" || $("#lastName").val() == "" || $("#middleName").val() == "" ||
        $("#cStatus").val() == "" || $("#genderID").val() == "" || $("#ageID").val() == "" || $("#address").val() == "" ||
        $("#religion").val() == "" ||$("#citizenship").val() == "" ||$("#dob").val() == "" ||$("#placeofbirth").val() == "" ||
        $("#height").val() == "" ||$("#weight").val() == "" ||$("#cellphone").val() == "" ||
        $("#telephone").val() == "" ||$("#applicant_status").val() == "" ||$("#firstNameSpouse").val() == "" ||
        $("#lastNameSpouse").val() == "" ||   $("#middleNameSpouse").val() == "" ||   $("#children").val() == "" ||  $("#fatherfirstName").val() == "" ||  $("#fatherlastName").val() == "" ||
        $("#fathermiddleName").val() == "" ||  $("#motherFirstName").val() == "" ||  $("#motherLastName").val() == "" ||  $("#motherMiddleName").val() == "" ||  $("#school").val() == "" ||
        $("#fromEducation").val() == "" ||  $("#yearEducation").val() == "" ||  $("#sssno").val() == "" ||  $("#srcNo").val() == "" ||
        $("#ofwNo").val() == "" ||  $("#phNo").val() == "" ||  $("#pgbno").val() == "" ||  $("#passno").val() == "" ||  $("#agency").val() == "" || $("#principal").val() == "" || $("#vessel").val() == ""  ){
          $("#loginAlert").show(); //to show alert pane
          $("#textLoginAlert").text("Please fill out all the fields!"); // set text alert pane
          return false; // to break
        }

        var str = $( "#registerApplicant" ).serialize();
            console.log(str)
            var file = $('#files')[0].files[0]
      console.log(file.name);
      var datas = str+"&idname="+file.name;
      e.preventDefault();


      var formData = new FormData($("#registerApplicant")[0]);  
      console.log("formData",formData);                           
        $.ajax({
            url: 'ajax/ajax_imageUpdate.php', // point to server-side PHP script 
            dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: formData,                         
            type: 'post',
            success: function(php_script_response){
                // alert("picture moved"); // display response from the PHP script, if any
            }
        });

      $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + datas,
          url:"ajax/ajax_updateDetails.php",
          success:function(data) {
            add_Dependents();
            add_Beneficiaries();
            if(data.status ==1){
              alert(data.message);
            }else{
              //error message here
              alert(data.message);
            }
              
          }
          });

          $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + str,
          url:"ajax/ajax_updateEducational.php",
          success:function(data) {
            if(data.status ==1){
            //   alert(data.message);
            }else{
              //error message here
            //   alert(data.message);
            }
              
          }
          });

          $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + str,
          url:"ajax/ajax_updateRPS.php",
          success:function(data) {
            if(data.status ==1){
            //   alert(data.message);
            }else{
              //error message here
            //   alert(data.message);
            }
              
          }
          });
          $('#registerApplicant')[0].reset();
    });

    $('#addBen').click(function(){
            count = count + 1;
                var html_code = "<tr id='row"+count+"'>";
                html_code += "<td contenteditable='true' class='item_name'></td>";
                html_code += "<td contenteditable='true' class='item_rel'></td>";
                html_code += "<td contenteditable='true' class='item_add'></td>";
                html_code += "<td><button type='button' name='removeBen' data-row='row"+count+"' class='btn btn-danger btn-xs removeBen'>X</button></td>";   
                html_code += "</tr>";  
                $('#ben_table').append(html_code);
                });
                
                $(document).on('click', '.removeBen', function(){
                var delete_row = $(this).data("row");
                $('#' + delete_row).remove();
                });

                //dependent add
                $('#addDep').click(function(){
                    counts = count + 1;
                var html_code = "<tr id='row"+counts+"'>";
                html_code += "<td contenteditable='true' class='item_namedep'></td>";
                html_code += "<td contenteditable='true' class='item_reldep'></td>";
                html_code += "<td contenteditable='true' class='item_dobdep'></td>";
                html_code += "<td><button type='button' name='removeDep' data-row='row"+counts+"' class='btn btn-danger btn-xs removeDep'>X</button></td>";   
                html_code += "</tr>";  
                $('#dep_table').append(html_code);
                });
                
                $(document).on('click', '.removeDep', function(){
                var delete_row = $(this).data("row");
                $('#' + delete_row).remove();
                });
            selectUser()
            populateBaseID()
            
      
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

    $.getJSON("ajax/ajax_selectNameEmbark.php",function(data){
        console.log(data);
        var items="";
        $.each(data,function(index,item) 
        {
          items+="<option value='"+item.applicantid+"'>"+item.firstname+"</option>";
        });
        $("#sel_name").html(items); 
      });
   
  }


  function populateBaseID(){
    $("#sel_name").change(function(){
        var deptid = $(this).val();
        console.log(deptid);
        
        $.ajax({
            url: 'ajax/ajax_imagePreview.php',
            type: 'post',
            data: {depart:deptid},
            dataType: 'json',
            success:function(response){
                $.each(response, function(i,item){
                    console.log("test",item.imagename);
                $('#image').attr('src', item.imagename);
                });
               

            }
        });

        $.ajax({
            url: 'ajax/ajax_autoPopulateNamesEmbark.php',
            type: 'post',
            data: {depart:deptid},
            dataType: 'json',
            success:function(response){
                console.log(response);

                
                $.each(response, function(i,item){
                    $("#cStatus").empty();
                    $("#cStatus").append("<option value='"+item.civilstatus+"'>"+item.civilstatus+"</option>");
                    $("#cStatus").append(new Option("Married", "Married"));
                    $("#cStatus").append(new Option("Single", "Single"));
                    $("#cStatus").append(new Option("Divorced", "Divorced"));
                    $("#cStatus").append(new Option("Widowed", "Widowed"));

                    $("#genderID").empty();
                    $("#genderID").append("<option value='"+item.gender+"'>"+item.gender+"</option>");
                    $("#genderID").append(new Option("Male", "Male"));
                    $("#genderID").append(new Option("Female", "Female"));

                    $("#applicant_status").empty();
                    $("#applicant_status").append("<option value='"+item.applicant_status+"'>"+item.applicant_status+"</option>");
                    $("#applicant_status").append(new Option("Active", "Active"));
                    $("#applicant_status").append(new Option("Not Active", "Not Active"));


                    $("#ageID").val(item.age);
                    $("#suffixID").val(item.suffix);
                    $("#address").val(item.address);
                    $("#religion").val(item.religion);
                    $("#citizenship").val(item.citizenship);
                    $("#dob").val(item.birthdate);
                    $("#placeofbirth").val(item.placeofbirth);
                    $("#height").val(item.height);
                    $("#weight").val(item.weight);
                    $("#cellphone").val(item.mobileno);
                    $("#telephone").val(item.telephoneno);
                    $("#firstNameSpouse").val(item.spouse_firstname);
                    $("#middleNameSpouse").val(item.spouse_middlename);
                    $("#lastNameSpouse").val(item.spouse_lastname);
                    $("#suffixSpouse").val(item.spouse_suffix);
                    $("#children").val(item.noofchildren);
                    $("#fatherfirstName").val(item.father_firstname);
                    $("#fathermiddleName").val(item.father_middlename);
                    $("#fatherlastName").val(item.father_lastname);
                    $("#fatherSuffix").val(item.father_suffix);
                    $("#motherFirstName").val(item.mother_firstname);
                    $("#motherMiddleName").val(item.mother_middlename);
                    $("#motherLastName").val(item.mother_lastname);
                    $("#motherSuffix").val(item.mother_suffix);

                    console.log(item.civilstatus);
                });

                var len = response.length;

                $("#sel_lname").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['applicantid'];
                    var name = response[i]['lastname'];
                    $("#lastName").val(name);
                    // $("#sel_lname").append("<option value='"+id+"'>"+name+"</option>");
                }
                $("#sel_mname").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['applicantid'];
                    var mname = response[i]['middlename'];
                    $("#middleName").val(mname);
                    // $("#sel_mname").append("<option value='"+id+"'>"+mname+"</option>");
                }
            }
        });


        $.ajax({
            url: 'ajax/ajax_applicantDetails.php',
            type: 'post',
            data: {depart:deptid},
            dataType: 'json',
            success:function(response){
              
                $.each(response, function(i,item){
                    $.each(response, function(i,item){
                    $("#agency").val(item.agencyrps);
                    $("#principal").val(item.principalrps);
                    $("#vessel").val(item.vesselrps);
                 
                    
                });
                    
                });
            }
        });
        $.ajax({
            url: 'ajax/ajax_educationalData.php',
            type: 'post',
            data: {depart:deptid},
            dataType: 'json',
            success:function(response){

                $.each(response, function(i,item){
                    $("#school").val(item.schoolname);
                    $("#fromEducation").val(item.sch_frm_yr);
                    $("#yearEducation").val(item.sch_to_yr);
                    $("#sssno").val(item.sss_no);
                    $("#srcNo").val(item.src_sid_no);
                    $("#ofwNo").val(item.ofw_ecard_no);
                    $("#phNo").val(item.philhealth_no);
                    $("#pgbno").val(item.passpost_no);
                    $("#passno").val(item.pagibig_no);
                    
                });
                console.log(response);

            }
        });
    });
  }

  function add_Beneficiaries(){
  var deptid = $('#sel_name').val();
  var item_name = [];
  var item_rel = [];
  var item_add = [];
  $('.item_name').each(function(){
   item_name.push($(this).text());
  });
  $('.item_rel').each(function(){
    item_rel.push($(this).text());
  });
  $('.item_add').each(function(){
    item_add.push($(this).text());
  });
  $.ajax({
   url:"ajax/ajax_updateBen.php",
   method:"POST",
   data:{item_name:item_name, item_rel:item_rel, item_add:item_add, depart:deptid },
   success:function(data){
    if(data.status ==1){
            //   alert(data.message);
            }else{
              //error message here
            //   alert(data.message);
            }
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
   }
  });

  }

  function add_Dependents(){
    var deptid = $('#sel_name').val();
  var item_namedep = [];
  var item_reldep = [];
  var item_dobdep = [];
  $('.item_namedep').each(function(){
    item_namedep.push($(this).text());
  });
  $('.item_reldep').each(function(){
    item_reldep.push($(this).text());
  });
  $('.item_dobdep').each(function(){
    item_dobdep.push($(this).text());
  });
  $.ajax({
   url:"ajax/ajax_updateDept.php",
   method:"POST",
   data:{item_namedep:item_namedep, item_reldep:item_reldep, item_dobdep:item_dobdep, depart:deptid},
   success:function(data){
    if(data.status ==1){
            //   alert(data.message);
            }else{
              //error message here
            //   alert(data.message);
            }
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
   }
  });

  }

</script>
</body>


      

              



  <?php include 'footer.php' ?>