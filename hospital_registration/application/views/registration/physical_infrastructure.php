
<style type="text/css">
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
                    <?php  echo form_open_multipart('registration/physical_infrastructure','class="form-inner"') ?>
               <?php  echo form_hidden('phy_infra[reg_id]',$registration->reg_id); ?>
                    	   <div class="form-group row">
                               <div class="row">
                  
				                  <div class="col-sm-12 col-md-4 col-lg-4">
				                    <label class="col-form-label" for="hf-builtUpArea">Hospital’s built up area (in sq. mt.)
				                      <span class="text-danger">*</span>
				                    </label>
				                    <div>
				                      <input class="form-control" id="builtUpArea" name="phy_infra[builtUpArea]" placeholder="" required="" type="text">
				                      <!---->
				                    </div>

				                  </div>
				                  
				                  <div class="col-sm-12 col-md-4 col-lg-4">
				                    <label class="col-form-label" for="hf-numberOfBuildings">Number of buildings
				                      <span class="text-danger">*</span>
				                    </label>
				                    <div>
				                      <input class="form-control   " id="numberOfBuildings" name="phy_infra[numberOfBuildings]" placeholder="" required="" type="text">
				                      <!---->
				                    </div>
				                    


				                  </div>
				                  
				                  <div class="col-sm-12 col-md-4 col-lg-4">
				                    <label class="col-form-label" for="hf-numberOfBuildings">Upload Copy of Rent or Land
				                      Agreement

				                      <span class="text-danger">*</span>
				                    </label>
                                  <input type="file" name="phy_infra[agremnt_file]" id="agremnt_file">
				                    <div hidden="">

				                    	
				                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
				                        <i class="fa fa-upload"></i>
				                      </button>
				                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
				                        <i class="fa fa-eye"></i>
				                      </button>
				                    </div>


				                  </div>
				                  

				                </div>
                            </div>
                       
							
							      
							          
									<!-- <div class="panel panel-default">
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
			                      </div> -->


