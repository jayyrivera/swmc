<?php include 'header.php' ?>




<!-- Begin Page Content -->
<div class="container-fluid">

      <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Applicant Registration</h1>
        </div>

        <div class="card mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Application Personal Data</h6>
          </div>
        <div class="card-body">

        


        <div class="row">
              <div class="col-md-4">
                <div class="box">
                    <div class="js--image-preview"></div>
                    <div class="upload-options">
                      <label>
                      <input type="file" class="image-upload" accept="image/*" />
                      </label>
                    </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-4"> 
                      <input type="text" class="form-control form-control-user" id="firstName" placeholder="First Name">
                  </div>
                  <div class="col-md-4">
                      <input type="text" class="form-control form-control-user" id="lastName" placeholder="Last Name">
                  </div>
                  <div class="col-md-4">
                      <input type="text" class="form-control form-control-user" id="middleName" placeholder="Middle Name">
                  </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-sm-4"> 
                    <select class="form-control" id="cStatus">
                    <option value="" disabled selected>Civil Status</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <div class="col-sm-3"> 
                    <select class="form-control" id="gender">
                    <option value="" disabled selected>Gender</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                      <input type="text" class="form-control form-control-user" id="middleName" placeholder="Age">
                  </div>
                  <div class="col-md-2">
                      <input type="text" class="form-control form-control-user" id="middleName" placeholder="Suffix">
                  </div>
              </div>

              <br>
              
                <div class="row">
                  <div class="col-md-12">
                      <input type="text" class="form-control form-control-user" id="address" placeholder="Address">
                </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-6">
                      <input type="text" class="form-control form-control-user" id="religion" placeholder="Religion">
                </div>
                <div class="col-md-6">
                      <input type="text" class="form-control form-control-user" id="citizenship" placeholder="Citizenship">
                </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-6">
                  <input type="date" class="form-control form-control-user" name="dateofbirth" id="dateofbirth">
                </div>
                <div class="col-md-6">
                      <input type="text" class="form-control form-control-user" id="placeofbirth" placeholder="Place of Birth">
                </div>
              </div>

              <br>

              <div class="row">
                  <div class="col-md-2">
                  <input type="text" class="form-control form-control-user" id="height" placeholder="Height">
                </div>
                <div class="col-md-2">
                      <input type="text" class="form-control form-control-user" id="weight" placeholder="Weight">
                </div>
                <div class="col-md-4">
                      <input type="text" class="form-control form-control-user" id="cellphone" placeholder="Cellphone">
                </div>
                <div class="col-md-4">
                      <input type="text" class="form-control form-control-user" id="telephone" placeholder="Telephone">
                </div>
              </div>



            </div>
        </div>






        </div>
</div>
              



  <?php include 'footer.php' ?>