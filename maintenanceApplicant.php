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
                    <div class="js--image-preview"></div>
                    <div class="upload-options">
                      <label>
                      <input name="image" accept="image/jpeg" type="file" class="image-upload">
                      <!-- <input type="file" class="image-upload" accept="image/*" name = "files" id="files" /> -->
                      </label>
                    </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="firstName" name = "firtNameApplicant" placeholder="First Name">
                  </div>
                  <div class="col-md-4">
                      <input type="text" class="form-control form-control-user" id="lastName" name = "lastNameApplicant" placeholder="Last Name">
                  </div>
                  <div class="col-md-4">
                      <input type="text" class="form-control form-control-user" id="middleName" name = "middleNameApplicant" placeholder="Middle Name">
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
                      <input type="text" class="form-control form-control-user" id="firstNameSpouse" name = "firstNameSpouse" placeholder="First Name">
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

          </div>
    </div>
    </form>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

    $(function() {
        var count = 1;
    
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



  
     $('#registerApplicants').on('click', function(e) {
        upload();
    
      var str = $( "#registerApplicant" ).serialize();
      console.log(str)
    
      e.preventDefault();
      $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + str,
          url:"ajax/ajax_applicantRegister.php",
          success:function(data) {

            if(data.status ==1){
                insertImage()
                            $.ajax({
                                type: "POST",
                                dataType: "json",
                                data: "function=save&" + str,
                                url:"ajax/ajax_applicantEducationBackground.php",
                                success:function(data) {
                                    add_Beneficiaries();
                                    add_Dependents();
                                }
                             });
              alert(data.message);
            }else{
              //error message here
              alert(data.message);
            }

          }
        });
     }); 
  });

  function add_Beneficiaries(){
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
   url:"ajax/ajax_applicantBeneficiaries.php",
   method:"POST",
   data:{item_name:item_name, item_rel:item_rel, item_add:item_add},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
   }
  });

  }

  function add_Dependents(){
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
   url:"ajax/ajax_applicantDependent.php",
   method:"POST",
   data:{item_namedep:item_namedep, item_reldep:item_reldep, item_dobdep:item_dobdep},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
   }
  });

  }

  function upload(){
    var form_data = new FormData($(this));
  
        $.ajax({
            url : 'ajax/imageUpload.php', 
            type : 'POST',
            data : form_data,
            processData: false,  // tell jQuery not to process the data
            contentType: false,
            success : function(resp){
                alert(resp.message);
            }
        });
  }


</script>
</body>


      

              



  <?php include 'footer.php' ?>