<!-- 
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
				                      </div> -->

				                      <!-- first start -->
				                      	<div class="form-group row">
							        <div class="panel-group" id="accordion">
							        
							        <div class="panel panel-default">
							            <div class="panel-heading">
							                <h4 class="panel-title">
							                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-snowflake-o"></i> Location Details of Services Offered</a>
							                </h4>
							            </div>
							            <div id="collapseOne" class="panel-collapse collapse ">
							                <div class="panel-body">
							                    <div class="col-xs-12 col-form-label">
							                    	<div class="col-12">
									                    <div class="card tb-frm-crd">
									                    	
								                <div class="card-body">
                        
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Anaesthesia</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">

							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>

							                          </div>
							                        </div>

							                        <div class="row-seperator clearfix"></div>
														<div class="form-group row" id="phy_anaesthesia_div">
							                          <label class="col-md-4 col-form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_anaesthesia_builname" name="phyTab_anaesthesia_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>

							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>

							                            
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_anaesthesia_floordet" name="phyTab_anaesthesia_floordet" required="">
							                              <option value="sel">--Select--</option>
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <hr/>
							                        <div class="row-seperator clearfix"></div>


							                        
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Blood Bank</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_bloodbank" onchange="showDiv(this.value,'phy_bloodbank_div')" name="phyInfr_bloodbank" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>


							                        <div class="form-group row" id="phy_bloodbank_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_bloodbank_builname" name="phyTab_bloodbank_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_bloodbank_floordet" name="phyTab_bloodbank_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <hr/>
							                        <div class="row-seperator clearfix"></div>
							                        
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Blood Collection Centre</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_bloodColCet" onchange="showDiv(this.value,'phy_bloodColCet_div')" name="phyInfr_bloodColCet" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>

							                        <div class="form-group row" id="phy_bloodColCet_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_bloodColCet_builname" name="phyTab_bloodColCet_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_bloodColCet_floordet" name="phyTab_bloodColCet_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <hr />




							                        
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Cardiac OT</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_cardiacot"  onchange="showDiv(this.value,'phy_cardiacot_div')" name="phyInfr_cardiacot" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>

							                        <div class="row-seperator clearfix"></div>


							                        <div class="form-group row" id="phy_cardiacot_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_cardiacot_builname" name="phyTab_cardiacot_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_cardiacot_floordet" name="phyTab_cardiacot_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Cath Lab</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_cathlab" onchange="showDiv(this.value,'phy_cathlab_div')" name="phyInfr_cathlab" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_cathlab_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_cathlab_builname" name="phyTab_cathlab_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_cathlab_floordet" name="phyTab_cathlab_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->

							                          </div>
							                        </div>
													<hr />
							                        <div class="row-seperator clearfix"></div>
							                        
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>CCU</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_ccu" onchange="showDiv(this.value,'phy_ccu_div')" name="phyInfr_ccu" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>


							                        <div class="form-group row" id="phy_ccu_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_ccu_builname" name="phyTab_ccu_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_ccu_floordet" name="phyTab_ccu_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Chemo Ward</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_chemoward" onchange="showDiv(this.value,'phy_chemoward_div')" name="phyInfr_chemoward" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <div class="form-group row" id="phy_chemoward_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_chemoward_builname" name="phyTab_chemoward_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_chemoward_floordet" name="phyTab_chemoward_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>CSSD</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_cssd" onchange="showDiv(this.value,'phy_cssd_div')" name="phyInfr_cssd" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>

							                        <div class="row-seperator clearfix"></div>
							                        <div class="form-group row" id="phy_cssd_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_cssd_builname" name="phyTab_cssd_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_cssd_floordet" name="phyTab_cssd_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Dialysis</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_dialysis" onchange="showDiv(this.value,'phy_dialysis_div')" name="phyInfr_dialysis" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>

							                        <div class="row-seperator clearfix"></div>
							                        <div class="form-group row" id="phy_dialysis_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_dialysis_builname" name="phyTab_dialysis_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_dialysis_floordet" name="phyTab_dialysis_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Emergency</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_emergency" onchange="showDiv(this.value,'phy_emergency_div')" name="phyInfr_emergency" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_emergency_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_emergency_builname" name="phyTab_emergency_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_emergency_floordet" name="phyTab_emergency_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Endoscopy</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_endoscopy" onchange="showDiv(this.value,'phy_endoscopy_div')" name="phyInfr_endoscopy" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_endoscopy_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_endoscopy_builname" name="phyTab_endoscopy_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_endoscopy_floordet" name="phyTab_endoscopy_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Gyne Ward</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_gyneward" onchange="showDiv(this.value,'phy_gyneward_div')" name="phyInfr_gyneward" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_gyneward_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_gyneward_builname" name="phyTab_gyneward_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_gyneward_floordet" name="phyTab_gyneward_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>ICCU</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_iccu" onchange="showDiv(this.value,'phy_iccu_div')" name="phyInfr_iccu" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_iccu_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_iccu_builname" name="phyTab_iccu_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_iccu_floordet" name="phyTab_iccu_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>

							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>ICU</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_icu" onchange="showDiv(this.value,'phy_icu_div')" name="phyInfr_icu" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_icu_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_icu_builname" name="phyTab_icu_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_icu_floordet" name="phyTab_icu_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>

							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Labour Room</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_labourroom" onchange="showDiv(this.value,'phy_labourroom_div')" name="phyInfr_labourroom" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_labourroom_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_labourroom_builname" name="phyTab_labourroom_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_labourroom_floordet" name="phyTab_labourroom_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Medical Ward</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_medicalward" onchange="showDiv(this.value,'phy_medicalward_div')" name="phyInfr_medicalward" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_medicalward_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_medicalward_builname" name="phyTab_medicalward_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_medicalward_floordet" name="phyTab_medicalward_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>

							                            <!---->
							                          </div>
							                        </div>

							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>NICU</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_nicu" onchange="showDiv(this.value,'phy_nicu_div')" name="phyInfr_nicu" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_nicu_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_nicu_builname" name="phyTab_nicu_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_nicu_floordet" name="phyTab_nicu_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>

							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Nuclear Medicine</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_nuclearmedicine" onchange="showDiv(this.value,'phy_nuclearmedicine_div')" name="phyInfr_nuclearmedicine" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_nuclearmedicine_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_nuclearmedicine_builname" name="phyTab_nuclearmedicine_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_nuclearmedicine_floordet" name="phyTab_nuclearmedicine_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>

							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Obs Ward</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_obsward" onchange="showDiv(this.value,'phy_obsward_div')" name="phyInfr_obsward" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_obsward_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_obsward_builname" name="phyTab_obsward_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_obsward_floordet" name="phyTab_obsward_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>

							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>OPDs</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_opds" onchange="showDiv(this.value,'phy_opds_div')" name="phyInfr_opds" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_opds_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_opds_builname" name="phyTab_opds_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_opds_floordet" name="phyTab_opds_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>

							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Ortho Ward</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_orthoward" onchange="showDiv(this.value,'phy_orthoward_div')" name="phyInfr_orthoward" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_orthoward_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_orthoward_builname" name="phyTab_orthoward_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_orthoward_floordet" name="phyTab_orthoward_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>OT</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_ot" onchange="showDiv(this.value,'phy_ot_div')" name="phyInfr_ot" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_ot_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_ot_builname" name="phyTab_ot_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_ot_floordet" name="phyTab_ot_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Pead Ward</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_peadward" onchange="showDiv(this.value,'phy_peadward_div')" name="phyInfr_peadward" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_peadward_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_peadward_builname" name="phyTab_peadward_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_peadward_floordet" name="phyTab_peadward_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Physiotherapy</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_physiotherapy" onchange="showDiv(this.value,'phy_physiotherapy_div')" name="phyInfr_physiotherapy" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_physiotherapy_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_physiotherapy_builname" name="phyTab_physiotherapy_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_physiotherapy_floordet" name="phyTab_physiotherapy_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>

							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>PICU</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_picu" onchange="showDiv(this.value,'phy_picu_div')" name="phyInfr_picu" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_picu_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_picu_builname" name="phyTab_picu_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_picu_floordet" name="phyTab_picu_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>

							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>SICU</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_sicu" onchange="showDiv(this.value,'phy_sicu_div')" name="phyInfr_sicu" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_sicu_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_sicu_builname" name="phyTab_sicu_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_sicu_floordet" name="phyTab_sicu_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Stores</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_stores" onchange="showDiv(this.value,'phy_stores_div')" name="phyInfr_stores" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_stores_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_stores_builname" name="phyTab_stores_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_stores_floordet" name="phyTab_stores_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Surgery</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_surgery" onchange="showDiv(this.value,'phy_surgery_div')" name="phyInfr_surgery" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_surgery_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_surgery_builname" name="phyTab_surgery_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_surgery_floordet" name="phyTab_surgery_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Surgical Ward</b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_surgicalward" onchange="showDiv(this.value,'phy_surgicalward_div')" name="phyInfr_surgicalward" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_surgicalward_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_surgicalward_builname" name="phyTab_surgicalward_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_surgicalward_floordet" name="phyTab_surgicalward_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>General Ward </b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_telemedicine" onchange="showDiv(this.value,'phy_telemedicine_div')" name="phyInfr_telemedicine" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_telemedicine_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_telemedicine_builname" name="phyTab_telemedicine_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_telemedicine_floordet" name="phyTab_telemedicine_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>High Dependency Unit </b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_infectioncontrol" onchange="showDiv(this.value,'phy_infectioncontrol_div')" name="phyInfr_infectioncontrol" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_infectioncontrol_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-pristine ng-invalid ng-touched" id="phyTab_infectioncontrol_builname" name="phyTab_infectioncontrol_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-pristine ng-invalid ng-touched" id="phyTab_infectioncontrol_floordet" name="phyTab_infectioncontrol_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        <div class="row-seperator clearfix"></div>
							                        <hr />
							                        <div class="form-group row">
							                          <label class="col-md-12 col-form-label">
							                            <b>Isolation Ward </b>
							                          </label>
							                        </div>
							                        <div class="form-group row">
							                          <label class="col-md-4 col-form-label">Is this service offered?
							                            <span class="text-danger">*</span>
							                          </label>
							                          <div class="col-md-4">
							                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_isolationward" onchange="showDiv(this.value,'phy_isolationward_div')" name="phyInfr_isolationward" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
							                          </div>
							                        </div>
							                        <div class="form-group row" id="phy_isolationward_div">
							                          <label class="col-md-4 form-label">Location of service offered</label>
							                          <div class="col-md-4">
							                            <label>Building Name
							                              <span class="text-danger">*</span>
							                            </label>
							                            <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_isolationward_builname" name="phyTab_isolationward_builname" type="text" required="">
							                            <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
							                              available</small>
							                            <!---->
							                          </div>
							                          <div class="col-md-4">
							                            <label>Floor Details
							                              <span class="text-danger">*</span>
							                            </label>
							                            
							                            <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyTab_isolationwardl_floordet" name="phyTab_isolationwardl_floordet" required="">
							                              <option value="basemesnt2">Basement 2</option>
							                              <option value="basemesnt1">Basement 1</option>
							                              <option value="ground">Ground</option>
							                              <option value="first">First</option>
							                              <option value="second">Second</option>
							                              <option value="third">Third</option>
							                              <option value="fourth">Fourth</option>
							                              <option value="fifth&amp;above">Fifth &amp; Above</option>
							                            </select>
							                            <!---->
							                          </div>
							                        </div>
							                        
							                      </div>
													<hr />
									                    </div>
									                  </div>
													</div>
							                </div>
							            </div>
							        </div>
				                    <!--   first end -->

				                     <!--  second start  -->
  <div class="panel panel-default">
							            <div class="panel-heading">
							                <h4 class="panel-title">
							                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen"> <i class="fa fa-snowflake-o"></i> Laboratory Services</a>
							                </h4>
							            </div>
							            <div id="collapseTen" class="panel-collapse collapse">
							                <div class="panel-body">
							                   <div class="col-xs-12 col-form-label">
							                   	<div class="col-12">
								                    <div class="card tb-frm-crd">
								                     
								                    <div class="card-body">
                        
								                        <div class="form-group row">
								                          <label class="col-md-12 col-form-label">
								                            <b>Clinical Bio-Chemistry</b>
								                          </label>
								                        </div>
								                        <div class="form-group row">
								                          <label class="col-md-4 col-form-label">Is this service offered?
								                            <span class="text-danger">*</span>
								                          </label>
								                          <div class="col-md-4">
								                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_cbc_isoff" onchange="showDiv(this.value,'phy_Labtory_cbc_isoff_div')" name="phyInfr_Labtory_cbc_isoff" required="">
								                              <option value="0">Yes</option>
								                              <option value="1">No</option>
								                            </select>
								                          </div>

								                        </div>
								                        <div>
								                          <div class="form-group row" id="phy_Labtory_cbc_isoff_div">
								                            <label class="col-md-4 col-form-label">Status of Location and Management
								                              <span class="text-danger">*</span>
								                            </label>
								                            <div class="col-md-4">
								                              <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_cbc_locmngt" name="phyInfr_Labtory_cbc_locmngt" required="" onchange="showStatus(this.value,'phy_Labtory_cbc_isoff_div')">

								                               <option value="0">Select</option>
								                                <option value="1">Located Within Premises and Managed by the Hospital itself</option>
                                                                <option value="2">Located within premises and Management Outsourced</option>
                                                                <option value="3">Located Outside Premises and MoU with the Hospital</option>
								                              </select>
								                            </div>
								                          </div>
								                          
								                          <div class="form-group row" hidden="" id="phy_Labtory_cbc_isoff_div1">
								                            <label class="col-md-4 col-form-label">Location of service offered
								                            </label>
								                            <div class="col-md-4">
								                              <label>Building Name
								                                <span class="text-danger">*</span>
								                              </label>
								                              <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_cbc_builname" name="phyInfr_Labtory_cbc_builname" type="text" required="">
								                              <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
								                                available</small>
								                              <!---->
								                            </div>
								                            <div class="col-md-4">
								                              <label>Floor Details
								                                <span class="text-danger">*</span>
								                              </label>

								                              
								                              <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_cbc_floordet" name="phyInfr_Labtory_cbc_floordet" required="">
								                                <option value="basemesnt2">Basement 2</option>
								                                <option value="basemesnt1">Basement 1</option>
								                                <option value="ground">Ground</option>
								                                <option value="first">First</option>
								                                <option value="second">Second</option>
								                                <option value="third">Third</option>
								                                <option value="fourth">Fourth</option>
								                                <option value="fifth&amp;above">Fifth &amp; Above</option>
								                              </select>
								                              <!---->
								                            </div>
								                          </div>
								                          <div class="form-group row" id="phy_Labtory_cbc_isoff_div2" hidden="">
								                            <label class="col-md-4 col-form-label">Address where service is offered
								                              <span class="text-danger">*</span><br>
								                              <small><strong>Note:&nbsp;</strong> Upload photo of MoU</small>
								                            </label>
								                            <div class="col-md-4">
								                              <input class="form-control ng-untouched ng-pristine ng-valid" id="phyInfr_Labtory_cbc_address" name="phyInfr_Labtory_cbc_address" type="text">
								                              <!---->
								                            </div>

								                            <div class="col-md-2">
								                              <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
								                                <i class="fa fa-upload"></i>
								                              </button>

								                              <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                <i class="fa fa-eye"></i>
								                              </button>



								                            </div>
								                            <div class="col-sm-2 text-right">
								                              <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                            </div>

								                          </div>
								                        </div>
								                        <div class="row-seperator clearfix"></div>
								                        <hr />
								                        <div class="form-group row">
								                          <label class="col-md-12 col-form-label">
								                            <b>Clinical Microbiology and Serology</b>
								                          </label>
								                        </div>
								                        <div class="form-group row">
								                          <label class="col-md-4 col-form-label">Is this service offered?
								                            <span class="text-danger">*</span>
								                          </label>
								                          <div class="col-md-4">
								                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_cms_isoff" name="phyInfr_Labtory_cms_isoff" onchange="showDiv(this.value,'phy_Labtory_cms_isoff_div')" required="">
								                              <option value="0">Yes</option>
								                              <option value="1">No</option>
								                            </select>
								                          </div>
								                        </div>
								                        <div>
								                          <div class="form-group row" id="phy_Labtory_cms_isoff_div">
								                            <label class="col-md-4 col-form-label">Status of Location and Management
								                              <span class="text-danger">*</span>
								                            </label>
								                            <div class="col-md-4">
								                              <select class="form-control ng-dirty ng-valid ng-touched" onchange="showStatus(this.value,'phy_Labtory_cms_isoff_div')" id="phy_Labtory_cms_locmngt" name="phyInfr_Labtory_cms_locmngt" required="">
								                            <option value="0">Select</option>
								                                <option value="1">Located Within Premises and Managed by the Hospital itself</option>
                                                                <option value="2">Located within premises and Management Outsourced</option>
                                                                <option value="3">Located Outside Premises and MoU with the Hospital</option>
								                              </select>
								                            </div>
								                          </div>
								                          <div class="form-group row" id="phy_Labtory_cms_isoff_div1" hidden="">
								                            <label class="col-md-4 col-form-label">Location of service offered
								                            </label>
								                            <div class="col-md-4">Building Name
								                              <span class="text-danger">*</span>

								                              <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_cms_builname" name="phyInfr_Labtory_cms_builname" type="text" required="">
								                              <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
								                                available</small>
								                              <!---->
								                            </div>
								                            <div class="col-md-4">Floor Details
								                              <span class="text-danger">*</span>

								                              
								                              <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_cms_floordet" name="phyInfr_Labtory_cms_floordet" required="">
								                                <option value="basemesnt2">Basement 2</option>
								                                <option value="basemesnt1">Basement 1</option>
								                                <option value="ground">Ground</option>
								                                <option value="first">First</option>
								                                <option value="second">Second</option>
								                                <option value="third">Third</option>
								                                <option value="fourth">Fourth</option>
								                                <option value="fifth&amp;above">Fifth &amp; Above</option>

								                              </select>
								                              <!---->
								                            </div>
								                          </div>
								                          <div class="form-group row" id="phy_Labtory_cms_isoff_div2" hidden="">
								                            <label class="col-md-4 col-form-label">Address where service is offered
								                              <span class="text-danger">*</span><br>
								                              <small><strong>Note:&nbsp;</strong> Upload photo of MoU</small>
								                            </label>
								                            <div class="col-md-4">
								                              <input class="form-control ng-untouched ng-pristine ng-valid" id="phyInfr_Labtory_cms_address" name="phyInfr_Labtory_cms_address" type="text">
								                              <!---->
								                            </div>

								                            <div class="col-md-2">
								                              <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
								                                <i class="fa fa-upload"></i>
								                              </button>

								                              <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                <i class="fa fa-eye"></i>
								                              </button>

								                            </div>
								                            <div class="col-sm-2 text-right">
								                              <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                            </div>

								                          </div>
								                        </div>
								                        <div class="row-seperator clearfix"></div>
								                        <hr />
								                        <div class="form-group row">
								                          <label class="col-md-12 col-form-label">
								                            <b>Clinical Pathology</b>
								                          </label>
								                        </div>
								                        <div class="form-group row">
								                          <label class="col-md-4 col-form-label">Is this service offered?
								                            <span class="text-danger">*</span>
								                          </label>
								                          <div class="col-md-4">
								                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_cp_isoff" name="phyInfr_Labtory_cp_isoff" onchange="showDiv(this.value,'phy_Labtory_cp_isoff_div')" required="">
								                              <option value="0">Yes</option>
								                              <option value="1">No</option>
								                            </select>
								                          </div>

								                        </div>
								                        <div>
								                          <div class="form-group row" id="phy_Labtory_cp_isoff_div">
								                            <label class="col-md-4 col-form-label">Status of Location and Management
								                              <span class="text-danger">*</span>
								                            </label>
								                            <div class="col-md-4">
								                              <select class="form-control ng-dirty ng-valid ng-touched" onchange="showStatus(this.value,'phy_Labtory_cp_isoff_div')" id="phy_Labtory_cp_locmngt" name="phyInfr_Labtory_cp_locmngt" required="">
								                            <option value="0">Select</option>
								                                <option value="1">Located Within Premises and Managed by the Hospital itself</option>
                                                                <option value="2">Located within premises and Management Outsourced</option>
                                                                <option value="3">Located Outside Premises and MoU with the Hospital</option>
								                              </select>
								                            </div>
								                          </div>
								                          <div class="form-group row"  hidden="" id="phy_Labtory_cp_isoff_div1">
								                            <label class="col-md-4 col-form-label">Location of service offered
								                            </label>
								                            <div class="col-md-4">Building Name
								                              <span class="text-danger">*</span>

								                              <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_cp_builname" name="phyInfr_Labtory_cp_builname" type="text" required="">
								                              <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
								                                available</small>
								                              <!---->
								                            </div>
								                            <div class="col-md-4">Floor Details
								                              <span class="text-danger">*</span>

								                              
								                              <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_cp_floordet" name="phyInfr_Labtory_cp_floordet" id="phy_Labtory_cp_isoff_div2" required="">
								                                <option value="basemesnt2">Basement 2</option>
								                                <option value="basemesnt1">Basement 1</option>
								                                <option value="ground">Ground</option>
								                                <option value="first">First</option>
								                                <option value="second">Second</option>
								                                <option value="third">Third</option>
								                                <option value="fourth">Fourth</option>
								                                <option value="fifth&amp;above">Fifth &amp; Above</option>
								                              </select>
								                              <!---->
								                            </div>
								                          </div>
								                          <div class="form-group row"  hidden="">
								                            <label class="col-md-4 col-form-label">Address where service is offered
								                              <span class="text-danger">*</span><br>
								                              <small><strong>Note:&nbsp;</strong> Upload photo of MoU</small>
								                            </label>
								                            <div class="col-md-4">
								                              <input class="form-control ng-untouched ng-pristine ng-valid" id="phyInfr_Labtory_cp_address" name="phyInfr_Labtory_cp_address" type="text">
								                              <!---->
								                            </div>

								                            <div class="col-md-2">
								                              <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
								                                <i class="fa fa-upload"></i>
								                              </button>

								                              <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                <i class="fa fa-eye"></i>
								                              </button>

								                            </div>
								                            <div class="col-sm-2  text-right">
								                              <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                            </div>

								                          </div>
								                        </div>
								                        <div class="row-seperator clearfix"></div>
								                        <hr />
								                        <div class="form-group row">
								                          <label class="col-md-12 col-form-label">
								                            <b>Cytopathology</b>
								                          </label>
								                        </div>
								                        <div class="form-group row">
								                          <label class="col-md-4 col-form-label">Is this service offered?
								                            <span class="text-danger">*</span>
								                          </label>
								                          <div class="col-md-4">
								                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_cytopathology_isoff" name="phyInfr_Labtory_cytopathology_isoff" required="" onchange="showDiv(this.value,'phyInfr_Labtory_cytopathology_isoff_div')">
								                              <option value="0">Yes</option>
								                              <option value="1">No</option>
								                            </select>
								                          </div>
								                        </div>
								                        <div>
								                          <div class="form-group row" id="phyInfr_Labtory_cytopathology_isoff_div">
								                            <label class="col-md-4 col-form-label">Status of Location and Management
								                              <span class="text-danger">*</span>
								                            </label>
								                            <div class="col-md-4">
								                              <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_cytopathology_locmngt" name="phyInfr_Labtory_cytopathology_locmngt" required="" onchange="showStatus(this.value,'phyInfr_Labtory_cytopathology_isoff_div')">
								                            <option value="0">Select</option>
								                                <option value="1">Located Within Premises and Managed by the Hospital itself</option>
                                                                <option value="2">Located within premises and Management Outsourced</option>
                                                                <option value="3">Located Outside Premises and MoU with the Hospital</option>
								                              </select>
								                            </div>
								                          </div>
								                          <div class="form-group row"  hidden="" id="phyInfr_Labtory_cytopathology_isoff_div1">
								                            <label class="col-md-4 col-form-label">Location of service offered
								                            </label>
								                            <div class="col-md-4">Building Name
								                              <span class="text-danger">*</span>

								                              <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_cytopathology_builname" name="phyInfr_Labtory_cytopathology_builname" type="text" required="">
								                              <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
								                                available</small>
								                              <!---->
								                            </div>
								                            <div class="col-md-4">Floor Details
								                              <span class="text-danger">*</span>

								                              
								                              <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_cytopathology_floordet" name="phyInfr_Labtory_cytopathology_floordet" required="">
								                                <option value="basemesnt2">Basement 2</option>
								                                <option value="basemesnt1">Basement 1</option>
								                                <option value="ground">Ground</option>
								                                <option value="first">First</option>
								                                <option value="second">Second</option>
								                                <option value="third">Third</option>
								                                <option value="fourth">Fourth</option>
								                                <option value="fifth&amp;above">Fifth &amp; Above</option>
								                              </select>
								                              <!---->
								                            </div>
								                          </div>
								                          <div class="form-group row" hidden="" id="phyInfr_Labtory_cytopathology_isoff_div2">
								                            <label class="col-md-4 col-form-label">Address where service is offered
								                              <span class="text-danger">*</span><br>
								                              <small><strong>Note:&nbsp;</strong> Upload photo of MoU</small>
								                            </label>
								                            <div class="col-md-4">
								                              <input class="form-control ng-untouched ng-pristine ng-valid" id="phyInfr_Labtory_cytopathology_address" name="phyInfr_Labtory_cytopathology_address" type="text">
								                              <!---->
								                            </div>

								                            <div class="col-md-2">
								                              <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
								                                <i class="fa fa-upload"></i>
								                              </button>

								                              <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                <i class="fa fa-eye"></i>
								                              </button>

								                            </div>
								                            <div class="col-sm-2  text-right">
								                              <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                            </div>

								                          </div>
								                        </div>
								                        <div class="row-seperator clearfix"></div>
								                        <hr />
								                        <div class="form-group row">
								                          <label class="col-md-12 col-form-label">
								                            <b>Genetics</b>
								                          </label>
								                        </div>
								                        <div class="form-group row">
								                          <label class="col-md-4 col-form-label">Is this service offered?
								                            <span class="text-danger">*</span>
								                          </label>
								                          <div class="col-md-4">
								                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_genetics_isoff" name="phyInfr_Labtory_genetics_isoff" required="" onchange="showDiv(this.value,'phyInfr_Labtory_genetics_isoff_div')" >
								                              <option value="0">Yes</option>
								                              <option value="1">No</option>
								                            </select>
								                          </div>
								                        </div>
								                        <div>
								                          <div class="form-group row" id="phyInfr_Labtory_genetics_isoff_div">
								                            <label class="col-md-4 col-form-label">Status of Location and Management
								                              <span class="text-danger">*</span>
								                            </label>
								                            <div class="col-md-4">
								                              <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_genetics_locmngt" name="phyInfr_Labtory_genetics_locmngt" required="" onchange="showStatus(this.value,'phyInfr_Labtory_genetics_isoff_div')">
								                            <option value="0">Select</option>
								                                <option value="1">Located Within Premises and Managed by the Hospital itself</option>
                                                                <option value="2">Located within premises and Management Outsourced</option>
                                                                <option value="3">Located Outside Premises and MoU with the Hospital</option>
								                              </select>
								                            </div>
								                          </div>
								                          <div class="form-group row"  hidden="" id="phyInfr_Labtory_genetics_isoff_div1">
								                            <label class="col-md-4 col-form-label">Location of service offered
								                            </label>
								                            <div class="col-md-4">Building Name
								                              <span class="text-danger">*</span>

								                              <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_genetics_builname" name="phyInfr_Labtory_genetics_builname" type="text" required="">
								                              <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
								                                available</small>
								                              <!---->
								                            </div>
								                            <div class="col-md-4">Floor Details
								                              <span class="text-danger">*</span>

								                              
								                              <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_genetics_floordet" name="phyInfr_Labtory_genetics_floordet" required="">
								                                <option value="basemesnt2">Basement 2</option>
								                                <option value="basemesnt1">Basement 1</option>
								                                <option value="ground">Ground</option>
								                                <option value="first">First</option>
								                                <option value="second">Second</option>
								                                <option value="third">Third</option>
								                                <option value="fourth">Fourth</option>
								                                <option value="fifth&amp;above">Fifth &amp; Above</option>
								                              </select>


								                              <!---->
								                            </div>
								                          </div>
								                          <div class="form-group row" hidden="" id="phyInfr_Labtory_genetics_isoff_div2">
								                            <label class="col-md-4 col-form-label">Address where service is offered
								                              <span class="text-danger">*</span><br>
								                              <small><strong>Note:&nbsp;</strong> Upload photo of MoU</small>
								                            </label>
								                            <div class="col-md-4">
								                              <input class="form-control ng-untouched ng-pristine ng-valid" id="phyInfr_Labtory_genetics_address" name="phyInfr_Labtory_genetics_address" type="text">
								                              <!---->
								                            </div>

								                            <div class="col-md-2">
								                              <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
								                                <i class="fa fa-upload"></i>
								                              </button>

								                              <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                <i class="fa fa-eye"></i>
								                              </button>

								                            </div>
								                            <div class="col-sm-2  text-right">
								                              <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                            </div>

								                          </div>
								                        </div>
								                        <div class="row-seperator clearfix"></div>
								                        <hr />
								                        <div class="form-group row">
								                          <label class="col-md-12 col-form-label">
								                            <b>Haematology</b>
								                          </label>
								                        </div>
								                        <div class="form-group row">
								                          <label class="col-md-4 col-form-label">Is this service offered?
								                            <span class="text-danger">*</span>
								                          </label>
								                          <div class="col-md-4">
								                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_haematology_isoff" name="phyInfr_Labtory_haematology_isoff" required="" onchange="showDiv(this.value,'phyInfr_Labtory_haematology_isoff_div')">
								                              <option value="0">Yes</option>
								                              <option value="1">No</option>
								                            </select>
								                          </div>
								                        </div>
								                        <div>
								                          <div class="form-group row" id="phyInfr_Labtory_haematology_isoff_div">
								                            <label class="col-md-4 col-form-label">Status of Location and Management
								                              <span class="text-danger">*</span>
								                            </label>
								                            <div class="col-md-4">
								                              <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_haematology_locmngt" name="phyInfr_Labtory_haematology_locmngt" required="" onchange="showStatus(this.value,'phyInfr_Labtory_haematology_isoff_div')">
								                            <option value="0">Select</option>
								                                <option value="1">Located Within Premises and Managed by the Hospital itself</option>
                                                                <option value="2">Located within premises and Management Outsourced</option>
                                                                <option value="3">Located Outside Premises and MoU with the Hospital</option>
								                              </select>
								                            </div>
								                          </div>
								                          <div class="form-group row"  hidden="" id="phyInfr_Labtory_haematology_isoff_div1">
								                            <label class="col-md-4 col-form-label">Location of service offered
								                            </label>
								                            <div class="col-md-4">Building Name
								                              <span class="text-danger">*</span>

								                              <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_haematology_builname" name="phyInfr_Labtory_haematology_builname" type="text" required="">
								                              <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
								                                available</small>
								                              <!---->
								                            </div>
								                            <div class="col-md-4">Floor Details
								                              <span class="text-danger">*</span>

								                              
								                              <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_haematology_floordet" name="phyInfr_Labtory_haematology_floordet" required="">
								                                <option value="basemesnt2">Basement 2</option>
								                                <option value="basemesnt1">Basement 1</option>
								                                <option value="ground">Ground</option>
								                                <option value="first">First</option>
								                                <option value="second">Second</option>
								                                <option value="third">Third</option>
								                                <option value="fourth">Fourth</option>
								                                <option value="fifth&amp;above">Fifth &amp; Above</option>
								                              </select>
								                              <!---->
								                            </div>
								                          </div>
								                          <div class="form-group row" hidden="" id="phyInfr_Labtory_haematology_isoff_div2">
								                            <label class="col-md-4 col-form-label">Address where service is offered
								                              <span class="text-danger">*</span><br>
								                              <small><strong>Note:&nbsp;</strong> Upload photo of MoU</small>
								                            </label>
								                            <div class="col-md-4">
								                              <input class="form-control ng-untouched ng-pristine ng-valid" id="phyInfr_Labtory_haematology_address" name="phyInfr_Labtory_haematology_address" type="text">
								                              <!---->
								                            </div>

								                            <div class="col-md-2">
								                              <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
								                                <i class="fa fa-upload"></i>
								                              </button>

								                              <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                <i class="fa fa-eye"></i>
								                              </button>

								                            </div>
								                            <div class="col-sm-2  text-right">
								                              <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                            </div>


								                          </div>
								                        </div>
								                        <div class="row-seperator clearfix"></div>
								                        <hr />
								                        <div class="form-group row">
								                          <label class="col-md-12 col-form-label">
								                            <b>Histopathology</b>
								                          </label>
								                        </div>
								                        <div class="form-group row">
								                          <label class="col-md-4 col-form-label">Is this service offered?
								                            <span class="text-danger">*</span>
								                          </label>
								                          <div class="col-md-4">
								                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_histopathology_isoff" name="phyInfr_Labtory_histopathology_isoff" required="" onchange="showDiv(this.value,'phyInfr_Labtory_histopathology_isoff_div')">
								                              <option value="0">Yes</option>
								                              <option value="1">No</option>
								                            </select>
								                          </div>

								                        </div>
								                        <div>
								                          <div class="form-group row" id="phyInfr_Labtory_histopathology_isoff_div">
								                            <label class="col-md-4 col-form-label">Status of Location and Management
								                              <span class="text-danger">*</span>
								                            </label>
								                            <div class="col-md-4">
								                              <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_histopathology_locmngt" name="phyInfr_Labtory_histopathology_locmngt" required="" onchange="showStatus(this.value,'phyInfr_Labtory_histopathology_isoff_div')">
								                            <option value="0">Select</option>
								                                <option value="1">Located Within Premises and Managed by the Hospital itself</option>
                                                                <option value="2">Located within premises and Management Outsourced</option>
                                                                <option value="3">Located Outside Premises and MoU with the Hospital</option>
								                              </select>
								                            </div>
								                          </div>
								                          <div class="form-group row"  hidden="" id="phyInfr_Labtory_histopathology_isoff_div1">
								                            <label class="col-md-4 col-form-label">Location of service offered
								                            </label>
								                            <div class="col-md-4">Building Name
								                              <span class="text-danger">*</span>

								                              <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_histopathology_builname" name="phyInfr_Labtory_histopathology_builname" type="text" required="">
								                              <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
								                                available</small>
								                              <!---->
								                            </div>
								                            <div class="col-md-4">Floor Details
								                              <span class="text-danger">*</span>

								                              
								                              <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_histopathology_floordet" name="phyInfr_Labtory_histopathology_floordet" required="">
								                                <option value="basemesnt2">Basement 2</option>
								                                <option value="basemesnt1">Basement 1</option>
								                                <option value="ground">Ground</option>
								                                <option value="first">First</option>
								                                <option value="second">Second</option>
								                                <option value="third">Third</option>
								                                <option value="fourth">Fourth</option>
								                                <option value="fifth&amp;above">Fifth &amp; Above</option>
								                              </select>
								                              <!---->
								                            </div>
								                          </div>
								                          <div class="form-group row" hidden="" id="phyInfr_Labtory_histopathology_isoff_div2">
								                            <label class="col-md-4 col-form-label">Address where service is offered
								                              <span class="text-danger">*</span><br>
								                              <small><strong>Note:&nbsp;</strong> Upload photo of MoU</small>
								                            </label>
								                            <div class="col-md-4">
								                              <input class="form-control ng-untouched ng-pristine ng-valid" id="phyInfr_Labtory_histopathology_address" name="phyInfr_Labtory_histopathology_address" type="text">
								                              <!---->
								                            </div>

								                            <div class="col-md-2">
								                              <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
								                                <i class="fa fa-upload"></i>
								                              </button>

								                              <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                <i class="fa fa-eye"></i>
								                              </button>

								                            </div>
								                            <div class="col-sm-2  text-right">
								                              <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                            </div>

								                          </div>
								                        </div>
								                        <div class="row-seperator clearfix"></div>
								                        <hr />
								                        <div class="form-group row">
								                          <label class="col-md-12 col-form-label">
								                            <b>Toxicology</b>
								                          </label>
								                        </div>
								                        <div class="form-group row">
								                          <label class="col-md-4 col-form-label">Is this service offered?
								                            <span class="text-danger">*</span>
								                          </label>
								                          <div class="col-md-4">
								                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_toxicology_isoff" name="phyInfr_Labtory_toxicology_isoff" required="" onchange="showDiv(this.value,'phyInfr_Labtory_toxicology_isoff_div')">
								                              <option value="0">Yes</option>
								                              <option value="1">No</option>
								                            </select>
								                          </div>

								                        </div>
								                        <div>
								                          <div class="form-group row" id="phyInfr_Labtory_toxicology_isoff_div">
								                            <label class="col-md-4 col-form-label">Status of Location and Management
								                              <span class="text-danger">*</span>
								                            </label>
								                            <div class="col-md-4">
								                              <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_toxicology_locmngt" name="phyInfr_toxicology_toxicology_locmngt" required="" onchange="showStatus(this.value,'phyInfr_Labtory_toxicology_isoff_div')">
								                            <option value="0">Select</option>
								                                <option value="1">Located Within Premises and Managed by the Hospital itself</option>
                                                                <option value="2">Located within premises and Management Outsourced</option>
                                                                <option value="3">Located Outside Premises and MoU with the Hospital</option>
								                              </select>
								                            </div>
								                          </div>
								                          <div class="form-group row"  hidden="" id="phyInfr_Labtory_toxicology_isoff_div1">
								                            <label class="col-md-4 col-form-label">Location of service offered
								                            </label>
								                            <div class="col-md-4">Building Name
								                              <span class="text-danger">*</span>

								                              <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_toxicology_builname" name="phyInfr_Labtory_toxicology_builname" type="text" required="">
								                              <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
								                                available</small>
								                              <!---->
								                            </div>
								                            <div class="col-md-4">Floor Details
								                              <span class="text-danger">*</span>

								                              
								                              <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_toxicology_floordet" name="phyInfr_Labtory_toxicology_floordet" required="">
								                                <option value="basemesnt2">Basement 2</option>
								                                <option value="basemesnt1">Basement 1</option>
								                                <option value="ground">Ground</option>
								                                <option value="first">First</option>
								                                <option value="second">Second</option>
								                                <option value="third">Third</option>
								                                <option value="fourth">Fourth</option>
								                                <option value="fifth&amp;above">Fifth &amp; Above</option>
								                              </select>

								                              <!---->
								                            </div>
								                          </div>
								                          <div class="form-group row" hidden="" id="phyInfr_Labtory_toxicology_isoff_div2">
								                            <label class="col-md-4 col-form-label">Address where service is offered
								                              <span class="text-danger">*</span><br>
								                              <small><strong>Note:&nbsp;</strong> Upload photo of MoU</small>
								                            </label>
								                            <div class="col-md-4">
								                              <input class="form-control ng-untouched ng-pristine ng-valid" id="phyInfr_Labtory_toxicology_address" name="phyInfr_Labtory_toxicology_address" type="text">
								                              <!---->
								                            </div>

								                            <div class="col-md-2">
								                              <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
								                                <i class="fa fa-upload"></i>
								                              </button>

								                              <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                <i class="fa fa-eye"></i>
								                              </button>

								                            </div>
								                            <div class="col-sm-2  text-right">
								                              <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                            </div>

								                          </div>
								                        </div>
								                        <div class="row-seperator clearfix"></div>
								                        <hr />
								                        <div class="form-group row">
								                          <label class="col-md-12 col-form-label">
								                            <b>Molecular Biology</b>
								                          </label>
								                        </div>
								                        <div class="form-group row">
								                          <label class="col-md-4 col-form-label">Is this service offered?
								                            <span class="text-danger">*</span>
								                          </label>
								                          <div class="col-md-4">
								                            <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_molecularbiology_isoff" name="phyInfr_Labtory_molecularbiology_isoff" required="" onchange="showDiv(this.value,'phyInfr_Labtory_molecularbiology_isoff_div')">
								                              <option value="0">Yes</option>
								                              <option value="1">No</option>
								                            </select>
								                          </div>

								                        </div>
								                        <div>
								                          <div class="form-group row" id="phyInfr_Labtory_molecularbiology_isoff_div">
								                            <label class="col-md-4 col-form-label">Status of Location and Management
								                              <span class="text-danger">*</span>
								                            </label>
								                            <div class="col-md-4">
								                              <select class="form-control ng-dirty ng-valid ng-touched" id="phy_Labtory_molecularbiology_locmngt" name="phyInfr_Labtory_molecularbiology_locmngt" required="" onchange="showStatus(this.value,'phyInfr_Labtory_molecularbiology_isoff_div')">
								                            <option value="0">Select</option>
								                                <option value="1">Located Within Premises and Managed by the Hospital itself</option>
                                                                <option value="2">Located within premises and Management Outsourced</option>
                                                                <option value="3">Located Outside Premises and MoU with the Hospital</option>
								                              </select>
								                            </div>
								                          </div>
								                          <div class="form-group row"  hidden="" id="phyInfr_Labtory_molecularbiology_isoff_div1">
								                            <label class="col-md-4 col-form-label">Location of service offered
								                            </label>
								                            <div class="col-md-4">Building Name
								                              <span class="text-danger">*</span>

								                              <input class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_molecularbiology_builname" name="phyInfr_Labtory_molecularbiology_builname" type="text" required="">
								                              <small><strong>Note:&nbsp;</strong> Mention hospital name if building name not
								                                available</small>
								                              <!---->
								                            </div>
								                            <div class="col-md-4">Floor Details
								                              <span class="text-danger">*</span>

								                              
								                              <select class="form-control ng-untouched ng-pristine ng-invalid" id="phyInfr_Labtory_molecularbiology_floordet" name="phyInfr_Labtory_molecularbiology_floordet" required="">
								                                <option value="basemesnt2">Basement 2</option>
								                                <option value="basemesnt1">Basement 1</option>
								                                <option value="ground">Ground</option>
								                                <option value="first">First</option>
								                                <option value="second">Second</option>
								                                <option value="third">Third</option>
								                                <option value="fourth">Fourth</option>
								                                <option value="fifth&amp;above">Fifth &amp; Above</option>
								                              </select>

								                              <!---->
								                            </div>
								                          </div>
								                          <div class="form-group row" hidden="" id="phyInfr_Labtory_molecularbiology_isoff_div2">
								                            <label class="col-md-4 col-form-label">Address where service is offered
								                              <span class="text-danger">*</span><br>
								                              <small><strong>Note:&nbsp;</strong> Upload photo of MoU</small>
								                            </label>
								                            <div class="col-md-4">
								                              <input class="form-control ng-untouched ng-pristine ng-valid" id="phyInfr_Labtory_molecularbiology_address" name="phyInfr_Labtory_molecularbiology_address" type="text">
								                              <!---->
								                            </div>

								                            <div class="col-md-2">
								                              <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
								                                <i class="fa fa-upload"></i>
								                              </button>

								                              <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                <i class="fa fa-eye"></i>
								                              </button>

								                            </div>
								                            <div class="col-sm-2  text-right">
								                              <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                            </div>

								                          </div>
								                        </div>
								                        <hr />
								                        
								                      </div>
																   </div>
								                  </div>
							                   </div>
							                </div>
							            </div>
							        </div>

				                    <!--   second end -->

				                      <div class="panel-body panel-form">
						                <div class="row">
						                    <div class="col-md-12 col-sm-12">

						                        

						                           			<div class="form-group">
										                      <div class="col-sm-10">
										                        <label class="col-form-label">
										                          <b>Availability of electrical supplies</b>
										                          
										                        </label>
										                      </div>
										                      <div class="col-sm-2 text-right">
										                        <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
										                      </div>
                                                             </div>

                                                           <div class="row form-group" style="padding-top: 20px;">
										                      <div class="col-md-5">
										                        <label class="col-form-label">
										                          Is UPS system present at the hospital?
										                          <span class="text-danger">*</span>

										                        </label>
										                      </div>

										                      <div class="col-md-2">
										                        <label class="switch switch-text switch-success">
										                          <input class="switch-input " 
										                          id="avel_upsprearea" 
										                          name="phy_infra[avel_upsprearea]" type="checkbox" value="1" onclick="showAvilabi(this.id,this.value)" >
										                          <span class="switch-label" data-off="NO" data-on="YES" ></span>
										                          <span class="switch-handle"></span>
										                        </label>
										                        <!---->

										                      </div>


										                    </div>
										                    <div class=" row form-group" hidden="" id="avel_upsprearea_div">

										                      <div class="col-md-5">
										                        <label class="col-form-label">
										                          What is the capacity of the UPS system in KV?
										                          <span class="text-danger">*</span>

										                        </label>
										                      </div>
										                      <div class="col-md-3">
										                        <input class="form-control   " id="avel_whtcapupssystem" name="phy_infra[avel_whtcapupssystem]" placeholder="" type="text"  >
										                        <!---->

										                      </div>
										                    </div>

										                    <div class="row form-group">
										                      <div class="col-md-5">
										                        <label class="col-form-label">
										                          Is a generator present at the hospital?
										                          <span class="text-danger">*</span>

										                        </label>
										                      </div>

										                      <div class="col-md-1">
										                        <label class="switch switch-text switch-success">
										                          <input class="switch-input   " id="avel_isgeneratorpresenthospital" name="phy_infra[avel_isgeneratorpresenthospital]" type="checkbox" value="1" onclick="showAvilabi(this.id,this.value)">
										                          <span class="switch-label" data-off="NO" data-on="YES"></span>
										                          <span class="switch-handle"></span>
										                        </label>
										                        <!---->

										                      </div>
                                                              
										                      <div class="col-md-2">

										                        
										                       <!--  <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
										                          <i class="fa fa-mobile custom-mobileIcon"></i>
										                        </button>
										                        

										                        <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
										                          <i class="fa fa-eye"></i>
										                        </button> -->
										                      </div>

										                    </div>
										                     <div class=" row form-group" hidden="" id="avel_isgeneratorpresenthospital_div">

										                      <div class="col-md-5">
										                        <label class="col-form-label">
										                          What is the capacity of the generator in KV?
										                          <span class="text-danger">*</span>

										                        </label>
										                      </div>
										                      <div class="col-md-3">
										                        <input class="form-control   " id="avel_whatisthecpacityenerator" name="phy_infra[avel_whatisthecpacityenerator]" placeholder="" type="text" >
										                        <!---->


										                      </div>


										                    </div>
										                <hr />

										                <div class="row form-group">
										                      <div class="col-md-5">
										                        <label class="col-form-label">
										                          <b>Are following areas covered with backup option ?</b>&nbsp;
										                        </label>
										                      </div>
										                    </div>
																<div class="row form-group">
										                      
										                      <div class="col-md-5">
										                        <label class="col-form-label">
										                          All ICUs such as cardiac, neonatal, paediatric, etc
										                          <span class="text-danger">*</span>

										                        </label>
										                      </div>
																<div class="col-md-1">
										                        
										                        <label class="switch switch-text switch-success">
										                          <input class="switch-input   " id="avel_allicucarpae" name="phy_infra[avel_allicucarpae]" type="checkbox" value="1">
										                          <span class="switch-label" data-off="No" data-on="Yes"></span>
										                          <span class="switch-handle"></span>
										                        </label>
										                        
										                        
										                      </div>
 																</div>
 																<div class="row form-group">
										                      <div class="col-md-5">
										                        <label class="col-form-label">
										                          OT
										                          <span class="text-danger">*</span>

										                        </label>
										                      </div>

										                      <div class="col-md-1">
										                        <label class="switch switch-text switch-success">
										                          
										                          <input class="switch-input   " id="avel_ot" 
										                          name="phy_infra[avel_ot]" type="checkbox" value="1">
										                          
										                          <span class="switch-label" data-off="No" data-on="Yes"></span>
										                          <span class="switch-handle"></span>
										                        </label>
										                        
										                        
										                      </div>
																</div>
																<div class="row form-group">
										                      
										                      <div class="col-md-5">
										                        <label class="col-form-label">
										                          Ward
										                          <span class="text-danger">*</span>

										                        </label>
										                      </div>

										                      <div class="col-md-1">

										                        
										                        <label class="switch switch-text switch-success">
										                          <input class="switch-input   " id="avel_ward" name="phy_infra[avel_ward]" type="checkbox" value="1">
										                          <span class="switch-label" data-off="No" data-on="Yes"></span>
										                          <span class="switch-handle"></span>
										                        </label>
										                        
										                        

										                      </div>
																</div>
										                    
										                    <div class="row form-group">
										                      <div class="col-md-5">
										                        <label class="col-form-label">
										                          Labour room
										                          <span class="text-danger">*</span>

										                        </label>
										                      </div>

										                      <div class="col-md-1">
										                        
										                        <label class="switch switch-text switch-success">
										                          <input class="switch-input   " id="avel_labourroom" name="phy_infra[avel_labourroom]" type="checkbox" value="1">
										                          <span class="switch-label" data-off="No" data-on="Yes"></span>
										                          <span class="switch-handle"></span>
										                        </label>
										                        
										                        

										                      </div>
																</div>


										                    
										                    <div class="row form-group">

										                      <div class="col-md-5">
										                        <label class="col-form-label">
										                          Others
										                          <span class="text-danger">*</span>

										                        </label>
										                      </div>

										                      <div class="col-md-2">

										                        
										                        <label class="switch switch-text switch-success">
										                          <input class="switch-input   " id="avel_other" name="phy_infra[avel_other]" type="checkbox" value="1" onclick="showAvilabi(this.id,this.value)">
										                          <span class="switch-label" data-off="No" data-on="Yes"></span>
										                          <span class="switch-handle"></span>
										                        </label>
										                        

																</div>
 																</div>
										                    <div class=" row form-group" hidden="" id="avel_other_div">
										                      <div class="col-md-5">
										                        <label class="col-form-label">
										                          Mention the other area where backup option is present
										                          <span class="text-danger">*</span>
										                        </label>
										                      </div>
										                      <!----><div class="col-md-3 ng-star-inserted">
										                        <input class="form-control   " id="avel_mentupspresent" name="phy_infra[avel_mentupspresent]" placeholder="" type="text" >
										                        <!---->
										                      </div>
																</div>
																 <hr />

													                <div class="row form-group">
			                  
													                  <div class="col-sm-11">
													                    <label class="col-form-label ">
													                      <b>Water Supplier</b>
													                    </label>
													                  </div>
													     			</div>
													     			 <div class="form-group row">
										                                <label for="firstname" class="col-xs-2 col-form-label"> Total number of water tanks<i class="text-danger">*</i></label>
										                                <div class="col-xs-4">
										                                    <input  type="text" class="form-control" id="watsupp_tonumtanks" name="phy_infra[watsupp_tonumtanks]" required="" >
										                                </div>
										                                 <label for="firstname" class="col-xs-2 col-form-label"> Total capacity of the water tanks (in 1000 litres)<i class="text-danger">*</i></label>
										                                <div class="col-xs-4">
										                                    <input  type="text" class="form-control" id="watsupp_totcapwattanks" name="phy_infra[watsupp_totcapwattanks]"  >
										                                </div>
																		</div>
																		<hr />


																		 <div class="row form-group">
			                  
													                  <div class="col-sm-11">
													                    <label class="col-form-label ">
													                      <b>Elevators</b>
													                    </label>
													                  </div>
													     			</div>
													     			 <div class="form-group row">
										                                <label for="firstname" class="col-xs-3 col-form-label"> What is the number of elevators for trolleys/beds present in the premise? <i class="text-danger">*</i></label>
										                                <div class="col-xs-3">
										                                    <input  type="text" class="form-control" id="elev_noofelevbedpremise" name="phy_infra[elev_noofelevbedpremise]" required="" >
										                                </div>
										                                 <label for="firstname" class="col-xs-3 col-form-label"> What is the number of elevators for people, present in the premise? <i class="text-danger">*</i></label>
										                                <div class="col-xs-3">
										                                    <input  type="text" class="form-control" id="elev_noofelev_people_premise" name="phy_infra[elev_noofelev_people_premise]"  >
										                                </div>
																		</div>
																		<hr />

																		<div class="row form-group">
			                  
													                  <div class="col-sm-11">
													                    <label class="col-form-label ">
													                      <b>Type of trolleys present at the hospital</b>
													                    </label>
													                  </div>
													     			</div>
													     			 <div class="form-group row">
										                                <label for="firstname" class="col-xs-3 col-form-label">Are trolleys with safety belts or side rails present at the hospital? <i class="text-danger">*</i></label>
										                                <div class="col-xs-3">
										                                    <input   class="form-control" id="typoftph_aretrolysftyprehosp" name="phy_infra[typoftph_aretrolysftyprehosp]" type="checkbox" value="1" required="" >
										                                </div>
										                                 <label for="firstname" class="col-xs-3 col-form-label">Are wheel chairs with safety belts present at the hospital?  <i class="text-danger">*</i></label>
										                                <div class="col-xs-3">
										                                    <input  class="form-control"  id="typoftph_arewhelchirsfprhosp" name="phy_infra[typoftph_arewhelchirsfprhosp]" type="checkbox"value="1" required="" >
										                                </div>
																		</div>
																		<hr />

																		<div class="row form-group">
			                  
													                  <div class="col-sm-11">
													                    <label class="col-form-label ">
													                      <b>Ambulance Accessibility</b>
													                    </label>
													                  </div>
													     			</div>
													     			 <div class="form-group row">
										                                <label for="firstname" class="col-xs-3 col-form-label">Is there demarcated parking for Ambulance vehicles?  <i class="text-danger">*</i></label>
										                                <div class="col-xs-3">
										                                    <input   class="form-control" id="demarcatedParkingForAmbulanceVehicles" name="phy_infra[demarcatedParkingForAmbulanceVehicles]" type="checkbox" value="1" required="" >
										                                </div>
																		</div>
																		<hr />

																		<div class="row form-group">
			                  
													                  <div class="col-sm-11">
													                    <label class="col-form-label ">
													                      <b>Uniform signage system in the Facility</b>
													                    </label>
													                  </div>
													     			</div>
													     			 <div class="form-group row">
										                                <label for="firstname" class="col-xs-6 col-form-label">Radiation Hazard  </label>
										                               
																		<input type="hidden" id="Radiation_Hazard_val" value="1">
																		<div class="col-xs-6"><button class="btn btn-sm btn-success " onclick="addRow('Radiation_Hazard','Radiation_Hazard_val','unisisyfa_radiationhazard')" type="button">
												                          <i class="fa fa-plus-circle"></i>&nbsp;Add Location
												                        </button>
												                    </div>
																	</div>
																	<div id="Radiation_Hazard">
																		<div class="form-group row">
										                                <label for="firstname" class="col-xs-3 col-form-label">Location #1  <i class="text-danger">*</i></label>
										                                <div class="col-xs-3">
										                                     <input  type="text" class="form-control" id="unisisyfa_radiationhazard" name="unisisyfa_radiationhazard[]" required="" >
										                                </div>

																		</div>
																	</div>

																		<hr />


																		<div class="row form-group">
			                  
													                  <div class="col-sm-11">
													                    <label class="col-form-label ">
													                      <b>Declaration under </b>
													                    </label>
													                  </div>
													     			</div>
													     			 <div class="form-group row">
										                                <label for="firstname" class="col-xs-6 col-form-label">PCPNDT ACT</label>
										                               
																		<input type="hidden" id="PCPNDT_ACT_val" value="1">
																		<div class="col-xs-6"><button class="btn btn-sm btn-success " onclick="addRow('PCPNDT_ACT','PCPNDT_ACT_val','unisisyfa_declundpcpact')" type="button">
												                          <i class="fa fa-plus-circle"></i>&nbsp;Add Location
												                        </button>
												                    </div>
																	</div>
																	<div id="PCPNDT_ACT">
																		<div class="form-group row">
										                                <label for="firstname" class="col-xs-3 col-form-label">Location #1  <i class="text-danger">*</i></label>
										                                <div class="col-xs-3">
										                                     <input  type="text" class="form-control" id="unisisyfa_declundpcpact" name="unisisyfa_declundpcpact" required="" >
										                                </div>

																		</div>
																	</div>

																		<hr />


													     			 <div class="form-group row">
										                                <label for="firstname" class="col-xs-6 col-form-label">Bio hazard</label>
										                               
																		<input type="hidden" id="Bio_hazard_val" value="1">
																		<div class="col-xs-6"><button class="btn btn-sm btn-success " onclick="addRow('Bio_hazard','Bio_hazard_val','unisisyfa_biohazard')" type="button">
												                          <i class="fa fa-plus-circle"></i>&nbsp;Add saveLocation
												                        </button>
												                    </div>
																	</div>
																	<div id="Bio_hazard">
																		<div class="form-group row">
										                                <label for="firstname" class="col-xs-3 col-form-label">Location #1  <i class="text-danger">*</i></label>
										                                <div class="col-xs-3">
										                                     <input  type="text" class="form-control" id="unisisyfa_biohazard" name="unisisyfa_biohazard" required="" >
										                                </div>

																		</div>
																	</div>

																		<hr />


																		<div class="form-group row">
										                                <label for="firstname" class="col-xs-6 col-form-label">Scope of services</label>
										                               
																		<input type="hidden" id="Scope_of_services_val" value="1">
																		<div class="col-xs-6"><button class="btn btn-sm btn-success " onclick="addRow('Scope_of_services','Scope_of_services_val','unisisyfa_scopeofservice')" type="button">
												                          <i class="fa fa-plus-circle"></i>&nbsp;Add Location
												                        </button>
												                    </div>
																	</div>
																	<div id="Scope_of_services">
																		<div class="form-group row">
										                                <label for="firstname" class="col-xs-3 col-form-label">Location #1  <i class="text-danger">*</i></label>
										                                <div class="col-xs-3">
										                                     <input  type="text" class="form-control" id="unisisyfa_scopeofservice" name="unisisyfa_scopeofservice" required="" >
										                                </div>

																		</div>
																	</div>

																		<hr />

																		<div class="form-group row">
										                                <label for="firstname" class="col-xs-6 col-form-label">Patients’ rights & responsibility</label>
										                               
																		<input type="hidden" id="Patients_val" value="1">
																		<div class="col-xs-6"><button class="btn btn-sm btn-success " onclick="addRow('Patients','Patients_val','unisisyfa_patirighrespon')" type="button">
												                          <i class="fa fa-plus-circle"></i>&nbsp;Add Location
												                        </button>
												                    </div>
																	</div>
																	<div id="Patients">
																		<div class="form-group row">
										                                <label for="firstname" class="col-xs-3 col-form-label">Location #1  <i class="text-danger">*</i></label>
										                                <div class="col-xs-3">
										                                     <input  type="text" class="form-control" id="unisisyfa_patirighrespon" name="unisisyfa_patirighrespon" required="" >
										                                </div>

																		</div>
																	</div>

																		<hr />

																		<div class="form-group row">
										                                <label for="firstname" class="col-xs-6 col-form-label">Fire exit signage</label>
										                               
																		<input type="hidden" id="Fire_val" value="1">
																		<div class="col-xs-6"><button class="btn btn-sm btn-success " onclick="addRow('Fire','Fire_val','unisisyfa_fireexitsignage')" type="button">
												                          <i class="fa fa-plus-circle"></i>&nbsp;Add Location
												                        </button>
												                    </div>
																	</div>
																	<div id="Fire">
																		<div class="form-group row">
										                                <label for="firstname" class="col-xs-3 col-form-label">Location #1  <i class="text-danger">*</i></label>
										                                <div class="col-xs-3">
										                                     <input  type="text" class="form-control" id="unisisyfa_fireexitsignage" name="unisisyfa_fireexitsignage" required="" >
										                                </div>

																		</div>
																	</div>

																		<hr />
																		<div class="form-group row">
										                                <label for="firstname" class="col-xs-6 col-form-label">Directional</label>
										                               
																		<input type="hidden" id="Directional_val" value="1">
																		<div class="col-xs-6"><button class="btn btn-sm btn-success " onclick="addRow('Directional','Directional_val','unisisyfa_directional')" type="button">
												                          <i class="fa fa-plus-circle"></i>&nbsp;Add Location
												                        </button>
												                    </div>
																	</div>
																	<div id="Directional">
																		<div class="form-group row">
										                                <label for="firstname" class="col-xs-3 col-form-label">Location #1  <i class="text-danger">*</i></label>
										                                <div class="col-xs-3">
										                                     <input  type="text" class="form-control" id="unisisyfa_directional" name="unisisyfa_directional" required="" >
										                                </div>

																		</div>
																	</div>

																		<hr />
																		<div class="form-group row">
										                                <label for="firstname" class="col-xs-6 col-form-label">Departmental</label>
										                               
																		<input type="hidden" id="Departmental_val" value="1">
																		<div class="col-xs-6"><button class="btn btn-sm btn-success " onclick="addRow('Departmental','Departmental_val','unisisyfa_departmental')" type="button">
												                          <i class="fa fa-plus-circle"></i>&nbsp;Add Location
												                        </button>
												                    </div>
																	</div>
																	<div id="Departmental">
																		<div class="form-group row">
										                                <label for="firstname" class="col-xs-3 col-form-label">Location #1  <i class="text-danger">*</i></label>
										                                <div class="col-xs-3">
										                                     <input  type="text" class="form-control" id="unisisyfa_departmental" name="unisisyfa_departmental" required="" >
										                                </div>

																		</div>
																	</div>

																		<hr />


																		 <div class="row form-group">
			                  
					 <div class="col-sm-11">
										<label class="col-form-label ">
													    <b>Repair and Maintenances</b>
													     </label>
													                  </div>
													     			</div>
							<div class="form-group row">
										                                <label for="firstname" class="col-xs-6 col-form-label"> Are breakdown maintenances in house or outsourced?  <i class="text-danger">*</i></label>
										                                <div class="col-xs-2">
										                                    <input id="repmain_arbreakdomainoutsourcedinhouse" name="phy_infra[repmain_arbreakdomain]" type="radio" value="In house" class="  ">&nbsp;In house
										                                </div>
										                                <div class="col-xs-2">
										                                    <input id="repmain_arbreakdomainoutsourced" name="phy_infra[repmain_arbreakdomain]" type="radio" value="Outsourced" class="  ">&nbsp;Outsourced
										                                </div>
										                                </div>
													     			 <div class="form-group row">
										                                   <label for="firstname" class="col-xs-6 col-form-label"> Are scheduled preventive maintenances in house or outsourced?  <i class="text-danger">*</i></label>
										                                <div class="col-xs-2">
										                                    <input id="repmain_areschedumainhousoutsourcinouse" name="phy_infra[repmain_areschedumain]" type="radio" value="In house" class="  ">&nbsp;In house
										                                </div>
										                                <div class="col-xs-2">
										                                    <input id="repmain_areschedumainhousoutsourc" name="phy_infra[repmain_areschedumain]" type="radio" value="Outsourced" class="  "> &nbsp;Outsourced
										                                </div>
																		</div>
																		<hr />



										               </div>
										            </div>
										         </div>
						                    </div>
						                </div>
                             
							       
							    </div>
							</div>

                          <input type="hidden" value="1" name="save_phys_infra">   

                           <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <div class="ui buttons">
                                        
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



  





