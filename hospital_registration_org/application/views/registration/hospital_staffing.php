
<style type="text/css">
	.customTableGrid>thead>tr>th {
    background: #daedff;
    border-bottom: 1px solid #ddd;
    color: #333;
}
    .customTableGrid>tbody>tr>td, .customTableGrid>thead>tr>th {
    padding: 4px;
    font-size: 13px;
}

.hospitalRegCrad .card-header {
    padding: 6px 12px;
}
.bg-warning {
    background-color: #ffc107!important;
}

.faqHeader {
        font-size: 15px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'fontawesome';
        content: "\f054"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 10px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
.datepicker{ z-index:99999 !important; }
</style>
<div class="row">
    <!--  form area -->
    <div class="col-sm-12">
        <div  class="panel panel-default thumbnail">
 
            <!-- <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="<?php // echo base_url("patient") ?>"> <i class="fa fa-list"></i>  <?php  //echo display('patient_list') ?> </a>  
                </div>
            </div>  -->

            <div class="panel-body panel-form">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                    <?php  echo form_open_multipart('registration/hospital_staffing','class="form-inner"') ?>
               <?php  echo form_hidden('reg_id',$registration->reg_id); ?>

								<div class="form-group row">
							        <div class="panel-group" id="accordion">
							        
							        <div class="panel panel-default">
							            <div class="panel-heading">
							                <h4 class="panel-title">
							                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-snowflake-o"></i> General Duty Medical Officers</a>
							                </h4>
							            </div>
							            
							            <div id="collapseOne" class="panel-collapse collapse ">
							                <div class="panel-body">
							                    <div class="col-xs-12 col-form-label">
							                    	<div class="col-12">
									                    <div class="card tb-frm-crd">
									                    	
								                     <div class="card-body">

								                        <div class="row form-group">
								                          <div class="col-md-12">
								                            <!-- <span>
								                              <a class="btn btn-primary btn-sm " target="_self" href="../../assets/docs/General Duty Medical Officers Template.xlsx" download="General Duty Medical Officers Template.xlsx">
								                                <i class="fa fa-download"></i> Download Template
								                              </a>
								                              <button class="btn btn-primary btn-sm " title="Import excel data for General Duty Medical Officers" type="button">
								                                <i class="fa fa-upload"></i>&nbsp; Import </button>
								                            </span> -->
								                            
								                            <button class="btn btn-primary btn-sm pull-right add" type="button" data-toggle="modal" data-target="#addDoctor">
								                              <i class="fa fa-plus-circle"></i>
								                            </button>
								                          </div>
								                        </div>
								                        <div class="row form-group no-margin-left no-margin-right">
								                          <div class="table-responsive">
								                            <table class="table table-bordered customTableGrid"  id="newDuty">
								                              <thead>
								                                <tr>
								                                  
								                                  <th class="text-center">Doctor’s Name</th>
								                                  <th class="text-center">Designation</th>
								                                  <th class="text-center">Qualification</th>
								                                  
								                                  <th class="text-center">Council of Registration</th>
								                                  <th class="text-center">Registration Number</th>
								                                  <th class="text-center">Joining date</th>
								                                  <th class="text-center">Area/ working department</th>
								                                  <th class="text-center width-12">Action</th>
								                                </tr>
								                                
								                              </thead>

								                              <tbody>
								                                <!---->
								                              </tbody>

								                            </table>

								                          </div>
								                        </div>

								                      </div>

									                    </div>
									                  </div>
													</div>
							                </div>
							            </div>
							        </div>
							        <div class="panel panel-default">
							            <div class="panel-heading">
							                <h4 class="panel-title">
							                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen"> <i class="fa fa-snowflake-o"></i> Nurses</a>
							                </h4>
							            </div>
							            <div id="collapseTen" class="panel-collapse collapse">
							                <div class="panel-body">
							                   <div class="col-xs-12 col-form-label">
							                   	<div class="col-12">
								                    <div class="card tb-frm-crd">
								                     
								                      <div class="card-body">


									                        <div class="row form-group">
									                          <div class="col-md-12">
									                           <!--  <span>
									                              <a class="btn btn-primary btn-sm " target="_self" href="../../assets/docs/Nurses Template.xlsx" download="Nurses Template.xlsx">
									                                <i class="fa fa-download"></i> Download Template
									                              </a>
									                              <button class="btn btn-primary btn-sm " title="Import excel data for General Duty Medical Officers" type="button">
									                                <i class="fa fa-upload"></i>&nbsp; Import </button>
									                            </span> -->
									                            
									                            <button class="btn btn-primary btn-sm pull-right " type="button" data-toggle="modal" data-target="#addNurse">
									                              <i class="fa fa-plus-circle"></i>
									                            </button>
									                          </div>
									                        </div>

									                        <div class="row form-group form-group no-margin-left no-margin-right">
									                          <div class="table-responsive">
									                            <table class="table table-bordered customTableGrid" id="newNurse">
									                              <thead>
									                                <tr>
									                                  
									                                  <th class="text-center">Nurse’s Name</th>
									                                  <th class="text-center">Designation</th>
									                                  <th class="text-center">Qualification</th>
									                                  <th class="text-center">Nursing Council</th>
									                                  <th class="text-center">Registration Number</th>
									                                  <th class="text-center">Joining date</th>
									                                  <th class="text-center">Area/ working department</th>
									                                  <th class="text-center width-12">Action</th>
									                                </tr>
									                              </thead>

									                              <tbody>
									                                <!---->
									                              </tbody>

									                            </table>
									                            
									                          </div>
									                        </div>
								                 
														</div>
								                    </div>
								                  </div>
							                   </div>
							                </div>
							            </div>
							        </div>

							          
									<div class="panel panel-default">
			                          <div class="panel-heading">
			                              <h4 class="panel-title">
			                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> <i class="fa fa-snowflake-o"></i> Paramedical Staff: (OT, ECG, Radiology, PFT, Lab, Optometrist, EMG, Dialysis)</a>
			                              </h4>
			                          </div>
			                          <div id="collapseThree" class="panel-collapse collapse">
			                              <div class="panel-body">
			                                 <div class="col-xs-12 col-form-label">
			                                  <div class="col-12">
			                                    <div class="card tb-frm-crd">
			                                     
			                                      <div class="card-body">


			                                          <div class="row form-group">
			                                            <div class="col-md-12">
			                                             <!--  <span>
			                                                <a class="btn btn-primary btn-sm " target="_self" href="../../assets/docs/Nurses Template.xlsx" download="Nurses Template.xlsx">
			                                                  <i class="fa fa-download"></i> Download Template
			                                                </a>
			                                                <button class="btn btn-primary btn-sm " title="Import excel data for General Duty Medical Officers" type="button">
			                                                  <i class="fa fa-upload"></i>&nbsp; Import </button>
			                                              </span> -->
			                                              
			                                              <button class="btn btn-primary btn-sm pull-right " type="button" data-toggle="modal" data-target="#addParamedicalStaff">
			                                                <i class="fa fa-plus-circle"></i>
			                                              </button>
			                                            </div>
			                                          </div>

			                                           <div class="row form-group form-group no-margin-left no-margin-right">
			                                            <div class="table-responsive">
			                                              <table class="table-bordered customTableGrid" id="newParamedicalStaff" style="width: 100%">
			                                              <thead>
			                                                <tr>
			                                                  <th class="text-center">Staff Name</th>
			                                                  <th class="text-center">Designation</th>
			                                                  <th class="text-center">Qualification</th>
			                                                  <th class="text-center">Joining date</th>
			                                                  <th class="text-center">Area/ working department</th>
			                                                  <th class="text-center width-12">Action</th>
			                                                </tr>
			                                              </thead>

			                                              <tbody>
			                                                <!---->
			                                              </tbody>

			                                            </table>
			                                              
			                                            </div>
			                                          </div>
			                                 
			                                      </div>
			                                    </div>
			                                  </div>
			                                 </div>
			                              </div>
			                          </div>
			                      </div>



				                      <div class="panel panel-default">
				                          <div class="panel-heading">
				                              <h4 class="panel-title">
				                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"> <i class="fa fa-snowflake-o"></i> Administrative & Support Staff</a>
				                              </h4>
				                          </div>
				                          <div id="collapseFour" class="panel-collapse collapse">
				                              <div class="panel-body">
				                                 <div class="col-xs-12 col-form-label">
				                                  <div class="col-12">
				                                    <div class="card tb-frm-crd">
				                                     
				                                      <div class="card-body">


				                                          <div class="row form-group">
				                                            <div class="col-md-12">
				                                             <!--  <span>
				                                                <a class="btn btn-primary btn-sm " target="_self" href="../../assets/docs/Nurses Template.xlsx" download="Nurses Template.xlsx">
				                                                  <i class="fa fa-download"></i> Download Template
				                                                </a>
				                                                <button class="btn btn-primary btn-sm " title="Import excel data for General Duty Medical Officers" type="button">
				                                                  <i class="fa fa-upload"></i>&nbsp; Import </button>
				                                              </span> -->
				                                              
				                                              <button class="btn btn-primary btn-sm pull-right " type="button" data-toggle="modal" data-target="#addSupportStaff">
				                                                <i class="fa fa-plus-circle"></i>
				                                              </button>
				                                            </div>
				                                          </div>

				                                          <div class="row form-group form-group no-margin-left no-margin-right">
				                                            <div class="table-responsive">
				                                              <table class="table-bordered customTableGrid" id="newSupportStaff" style="width: 100%">
				                                              <thead>
				                                                <tr>
				                                                  <th class="text-center">Staff Name</th>
				                                                  <th class="text-center">Designation</th>
				                                                  <th class="text-center">Qualification</th>
				                                                  <th class="text-center">Joining date</th>
				                                                  <th class="text-center">Area/ working department</th>
				                                                  <th class="text-center width-12">Action</th>
				                                                </tr>
				                                              </thead>

				                                              <tbody>
				                                                <!---->
				                                              </tbody>

				                                            </table>
				                                              
				                                            </div>
				                                          </div>
				                                 
				                                      </div>
				                                    </div>
				                                  </div>
				                                 </div>
				                              </div>
				                          </div>
				                      </div>
                                      <div class="container" style="width: 100%;">
				                      <div class="row form-group" style="padding-top: 20px;">
				                      	
										<div class="card border-warning">

						                      <div class="card-header bg-warning" style="color: white; padding: 10px 10px;">
						                        <i class="fa fa-snowflake-o"></i>&nbsp; Nurse Patient Ratio
						                        
						                      </div>

						                      <div class="card-body">
						                        <div class="row form-group text-center" style="padding-top: 20px;">
						                          <label class="col-xs-12 col-form-label">
						                            <h5>
						                              <b>What is nurse patient ratio in following areas ?</b>
						                              <span class="text-danger">*</span>
						                            </h5>
						                            <small><strong>Note:</strong>&nbsp;The ratio should be in the format X:Y</small>
						                          </label>

						                        </div>
						                        
						                        
						                          <div class="col-md-4">
						                            <div class="form-group">
						                              <div class="input-group">
						                                <span class="input-group-addon">Ward
						                                  <span class="text-danger">*</span>
						                                </span>
						                                
						                                <input class="form-control ng-untouched ng-pristine ng-valid" id="nursepatientratio_ward" name="nursepatientratio_ward" pattern="[0-9]+:[0-9]+" placeholder="Ward" required="" type="text">
						                              </div>
						                              <!---->
						                            </div>
						                          </div>

						                          <div class="col-md-4">
						                            <div class="form-group">
						                              <div class="input-group">
						                                <span class="input-group-addon">ICU (ventilated)
						                                  <span class="text-danger">*</span>
						                                </span>
						                                <input class="form-control ng-untouched ng-pristine ng-valid" id="nursepatientratio_icuventilated" name="nursepatientratio_icuventilated" pattern="[0-9]+:[0-9]+" placeholder="ICU (ventilated)" required="" type="text">
						                              </div>

						                              <!---->
						                            </div>
						                          </div>

						                          <div class="col-md-4">
						                            <div class="form-group">
						                              <div class="input-group">
						                                <span class="input-group-addon">ICU (non-ventilated)
						                                  <span class="text-danger">*</span>
						                                </span>
						                                <input class="form-control ng-untouched ng-pristine ng-valid" id="nursepatientratio_icuNonventilated" name="nursepatientratio_icuNonventilated" pattern="[0-9]+:[0-9]+" placeholder="ICU (non-ventilated)" required="" type="text">
						                              </div>

						                              <!---->

						                            </div>


						                          </div>
						                          

						                        </div>
						                      </div>


						                    </div>
				                      </div>
							       
							    </div>
							</div>

                            <input type="hidden" name="save_hospital_staff" value="1">

                            <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <div class="ui buttons">
                                        <!-- <button type="reset" class="ui button"><?php  echo display('reset') ?></button>
                                        <div class="or"></div> -->
                                        <button class="ui positive button"><?php  echo display('save') ?></button>
                                    </div>
                                </div>
                            </div>
                        <?php  echo form_close() ?>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="modal" id="addDoctor">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add details of next doctor</h4>
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        <form id="doctor" method="post">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editGDMO_doctorsName">Doctor’s Name
                <span class="text text-danger">*</span>
              </label>

              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editGDMO_doctorsName" maxlength="150" name="editGDMO_doctorsName" placeholder="Doctor's Name" required="" type="text">
                <!---->
              </div>

            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editGDMO_designation">Designation
                <span class="text text-danger">*</span>
              </label>

              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editGDMO_designation" maxlength="150" name="editGDMO_designation" placeholder="Designation" required="" type="text">
                <!---->
              </div>

            </div>
            
          </div>
          

          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editGDMO_qualification">Qualification
                <span class="text text-danger">*</span>
              </label>
              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editGDMO_qualification" maxlength="150" name="editGDMO_qualification" placeholder="Qualification" required="" type="text">
                <!---->
              </div>

            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              

              

            </div>
            
          </div>
          

          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editGDMO_medicalCouncilOfRegistration">Council of Registration
                <span class="text text-danger">*</span>
              </label>

              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editGDMO_medicalCouncilOfRegistration" maxlength="150" name="editGDMO_medicalCouncilOfRegistration" placeholder="Council of Registration" required="" type="text">
                <!---->
              </div>


            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editGDMO_registrationNumber">Registration Number
                <span class="text text-danger">*</span>
              </label>

              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editGDMO_registrationNumber" maxlength="150" name="editGDMO_registrationNumber" placeholder="Registration number" required="" type="text">
                <!---->
              </div>


            </div>
            
          </div>
          

          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editGDMO_dateOfJoining">Joining date
                <span class="text text-danger">*</span>
              </label>
              <div>
                <div class="input-group">
                 

                  <input name="editGDMO_dateOfJoining" class="datepicker form-control" type="text" placeholder="<?php echo ('Joining Date') ?>" id="editGDMO_dateOfJoining"  value="">
                  <span class="input-group-addon">
                    <i aria-hidden="true" class="fa fa-calendar"></i>
                  </span>
                </div>

                <!---->
              </div>

            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editGDMO_area_workingDepartment">Area/ working department
                <span class="text text-danger">*</span>
              </label>
              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editGDMO_area_workingDepartment" maxlength="150" name="editGDMO_area_workingDepartment" placeholder="Area/ working department" required="" type="text">
                <!---->
              </div>

            </div>
            
          </div>
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <input type="submit" onclick="addDoctorRow()" name=""  value="Save" class="btn btn-success">
          <button type="button" class="btn btn-danger" id="cancel-btn" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>


  <div class="modal" id="addNurse">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add details of Nurse</h4>
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        <form id="nurse" name="nurse" method="post">
        <!-- Modal body -->
        <div class="modal-body">

          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editNurses_nurseName">Nurse’s Name
                <span class="text text-danger">*</span>
              </label>

              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editNurses_nurseName" maxlength="150" name="editNurses_nurseName" placeholder="Nurse’s name" required="" type="text">
                <!---->
              </div>

            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editNurses_designation">Designation
                <span class="text text-danger">*</span>
              </label>

              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editNurses_designation" maxlength="150" name="editNurses_designation" placeholder="Designation" required="" type="text">
                <!---->
              </div>

            </div>
            
          </div>
          

          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editNurses_qualification">Qualification
                <span class="text text-danger">*</span>
              </label>
              <div>
                <textarea class="form-control ng-untouched ng-pristine ng-invalid" id="editNurses_qualification" maxlength="150" name="editNurses_qualification" placeholder="Qualification" required=""></textarea>

                <!---->
              </div>
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editNurses_allopathic_Non_allopathicDegree">Nursing council of
                registration
                <span class="text text-danger">*</span>
              </label>

              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editNurses_nursingCouncil" maxlength="150" name="editNurses_nursingCouncil" placeholder="Nursing council of registration" required="" type="text">

                

                <!---->
              </div>

            </div>
            
          </div>
          

          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editNurses_registrationNumber">Registration Number
                <span class="text text-danger">*</span>
              </label>
              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editNurses_registrationNumber" maxlength="150" name="editNurses_registrationNumber" placeholder="Registration number" required="" type="text">
                <!---->
              </div>

            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editNurses_dateOfJoining">Joining date
                <span class="text text-danger">*</span>
              </label>

              <div>
                <div class="input-group">
                  

                  <input name="editNurses_dateOfJoining" class="datepicker form-control" type="text" placeholder="<?php echo ('Joining Date') ?>" id="editNurses_dateOfJoining"  value="">
                  <span class="input-group-addon">
                    <i aria-hidden="true" class="fa fa-calendar"></i>
                  </span>
                </div>

                <!---->
              </div>

            </div>
            
          </div>
          


          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editNurses_area_workingDepartment">Area/ working department
                <span class="text text-danger">*</span>
              </label>
              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editNurses_area_workingDepartment" maxlength="150" name="editNurses_area_workingDepartment" placeholder="Area/ working department" required="" type="text">
                <!---->
              </div>

            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6"></div>
            
          </div>
          

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <input type="submit" onclick="addNurseRow()" name=""  value="Save" class="btn btn-success">
          <button type="button" class="btn btn-danger" id="cancel-btn-nurse" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal" id="addParamedicalStaff">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add details of next staff member</h4>
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        <form id="ParamedicalStaff" name="ParamedicalStaff" method="post">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editParamediclStaff_staffname">Staff Name
                <span class="text text-danger">*</span>
              </label>
              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editParamediclStaff_staffname" maxlength="150" name="editParamediclStaff_staffname" placeholder="Staff Name" required="" type="text">
                <!---->
              </div>

            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editParamediclStaff_designation">Designation
                <span class="text text-danger">*</span>
              </label>
              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editParamediclStaff_designation" maxlength="150" name="editParamediclStaff_designation" placeholder="Designation" required="" type="text">
                <!---->
              </div>


            </div>
            
          </div>
          


          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editParamediclStaff_qualification">Qualification
                <span class="text text-danger">*</span>
              </label>

              <div>

                <textarea class="form-control ng-untouched ng-pristine ng-invalid" id="editParamediclStaff_qualification" maxlength="150" name="editParamediclStaff_qualification" placeholder="Qualification" required=""></textarea>

                <!---->
              </div>

            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editParamediclStaff_dateOfJoining">Joining date
                <span class="text text-danger">*</span>
              </label>

              <div>
                <div class="input-group">
                  

                  <input name="editParamediclStaff_dateOfJoining" class="datepicker form-control" type="text" placeholder="<?php echo ('Joining Date') ?>" id="editParamediclStaff_dateOfJoining"  value="">
                  <span class="input-group-addon">


                    <i aria-hidden="true" class="fa fa-calendar"></i>
                  </span>
                </div>

                <!---->
              </div>


            </div>
            
          </div>
          


          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editParamediclStaff_area_workingDepartment">Area/ working department
                <span class="text text-danger">*</span>
              </label>

              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editParamediclStaff_area_workingDepartment" maxlength="150" name="editParamediclStaff_area_workingDepartment" placeholder="Area/ working department" required="" type="text">
                <!---->
              </div>

            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6"></div>
            
          </div>
          

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <input type="submit" onclick="addParamedicalStaffRow()" name=""  value="Save" class="btn btn-success">
          <button type="button" class="btn btn-danger" id="cancel-btn-ParamedicalStaff" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal" id="addSupportStaff">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add details of next staff member</h4>
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        <form id="SupportStaff" name="SupportStaff" method="post">
        <!-- Modal body -->
        <div class="modal-body">

          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editAdminSupportStaff_staffname">Staff Name
                <span class="text text-danger">*</span>
              </label>

              <div>
                <input class="form-control ng-pristine ng-invalid ng-touched" id="editAdminSupportStaff_staffname" maxlength="150" name="editAdminSupportStaff_staffname" placeholder="Staff Name" required="" type="text">
              
              </div>

            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editAdminSupportStaff_designation">Designation
                <span class="text text-danger">*</span>
              </label>

              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editAdminSupportStaff_designation" maxlength="150" name="editAdminSupportStaff_designation" placeholder="Designation" required="" type="text">
                <!---->
              </div>


            </div>
            
          </div>
          

          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editAdminSupportStaff_qualification">Qualification
                <span class="text text-danger">*</span>
              </label>
              <div>

                <textarea class="form-control ng-untouched ng-pristine ng-invalid" id="editAdminSupportStaff_qualification" maxlength="150" name="editAdminSupportStaff_qualification" placeholder="Qualification" required=""></textarea>

                <!---->
              </div>

            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editAdminSupportStaff_dateOfJoining">Joining date
                <span class="text text-danger">*</span>
              </label>

              <div>
                <div class="input-group">
                  

                  <input name="editAdminSupportStaff_dateOfJoining" class="datepicker form-control" type="text" placeholder="<?php echo ('Joining Date') ?>" id="editAdminSupportStaff_dateOfJoining"  value="">
                  <span class="input-group-addon">

                  <span class="input-group-addon">
                    <i aria-hidden="true" class="fa fa-calendar"></i>
                  </span>
                </div>

                <!---->
              </div>


            </div>
            
          </div>
          

          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="editAdminSupportStaff_area_workingDepartment">Area/ working department
                <span class="text text-danger">*</span>
              </label>

              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="editAdminSupportStaff_area_workingDepartment" maxlength="150" name="editAdminSupportStaff_area_workingDepartment" placeholder="Area/ working department" required="" type="text">
                <!---->
              </div>

            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6"></div>
            
          </div>
          


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <input type="submit" onclick="addSupportStaffRow()" name=""  value="Save" class="btn btn-success">
          <button type="button" class="btn btn-danger" id="cancel-btn-SupportStaff" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>



<script>
	 function addDoctorRow(){

	 	var fields = ["editGDMO_doctorsName", "editGDMO_designation", "editGDMO_qualification", "editGDMO_medicalCouncilOfRegistration", "editGDMO_registrationNumber", "editGDMO_dateOfJoining", "editGDMO_area_workingDepartment"]

  var i, l = fields.length;
  console.log(l);
  var fieldname;
  for (i = 0; i < l; i++) {
    fieldname = fields[i];
    if (document.forms["doctor"][fieldname].value === "") {
      
      return false;
    }
  }

  	 $("#doctor").submit(function(f){
        f.preventDefault();
    });

	 	
	 	var doctorsName  = $('#editGDMO_doctorsName').val();
        var designation  = $('#editGDMO_designation').val();
        var qualification  = $('#editGDMO_qualification').val();
        var medicalCouncilOfRegistration  = $('#editGDMO_medicalCouncilOfRegistration').val();
        var registrationNumber  = $('#editGDMO_registrationNumber').val();
        var dateOfJoining  = $('#editGDMO_dateOfJoining').val();
        var area_workingDepartment  = $('#editGDMO_area_workingDepartment').val();
        $('#doctor')[0].reset();
        $('#cancel-btn').click();
 	
  var html = '';
  html += '<tr>';
  html += '<td>'+doctorsName+'<input type="hidden" name="medic_officer[doctor_name][]" class="form-control item_name" value="'+doctorsName+'" /></td>';

  html += '<td>'+designation+'<input type="hidden" name="medic_officer[designation][]" class="form-control item_quantity" value="'+designation+'" /></td>';

  html += '<td>'+qualification+'<input type="hidden" name="medic_officer[qualification][]" class="form-control item_quantity" value="'+qualification+'" /></td>';

	html += '<td>'+medicalCouncilOfRegistration+'<input type="hidden" name="medic_officer[council_of_registration][]" class="form-control item_quantity" value="'+medicalCouncilOfRegistration +'" /></td>';

	html += '<td>'+registrationNumber+'<input type="hidden" name="medic_officer[registration_number][]" class="form-control item_quantity" value="'+registrationNumber+'" /></td>';

	html += '<td>'+dateOfJoining+'<input type="hidden" name="medic_officer[joining_date][]" class="form-control item_quantity" value="'+dateOfJoining+'" /></td>';

  html += '<td>'+area_workingDepartment+'<input type="hidden" name="medic_officer[area_department][]" class="form-control item_quantity" value="'+area_workingDepartment+'" /></td>';

  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#newDuty').append(html);
 }
$(document).ready(function(){
 

 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 

 
});
</script>

<script>
	 function addNurseRow(){
	 	var fields = ["editNurses_nurseName", "editNurses_designation", "editNurses_qualification", "editNurses_nursingCouncil", "editNurses_registrationNumber", "editNurses_dateOfJoining", "editNurses_area_workingDepartment"]

  var i, l = fields.length;
  console.log(l);
  var fieldname;
  for (i = 0; i < l; i++) {
    fieldname = fields[i];
    if (document.forms["nurse"][fieldname].value === "") {
      
      return false;
    }
  }

		    	$("#nurse").submit(function(e){
		        e.preventDefault();
		    });
			 	
			 	var Nurses_nurseName  = $('#editNurses_nurseName').val();
		        var Nurses_designation  = $('#editNurses_designation').val();
		        var Nurses_qualification  = $('#editNurses_qualification').val();
		        var Nurses_nursingCouncil  = $('#editNurses_nursingCouncil').val();
		        var Nurses_registrationNumber  = $('#editNurses_registrationNumber').val();
		        var Nurses_dateOfJoining  = $('#editNurses_dateOfJoining').val();
		        var Nurses_area_workingDepartment  = $('#editNurses_area_workingDepartment').val();
		        $('#nurse')[0].reset();
		        $('#cancel-btn-nurse').click();
		 	
		  var html = '';
		  html += '<tr>';
		  html += '<td>'+Nurses_nurseName+'<input type="hidden" name="nurseDetails[Nurses_nurseName][]" class="form-control item_name" value="'+Nurses_nurseName+'" /></td>';

		  html += '<td>'+Nurses_designation+'<input type="hidden" name="nurseDetails[Nurses_designation][]" class="form-control item_quantity" value="'+Nurses_designation+'" /></td>';

		  html += '<td>'+Nurses_qualification+'<input type="hidden" name="nurseDetails[Nurses_qualification][]" class="form-control item_quantity" value="'+Nurses_qualification+'" /></td>';

			html += '<td>'+Nurses_nursingCouncil+'<input type="hidden" name="nurseDetails[Nurses_nursingCouncil][]" class="form-control item_quantity" value="'+Nurses_nursingCouncil+'" /></td>';

			html += '<td>'+Nurses_registrationNumber+'<input type="hidden" name="nurseDetails[Nurses_registrationNumber][]" class="form-control item_quantity" value="'+Nurses_registrationNumber+'" /></td>';

			html += '<td>'+Nurses_dateOfJoining+'<input type="hidden" name="nurseDetails[Nurses_dateOfJoining][]" class="form-control item_quantity" value="'+Nurses_dateOfJoining+'" /></td>';

		  html += '<td>'+Nurses_area_workingDepartment+'<input type="hidden" name="nurseDetails[Nurses_area_workingDepartment][]" class="form-control item_quantity" value="'+Nurses_area_workingDepartment+'" /></td>';

		  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove_nurse"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
		  $('#newNurse').append(html);
	
    
  }


		$(document).ready(function(){
		 

		 
		 $(document).on('click', '.remove_nurse', function(){
		  $(this).closest('tr').remove();
		 });
		 

		 
		});

	 	 
</script>


<script>
   function addParamedicalStaffRow(){

    var fields = ["editParamediclStaff_staffname", "editParamediclStaff_designation", "editParamediclStaff_qualification", "editParamediclStaff_dateOfJoining", "editParamediclStaff_area_workingDepartment"]

  var i, l = fields.length;
  //console.log(l);
  var fieldname;
  for (i = 0; i < l; i++) {
    fieldname = fields[i];
    if (document.forms["ParamedicalStaff"][fieldname].value === "") {
      
      return false;
    }
  }

     $("#ParamedicalStaff").submit(function(e){
        e.preventDefault();
    });

    
        
        var ParamediclStaff_staffname  = $('#editParamediclStaff_staffname').val();
        var ParamediclStaff_designation  = $('#editParamediclStaff_designation').val();
        var ParamediclStaff_qualification  = $('#editParamediclStaff_qualification').val();
        var ParamediclStaff_dateOfJoining  = $('#editParamediclStaff_dateOfJoining').val();
        var ParamediclStaff_area_workingDepartment  = $('#editParamediclStaff_area_workingDepartment').val();
        
        $('#ParamedicalStaff')[0].reset();
        $('#cancel-btn-ParamedicalStaff').click();
  
  var html = '';
  html += '<tr>';
  html += '<td>'+ParamediclStaff_staffname+'<input type="hidden" name="Paramedical[ParamediclStaff_staffname][]" class="form-control item_name" value="'+ParamediclStaff_staffname+'" /></td>';

  html += '<td>'+ParamediclStaff_designation+'<input type="hidden" name="Paramedical[ParamediclStaff_designation][]" class="form-control item_quantity" value="'+ParamediclStaff_designation+'" /></td>';

  html += '<td>'+ParamediclStaff_qualification+'<input type="hidden" name="Paramedical[ParamediclStaff_qualification][]" class="form-control item_quantity" value="'+ParamediclStaff_qualification+'" /></td>';

  html += '<td>'+ParamediclStaff_dateOfJoining+'<input type="hidden" name="Paramedical[ParamediclStaff_dateOfJoining][]" class="form-control item_quantity" value="'+ParamediclStaff_dateOfJoining+'" /></td>';

  html += '<td>'+ParamediclStaff_area_workingDepartment+'<input type="hidden" name="Paramedical[ParamediclStaff_area_workingDepartment][]" class="form-control item_quantity" value="'+ParamediclStaff_area_workingDepartment+'" /></td>';

 
  html += '<td><button type="button" name="remove_ParamedicalStaff" class="btn btn-danger btn-sm remove_nurse"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#newParamedicalStaff').append(html);
 }
