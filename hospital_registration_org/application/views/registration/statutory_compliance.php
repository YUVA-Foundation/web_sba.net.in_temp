
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

    .datepicker{ z-index:99999 !important; }
</style>
<div class="row">
    <!--  form area -->
    <div class="col-sm-12">
        <div  class="panel panel-default thumbnail">
 
             <div class="panel-heading no-print">
               <!--  <div class="btn-group"> 
                    <a class="btn btn-primary" href="<?php // echo base_url("patient") ?>"> <i class="fa fa-list"></i>  <?php  //echo display('patient_list') ?> </a>  
                </div> -->
                Note: Attach relevant documents/certificates for all compliances which are self-attested by the head of the organization
            </div>  
      
            <div class="panel-body panel-form">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
               <?php  echo form_open_multipart('registration/statutory_compliance','class="form-inner"') ?>
               <?php  echo form_hidden('St_Complis[reg_id]',$registration->reg_id); ?>

               <input type="hidden" name="save_statutory_compliances" value="1">
								<div class="form-group row">
							        <div class="panel-group" id="accordion">
							        
							        <div class="panel panel-default">
							            <div class="panel-heading">
							                <h4 class="panel-title">
							                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-snowflake-o"></i> Statutory Compliances</a>
							                </h4>
							            </div>
	 <div id="collapseOne" class="panel-collapse collapse ">
					<div class="panel-body">
							   <div class="col-xs-12 col-form-label">
							       <div class="col-12">
									     <div class="card tb-frm-crd">
									                    	
								            <div class="card-body">

								                        <div class="row no-margin-left no-margin-right">
								                        <div class="table-responsive">
								                            <table class="table table-sm customTableGrid">
								                              <thead>
								                                <tr>
								                                <th>Which of the following statutory compliances does the organisation
								                                  have ?</th>
								                                <th>Yes/No</th>
								                                
								                                <th class="text-center">Action</th>
								                                </tr>
								                              </thead>
								                              <tbody>
								                                <tr>
								                                  <td>
								                                    Legal status for conducting business under
								                                    <br> Shops and Commercial Establishments Act
								                                    <br> (Registration and place of business of the hospital)
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>
								                                  <td>

								                                    <select class="form-control ng-valid ng-dirty ng-touched" id="shopsAndCommercialEstablishmentsAct_yesno" name="St_Complis[shopsAndCommercialEstablishmentsAct_yesno]" onchange="viewBox(this.value,1)" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>
								                                    </select>
								                                  </td>
								                                  
								                                  <td class="text-center">
								                                  	<div id="1">
																	 <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                      
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  <button class="btn btn-primary btn-sm btn-sm form-group mr-2" title="View Uploaded file" type="button">
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                   
                                                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('Licence Details',1)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                    <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                </div>
								                                  </td>

								                                </tr>

								                                <tr>
								                                  <td>
								                                    State Pollution Control Board (SPCB)
								                                    <br>Consent to generate Bio-Medical Waste (BMW)
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>
								                                  <td>
								                                    <select class="form-control " id="spcbToBMW_yesno" onchange="viewBox(this.value,2)" name="St_Complis[spcbToBMW_yesno]" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>
								                                  <td class="text-center">
								                                    <div id='2'>
                
								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                     
								                                     <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                     <i class="fa fa-mobile custom-mobileIcon"></i>
								                                   </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
																	 <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('State Pollution Control Board (SPCB) Consent to generate Bio-Medical Waste (BMW)',2)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                   
								                                  </td>
								                                </tr>

								                                <tr>
								                                  <td>
								                                    MoU with BMW collecting Agency
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>
								                                  <td>
								                                    <select class="form-control " id="mouWithBMWCollectingAgency_yesno" name="St_Complis[mouWithBMWCollectingAgency_yesno]" onchange="viewBox(this.value,3)" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>
								                                  <td class="text-center">
								                                  	<div id="3">
								                                    

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                 

								                                 

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                      <i class="fa fa-eye"></i>
								                                    </button>

								                                    

								                                    
								                                  
								                                       <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('MoU with BMW collecting Agency',3)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                    </div>
								                                  </td>
								                                </tr>
								                                <tr>
								                                  <td>
								                                    Pollution Control Board License
								                                    <br>for water and Air Pollution
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  
								                                  <td>
								                                    <select class="form-control " id="pollutionControlBoardLicense_yesno" name="St_Complis[pollutionControlBoardLicense_yesno]" onchange="viewBox(this.value,4)" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                    <div id="4">

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                 
								                                 

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                   
								                                       <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('Pollution Control Board License',4)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>
								                                </tr>

								                                <tr>
								                                  <td>
								                                    Registration under PC-PNDT Act
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  
								                                  <td>
								                                    <select class="form-control " id="registrationUnderPNDTAct_yesno" name="St_Complis[registrationUnderPNDTAct_yesno]" onchange="viewBox(this.value,5)" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                    <div id="5">

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                 
								                                

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                  
								                                        <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('Registration under PC-PNDT Act',5)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>
								                                </tr>

								                                <tr>
								                                  <td>
								                                    Registration under MTP Act
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  
								                                  <td>
								                                    <select class="form-control " id="registrationUnderMTPAct_yesno" name="St_Complis[registrationUnderMTPAct_yesno]" onchange="viewBox(this.value,6)" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                    <div id="6">

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                 
								                                

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('Registration under MTP Act',6)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>
								                                </tr>

								                                <tr>
								                                  <td>
								                                    AERB licence for X-Ray(s)
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  
								                                  <td>
								                                    <select class="form-control " id="aerbLicenceForXRay_yesno" name="St_Complis[aerbLicenceForXRay_yesno]" onchange="viewBox(this.value,7)" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                    <div id="7">
								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                     
								                                     <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                     <i class="fa fa-mobile custom-mobileIcon"></i>
								                                   </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('AERB licence for X-Ray(s)',7)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>
								                                </tr>

								                                <tr>
								                                  <td>
								                                    AERB licence for Mobile X-Ray(s)
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  
								                                  <td>
								                                    <select class="form-control " id="aerbLicenceForMobileXRay_yesno" name="St_Complis[aerbLicenceForMobileXRay_yesno]" onchange="viewBox(this.value,8)"required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                  	<div id="8">
								                                    

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                 
								                                

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('AERB licence for Mobile X-Ray(s)',8)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>
								                                </tr>

								                                <tr>
								                                  <td>
								                                    AERB licence for Dental X-Ray(s)
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  
								                                  <td>
								                                    <select class="form-control " id="aerbLicenceForDentalXRay_yesno" name="St_Complis[aerbLicenceForDentalXRay_yesno]" onchange="viewBox(this.value,9)"required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                    <div id="9">
								                                      

								                                      <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                        <i class="fa fa-upload"></i>
								                                      </button>
								                                       
								                                       <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                       <i class="fa fa-mobile custom-mobileIcon"></i>
								                                     </button>
								                                    
								                                    

								                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                        <i class="fa fa-eye"></i>
								                                      </button>
								                                      

								                                         <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('AERB licence for Dental X-Ray(s)',9)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                   
								                                  </td>
								                                </tr>

								                                <tr>
								                                  <td>
								                                    AERB licence for OPG
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  
								                                  <td>
								                                    <select class="form-control " id="aerbLicenceForOPG_yesno" onchange="viewBox(this.value,10)" name="St_Complis[aerbLicenceForOPG_yesno]" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                    <div id="10">

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                 
								                                 

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                     <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('AERB licence for OPG',10)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                     
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>
								                                </tr>

								                                <tr>
								                                  <td>
								                                    AERB licence for CT Scan
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  
								                                  <td>
								                                    <select class="form-control " id="aerbLicenceForCTScan_yesno" onchange="viewBox(this.value,11)" name="St_Complis[aerbLicenceForCTScan_yesno]" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                  	<div id="11">
								                                    

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                     
								                                     <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                     <i class="fa fa-mobile custom-mobileIcon"></i>
								                                   </button>
								                                  

								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                     <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('AERB licence for CT Scan',11)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>
								                                </tr>

								                                <tr>
								                                  <td>
								                                    AERB licence for Mammography
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  
								                                  <td>
								                                    <select class="form-control " id="aerbLicenceForMammography_yesno" name="St_Complis[aerbLicenceForMammography_yesno]" onchange="viewBox(this.value,12)" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                  	<div id="12">
								                                    

								                                    <button class="btn  btn-sm form-group  mr-2" title="Upload any file" type="button" hidden="">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('AERB licence for Mammography',12)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>
								                                </tr>

								                                <tr>
								                                  <td>
								                                    AERB licence for BMD
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  
								                                  <td>
								                                    <select class="form-control " id="aerbLicenceForBMD_yesno" onchange="viewBox(this.value,13)" name="St_Complis[aerbLicenceForBMD_yesno]" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                    <div id="13">

								                                    <button class="btn  btn-sm form-group  mr-2"  title="Upload any file" type="button" hidden="">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('AERB licence for BMD',13)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                   
								                                  </td>
								                                </tr>

								                                <tr>
								                                  <td>
								                                    AERB licence for C-Arm
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  
								                                  <td>
								                                    <select class="form-control " id="aerbLicenceForCArm_yesno" onchange="viewBox(this.value,14)" name="St_Complis[aerbLicenceForCArm_yesno]" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                  	<div id="14">
								                                    

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('AERB licence for C-Arm',14)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>
								                                </tr>

								                                <tr>
								                                  <td>
								                                    AERB licence for Cath Lab
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  
								                                  <td>
								                                    <select class="form-control " id="aerbLicenceForCathLab_yesno" name="St_Complis[aerbLicenceForCathLab_yesno]" onchange="viewBox(this.value,15)" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                  	<div id="15">		
								                                    <button class="btn btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('AERB licence for Cath Lab',15)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>
								                                </tr>

								                                <tr>
								                                  <td>
								                                    RSO level I,II,II
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  
								                                  <td>
								                                    <select class="form-control " id="rsoLevel_yesno" onchange="viewBox(this.value,16)" name="St_Complis[rsoLevel_yesno]" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                    <div id="16">

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('RSO level I,II,II',16)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>
								                                </tr>

								                                <tr>
								                                  <td>
								                                    Nuclear Medicine
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  
								                                  <td>
								                                    <select class="form-control " id="nuclearMedicine_yesno" name="St_Complis[nuclearMedicine_yesno]" onchange="viewBox(this.value,17)" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                    <div id="17">

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                   <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('Nuclear Medicine',17)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>

								                                </tr>

								                                <tr>
								                                  <td>
								                                    PET Scan
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  <td>
								                                    <select class="form-control " id="petscan_yesno" onchange="viewBox(this.value,18)" name="St_Complis[petscan_yesno]" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                    <div id="18">

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('PET Scan',18)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>

								                                </tr>

								                                <tr>
								                                  <td>SPET/CT
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  <td>
								                                    <select class="form-control " id="spetct_yesno" onchange="viewBox(this.value,19)" name="St_Complis[spetct_yesno]" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                    <div id="19">

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('SPET/CT',19)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>

								                                </tr>

								                                <tr>
								                                  <td>
								                                    Radiotherapy
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  <td>
								                                    <select class="form-control " id="radiotherapy_yesno" onchange="viewBox(this.value,20)" name="St_Complis[radiotherapy_yesno]" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">
								                                    
                                                                   <div id="20">
								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('Radiotherapy',20)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                   
								                                  </td>

								                                </tr>

								                                <tr>
								                                  <td>IMRT
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  <td>
								                                    <select class="form-control " id="imrt_yesno" 
								                                    name="St_Complis[imrt_yesno]" onchange="viewBox(this.value,21)" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">

								                                    <div id="21">

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('IMRT',21)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                   
								                                  </td>

								                                </tr>

								                                <tr>
								                                  <td>Cobalt
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  <td>
								                                    <select class="form-control " id="cobalt_yesno" onchange="viewBox(this.value,22)" name="St_Complis[cobalt_yesno]" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">

								                                    <div id="22">

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('Cobalt',22)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>

								                                </tr>

								                                <tr>
								                                  <td>Linear Accelerator
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  <td>
								                                    <select class="form-control " id="linearaccelerator_yesno" onchange="viewBox(this.value,23)" name="St_Complis[linearaccelerator_yesno]" required="">

								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">

								                                    <div id="23">

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                     
								                                     <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                     <i class="fa fa-mobile custom-mobileIcon"></i>
								                                   </button>
								                                   
								                                   

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('Linear Accelerator ',23)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>

								                                </tr>

								                                <tr>
								                                  <td>Brachytherapy
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  <td>
								                                    <select class="form-control " id="brachytherapy_yesno" onchange="viewBox(this.value,24)" name="St_Complis[brachytherapy_yesno]" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">

								                                    <div id="24">

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('Brachytherapy',24)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                   
								                                  </td>

								                                </tr>
								                                
								                                <tr>
								                                  <td>Narcotics licence
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  <td>
								                                    <select class="form-control " id="narcotics_yesno" onchange="viewBox(this.value,25)" name="St_Complis[narcotics_yesno]" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>

								                                    </select>
								                                  </td>

								                                  <td class="text-center">

								                                    <div id="25">

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button" >
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" >
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('Narcotics licence',25)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>

								                                </tr>
								                                
								                                <tr>
								                                  <td>Pharmacy Licence
								                                    <span class="text-danger">*</span>
								                                    
								                                  </td>

								                                  <td>
								                                    <select class="form-control " id="retailpharmacy_yesno" name="St_Complis[retailpharmacy_yesno]" onchange="viewBox(this.value,26)" required="">
								                                      <option value="1">Yes</option>
								                                      <option value="0">No</option>
								                                      

								                                    </select>
								                                  </td>

								                                  <td class="text-center">

								                                    <div id="26">

								                                    <button class="btn  btn-sm form-group  mr-2" hidden="" title="Upload any file" type="button">
								                                      <i class="fa fa-upload"></i>
								                                    </button>
								                                    
								                                    <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                    <i class="fa fa-mobile custom-mobileIcon"></i>
								                                  </button>
								                                  
								                                  

								                                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                      <i class="fa fa-eye"></i>
								                                    </button>
								                                    
								                                      <button class=" btn btn-primary btn-sm btn-sm form-group mr-2" type="button" data-toggle="modal" data-target="#myModal" onclick="dismodel('Pharmacy Licence',26)">
								                                      <i class="fa fa-pencil-square-o"></i>
								                                    </button>
								                                      <button class="form-group mr-2 btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div>
								                                    
								                                  </td>

								                                </tr>
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
<!-- aditya -->
		<table style="display: none;">
			
			<?php for($c=1;$c<=26;$c++): ?>
				<tr>
					<td><input type="text" name="sr" value="<?=$c?>" id="sr_<?=$c?>"></td>
					<td><input type="text" name="St_Complis[lic_cer_no_<?=$c?>]" id="lic_cer_no_<?=$c?>" ></td>
					<td><input type="text" name="St_Complis[valid_from_<?=$c?>]" id="valid_from_<?=$c?>"></td>
					<td><input type="text" name="St_Complis[valid_till_<?=$c?>]" id="valid_till_<?=$c?>"></td>
					<td><input type="text" name="St_Complis[status_val_<?=$c?>]" id="status_val_<?=$c?>"></td>
					<td><input type="text" name="St_Complis[issuing_auth_<?=$c?>]" id="issuing_auth_<?=$c?>"></td>
				</tr>
			<?php endfor;?>
		</table>		


				        
							        <div class="panel panel-default">
							            <div class="panel-heading">
							                <h4 class="panel-title">
							                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen"> <i class="fa fa-snowflake-o"></i> Details of MoU of various Outsourced Services related to the hospital</a>
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
								                            
								                            <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myMou" type="button" onclick="mouModel('MoU');">
								                              <i class="fa fa-plus-circle"></i>
								                            </button>
								                          </div>
								                        </div>
								                       <div class="row no-margin-left no-margin-right">
								                          <div class="table-responsive">
								                            <table class="table table-sm customTableGrid" id="mou_table">
								                              <thead>
								                                <tr>
								                                  <th class="text-center" colspan="2">Outsourced</th>
								                                  <th></th>
								                                  <th class="text-center" colspan="2">Valid</th>
								                                  <th></th>
								                                </tr>
								                                <tr>
								                                  
								                                  <th>Service name</th>
								                                  <th>Agency name</th>
								                                  <th>Available</th>
								                                  <th>Valid from</th>
								                                  <th>Valid till</th>
								                                  <th class="text-center">Action</th>
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
							        </div>
							       
							    </div>
							</div>

                            

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
<div class="modal" id="myMou">
    <div class="modal-dialog">
      <div class="modal-content">