<script>
	 function showDiv(val,id){
	 	if(val == 0)
	 	{
	 		$('#'+id).show();
	 	}
	 	if(val == 1)
	 	{
	 		$('#'+id).hide();
	 		$('#'+id+'1').hide();
	 		$('#'+id+'2').hide();
	 	}

	 	
 }
 function showStatus(val,id) {
 	    if(val == 0)
	 	{
	 		$('#'+id+'1').hide();
	 		$('#'+id+'2').hide();
	 	}
		if(val == 1)
	 	{
	 		$('#'+id+'1').show();
	 		$('#'+id+'2').hide();
	 	}
	 	if(val == 2)
	 	{
	 		$('#'+id+'1').show();
	 		$('#'+id+'2').hide();
	 	}
	 	if(val == 3)
	 	{
	 		$('#'+id+'2').show();
	 		$('#'+id+'1').hide();
	 	}
 }

 function showAvilabi(id,val) {
 	if($('#'+id).is(":checked")){
 		
                $('#'+id+'_div').show();
	 		
            }
            else
            {
            	$('#'+id+'_div').hide();
            }
 	
 }

</script>

<script>
	 function addRow(id,val,nam){
	 	  var locval = $('#'+val).val();
          var loc = parseInt(locval) + 1;	
          var locval = $('#'+val).val(loc);
          var div1 = $.trim(id + loc);
          //console.log(div1);								                                
		  var html = '';
		  html += '<div class="form-group row" id="'+div1+'_remove">'
		  html += '<label for="firstname" class="col-xs-3 col-form-label" id="'+div1+'_loc">Location #'+loc+'  <i class="text-danger">*</i></label>';
			html += '<div class="col-xs-3"><input  type="text" class="form-control" id="'+nam+'" name="'+nam+'[]" required="" ></div>';
			html += '<div class="col-xs-3">';
			html += '<button type="button" name="remove" id="'+div1+'"  class="btn btn-danger btn-sm remove">';
			html += '<span class="fa fa-trash"></span></button></div>';
			html += '</div>';

		  $('#'+id).append(html);
	
    
  }
  $(document).ready(function(){
 

 
 $(document).on('click', '.remove', function(){
  var id = $(this).attr('id');
 //console.log(id);
  $('#'+id+'_remove').remove();

  var val = id.replace(/\d+/g, '');

  var locval = $('#'+val+'_val').val();

 var loc = parseInt(locval) - 1;

 var locval = $('#'+val+'_val').val(loc);

 
  
  //$(this).closest('id').remove();
 });
 

 
});
 

	 	 
</script>


