
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


    .card_custom {

    
    border: 1px solid rgba(0, 0, 0, 0.22);
    padding: 5px;
    margin-bottom: 30px;
    background-color: #eeeeee0d;
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
        <?php  echo form_open_multipart('registration/clinical_services_details','class="form-inner"') ?>
               <?php  echo form_hidden('cl_servc[reg_id]',$registration->reg_id); ?>
                    	
                   

                <div class="card_custom">
                	
               
                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="col-form-label"><b>OPD and IPD data</b></label>
                  </div>
                </div>
                

                
                <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <label class="col-form-label" for="noofopd">Number of OPD patients for the past 12 months
                      <span class="text-danger">*</span>
                    </label>

                    <div>
                      <input class="form-control " id="noofopd" name="cl_servc[noofopd]" placeholder="No. of OPD patients for the past 12 months" required="" type="text" onkeypress="restrictMinus(event);" >

                      <!---->
                    </div>

                  </div>
                  
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <label class="col-form-label" for="noofipd">Number of admissions in the past 12 months
                      <span class="text-danger">*</span>
                    </label>

                    <div>
                      <input class="form-control " id="noofipd" name="cl_servc[noofipd]" placeholder="No. of admissions in the past 12 months" required="" type="text" onkeypress="restrictMinus(event);" >
                      <!---->
                    </div>


                  </div>
                  
                  
                </div>
                
            </div>
             <div class="card_custom">
                <div class="row-seperator clearfix"></div>

                
                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="col-form-label"><b>Average Occupancy Rate </b><br>
                      
                    </label>
                  </div>
                </div>
                

                <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    
                    <label class="col-form-label" for="noofinpatientdays">Number of inpatient days in a month
                      <span class="text-danger">*</span>
                    </label>
                    <div>
                      <input class="form-control " id="noofinpatientdays" name="cl_servc[noofinpatientdays]" placeholder="No. of inpatient days in a month" required="" type="text" onkeypress="restrictMinus(event);" >
                      <!---->
                      
                      <small><strong>Note:&nbsp;</strong>Take data of the past 3 months for the month average</small>

                    </div>

                  </div>
                  
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <label class="col-form-label" for="noofavailbeddays">Number of available bed days
                      <span class="text-danger">*</span>
                    </label>


                    <div>
                      <input class="form-control " id="noofavailbeddays" name="cl_servc[noofavailbeddays]" placeholder="No. of available bed days" required="" type="text" onkeypress="restrictMinus(event);" >
                      <!---->
                      
                      <small><strong>Note:&nbsp;</strong>Take data of the past 3 months for the month average</small>

                    </div>

                    



                  </div>
                  
                </div>
                
                </div>

                 <div class="card_custom">
                <div class="row-seperator clearfix"></div>

                
                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="col-form-label"><b>ICU data</b></label>
                  </div>
                </div>
                

                <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    
                    <label class="col-form-label" for="nooficuinpatday">Number of ICU inpatient days
                      <span class="text-danger">*</span>
                    </label>

                    <div>
                      <input class="form-control " id="nooficuinpatday" name="cl_servc[nooficuinpatday]" placeholder="No. of ICU inpatient days " required="" type="text" onkeypress="restrictMinus(event);" >
                      <!---->
                      
                      <small><strong>Note:&nbsp;</strong>Take data of the past 3 months for the month average</small>

                    </div>

                  </div>
                  
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <label class="col-form-label" for="noofavaiicubeddays">Number of available ICU bed days
                      <span class="text-danger">*</span>
                    </label>

                    <div>
                      <input class="form-control " id="noofavaiicubeddays" name="cl_servc[noofavaiicubeddays]" placeholder="No. of available ICU bed days" required="" type="text" onkeypress="restrictMinus(event);" >
                      <!---->
                      
                      <small><strong>Note:&nbsp;</strong>Take data of the past 3 months for the month average</small>

                    </div>


                  </div>
                  
                  
                </div>
                
                      </div>

               <div class="card_custom">
                <div class="row-seperator clearfix"></div>

                
                <div class="row form-group">
                  <div class="col-sm-12 col-mg-12 col-lg-12">
                    <div class="row">
                      <label class="col-9" style=" margin-left: 20px">
                        <b>Ten most frequent clinical services where admissions take place </b>
                        <span class="text-danger">*</span>
                      </label>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">1&nbsp;<span class="text-danger">*</span></span>
                          <input class="form-control " id="clinical_Services_1" name="cl_servc[clinical_Services_1]" placeholder="Clinical Service Name" required="" type="text">

                        </div>
                        <!---->
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">2&nbsp;<span class="text-danger">*</span></span>
                          <input class="form-control " id="clinical_Services_2" name="cl_servc[clinical_Services_2]" placeholder="Clinical Service Name" required="" type="text">
                        </div>
                        <!---->
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">3&nbsp;<span class="text-danger">*</span></span>
                          <input class="form-control " id="clinical_Services_3" name="cl_servc[clinical_Services_3]" placeholder="Clinical Service Name" required="" type="text">
                        </div>
                        <!---->
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">4&nbsp;<span class="text-danger">*</span></span>
                          <input class="form-control " id="clinical_Services_4" name="cl_servc[clinical_Services_4]" placeholder="Clinical Service Name" required="" type="text">
                        </div>
                        <!---->
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">5&nbsp;</span>
                          <input class="form-control   " id="clinical_Services_5" name="cl_servc[clinical_Services_5]" placeholder="Clinical Service Name" type="text">
                        </div>
                        
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">6&nbsp;</span>
                          <input class="form-control   " id="clinical_Services_6" name="cl_servc[clinical_Services_6]" placeholder="Clinical Service Name" type="text">
                        </div>
                        

                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">7&nbsp;</span>
                          <input class="form-control   " id="clinical_Services_7" name="cl_servc[clinical_Services_7]" placeholder="Clinical Service Name" type="text">
                        </div>
                        
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">8&nbsp;</span>
                          <input class="form-control   " id="clinical_Services_8" name="cl_servc[clinical_Services_8]" placeholder="Clinical Service Name" type="text">
                        </div>
                        
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">9&nbsp;</span>
                          <input class="form-control   " id="clinical_Services_9" name="cl_servc[clinical_Services_9]" placeholder="Clinical Service Name" type="text">
                        </div>
                        
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">10&nbsp;</span>
                          <input class="form-control   " id="clinical_Services_10" name="cl_servc[clinical_Services_10]" placeholder="Clinical Service Name" type="text">
                        </div>
                        
                      </div>
                    </div>
                  </div>

                </div>
            </div>
                <div class="card_custom">
                <div class="row-seperator clearfix"></div>
                
                <div class="row form-group">
                  <div class="col-sm-12 col-mg-12 col-lg-12">
                    <div class="row">
                      <label class="col-12" style="margin-left: 20px">
                        <b>Ten most frequent Diagnosis for in-patients </b>
                        <span class="text-danger">*</span>
                      </label>


                    </div>
                    <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">1&nbsp;<span class="text-danger">*</span></span>
                          <input class="form-control " id="diagnose_services_1" name="cl_servc[diagnose_services_1]" placeholder="Diagnosis Service Name" required="" type="text">
                        </div>
                        <!---->
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">2&nbsp;<span class="text-danger">*</span></span>
                          <input class="form-control " id="diagnose_services_2" name="cl_servc[diagnose_services_2]" placeholder="Diagnosis Service Name" required="" type="text">
                        </div>
                        <!---->
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">3&nbsp;<span class="text-danger">*</span></span>
                          <input class="form-control " id="diagnose_services_3" name="cl_servc[diagnose_services_3]" placeholder="Diagnosis Service Name" required="" type="text">
                        </div>
                        <!---->
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">4&nbsp;<span class="text-danger">*</span></span>
                          <input class="form-control " id="diagnose_services_4" name="cl_servc[diagnose_services_4]" placeholder="Diagnosis Service Name" required="" type="text">
                        </div>
                        <!---->
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">5&nbsp;</span>
                          <input class="form-control   " id="diagnose_services_5" name="cl_servc[diagnose_services_5]" placeholder="Diagnosis Service Name" type="text">
                        </div>
                        
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">6&nbsp;</span>
                          <input class="form-control   " id="diagnose_services_6" name="cl_servc[diagnose_services_6]" placeholder="Diagnosis Service Name" type="text">
                        </div>
                        
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">7&nbsp;</span>
                          <input class="form-control   " id="diagnose_services_7" name="cl_servc[diagnose_services_7]" placeholder="Diagnosis Service Name" type="text">
                        </div>
                        
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">8&nbsp;</span>
                          <input class="form-control   " id="diagnose_services_8" name="cl_servc[diagnose_services_8]" placeholder="Diagnosis Service Name" type="text">
                        </div>
                        
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">9&nbsp;</span>
                          <input class="form-control   " id="diagnose_services_9" name="cl_servc[diagnose_services_9]" placeholder="Diagnosis Service Name" type="text">
                        </div>
                        
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">10&nbsp;</span>
                          <input class="form-control   " id="diagnose_services_10" name="cl_servc[diagnose_services_10]" placeholder="Diagnosis Service Name" type="text">
                        </div>
                        
                      </div>
                    </div>
                  </div>

                </div>
                </div>
                <div class="card_custom">
                <div class="row-seperator clearfix"></div>
                
                <div class="row form-group">
                  <div class="col-sm-12 col-mg-12 col-lg-12">
                    <div class="row">
                      <label class="col-12" style="margin-left: 20px">
                        <b>Ten most frequent surgical procedures at your hospital</b>
                        <span class="text-danger">*</span>
                      </label>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">1&nbsp;<span class="text-danger">*</span></span>
                          <input class="form-control " id="surgicalProcedures_Services_1" name="cl_servc[surgicalProcedures_Services_1]" placeholder="Surgical Procedure Name" required="" type="text">
                        </div>
                        <!---->
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">2&nbsp;<span class="text-danger">*</span></span>
                          <input class="form-control " id="surgicalProcedures_Services_2" name="cl_servc[surgicalProcedures_Services_2]" placeholder="Surgical Procedure Name" required="" type="text">
                        </div>
                        <!---->
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">3&nbsp;<span class="text-danger">*</span></span>
                          <input class="form-control " id="surgicalProcedures_Services_3" name="cl_servc[surgicalProcedures_Services_3]" placeholder="Surgical Procedure Name" required="" type="text">
                        </div>
                        <!---->
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">4&nbsp;<span class="text-danger">*</span></span>
                          <input class="form-control " id="surgicalProcedures_Services_4" name="cl_servc[surgicalProcedures_Services_4]" placeholder="Surgical Procedure Name" required="" type="text">
                        </div>
                        <!---->
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">5&nbsp;</span>
                          <input class="form-control   " id="surgicalProcedures_Services_5" name="cl_servc[surgicalProcedures_Services_5]" placeholder="Surgical Procedure Name" type="text">
                        </div>
                        
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">6&nbsp;</span>
                          <input class="form-control   " id="surgicalProcedures_Services_6" name="cl_servc[surgicalProcedures_Services_6]" placeholder="Surgical Procedure Name" type="text">
                        </div>
                        

                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">7&nbsp;</span>
                          <input class="form-control   " id="surgicalProcedures_Services_7" name="cl_servc[surgicalProcedures_Services_7]" placeholder="Surgical Procedure Name" type="text">
                        </div>
                        
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">8&nbsp;</span>
                          <input class="form-control   " id="surgicalProcedures_Services_8" name="cl_servc[surgicalProcedures_Services_8]" placeholder="Surgical Procedure Name" type="text">
                        </div>
                        
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">9&nbsp;</span>
                          <input class="form-control   " id="surgicalProcedures_Services_9" name="cl_servc[surgicalProcedures_Services_9]" placeholder="Surgical Procedure Name" type="text">
                        </div>
                        
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">10&nbsp;</span>
                          <input class="form-control   " id="surgicalProcedures_Services_10" name="cl_servc[surgicalProcedures_Services_10]" placeholder="Surgical Procedure Name" type="text">
                        </div>
                        
                      </div>
                    </div>
                  </div>

                </div>

             </div>

             <div class="card_custom" style="display: none">
                <div class="card">

                  <div class="card-header">
                    <i class="fa fa-snowflake-o"></i>Scope of services
                  </div>
                  <div class="card-body">

                    <div class="table-responsive">
                      <table class="table table-bordered customTableGrid">
                        <thead>
                          <tr>
                            <th>Clinical Service</th>
                            <th>Out patient </th>
                            <th>In Patient</th>
                            <th>Emergency</th>
                            
                            <th class="width-13 text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!---->
                          <tr>
                            <th colspan="6">
                              <button class="btn btn-primary btn-sm pull-right " type="button">
                                <i class="fa fa-plus-circle"></i>
                              </button>
                            </th>
                          </tr>
                        </tbody>

                      </table>
                    </div>

                  </div>
                </div>

                </div>

                <div class="card_custom">
                <div class="row form-group">
                  <div class="col-md-4">
                    <label>
                      Are services related to cardiology offered at your hospital?
                      <span class="text-danger">*</span>

                    </label>
                  </div>
                  <div class="col-md-3">
                    <select class="form-control " id="clinicl_areservcardioofferhosp" name="cl_servc[clinicl_areservcardioofferhosp]" required="" onchange="viewBoxMou(this.value,1,'clinicl_numbangilstoneyr')">
                    	<option value="">--select--</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                    <!---->
                  </div>
                </div>

                <div class="row form-group" id="1" hidden="">
                  <div class="col-md-4">
                    <label>
                      Number of angiogram in last one year
                      <span class="text-danger">*</span>

                    </label>
                    
                  </div>
                  <div class="col-md-3">
                    <input class="form-control   " id="clinicl_numbangilstoneyr" name="cl_servc[clinicl_numbangilstoneyr]" type="text" onkeypress="restrictMinus(event);" >

                    <!---->
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-4">
                    <label>
                      Are services related to orthopedics offered at your hospital?
                      <span class="text-danger">*</span>

                    </label>
                  </div>
                  <div class="col-md-3">
                    <select class="form-control " id="clinicl_areservrelorthopoffhsptl" name="cl_servc[clinicl_areservrelorthopoffhsptl]" required="" onchange="viewBoxMou(this.value,2,'clinicl_numbrjointrepllstoneyear')">
                    	<option value="">--select--</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                    <!---->
                  </div>


                </div>


                <div class="row form-group" id="2" hidden="">
                  <div class="col-md-4">
                    <label>
                      Number of joint replacements in last one year
                      <span class="text-danger">*</span>

                    </label>
                  </div>
                  <div class="col-md-3">
                    <input class="form-control   " id="clinicl_numbrjointrepllstoneyear" name="cl_servc[clinicl_numbrjointrepllstoneyear]" type="text" onkeypress="restrictMinus(event);" >
                    <!---->
                    


                  </div>


                </div>
            </div>
            <div class="card_custom"> 	
                <div class="row-seperator clearfix"></div>
                
                <div class="row form-group">
                  <div class="col-md-12">
                    <label><b>OT</b></label>
                  </div>
                </div>
                


                <div class="row form-group">
                  
                  <div class="col-md-4">
                    <label class="form-label" for="noofotsinhospital">Specify Number of OTs in the Hospital
                      
                      <span class="text-danger">*</span>
                    </label>
                  </div>

                  <div class="col-md-3">
                    <input class="form-control " id="noofotsinhospital" name="cl_servc[noofotsinhospital]" placeholder="No of OTs in hospital" required="" type="text" onkeypress="restrictMinus(event);" onkeyup="checkzero(this.id,4,'doyouperformSupSurg');" >
                    <!---->
                  </div>
                </div>

                <div class="row form-group" id="4" hidden="" >
                  
                  <div class="col-md-4">
                    <label class="form-label" for="doyouperformSupSurg" >Do you perform super-speciality surgeries(e.g. Knee
                      Replacement, Cardiac, Neuro)?
                      <span class="text-danger">*</span>
                    </label>
                  </div>
                  <div class="col-md-3" >
                    <select class="form-control" id="doyouperformSupSurg" name="cl_servc[doyouperformSupSurg]" onchange="viewBoxMou(this.value,5,'doyouhaveexcotsurge')">
                    	<option value="">---select--</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>

                  </div>
                </div>

                <div class="row mb-2" id="5" hidden="">

                  <label class="col-md-4 col-form-label" for="doyouhaveexcotsurge">Do you have an exclusive OT for such
                    surgeries
                    <span class="text-danger">*</span>
                  </label>

                  <div class="col-md-3">
                    <select class="form-control   " id="doyouhaveexcotsurge" name="cl_servc[doyouhaveexcotsurge]" onchange="viewBoxMou1(this.value,6)">
                    	<option value="">--select--</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-2 dmc" hidden="" id="6" >

                  <label class="col-md-4 col-form-label" for="noofsuchots" >Number of
                    such OTs
                    <span class="text-danger">*</span>
                  </label>
                  <div class="col-md-3" >
                    <input class="form-control   " id="noofsuchots" name="cl_servc[noofsuchots]" placeholder="" type="text" onkeypress="restrictMinus(event);" >
                    <!---->
                  </div>
                </div>
                
                <div class="row mb-2" hidden="">

                  <label class="col-md-4 col-form-label" for="isitzoningunsterilesterile">Is OT Zoning done as
                    Un-sterile, Semi-sterile, Sterile ?&nbsp;
                    <span class="text-danger">*</span>
                  </label>
                  <div class="col-md-3">
                    <select class="form-control   " id="isitzoningunsterilesterile" name="cl_servc[isitzoningunsterilesterile]" placeholder="">
                      <option value="true">Yes</option>
                      <option value="false">No</option>

                    </select>
                  </div>
                </div>
            </div>
               
                
                <div class="row form-group card_custom">
                  <div class="col-sm-12 col-mg-12 col-lg-12">

                    
                    <div class="row form-group">
                      <div class="col-md-12">
                        <label><b>Sterilization Method</b></label>
                      </div>
                    </div>
                    

                    <div class="row">

                      <label class="col-md-12" for="choosethetypeofstreilhos">
                      <u>  Choose the type of sterilization modes used in the hospital</u>
                      </label>
                    </div>
                    <style type="text/css" media="screen">
                    	 .dmc {
                           margin-bottom: 10px
                    	 }
                    </style>
                    

                    <div class="row mb-2">

                      <label class="col-md-2 col-form-label" for="steamautoclave">Steam-autoclave
                        <span class="text-danger">*</span>
                      </label>

                      <div class="col-md-4 dmc">
                        <select class="form-control   " id="steamautoclave" name="cl_servc[steamautoclave]">
                        	<option value="">--select--</option>
                          <option value="1">Yes</option>
                          <option value="0">No</option>

                        </select>

                      </div>

                      <label class="col-md-2 col-form-label" for="eto">ETO
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-md-4 dmc">
                        <select class="form-control   " id="eto" name="cl_servc[eto]">
                        	<option value="">--select--</option>
                          <option value="1">Yes</option>
                          <option value="0">No</option>

                        </select>
                      </div>
                    </div>

                    <div class="row mb-2">

                      <label class="col-md-2 col-form-label" for="plasma">Plasma
                        <span class="text-danger">*</span>
                      </label>

                      <div class="col-md-4 dmc ">
                        <select class="form-control   " id="plasma" name="cl_servc[plasma]">
                        	<option value="">--select--</option>
                          <option value="1">Yes</option>
                          <option value="0">No</option>

                        </select>

                      </div>

                      <label class="col-md-2 col-form-label" for="flashSterilization">Flash sterilization
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-md-4 dmc">
                        <select class="form-control   " id="flashSterilization" name="cl_servc[flashSterilization]">
                        	<option value="">--select--</option>
                          <option value="1">Yes</option>
                          <option value="0">No</option>

                        </select>
                      </div>
                    </div>

                    <div class="row mb-2">

                      <label class="col-md-2 col-form-label" for="other">Other
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-md-4 dmc">
                        <select class="form-control   " id="other" name="cl_servc[other_method]" onchange="viewBoxMou(this.value,7,'specifytheotusesterli')">
                        	<option value="">--select--</option>
                          <option value="1">Yes</option>
                          <option value="0">No</option>
                        </select>
                      </div>
                      <div id="7" hidden="">
                      <div class="form-group col-md-2" >
                        <label for="specifytheotusesterli">Specify the other mode used for sterilization
                          <span class="text-danger">*</span>
                        </label>
                      </div>
                      <div class="col-md-4 dmc">
                        <input class="form-control   " id="specifytheotusesterli" name="cl_servc[specifytheotusesterli]" type="text">
                        
                        <!---->

                      </div>
                  </div>
                    </div>

                  </div>
                </div>

               </div>
                   </div>
             </div>

			
                     <input type="hidden" value="1" name="save_clinical_Services">       

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

<script type="text/javascript">
	
	function restrictMinus(e) {
    
    
   
        var inputKeyCode = e.keyCode ? e.keyCode : e.which;

        if (inputKeyCode != null) {
            if (inputKeyCode == 45) e.preventDefault();
        }
    
}

function viewBoxMou(val,id,re_id) {
	
        if(val == 0)
		{
			$("#"+id).hide();
			$('#'+re_id).removeAttr('required');


		}
		if(val == 1)
		{
			$("#"+id).show();
			$('#'+re_id).attr('required', 'required');
		}
    }

    function viewBoxMou1(val,id) {
	
        if(val == 0)
		{
			$("#"+id).hide();
			
		}
		if(val == 1)
		{
			$("#"+id).show();
	
		}
    }

    function checkzero(val1,id,re_id) {
        var val= $("#"+val1).val();
       
        if(val == 0)
		{
			$("#"+id).hide();
			$('#'+re_id).removeAttr('required');


		}
     
		if(val > 0 )
		{
			$("#"+id).show();
			$('#'+re_id).attr('required', 'required');
		}
    }
</script>