<div class="modal-header">
          <h4 class="modal-title">MoU</h4>
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
                  <form method="post" id="mou_form">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              
              <label class="col-form-label" for="MoU_nameOfTheService">Outsourced Service name
                <span class="text text-danger">*</span>
              </label>
              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="MoU_nameOfTheService" maxlength="150" name="MoU_nameOfTheService" placeholder="Outsourced Service name" required="" type="text">
                
                <!---->
              </div>

            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="MoU_nameOfTheAgency">Outsourced agency name
                <span class="text text-danger">*</span>
              </label>
              <div>
                <input class="form-control ng-untouched ng-pristine ng-invalid" id="MoU_nameOfTheAgency" maxlength="150" name="MoU_nameOfTheAgency" placeholder="Outsourced agency name" required="" type="text">
                
                <!---->
              </div>


            </div>
            
          </div>
          



          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="MoU_isMoUAvailable">Is MoU available?
                <span class="text text-danger">*</span>
              </label>
              <div class="row">
                <div class="col-sm-7">
                  
                  <select class="form-control ng-untouched ng-pristine ng-invalid" id="MoU_isMoUAvailable" name="MoU_isMoUAvailable" required="" onchange="viewBoxMou(this.value,27)">
                  	<option value="">--select--</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>

                </div>
                <div class="col-sm-4">
                  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2" hidden="">
                    <i class="fa fa-upload"></i>
                  </button>

                  <button class="btn btn-primary btn-sm btn-sm form-group " title="View Uploaded file" type="button" hidden="">
                    <i class="fa fa-eye"></i>
                  </button>

                </div>
              </div>


            </div>
            

            <div class="col-sm-12 col-md-6 col-lg-6"></div>
            
          </div>
            <div id="27" style="display: none">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="MoU_moUValidFrom" >Valid from
                <span class="text text-danger">*</span>
              </label>
             
                
           <div class="input-group">
                	<input name="MoU_moUValidFrom" class="datepicker form-control" type="text" placeholder="<?php echo ('Valid Form') ?>" id="MoU_moUValidFrom"  value="">
				 <span class="input-group-addon">
				<i aria-hidden="true" class="fa fa-calendar"></i>
								 </span>
	          </div>
                <!---->
             


            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="MoU_moUValidTill" >Valid till
                <span class="text text-danger">*</span>
              </label>

             
                

                   <div class="input-group">
                	<input name="MoU_moUValidTill" class="datepicker form-control" type="text" placeholder="<?php echo ('Valid Form') ?>" id="MoU_moUValidTill" value="">
				 <span class="input-group-addon">
				<i aria-hidden="true" class="fa fa-calendar"></i>
								 </span>
	          </div>

                <!---->
              


            </div>
            
          </div>
      </div>
          </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <input type="submit" name="mou_save" value="Save" class="btn btn-success">
          <button type="button" class="btn btn-danger close_modal1" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

 <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <form method="post" id="insert_form">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="statu_licenceORCertificateNo">Licence / Certificate No.
                <span class="text text-danger">*</span>
              </label>
              <div>
                <input class="form-control " id="statu_licenceORCertificateNo" maxlength="150" name="statu_licenceORCertificateNo" placeholder="Licence / Certificate No." required="" type="text">
                <!---->
              </div>

            </div>
            

            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="statu_validFrom">Valid from
                <span class="text text-danger">*</span>
              </label>
              <div>
               


                <div class="input-group">
                	<input name="statu_validFrom" class="datepicker form-control" type="text" placeholder="<?php echo ('Valid Form') ?>" id="statu_validFrom"  value="">
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
              <label class="col-form-label" for="statu_validTill">Valid till
                <span class="text text-danger">*</span>
              </label>
              <div>
                


                <div class="input-group">
                	<input name="statu_validTill" class="datepicker form-control" type="text" placeholder="<?php echo ('Valid Till') ?>" id="statu_validTill"  value="">
				 <span class="input-group-addon">
				<i aria-hidden="true" class="fa fa-calendar"></i>
								 </span>
	          </div>

                <!---->
              </div>


            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="statu_statusValidOrExpired">Status
                <span class="text text-danger">*</span>
              </label>
              <div>
                <select class="form-control " id="statu_statusValidOrExpired" name="statu_statusValidOrExpired" required="">
                  <option>Valid</option>
                  <option>Expired</option>
                </select>

              </div>

            </div>
            
          </div>
          

          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" for="statu_issuingAuthority">Issuing Authority
                <span class="text text-danger">*</span>
              </label>
              <div>
                <input class="form-control " id="statu_issuingAuthority" maxlength="150" name="statu_issuingAuthority" placeholder="Issuing Authority" required="" type="text">
                <!---->
              </div>
              <input type="hidden" name="compail_id" value="" id="compail_id">


            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
              <label class="col-form-label" hidden="">
                Application number of renewal application
                <span class="text text-danger">*</span>
              </label>
              <div>
                <textarea class="form-control " id="statu_detailsOfRenewalApplication" maxlength="150" name="statu_detailsOfRenewalApplication" placeholder="Application number of renewal application" hidden="">                            </textarea>
                <!---->
              </div>

            </div>
            
          </div>
          

          <div class="row">
            <div class="col-sm-4">
              <label class="col-form-label" for="statu_issuingAuthority" hidden="">Photo of renewal application
                <span class="text text-danger">*</span>
              </label>
            </div>
            
            <div class="col-md-2">
              
              
              <button class="btn btn-sm form-group btn-warning rounded mr-2" title="Through mobile icon" type="button" hidden="">
                <i class="fa fa-mobile custom-mobileIcon"></i>
              </button>
              
              <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button" hidden="">
                <i class="fa fa-eye"></i>
              </button>
              
            </div>


            <div class="col-sm-12 col-md-6 col-lg-6"></div>
            
          </div>
          

          


        </div>


        
        <!-- Modal footer -->
        <div class="modal-footer">
        	  <input type="submit" name="insert" id="insert" value="Save" class="btn btn-success" />
        	
          <button type="button" class="btn btn-danger close_modal" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<script type="text/javascript">
	function dismodel(val,id)
	{
		 $(".modal-title").text(val);
		 $("#compail_id").val(id);
	}
	function viewBox(val,id) {
		//console.log(id);
		if(val == 0)
		{
			$("#"+id).hide();
		}
		if(val == 1)
		{
			$("#"+id).show();
		}
	}

    function viewBoxMou(val,id) {
        if(val == 0)
		{
			$("#"+id).hide();
		}
		if(val == 1)
		{
			$("#"+id).show();
		}
    }
	
   function	mouModel(val) {
          $(".modal-title").text(val);
	}

	function aditya(id) {
          var a = $("#aditya_"+id).val();
          alert(a);
	}
