
<style type="text/css">
	.faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'fontawesome';
        content: "\f054"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
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

                        <?php  echo form_open_multipart('registration/general_info','class="form-inner"') ?>

                            <?php  echo form_hidden('reg_id',$registration->reg_id); ?>
                     <input type="hidden" name="save_general_info" value="1">
                            <div class="form-group row">
                                <label for="firstname" class="col-xs-2 col-form-label">Name of the Hospital <i class="text-danger">*</i></label>
                                <div class="col-xs-4">
                                   <b> <?php  echo $registration->hosp_name; ?> </b>
                                </div>
                                <label for="picture" class="col-xs-2 col-form-label">Upload registration certificate <i class="text-danger">*</i></label>
                                <div class="col-xs-4">
                                    <!-- <input type="file" name="reg_certif_image" id="reg_certif_image" value="<?php // echo $patient->picture ?>" class="form-control" > -->
                                  <input title="Upload file" 
                                                    type="file" class="btn btn-sm btn-warning form-group rounded mr-2 form-control" name="reg_certif_image"> 
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-xs-3">Do Patients stay overnight ? <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <div class="form-check">
                                        <label class="radio-inline">
                                        <input type="radio" name="patent_overnite" value="Yes" <?php  echo  set_radio('stay', 'Yes', TRUE); ?> >Yes
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="patent_overnite" value="No" <?php  echo  set_radio('stay', 'No'); ?> >No
                                        </label>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
							        <div class="panel-group" id="accordion">
							        
							        <div class="panel panel-default">
							            <div class="panel-heading">
							                <h4 class="panel-title">
							                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-snowflake-o"></i> Contact Details</a>
							                </h4>
							            </div>
							            <div id="collapseOne" class="panel-collapse collapse ">
							                <div class="panel-body">
							                    <div class="col-xs-12 col-form-label">
							                    	<div class="col-12">
									                    <div class="card tb-frm-crd">
									                    	<div class="card-body">
									                          <div class="row mb-2" style="padding-top:10px";>
									                              <div class="col-sm-12 col-md-6 col-lg-6">
									                                  <label class="col-form-label" for="blding_name">Name of Building
									                                      <span class="text-danger">*</span>
									                                      <small class="text-muted">
									                                          <i>Mention hospital name if building name not available</i>
									                                        </small>
									                                    </label>
									                                    <div>
									                                    <input class="form-control " id="blding_name" maxlength="100" name="blding_name" placeholder="Building name" required="" type="text">
									                    
									                                  <!---->
									                                </div>
									                              </div>
									                           <div class="col-sm-12 col-md-6 col-lg-6">
									                                  <label class="col-form-label" for="gcdstate">State</label>
									                                  <input class="form-control " id="state" maxlength="100" name="state" placeholder="State" required="" type="text" value="<?= $registration->state  ?>" disabled="true">
									                               
									                              </div>
									                            </div>
									    
									                            <div class="row mb-2" style="padding-top:10px";>
									                                <div class="col-sm-12 col-md-6 col-lg-6">
									                                    <label class="col-form-label" for="gcddist">District</label>
									                                    <div>
									                                    <input class="form-control" id="district" maxlength="100" name="district" placeholder="District" type="text" value="<?= $registration->district  ?>" disabled="true">
									                                    </div>
									                                  </div>
									    
									                                  <div class="col-sm-12 col-md-6 col-lg-6">
									                                      <label class="col-form-label" for="town">Town
									                                          <span class="text-danger">*</span>
									                                        </label>
									                                      <div>
									                                          <input class="form-control " id="town" maxlength="100" name="town" placeholder="Town" required="" type="text">
									                          
									                                        <!---->
									                                      </div>
									                                  </div>
									                            </div>
									    
									    
									                            <div class="row mb-2" style="padding-top:10px";>
									                                <div class="col-sm-12 col-md-6 col-lg-6">
									                                    <label class="form-label" for="address">Address
									                                        <span class="text-danger">*</span>
									                                      </label>
									    
									                                      <div>
									                                          <textarea class="form-control " id="address" maxlength="1000" name="address" placeholder="Address" required=""></textarea>
									                      
									                                        <!---->
									                                      </div>
									    
									    
									                                  </div>
									    
									                                  <div class="col-sm-12 col-md-6 col-lg-6">
									                                      <label class="col-form-label" for="landmark">Mention nearby Landmark</label>
									                                      <div>
									                                          <input class="form-control " id="landmark" maxlength="100" name="landmark" placeholder="Nearby Landmark" type="text">
									                                      </div>
									                                  </div>
									                            </div>
									    
									    
									                            <div class="row mb-2" style="padding-top:10px";>
									                                <div class="col-sm-12 col-md-6 col-lg-6">
									                                    <label class="col-md-2 col-form-label" for="gcdpin">Pin</label>
									    
									                                      <div>
									                                          <input class="form-control " id="pin" maxlength="6" name="pin" placeholder="Pin" type="text" value="<?= $registration->pin  ?>" disabled="true">
									                                      </div>
									                                  </div>
									    
									                                  <div class="col-sm-12 col-md-6 col-lg-6">
									                                    <label class="col-form-label" for="telephone">Telephone with STD Code</label>
									                                    <div>
									                                        
									                                       <input class="form-control " id="telephone" maxlength="11" minlength="11" name="telephone" placeholder="Telephone with STD code" type="text">
									                                     
									                       
									                                     <!---->
									                                    </div>
									                                </div>
									                            </div>
									    
									                            <div class="row mb-2" style="padding-top:10px";>
									                                <div class="col-sm-12 col-md-6 col-lg-6">
									                                    <label class="col-form-label" for="fax">Fax</label>
									                                    <div>
									                                       <input class="form-control " id="fax" maxlength="11" name="fax" placeholder="Fax" type="text">
									                                   </div>
									                                  </div>
									    
									                                  <div class="col-sm-12 col-md-6 col-lg-6">
									                                      <label class="col-form-label" for="gcdmobileTelephone">Mobile</label>
									                                      <div>
									                                         <input class="form-control " id="mobile" maxlength="10" name="mobile" placeholder="Mobile Telephone(s)" type="text" value="<?= $registration->mobile  ?>" disabled="true">
									                                      </div>
									                                  </div>
									                            </div>
									    
									                            <div class="row mb-2" style="padding-top:10px";>
									                                <div class="col-sm-12 col-md-6 col-lg-6">
									                                    <label class="col-form-label" for="altenate_mob">Alternate Mobile</label>
									                                    <div>
									                                       <input class="form-control " id="altenate_mob" maxlength="10" minlength="10" name="altenate_mob" placeholder="Mobile Telephone(s)" type="text">
									                       
									                                     <!---->
									                                   </div>
									                                  </div>
									    
									                                  <div class="col-sm-12 col-md-6 col-lg-6">
									                                      <label class="col-form-label" for="email">E-mail</label>
									                                      <div>
									                                         <input class="form-control " id="email" maxlength="100" name="email" placeholder="E-mail Id" type="text" 
                                                           value="<?= $registration->email  ?>" disabled="true" >
									                                      </div>
									                                  </div>
									                            </div>
									    
									                            <div class="row mb-2" style="padding-top:10px";>
									                                <div class="col-sm-12 col-md-6 col-lg-6">
									                                    <label class="col-form-label" for="website">Website
									                                        
									                                      </label>
									                                       <div>
									                                          <input class="form-control " id="website" maxlength="100" name="website" pattern="^[a-zA-Z0-9\-\.]+\.(com|org|net|nic|edu|in|gov|info)$" placeholder="Website" type="text">
									                          
									                                        <!---->
									                                      </div>
									                                  </div>
									    
									                                  <div class="col-sm-12 col-md-6 col-lg-6">
									                                      <label>Does the hospital have split location(s)
									                                          <span class="text-danger">*</span>
									                                          
									                                        </label>
									                                        <label class="switch switch-default switch-pill switch-primary">
									                                            <input  id="spil_loc" name="spil_loc" type="checkbox" value="1">
									                                            
									                                          </label>
									                                          <div>
									                                              
									                                             <div class="" >
									                                                  <input class="form-control " id="spil_loc_count" maxlength="3" name="spil_loc_count" placeholder="Enter No. of split locs." type="text">
									                                    
									                                                  <!---->
									                                                </div>
									    
									                                          </div>
									    
									                                  </div>
									                            </div>
									                        <div class="row form-group" hidden="">
									                          <div class="col-12">
									                            
									                            <button class="btn btn-primary btn-sm" type="button" >Add Split Location</button><br>
									                              <label><small>Enter details for all split locations</small></label>
									                          </div>
									                        </div>
									                        <div class="row" >
									                          <div class="col-12">
									                            <tabset class="tab-container"><ul class="nav nav-tabs"> <!----> </ul> <div class="tab-content"> 
									                              <!---->

									                             </div> </tabset>
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
							                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen"> <i class="fa fa-snowflake-o"></i> Hospital Information</a>
							                </h4>
							            </div>
							            <div id="collapseTen" class="panel-collapse collapse">
							                <div class="panel-body">
							                   <div class="col-xs-12 col-form-label">
							                   	<div class="col-12">
								                    <div class="card tb-frm-crd">
								                     
								                      <div class="card-body">
								                          <div class="row">
								                              <div class="col-sm-12 col-md-6 col-lg-6">
								                                  <label class="col-form-label" for="date_estbl">Date of Establishment
								                                      <span class="text-danger">* </span>
								                                    </label>
								                                    
								                                   <div>
								                                      <div class="input-group">
								                                           <input name="date_estbl" class="datepicker form-control" type="text" placeholder="<?php echo ('Date Of Establishment') ?>" id="date_estbl"  value="">
								                                          <span class="input-group-addon">
								                                            <i aria-hidden="true" class="fa fa-calendar"></i>
								                                          </span>
								                                        </div>
								                                      
								                                        <!---->
								                                   </div>
								                                </div>

                                              
								  
								                                <div class="col-sm-12 col-md-6 col-lg-6">
								                                    <label class="form-label" for="hospitallregunderbody" title="Upload registeration certificate">Under which of the following body, hospital is registered ?
								                                        <span class="text-danger">*</span>
								                                      
								                                      </label>
								                                     
								                                      
								  
								                                       <div class="row">
								                                          <div class="form-group col-xs-7">
								                                              <select class="form-control " id="hosp_reg_body" name="hosp_reg_body" required="">
								                                                <option value="stateorlocalstathsptlregbody">State or Local Statutory Hospital Registering Body</option>
								                                                <option value="clinicalestablishmentact">Clinical Establishment Act</option>
								                                                <option value="shopandestablishmentact">Shop and Establishment Act</option>
								                                              </select>
								                                              <!---->
								                              
								                                            </div>
								                              
								                                            <div class="col-xs-3">

								                                           <!--  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
								                                            <i class="fa fa-upload"></i>
								                                          </button> -->
								                                       <!--  <input type="file" name="hosp_reg_body_image"> -->
								                                          <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"> 
								                                            <i class="fa fa-eye"></i>
								                                          </button>
								                                            </div>
								                                      </div>
								                                </div>
								                          </div>


								                          <div class="row mb-2">
								                              <div class="col-sm-12 col-md-6 col-lg-6">
								                                  <label class="col-form-label" for="reg_number">Registration Number
								                                      <span class="text-danger">*</span>
								                                    </label>
								                                    
								                                   <div>
								                                      <input class="form-control " id="reg_number" name="reg_number" placeholder="Registration #" type="text" required="">
								              
								                            <!---->
								                                   </div>
								                                </div>
								  
								                                <div class="col-sm-12 col-md-6 col-lg-6">
								                                    <label class="col-form-label" for="date_reg_year">Date of Registration certificate
								                                        <span class="text-danger">*</span>
								                                      </label>
								  
								                                       <div>
								                                          <div class="row">
								                                              <div class="form-group col-xs-6">
								                                                
								                                                  <select class="form-control " id="date_reg_year" name="date_reg_year" required="">
                                                          <?php for($i=1950;$i<=2050;$i++) {  ?>
                                                             <option value="<?=$i ?>" class="ng-star-inserted">
                                                                      <?=$i ?>
                                                                    </option>
                                                           <?php }   ?>


								                                                   
								                                                  </select>
								                                                  </div>

                <?php $months = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July ', 'August', 'September', 'October', 'November', 'December', ); 
                  ?>
								                                                  <div class="form-group col-xs-6">
								                                                  <select class="form-control " id="date_reg_month" name="date_reg_month" required="">
                                                                 <?php foreach($months as $month):   ?>
								                                                    <option 
                                                                    value="<?=$month?>" class="ng-star-inserted">
								                                                      <?=$month?>
								                                                    </option>
                                                                  <?php endforeach; ?>

								                                                  </select>
								                              
								                                                </div>
								                                                <!---->
								                                                <!---->
								                                              </div>
								                                            </div>
								                                      </div>
								                                </div>
								                          </div>

								                          <div class="row mb-2">
								                              <div class="col-sm-12 col-md-6 col-lg-6">
								                                  <label class="col-form-label" for="yearofexprregcert">Expiry date of Registration Certificate
								                                      <span class="text-danger">*</span>
								                                    </label>
								                                
								                                    
								                                   <div>
								                                      <div class="row">
								                                          <div class="col-md-12">
								                                            <div class="form-group col-xs-6">
								                                              <select class="form-control width-50 " id="exp_reg_year" name="exp_reg_year" required="">
								                                                <?php for($i=1950;$i<=2050;$i++) {  ?>
                                                             <option value="<?=$i ?>" class="ng-star-inserted">
                                                                      <?=$i ?>
                                                                    </option>
                                                           <?php }   ?>


								                                              </select>
								                                          </div>
								                                          <div class="form-group col-xs-6">
								                          
								                                              <select class="form-control " id="exp_reg_month" name="exp_reg_month" required="">
								                                                 <?php foreach($months as $month):   ?>
                                                                    <option 
                                                                    value="<?=$month?>" class="ng-star-inserted">
                                                                      <?=$month?>
                                                                    </option>
                                                                  <?php endforeach; ?>
								                                              </select>
								                          
								                          
								                                            </div>
								                                            <!---->
								                                            <!---->
								                                          </div>
								                                        </div>
								                                   </div>
								                                </div>
								  
								                                <div class="col-sm-12 col-md-6 col-lg-6">
								                                    <label class="col-form-label" for="yearclnfunstart">Month and year in which clinical functions started
								                                        <span class="text-danger">*</span>
								                                      </label>
								  
								                                       <div>
								                                          <div class="row">
								                                              <div class="col-md-12">
								                                                <div class="form-group col-xs-6">
								                                                  <select class="form-control width-50 " id="clincal_year" name="clincal_year" required="">
								                                                    <?php for($i=1950;$i<=2050;$i++) {  ?>
                                                             <option value="<?=$i ?>" class="ng-star-inserted">
                                                                      <?=$i ?>
                                                                    </option>
                                                           <?php }   ?>


								                                                  </select>
								                                                  </div>
								                                                  <div class="form-group col-xs-6">
								                              					<select class="form-control " id="clincal_month" name="clincal_month" required="">
								                                                    <?php foreach($months as $month):   ?>
                                                                    <option 
                                                                    value="<?=$month?>" class="ng-star-inserted">
                                                                      <?=$month?>
                                                                    </option>
                                                                  <?php endforeach; ?>
								                                                  </select>
								                              
								                              
								                                                </div>
								                                                <!---->
								                                                <!---->
								                                              </div>
								                                            </div>
								                                      </div>
								                                </div>
								                          </div>


								                          

								                        <div class="row mb-3">

								                            <div class="col-sm-12 col-md-6 col-lg-6">

								                            <div class="card border-info">

								                              <div class="card-header bg-info">
								                                <i class="fa fa-snowflake-o"></i> Type of Ownership
								                                <span class="text-danger">*</span>
								                                
								                               </div>

								                              <div class="card-body">

								                                <div class="row">
								                                  <div class="form-group col-xs-6">
								                                    <input id="hospitallinfoowntype_plc" name="type_ownership" type="radio" value="Unit of a public limited company" class="" onclick="check(this.id);">
								                                    Unit of a public limited company
								                                  </div>

								                                  <div class="form-group col-xs-6">
								                                    <input id="hospitallinfoowntype_prvcorp" name="type_ownership" type="radio" value="Private – Corporate" class="" onclick="check(this.id);"> Private –
								                                    Corporate
								                                  </div>

								                                </div>

								                                <div class="row">

								                                  <div class="form-group col-xs-6">
								                                    <input id="hospitallinfoowntype_pbdoc" name="type_ownership" type="radio" value="Partnership between Doctors" class="" onclick="check(this.id);">
								                                    Partnership between Doctors
								                                  </div>

								                                  <div class="form-group col-xs-6">
								                                    <input id="hospitallinfoowntype_pinip" name="type_ownership" type="radio" value="Partnership includes non-medical persons" class="" onclick="check(this.id);">
								                                    Partnership includes non-medical persons
								                                  </div>

								                                </div>

								                                <div class="row">

								                                  <div class="form-group col-xs-6">
								                                    <input id="hospitallinfoowntype_pdo" name="type_ownership" type="radio" value="Proprietary (Doctor owned)" class="" onclick="check(this.id);">
								                                    Proprietary (Doctor owned)
								                                  </div>

								                                  <div class="form-group col-xs-6">
								                                    <input id="hospitallinfoowntype_pnm" name="type_ownership" type="radio" value="Proprietary (Non-medical)" class="" onclick="check(this.id);"> 
								                                    Proprietary (Non-medical)
								                                  </div>
								                                </div>

								                                <div class="row">
								                                  <div class="form-group col-xs-6">
								                                    <input id="hospitallinfoowntype_ctrust" name="type_ownership" type="radio" value="Charitable Trust" class="" onclick="check(this.id);"> Charitable Trust
								                                  </div>

								                                  <div class="form-group col-xs-6">
								                                    <input id="hospitallinfoowntype_csosty" name="type_ownership" type="radio" value="Cooperative society" class="" onclick="check(this.id);"> Cooperative
								                                    society
								                                  </div>

								                                </div>

								                                <div class="row">

								                                  <div class="form-group col-xs-6">
								                                    <input id="hospitallinfoowntype_sec25comp" name="type_ownership" type="radio" value="Section 25 company" class="" onclick="check(this.id);"> Section 25
								                                    company
								                                  </div>

								                                  <div class="form-group col-xs-6">
								                                    <input id="hospitallinfoowntype_gov" name="type_ownership" type="radio" value="Government" class="" onclick="check(this.id);"> Government
								                                  </div>

								                                </div>

								                                <div class="row">

								                                  <div class="form-group col-xs-6">
								                                    <input id="hospitallinfoowntype_armedforces" name="type_ownership" type="radio" value="Armed Forces" class="" onclick="check(this.id);"> Armed Forces
								                                  </div>

								                                  <div class="form-group col-xs-6">
								                                    <input id="hospitallinfoowntype_unitunderpublicsectorunit" name="type_ownership" type="radio" value="Unit under Public Sector Unit" class="" onclick="check(this.id);">
								                                    Unit under Public Sector Unit
								                                  </div>

								                                </div>

								                                <div class="row">

								                                  <div class="form-group col-xs-6">
								                                    <input id="other_present" name="type_ownership" type="radio" value="Others" class="other_ownership" onclick="check(this.id);"> Others
								                                  </div>

								                                </div>


								                                <div class="row" style="display: none" id="ownership_other">
								                                  <label class="col-md-6 col-form-label" for="othstypeofqwnership">Mention type of ownership
								                                    <span class="text-danger">*</span>
								                                  </label>
								                                  
								                                  <div class="col-md-4">
								                                    <input class="form-control " id="other_name" maxlength="300" name="other_name" placeholder="Type of ownership" type="text" >
								                                    <!---->
								                                  </div>
								                                  
								                                </div>
								                                <div class="row form-group">
								                                  <div class="col-md-4">
								                                    <input title="Upload any file" 
                                                    type="file" class="btn btn-sm btn-warning form-group rounded mr-2 form-control" name="type_ownership_doc">
								                                     <!--  <i class="fa fa-upload"></i> -->
								                                    
								                                   
								                                   <!--  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                      <i class="fa fa-eye"></i>
								                                    </button> -->
								                                   
								                                  </div>
								                                  <!-- <div class="col-sm-7">
								                                    <button class="form-group mr-2 pull-right btn btn-sm btn-primary display rounded" title="NC" type="button" hidden="">NC</button>
								                                  </div> -->
								                                </div>
								                                  </div>

								                            </div>

								                          </div>
                         
								                          <div class="col-sm-12 col-md-6 col-lg-6">

								                            
								                            <div class="card border-info">

								                              <div class="card-header bg-info">
								                                <i class="fa fa-snowflake-o"></i>Select the scheme that the hospital is already
								                                empanelled
								                                with
								                                <span class="text-danger">*</span>
								                                
								                              </div>

								                              <div class="card-body">

								                                  <div class="row form-group">
								                                    <div class="col-md-6">
								                                      <label class="col-form-label">CGHS</label>
								                                    </div>
								  
								                                    <div class="col-md-2">
								                                      <label class="switch switch-text switch-warning">
								                                        <input class="switch-input " id="cghs" name="cghs" type="checkbox">
								                                        <span class="switch-label" data-off="NO" data-on="YES"></span>
								                                        <span class="switch-handle"></span>
								                                      </label>
								                                    </div>
								                                   
								                                   
								                                    
								                                      
								  
								                                    
								                                    <div class="col-md-3">
								                                       
								                                        <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                        <i class="fa fa-mobile custom-mobileIcon"></i>
								                                      </button>
								                                       
                                                   <input type="file" name="cghs_doc" style="display: none">
								                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                        <i class="fa fa-eye"></i>
								                                      </button>
								                                    </div>
								                                    
								  
								                                  </div>
								  
								                                  <div class="row form-group">
								  
								                                    <div class="col-md-6">
								                                      <label class="col-form-label">Railways</label>
								                                    </div>
								  
								                                    <div class="col-md-2">
								                                      <label class="switch switch-text switch-warning">
								                                        <input class="switch-input " id="railway" name="railway" type="checkbox">
								                                        <span class="switch-label" data-off="NO" data-on="YES"></span>
								                                        <span class="switch-handle"></span>
								                                      </label>
								                                    </div>
								                                    
								                                    
								                                    <div class="col-md-3">
								                                        
								                                        <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                        <i class="fa fa-mobile custom-mobileIcon"></i>
								                                      </button>
								                                        <input type="file" name="railway_doc" style="display: none">
								                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                        <i class="fa fa-eye"></i>
								                                      </button>
								                                    </div>
								                                    
								  
								                                  </div>
								                                  <div class="row form-group">
								  
								                                    <div class="col-md-6">
								                                      <label class="col-form-label">Ayushman Bharat</label>
								                                    </div>
								  
								                                    <div class="col-md-2">
								                                      <label class="switch switch-text switch-warning">
								                                        <input class="switch-input " id="ayush_bhart" name="ayush_bhart" type="checkbox" >
								                                        <span class="switch-label" data-off="NO" data-on="YES"></span>
								                                        <span class="switch-handle"></span>
								                                      </label>
								                                    </div>

								                                    
								                                    <div class="col-md-3" hidden="">

								                                      
								                                        <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through  mobile icon" type="button">
								                                        <i class="fa fa-mobile custom-mobileIcon"></i>
								                                      </button>
								                                       <input type="file" name="ayush_bhart_doc" style="display: none">
								                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                        <i class="fa fa-eye"></i>
								                                      </button>
								                                    </div>
								                                    
								  
								                                  </div>
								                                  <div class="row form-group">
								  
								                                    <div class="col-md-6">
								                                      <label class="col-form-label">Public Health Insurance Schemes</label>
								                                    </div>
								  
								                                    <div class="col-md-2">
								                                      <label class="switch switch-text switch-warning">
								                                        <input class="switch-input " id="health_insurance" name="health_insurance" type="checkbox">
								                                        <span class="switch-label" data-off="NO" data-on="YES"></span>
								                                        <span class="switch-handle"></span>
								                                      </label>
								                                    </div>
								                                    
								                                    
								                                     
								  
								                                    
								                                    <div class="col-md-3">
								                                       
								                                        <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                        <i class="fa fa-mobile custom-mobileIcon"></i>
								                                      </button>
								                                       <input type="file" name="health_insurance_doc" style="display: none">
								                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                        <i class="fa fa-eye"></i>
								                                      </button>
								                                    </div>
								                                    
								  
								                                  </div>
								                                  <div class="row form-group">
								  
								                                    <div class="col-md-6">
								                                      <label class="col-form-label">ECHS</label>
								                                    </div>
								  
								                                    <div class="col-md-2">
								                                      <label class="switch switch-text switch-warning">
								                                        <input class="switch-input " id="echs" name="echs" type="checkbox">
								                                        <span class="switch-label" data-off="NO" data-on="YES"></span>
								                                        <span class="switch-handle"></span>
								                                      </label>
								                                    </div>
								                                     
								  
								                                    
								                                    <div class="col-md-3">
								                                       
								                                        <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                        <i class="fa fa-mobile custom-mobileIcon"></i>
								                                      </button>
								                                       <input type="file" name="echs_doc" style="display: none">
								                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                        <i class="fa fa-eye"></i>
								                                      </button>
								                                    </div>
								                                    
								  
								                                  </div>
								                                  <div class="row form-group">
								  
								                                    <div class="col-md-6">
								                                      <label class="col-form-label">State Government health scheme</label>
								                                    </div>
								  
								                                    <div class="col-md-2">
								                                      <label class="switch switch-text switch-warning">
								                                        <input class="switch-input " id="health_schem" name="health_schem" type="checkbox">
								                                        <span class="switch-label" data-off="NO" data-on="YES"></span>
								                                        <span class="switch-handle"></span>
								                                      </label>
								                                    </div>
								                                     
								                                    
								                                    <div class="col-md-3">
								                                          
								                                        <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                        <i class="fa fa-mobile custom-mobileIcon"></i>
								                                      </button>
								                                       <input type="file" name="health_schem_doc" style="display: none">
								                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                        <i class="fa fa-eye"></i>
								                                      </button>
								                                    </div>
								                                    
								  
								                                  </div>
								                                  
								                                  <div class="row form-group">
								  
								                                    <div class="col-md-6">
								                                      <label class="col-form-label">Others</label>
								                                    </div>
								  
								  
								                                    <div class="col-md-2">
								                                      <label class="switch switch-text switch-warning">
								                                        <input class="switch-input " id="other_schem" name="other_schem" type="checkbox">
								                                        <span class="switch-label" data-off="NO" data-on="YES"></span>
								                                        <span class="switch-handle"></span>
								                                      </label>
								                                    </div>
								                                 
								                                    
								                                    <div class="col-md-3">
								                                         
								                                        <button class="btn btn-sm form-group mr-2 btn-warning rounded" title="Through mobile icon" type="button">
								                                        <i class="fa fa-mobile custom-mobileIcon"></i>
								                                      </button>
								                                         <input type="file" name="cghs_doc" style="display: none">
								                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
								                                        <i class="fa fa-eye"></i>
								                                      </button>
								                                    </div>
								                                    
								  
								                                  </div>
								                                  
								                                  <div class="row form-group">
								                                    <label class="col-md-5 col-form-label" for="other">Other scheme(s) that
								                                      the hospital is linked with
								                                      <span class="text-danger">*</span>
								                                    </label>
								                                    <div class="col-md-7">
								                                      <textarea class="form-control " id="other_schem_name" maxlength="1000" name="other_schem_name" placeholder="Other scheme(s)" ></textarea>
								                                      <!---->
								                                    </div>
								  
								                                    <input type="file" name="other_doc" style="display: none">
								                                    
								                                    
								                                  </div>
								                                  
								                                  <div class="row form-group">
								  
								                                    <div class="col-md-6">
								                                      <label class="col-form-label">None</label>
								                                    </div>
								                                    <div class="col-md-2">
								                                      <label class="switch switch-text switch-warning">
								                                        <input class="switch-input " id="is_schema_present" name="is_schema_present" type="checkbox">
								                                        <span class="switch-label" data-off="NO" data-on="YES"></span>
								                                        <span class="switch-handle"></span>
								                                      </label>
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

<!-- ownership_other
other_name -->
<script type="text/javascript">
  $(document).ready(function () {
       // $('.other_ownership').click(function () {
       //     alert("hi");
       // });
       
   });

  function check(id) {
     if(id == 'other_present'){
      $("#ownership_other").css("display", "block");

      
      
     }else{
        $("#ownership_other").css("display", "none");
         
     }
  }
</script>