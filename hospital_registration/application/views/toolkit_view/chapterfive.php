<style type="text/css">
  .col-form-label {
    font-size: 15px;
  }
</style>

<div class="row">
    <!--  table area -->
    <?php  echo form_open_multipart('toolkit/chapterfive','class="form-inner"') ?>

                            <?php  echo form_hidden('reg_id',$registration->reg_id); ?>
    <div class="col-sm-12">
        <div  class="panel panel-default thumbnail">
 
             <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <!--<a class="btn btn-success" href="<?php //echo base_url("patient/create") ?>"> <i class="fa fa-plus"></i>  <?php //echo display('add_patient') ?> </a> -->
                   Chapter 5: Hospital Infection Control (HIC) 
                </div>
            </div> 
           
          <div class="row form-group text-center" style="padding-top: 20px;">
          <label class="col-xs-12 col-form-label">
        <h3><b>HIC.1: The organisation has a well-designed, comprehensive and coordinated Hospital Infection Prevention and Control (HIC) programme aimed at reducing/eliminating risks to patients, visitors and providers of care.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Documentation (Yes/ No)</th>
                            <th>Upload Document</th>
                            <th>Implementation (Yes/ No)</th>
                            <th>Evidence</th>
                            <th>Remarks</th>
                            
                            <th >Scores (0/ 5/ 10)</th>
                        </tr>
                    </thead>
                    <tbody>

                      <tr>
                        
                        <td>A.The hospital infection prevention and control programme is documented which aims at preventing and reducing the risk of healthcare associated infections in all areas of the hospital.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
                                          </select>
                        </td>
                        <td>
                           <div>
                                        <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
                                          <i class="fa fa-upload"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
                                          <i class="fa fa-eye"></i>
                                        </button>
                                     </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>B.The infection prevention and control programme is a continuous process and updated at least once in a year.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>C.The infection prevention and control programme is a continuous process and updated at least once in a year.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>D.The hospital has an infection control team, which coordinates implementation of all infection prevention and control activities.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                       <tr>
                        
                        <td>E.The hospital has designated infection control officer as part of the infection control team.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>



                      <tr>
                        
                        <td>F.The hospital has designated infection control nurse(s) as part of the infection control team.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>


                     

                      
               


                     
                        
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>




           <div class="row form-group text-center" style="padding-top: 20px;">
          <label class="col-xs-12 col-form-label">
        <h3><b>HIC.2: The organisation implements the policies and procedures laid down in the Infection Control Manual in all areas of the hospital.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable2">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Documentation (Yes/ No)</th>
                            <th>Upload Document</th>
                            <th>Implementation (Yes/ No)</th>
                            <th>Evidence</th>
                            <th>Remarks</th>
                            
                            <th >Scores (0/ 5/ 10)</th>
                        </tr>
                    </thead>
                    <tbody>

                      <tr>
                        
                        <td>A.The organisation identifies the various high-risk areas and procedures and implements policies and/or procedures to prevent infection in these areas. *</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
                                          </select>
                        </td>
                        <td>
                           <div>
                                        <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
                                          <i class="fa fa-upload"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
                                          <i class="fa fa-eye"></i>
                                        </button>
                                     </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>B.The organisation adheres to standard precautions at all times.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>C.The organisation adheres to hand-hygiene guidelines. *</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>D.The organisation adheres to transmission-based precautions at all time</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                       <tr>
                        
                        <td>E.The organisation adheres to safe injection and infusion practices.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>



                      <tr>
                        
                        <td>F.The organisation adheres to cleaning, disinfection and sterilization practices.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>


                      <tr>
                        
                        <td>G.An appropriate antibiotic policy is established and documented * </td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>
              <tr>
                        
                        <td>H.The organisation implements the antibiotic policy and monitors rational use of  antimicrobial agents.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                   <tr>
                        
                        <td>I.The organisation adheres to laundry and linen management processes.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>



                       <tr>
                        
                        <td>J.The organisation adheres to kitchen sanitation and food-handling issues.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                <tr>
                        
                        <td>K.The organisation has appropriate engineering controls to prevent infections. *</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                 <tr>
                        
                        <td>I.The organisation adheres to housekeeping procedures.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>


                      
               


                     
                        
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>


         <div class="row form-group text-center" style="padding-top: 20px;">
          <label class="col-xs-12 col-form-label">
        <h3><b>HIC.3: The organisation performs surveillance activities to capture and monitor infection prevention and control data.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable3">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Documentation (Yes/ No)</th>
                            <th>Upload Document</th>
                            <th>Implementation (Yes/ No)</th>
                            <th>Evidence</th>
                            <th>Remarks</th>
                            
                            <th >Scores (0/ 5/ 10)</th>
                        </tr>
                    </thead>
                    <tbody>

                      <tr>
                        
                        <td>A.Surveillance activities are appropriately directed towards the identified high-risk areas and procedures.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
                                          </select>
                        </td>
                        <td>
                           <div>
                                        <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
                                          <i class="fa fa-upload"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
                                          <i class="fa fa-eye"></i>
                                        </button>
                                     </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>B.A collection of surveillance data is an on-going process.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>C.Verification of data is done on a regular basis by the infection control team.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>D.The scope of surveillance activities incorporates tracking and analyzing of infection risks, rates and trends.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                       <tr>
                        
                        <td>E.Surveillance activities include monitoring the compliance with hand-hygiene guidelines.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>



                      <tr>
                        
                        <td>F.Surveillance activities include mechanisms to capture the occurrence of epidemiological significant diseases and multi-drug-resistant organisms, and highly virulent infections.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>


                      <tr>
                        
                        <td>G.Surveillance activities include monitoring the effectiveness of housekeeping services.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>
              <tr>
                        
                        <td>H.Appropriate feedback regarding healthcare associated infection( HAIs) rates is provided on a regular basis to appropriate personnel. </td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                   <tr>
                        
                        <td>I.In cases of notifiable diseases, information (in relevant format) is sent to appropriate authorities.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>



                     
                        
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>

            <div class="row form-group text-center" style="padding-top: 20px;">
          <label class="col-xs-12 col-form-label">
        <h3><b>HIC.4: The organisation takes actions to prevent and control Healthcare Associated Infections (HAI) in patients.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable4">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Documentation (Yes/ No)</th>
                            <th>Upload Document</th>
                            <th>Implementation (Yes/ No)</th>
                            <th>Evidence</th>
                            <th>Remarks</th>
                            
                            <th >Scores (0/ 5/ 10)</th>
                        </tr>
                    </thead>
                    <tbody>

                      <tr>
                        
                        <td>A.The organisation takes action to prevent catheter associated urinary tract Infections.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
                                          </select>
                        </td>
                        <td>
                           <div>
                                        <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
                                          <i class="fa fa-upload"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
                                          <i class="fa fa-eye"></i>
                                        </button>
                                     </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>B.The organisation takes action to prevent Ventilator Associated Pneumonia.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>C.The organisation takes action to prevent catheter linked blood stream infections.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>D.The organisation takes action to prevent surgical site infections.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                       
               


                     
                        
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
      <div class="row form-group text-center" style="padding-top: 20px;">
          <label class="col-xs-12 col-form-label">
        <h3><b>HIC.5: The organisation provides adequate and appropriate resources for prevention and control of Healthcare Associated Infections (HAI).</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable5">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Documentation (Yes/ No)</th>
                            <th>Upload Document</th>
                            <th>Implementation (Yes/ No)</th>
                            <th>Evidence</th>
                            <th>Remarks</th>
                            
                            <th >Scores (0/ 5/ 10)</th>
                        </tr>
                    </thead>
                    <tbody>

                      <tr>
                        
                        <td>A.Adequate and appropriate personal protective equipment, soaps, and disinfectants are available and used correctly.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
                                          </select>
                        </td>
                        <td>
                           <div>
                                        <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
                                          <i class="fa fa-upload"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
                                          <i class="fa fa-eye"></i>
                                        </button>
                                     </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>B.Adequate and appropriate facilities for hand hygiene in all patient-care areas are accessible to healthcare providers.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>C.Isolation/barrier nursing facilities are available.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>D.Appropriate pre- and post-exposure prophylaxis is provided to all staff members concerned.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                       
               


                     
                        
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>


            <div class="row form-group text-center" style="padding-top: 20px;">
          <label class="col-xs-12 col-form-label">
        <h3><b>HIC.6: The organisation identifies and takes appropriate action to control outbreaks of infections.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable6">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Documentation (Yes/ No)</th>
                            <th>Upload Document</th>
                            <th>Implementation (Yes/ No)</th>
                            <th>Evidence</th>
                            <th>Remarks</th>
                            
                            <th >Scores (0/ 5/ 10)</th>
                        </tr>
                    </thead>
                    <tbody>

                      <tr>
                        
                        <td>A.Organisation has a documented procedure for identifying an outbreak.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
                                          </select>
                        </td>
                        <td>
                           <div>
                                        <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
                                          <i class="fa fa-upload"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
                                          <i class="fa fa-eye"></i>
                                        </button>
                                     </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>B.Organisation has a documented procedure for handling such outbreaks.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>C.This procedure is implemented during outbreaks.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>D.After the outbreak is over appropriate corrective actions are taken to prevent recurrence.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                       
               


                     
                        
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>

      <div class="row form-group text-center" style="padding-top: 20px;">
          <label class="col-xs-12 col-form-label">
        <h3><b>HIC.7: There are documented policies and procedures for sterilization activities in the organisation.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable7">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Documentation (Yes/ No)</th>
                            <th>Upload Document</th>
                            <th>Implementation (Yes/ No)</th>
                            <th>Evidence</th>
                            <th>Remarks</th>
                            
                            <th >Scores (0/ 5/ 10)</th>
                        </tr>
                    </thead>
                    <tbody>

                      <tr>
                        
                        <td>A.The organisation provides adequate space and appropriate zoning for sterilization activities.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
                                          </select>
                        </td>
                        <td>
                           <div>
                                        <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
                                          <i class="fa fa-upload"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
                                          <i class="fa fa-eye"></i>
                                        </button>
                                     </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>B.Documented procedure guides the cleaning, packing, disinfection and/or sterilization, storing and issue of items.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>C.Reprocessing of instruments and equipment are covered.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>D.The organisation shall have a documented policy and procedure for reprocessing of devices whenever applicable.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                       <tr>
                        
                        <td>E.Regular validation tests for sterilization are carried out and documented.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

             <tr>
                        
                        <td>F.There is an established recall procedure when breakdown in the sterilization system is identified.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                       
               


                     
                        
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
        <div class="row form-group text-center" style="padding-top: 20px;">
          <label class="col-xs-12 col-form-label">
        <h3><b>HIC.8: Biomedical waste (BMW) is handled in an appropriate and safe manner.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable8">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Documentation (Yes/ No)</th>
                            <th>Upload Document</th>
                            <th>Implementation (Yes/ No)</th>
                            <th>Evidence</th>
                            <th>Remarks</th>
                            
                            <th >Scores (0/ 5/ 10)</th>
                        </tr>
                    </thead>
                    <tbody>

                      <tr>
                        
                        <td>A.The organisation adheres to statutory provisions with regard to biomedical waste.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
                                          </select>
                        </td>
                        <td>
                           <div>
                                        <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
                                          <i class="fa fa-upload"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
                                          <i class="fa fa-eye"></i>
                                        </button>
                                     </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>B.Proper segregation and collection of biomedical waste from all patient-care areas of the hospital is implemented and monitored.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>C.The organisation ensures that biomedical waste is stored and transported to the site of treatment and disposal in properly covered vehicles within stipulated time limits in a secure manner.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>D.The biomedical waste treatment facility is managed as per statutory provisions (if in- house) or outsourced to authorized contractor(s).</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                       <tr>
                        
                        <td>E.Appropriate personal protective measures are used by all categories of staff handling biomedical waste.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

            
                       
               


                     
                        
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
     <div class="row form-group text-center" style="padding-top: 20px;">
          <label class="col-xs-12 col-form-label">
        <h3><b>HIC.9: The infection control programme is supported by the management and includes training of staff.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable9">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Documentation (Yes/ No)</th>
                            <th>Upload Document</th>
                            <th>Implementation (Yes/ No)</th>
                            <th>Evidence</th>
                            <th>Remarks</th>
                            
                            <th >Scores (0/ 5/ 10)</th>
                        </tr>
                    </thead>
                    <tbody>

                      <tr>
                        
                        <td>A.The management makes available resources required for the infection control programme.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
                                          </select>
                        </td>
                        <td>
                           <div>
                                        <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2">
                                          <i class="fa fa-upload"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button">
                                          <i class="fa fa-eye"></i>
                                        </button>
                                     </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>B.The organisation earmarks adequate funds from its annual budget in this regard.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>C.The organisation conducts induction training for all staff.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                      <tr>
                        
                        <td>D.The organisation conducts appropriate “in-service” training sessions for all staff at least once in a year.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
                  </select>
              </td>
                        <td>
                          <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                     <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                        <td>
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                  </select>
                        </td>
                        <td>
                           <div>
                    <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                    <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                </div>
                        </td>
                         <td>
                            <textarea class="form-control"  name="remark"></textarea>
                         </td>
                        <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" X1111 type="text"></td>
                      </tr>

                       
                       
               


                     
                        
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>



           
                        
                    


                        <input type="hidden" value="1" name="save_chapter">   

                           <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <div class="ui buttons">
                                        
                                        <button class="ui positive button"><?php  echo display('save') ?></button>
                                    </div>
                                </div>
                            </div>
                        <?php  echo form_close() ?>

        </div>
    </div>
</div>

<script type="text/javascript">
  
  $(document).ready(function() {
    var table = $('#myTable').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
     var table = $('#myTable1').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
     var table = $('#myTable2').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
     var table = $('#myTable3').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
     var table = $('#myTable4').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
     var table = $('#myTable5').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
     var table = $('#myTable6').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
     var table = $('#myTable7').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
     var table = $('#myTable8').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
     var table = $('#myTable9').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
     var table = $('#myTable10').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
     var table = $('#myTable11').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
     var table = $('#myTable12').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
     var table = $('#myTable13').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
     var table = $('#myTable14').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
      var table = $('#myTable15').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
       var table = $('#myTable16').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
        var table = $('#myTable17').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
         var table = $('#myTable18').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
          var table = $('#myTable19').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
           var table = $('#myTable20').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
            var table = $('#myTable21').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );

             var table = $('#myTable22').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
} );
</script>