</script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

<script type="text/javascript">
	$(document).ready(function(){
 $('#insert_form').on("submit", function(event){  
  event.preventDefault();
  
  var compail_id= $('#compail_id').val();
  var lic_cer_no= $('#statu_licenceORCertificateNo').val();
  var valid_from= $('#statu_validFrom').val();
  var valid_till= $('#statu_validTill').val();
  var status_val= $('#statu_statusValidOrExpired').val();
  var issuing_auth= $('#statu_issuingAuthority').val();
  

  $("#lic_cer_no_"+compail_id).val(lic_cer_no);
  $("#valid_from_"+compail_id).val(valid_from);
  $("#valid_till_"+compail_id).val(valid_till);
  $("#status_val_"+compail_id).val(status_val);
  $("#issuing_auth_"+compail_id).val(issuing_auth);



// lic_cer_no_
// valid_from_
// valid_till_
// status_val_
// issuing_auth_
// statu_licenceORCertificateNo
// statu_validFrom
// statu_validTill
// statu_statusValidOrExpired
// statu_issuingAuthority
// compail_id 

  $('#insert_form')[0].reset();  
  $("#myModal .close_modal").click()
   
   return true;
   
   
 });

 
});
	
</script>

<script type="text/javascript">
	$(document).ready(function(){
 $('#mou_form').on("submit", function(event){  
  event.preventDefault();

var a=$("#MoU_nameOfTheService").val(); 
var b=$("#MoU_nameOfTheAgency").val(); 
var c=$("#MoU_isMoUAvailable").val();

var z= (c==1)?'Yes':'No'; 
var d= $("#MoU_moUValidFrom").val(); 
var e= $("#MoU_moUValidTill").val(); 


  
  html = '<tr class="ng-star-inserted">';

	 html += '<td>'+a+'<input type="hidden" name="Mou[MoU_nameOfTheService][]" class="form-control item_name" value="'+a+'" /></td>';
	html += '<td>'+b+'<input type="hidden" name="Mou[MoU_nameOfTheAgency][]" class="form-control item_name" value="'+b+'" /></td>';

	html += '<td>'+z+'<input type="hidden" name="Mou[MoU_isMoUAvailable][]" class="form-control item_name" value="'+c+'" /></td>';

	  html += '<td>'+d+'<input type="hidden" name="Mou[MoU_moUValidFrom][]" class="form-control " value="'+d+'" /></td>';
								                                  
	html += '<td>'+e+'<input type="hidden" name="Mou[MoU_moUValidTill][]" class="form-control item_name" value="'+e+'" /></td>';
    
	html += '<td class="text-center"><button type="button" name="remove_ParamedicalStaff" class="btn btn-danger btn-sm remove_mous"><span class="glyphicon glyphicon-minus"></span></button></td>';
		html +='</tr>';
   
  $('#mou_table').append(html);
  $('#mou_form')[0].reset();  
  $("#myMou .close_modal1").click()
   
   return true;
   
   
 });

 
});

	$(document).ready(function(){
		 

		 
		 $(document).on('click', '.remove_mous', function(){
		  $(this).closest('tr').remove();
		 });
		 

		 
		});
	
</script>