$(document).ready(function(){
 

 
 $(document).on('click', '.remove_ParamedicalStaff', function(){
  $(this).closest('tr').remove();
 });
 

 
});
</script>



<script>
   function addSupportStaffRow(){

    var fields = ["editAdminSupportStaff_staffname", "editAdminSupportStaff_designation", "editAdminSupportStaff_qualification", "editAdminSupportStaff_dateOfJoining", "editAdminSupportStaff_area_workingDepartment"]

  var i, l = fields.length;
  //console.log(l);
  var fieldname;
  for (i = 0; i < l; i++) {
    fieldname = fields[i];
    if (document.forms["SupportStaff"][fieldname].value === "") {
      
      return false;
    }
  }

     $("#SupportStaff").submit(function(e){
        e.preventDefault();
    });

    
        
        var AdminSupportStaff_staffname  = $('#editAdminSupportStaff_staffname').val();
        var AdminSupportStaff_designation  = $('#editAdminSupportStaff_designation').val();
        var AdminSupportStaff_qualification  = $('#editAdminSupportStaff_qualification').val();
        var AdminSupportStaff_dateOfJoining  = $('#editAdminSupportStaff_dateOfJoining').val();
        var AdminSupportStaff_area_workingDepartment  = $('#editAdminSupportStaff_area_workingDepartment').val();
        
        $('#SupportStaff')[0].reset();
        $('#cancel-btn-SupportStaff').click();
  
  var html = '';
  html += '<tr>';
  html += '<td>'+AdminSupportStaff_staffname+'<input type="hidden" name="SupportStaff[AdminSupportStaff_staffname][]" class="form-control item_name" value="'+AdminSupportStaff_staffname+'" /></td>';

  html += '<td>'+AdminSupportStaff_designation+'<input type="hidden" name="SupportStaff[AdminSupportStaff_designation][]" class="form-control item_quantity" value="'+AdminSupportStaff_designation+'" /></td>';

  html += '<td>'+AdminSupportStaff_qualification+'<input type="hidden" name="SupportStaff[AdminSupportStaff_qualification][]" class="form-control item_quantity" value="'+AdminSupportStaff_qualification+'" /></td>';

  html += '<td>'+AdminSupportStaff_dateOfJoining+'<input type="hidden" name="SupportStaff[AdminSupportStaff_dateOfJoining][]" class="form-control item_quantity" value="'+AdminSupportStaff_dateOfJoining+'" /></td>';

  html += '<td>'+AdminSupportStaff_area_workingDepartment+'<input type="hidden" name="SupportStaff[AdminSupportStaff_area_workingDepartment][]" class="form-control item_quantity" value="'+AdminSupportStaff_area_workingDepartment+'" /></td>';

 
  html += '<td><button type="button" name="remove_SupportStaff" class="btn btn-danger btn-sm remove_nurse"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#newSupportStaff').append(html);
 }
$(document).ready(function(){
 

 
 $(document).on('click', '.remove_SupportStaff', function(){
  $(this).closest('tr').remove();
 });
 

 
});
</script>