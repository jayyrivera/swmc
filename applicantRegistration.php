<?php include 'header.php' ?>




<!-- Begin Page Content -->
<body class="bg-gradient-primary">
<form class="applicant" id="registerApplicant"  method="POST" enctype="multipart/form-data" action="#">
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

          <!-- <div class="row">
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="benNAme1" name = "benNAme1" placeholder="Name">
                  </div>
                  <div class="col-md-2"> 
                      <input type="text" class="form-control form-control-user" id="benRel1" name = "benRel1" placeholder="Relationship">
                  </div>
                  <div class="col-md-6"> 
                      <input type="text" class="form-control form-control-user" id="benAddress1" name = "benAddress1" placeholder="Address">
                  </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="benNAme2" name = "benNAme2" placeholder="Name">
                  </div>
                  <div class="col-md-2"> 
                      <input type="text" class="form-control form-control-user" id="benRel2" name = "benRel2" placeholder="Relationship">
                  </div>
                  <div class="col-md-6"> 
                      <input type="text" class="form-control form-control-user" id="benAddress2" name = "benAddress2" placeholder="Address">
                  </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="benNAme3" name = "benNAme3" placeholder="Name">
                  </div>
                  <div class="col-md-2"> 
                      <input type="text" class="form-control form-control-user" id="benRel3" name = "benRel3" placeholder="Relationship">
                  </div>
                  <div class="col-md-6"> 
                      <input type="text" class="form-control form-control-user" id="benAddress3" name = "benAddress3" placeholder="Address">
                  </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="benNAme4" name = "benNAme4" placeholder="Name">
                  </div>
                  <div class="col-md-2"> 
                      <input type="text" class="form-control form-control-user" id="benRel4" name = "benRel4" placeholder="Relationship">
                  </div>
                  <div class="col-md-6"> 
                      <input type="text" class="form-control form-control-user" id="benAddress4" name = "benAddress4" placeholder="Address">
                  </div>
              </div> -->

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

              <!-- <div class="row">
                  <div class="col-md-6"> 
                      <input type="text" class="form-control form-control-user" id="dependentsName1" name = "dependentsName1" placeholder="Name">
                  </div>
                  <div class="col-md-2"> 
                      <input type="text" class="form-control form-control-user" id="dependetsRel1" name = "dependetsRel1" placeholder="Relationship">
                  </div>
                  <div class="col-md-4"> 
                    <input type="date" id="dateofbirthdependent1" name = "dateofbirthdependent1" class="form-control form-control-user" >
                  </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-6"> 
                      <input type="text" class="form-control form-control-user" id="dependentsName2" name = "dependentsName2" placeholder="Name">
                  </div>
                  <div class="col-md-2"> 
                      <input type="text" class="form-control form-control-user" id="dependetsRel2" name = "dependetsRel2" placeholder="Relationship">
                  </div>
                  <div class="col-md-4"> 
                    <input type="date" id="dateofbirthdependent2" name = "dateofbirthdependent2" class="form-control form-control-user" >
                  </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-6"> 
                      <input type="text" class="form-control form-control-user" id="dependentsName3" name = "dependentsName3" placeholder="Name">
                  </div>
                  <div class="col-md-2"> 
                      <input type="text" class="form-control form-control-user" id="dependetsRel3" name = "dependetsRel3" placeholder="Relationship">
                  </div>
                  <div class="col-md-4"> 
                    <input type="date" id="dateofbirthdependent3" name = "dateofbirthdependent3" class="form-control form-control-user" >
                  </div>
              </div> -->
          </div>
      </div>

      <div class="card mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Documents</h6>
          </div>
          <div class="card-body">

          <div class="table-responsive">
                    <table class="table table-bordered" id="doc_table">
                    <tr>
                    <th width="25%">Document Name</th>
                    <th width="35%">Date Passed (YYYY/DD/MM)</th>
                    <th width="35%">Date Expiry (YYYY/DD/MM)</th>
                    <th width="5%"></th>
                    </tr>
                    <tr>
                    <td contenteditable="true" class="doc_name"></td>
                    <td contenteditable="true" class="doc_date" id = "doc_dates" type ="date"></td>
                    <td contenteditable="true" class="doc_exp" id = "doc_exps" type ="date"></td>
                    <td></td>
                    </tr>
                    </table>
                    <div align="right">
                        <button type="button" name="addDoc" id="addDoc" class="btn btn-success btn-xs">+</button>
                    </div>
            </div>
            </div>
      </div>


      <div class="card mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Alottee</h6>
          </div>
          <div class="card-body">

          <div class="table-responsive">
                    <table class="table table-bordered" id="alot_table">
                    <tr>
                    <th width="25%">Name</th>
                    <th width="35%">Relationship</th>
                    <th width="35%">Address</th>
                    <th width="5%"></th>
                    </tr>
                    <tr>
                    <td contenteditable="true" class="alot_name"></td>
                    <td contenteditable="true" class="alot_rel" ></td>
                    <td contenteditable="true" class="alot_add" ></td>
                    <td></td>
                    </tr>
                    </table>
                    <div align="right">
                        <button type="button" name="addDoc" id="addLot" class="btn btn-success btn-xs">+</button>
                    </div>
            </div>
            </div>
      </div>


      <!-- <div class="card mb-4">
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
              </div> -->

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
                  <button class="btn btn-primary btn-user btn-block" id="registerApplicants" type="submit">
                  Register Applicant
                </button>
                  </div>
                  <br>
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

        $('#addLot').click(function(){
            count = count + 1;
                var html_code = "<tr id='row"+count+"'>";
                html_code += "<td contenteditable='true' class='alot_add'></td>";
                html_code += "<td contenteditable='true' class='alot_rel'></td>";
                html_code += "<td contenteditable='true' class='alot_add' ></td>";
                html_code += "<td><button type='button' name='removeAlot' data-row='row"+count+"' class='btn btn-danger btn-xs removeBen'>X</button></td>";   
                html_code += "</tr>";  
                $('#alot_table').append(html_code);
                });

                 $(document).on('click', '.removeAlot', function(){
                var delete_row = $(this).data("row");
                $('#' + delete_row).remove();
                });

        $('#addDoc').click(function(){
            count = count + 1;
                var html_code = "<tr id='row"+count+"'>";
                html_code += "<td contenteditable='true' class='doc_name'></td>";
                html_code += "<td contenteditable='true' class='doc_date' id = 'doc_dates' type ='date'></td>";
                html_code += "<td contenteditable='true' class='doc_exp' id = 'doc_exps' type ='date'></td>";
                html_code += "<td><button type='button' name='removeDoc' data-row='row"+count+"' class='btn btn-danger btn-xs removeBen'>X</button></td>";   
                html_code += "</tr>";  
                $('#doc_table').append(html_code);
                });

                 $(document).on('click', '.removeDoc', function(){
                var delete_row = $(this).data("row");
                $('#' + delete_row).remove();
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
     
    
      e.preventDefault();
      var file = $('#files')[0].files[0]
      console.log(file.name);
      var data = str+"&idname="+file.name;

        
      var formData = new FormData($("#registerApplicant")[0]);                             
        $.ajax({
            url: 'ajax/imageUpload.php', // point to server-side PHP script 
            dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: formData,                         
            type: 'post',
            success: function(php_script_response){
                // alert(php_script_response); // display response from the PHP script, if any
            }
        });
       
      $.ajax({
          type: "POST",
          dataType: "json",
          data: "function=save&" + data,
          url:"ajax/ajax_applicantRegister.php",
          success:function(data) {

            if(data.status ==1){
                $.ajax({
                                type: "POST",
                                dataType: "json",
                                data: "function=save&" + str,
                                url:"ajax/ajax_applicantEducationBackground.php",
                                // url:"ajax/ajax_applicantAlottee.php"
                                success:function(data) {

                                    $.ajax({
                                type: "POST",
                                dataType: "json",
                                data: "function=save&" + str,
                                url:"ajax/ajax_applicantRPS.php",
                                // url:"ajax/ajax_applicantAlottee.php"
                                success:function(data) {
                                    add_Beneficiaries();
                                    add_Dependents();
                                    add_documents();
                                    add_Alottee();
                                  
                                  
                                }
                             });
                                  
                                  
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
    //  $("#registerApplicant").on('submit',(function(e) {
	// 	e.preventDefault();
       
	// }));

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
    // alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
   }
  });

  }
  function add_Alottee(){
  var alot_name = [];
  var alot_rel = [];
  var alot_add = [];
  $('.alot_name').each(function(){
    alot_name.push($(this).text());
  });
  $('.alot_rel').each(function(){
    alot_rel.push($(this).text());
  });
  $('.alot_add').each(function(){
    alot_add.push($(this).text());
  });
  $.ajax({
   url:"ajax/ajax_applicantAlottee.php",
   method:"POST",
   data:{alot_name:alot_name, alot_rel:alot_rel, alot_add:alot_add},
   success:function(data){
    // alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
   }
  });

  }

  function add_documents(){
  var doc_name = [];
  var doc_date = [];
  var doc_exp = [];
  $('.doc_name').each(function(){
    doc_name.push($(this).text());
  });
  $('.doc_date').each(function(){
    var mydate = new Date($(this).text());
    
    doc_date.push(mydate);
  });
  $('.doc_exp').each(function(){
    doc_exp.push($(this).text());
  });
  $.ajax({
   url:"ajax/ajax_applicantDocument.php",
   method:"POST",
   data:{doc_name:doc_name, doc_date:doc_date, doc_exp:doc_exp},
   success:function(data){
    // alert(data);
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
    // alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
   }
  });

  }

  function upload(){
   
    
  }


</script>
</body>


      

              



  <?php include 'footer.php' ?>