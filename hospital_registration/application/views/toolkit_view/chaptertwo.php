<style type="text/css">
  .col-form-label {
    font-size: 15px;
  }
</style>

<div class="row">
    <!--  table area -->
    <?php  echo form_open_multipart('toolkit/chaptertwo','class="form-inner"') ?>

                            <?php  echo form_hidden('reg_id',$registration->reg_id); ?>
    <div class="col-sm-12">
        <div  class="panel panel-default thumbnail">
 
             <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <!--<a class="btn btn-success" href="<?php //echo base_url("patient/create") ?>"> <i class="fa fa-plus"></i>  <?php //echo display('add_patient') ?> </a> -->
                    Chapter 2: CARE OF PATIENTS (COP) 
                </div>
            </div> 
            <div class="row form-group text-center" style="padding-top: 20px;">
          <label class="col-xs-12 col-form-label">
        <h3><b>COP.1: Uniform care to patients is provided in all settings of the organisation and is guided by the applicable laws, regulations and guidelines.</b></h3>
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
                        
                        <td>A. Care delivery is uniform for a given health problem when similar care is provided in more than one setting. *.</td>
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
                        
                        <td>B. Uniform care is guided by documented policies and procedures.</td>
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
                        
                        <td>C. These reflect applicable laws, regulations and guidelines.</td>
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
                        
                        <td>D.The organisation adapts evidence-based medicine and clinical practice guidelines to guide uniform patient care.</td>
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
        <h3><b>COP.2: Emergency services are guided by documented policies, procedures, applicable laws and regulations.</b></h3>
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
                        
                        <td>A. There shall be an identified area in the organisation which is easily accessible to receive and manage emergency patients .</td>
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
                        
                        <td>B. Policies and procedures for emergency care are documented and are in consonance with statutory requirements. *</td>
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
                        
                        <td>C. This also addresses handling of medico-legal cases. *</td>
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
                        
                        <td>D.The patients receive care in consonance with the policies.</td>
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
                        
                        <td>E.Documented policies and procedures guide the triage of patients for initiation of appropriate care. * </td>
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
                        
                        <td>F.Staff are familiar with the policies and trained on the procedures for care of emergency patients.</td>
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
                        
                        <td>G.Admission or discharge to home or transfer to another organisation is also documented.</td>
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
                        
                        <td>H.In case of discharge to home or transfer to another organisation, a discharge note shall be given to the patient.</td>
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
                        
                        <td>I.Quality assurance programmes are documented and implemented. </td>
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
                        
                        <td>J.The documented policies and procedures guide management of patients found dead on arrival to the hospital.*</td>
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
        <h3><b>COP.3: The ambulance services are commensurate with the scope of the services provided by the organisation.</b></h3>
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
                        
                        <td>A. There is adequate access and space for the ambulance(s).</td>
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
                        
                        <td>B. The ambulance adheres to statutory requirements.</td>
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
                        
                        <td>C. The ambulance(s) is appropriately equipped.</td>
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
                        
                        <td>D.The ambulance(s) is manned by trained personnel.</td>
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
                        
                        <td>E.The ambulance(s) is checked on a daily basis.</td>
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
                        
                        <td>F.Equipments are checked on a daily basis using a checklist.*</td>
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
                        
                        <td>G.Emergency medications are checked daily and prior to dispatch using a checklist.</td>
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
                        
                        <td>H.The ambulance(s) has a proper communication system.</td>
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
                        
                        <td>I.The emergency department identifies opportunities to initiate treatment at the earliest when the patient is in transit to the organisation.  </td>
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
        <h3><b>COP.4: The organisation plans for handling community emergencies, epidemics and other disasters.</b></h3>
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
                        
                        <td>A. The organisation identifies potential emergencies. *</td>
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
                        
                        <td>B. The organisation has a documented disaster management plan. *</td>
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
                        
                        <td>C. Provision is made for availability of medical supplies, equipment and materials during such emergencies.</td>
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
                        
                        <td>D.Staff are trained in the hospital’s disaster management plan.</td>
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
                        
                        <td>E.The plan is tested at least twice a year.</td>
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
        <h3><b>COP.5: Documented policies and procedures guide the care of patients requiring cardio-pulmonary resuscitation.</b></h3>
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
                        
                        <td>A. Documented policies and procedures guide the uniform use of resuscitation throughout the organisation. *</td>
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
                        
                        <td>B. Staff providing direct patient care are trained and periodically updated in cardio-pulmonary resuscitation.</td>
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
                        
                        <td>C. The events during a cardiopulmonary resuscitation are recorded.</td>
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
                        
                        <td>D.A post-event analysis of all cardiopulmonary resuscitations is done by a multidisciplinary committee.</td>
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
                        
                        <td>E.Corrective and preventive measures are taken based on the post-event analysis.</td>
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
        <h3><b>COP.6: Documented policies and procedures guide nursing care.</b></h3>
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
                        
                        <td>A. There are documented policies and procedures for all activities of the nursing services. *</td>
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
                        
                        <td>B. These reflect current standards of nursing services and practice, relevant regulations and purposes of the services.</td>
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
                        
                        <td>C. Assignment of patient care is done as per current good practice guidelines.</td>
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
                        
                        <td>D.Nursing care is aligned and integrated with overall patient care.</td>
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
                        
                        <td>E.Care provided by nurses is documented in the patient record.*</td>
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
                        
                        <td>F.Nurses are provided with adequate equipment for providing safe and efficient nursing services.</td>
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
                        
                        <td>G.Nurses are empowered to take nursing-related decisions to ensure the timely care of patients.</td>
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
        <h3><b>COP.7:Documented procedures guide the performance of various procedures.</b></h3>
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
                        
                        <td>A. Documented procedures are used to guide the performance of various clinical procedures. * </td>
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
                        
                        <td>B. Only qualified personnel order, plan, perform and assist in performing procedures.</td>
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
                        
                        <td>C. Documented procedures exist to prevent adverse events like a wrong site, wrong patient and wrong procedure. * </td>
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
                        
                        <td>D.Informed consent is taken by the personnel performing the procedure, where applicable.</td>
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
                        
                        <td>E.Informed consent is taken by the personnel performing the procedure, where applicable.</td>
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
                        
                        <td>F.Patients are appropriately monitored during and after the procedure.</td>
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
                        
                        <td>G.Procedures are documented accurately in the patient record.*</td>
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
        <h3><b>COP.8: Documented policies and procedures define rational use of blood and blood components.</b></h3>
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
                        
                        <td>A. Documented policies and procedures are used to guide the rational use of blood and blood components. * </td>
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
                        
                        <td>B. Documented procedures govern transfusion of blood and blood components. *</td>
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
                        
                        <td>C. The transfusion services are governed by the applicable laws and regulations.</td>
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
                        
                        <td>D.Informed consent is obtained for donation and transfusion of blood and blood components.</td>
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
                        
                        <td>E.Informed consent also includes patient and family education about the donation</td>
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
                        
                        <td>F.The organisation defines the process for availability and transfusion of blood/blood components for use in emergency situations.*</td>
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
                        
                        <td>G.Post-transfusion form is collected, reactions if any identified and are analysed for preventive and corrective actions. </td>
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
                        
                        <td>H.Staff are trained to implement the policies.</td>
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
        <h3><b>COP.9: Documented policies and procedures guide the care of patients in the intensive care and high dependency units.</b></h3>
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
                        
                        <td>A. Documented policies and procedures are used to guide the care of patients in the intensive care and high dependency units. * </td>
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
                        
                        <td>B. The organisation has documented admission and discharge criteria for its intensive care and high dependency units. *</td>
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
                        
                        <td>C. Staff are trained to apply these criteria.</td>
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
                        
                        <td>D.Adequate staff and equipment are available.</td>
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
                        
                        <td>E.Defined procedures for the situation of bed shortages are follo</td>
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
                        
                        <td>F.Infection control practices are documented and followed. *</td>
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
                        
                        <td>G.A quality assurance programme is documented and implemented.* </td>
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
                        
                        <td>H.Patients and families are counselled by the treating medical professional   at periodic intervals and when there is a significant change in the condition of the patient, and same is documented.*</td>
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
        <h3><b>COP.10: Documented policies and procedures guide the care of vulnerable patients. </b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable10">
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
                        
                        <td>A. Policies and procedures are documented and are in accordance with the prevailing laws and the national and international guidelines. * </td>
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
                        
                        <td>B. Care is organised and delivered in accordance with the policies and procedures.</td>
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
                        
                        <td>C. The organisation provides for a safe and secure environment for the vulnerable group.</td>
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
                        
                        <td>D.A documented procedure exists for obtaining informed consent from the appropriate legal representative. *</td>
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
                        
                        <td>E.Staff are trained to care for this vulnerable group.</td>
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
                      
                      
                        
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
           <div class="row form-group text-center" style="padding-top: 20px;">
          <label class="col-xs-12 col-form-label">
        <h3><b>COP.11: Documented policies and procedures guide obstetric care.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable11">
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
                        
                        <td>A.There is a documented policy and procedure for obstetric services. *</td>
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
                        
                        <td>B.The organisation defines and displays whether high-risk obstetric cases can be cared for or not.</td>
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
                        
                        <td>C.Persons caring for high-risk obstetric cases are competent.</td>
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
                        
                        <td>D.Documented procedures guide the provision of ante-natal services.</td>
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
                        
                        <td>E.Obstetric patient’s assessment also includes maternal nutrition.</td>
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
                        
                        <td>F.Appropriate pre-natal, peri-natal and post-natal monitoring is performed and documented.*</td>
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
                        
                        <td>G.The organisation caring for high-risk obstetric cases has the facilities to take care of neonates of such cases.</td>
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
        <h3><b>COP.12: Documented policies and procedures guide paediatric services.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable12">
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
                        
                        <td>A.There is a documented policy and procedure for paediatric services. *</td>
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
                        
                        <td>B.The organisation defines and displays the scope of its paediatric services.</td>
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
                        
                        <td>C.The policy for care of neonatal patients is in consonance with the national/ international guidelines. *</td>
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
                        
                        <td>D.Those who care for children have age-specific competency.</td>
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
                        
                        <td>E.Provisions are made for special care of children.</td>
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
                        
                        <td>F.Patient assessment includes detailed nutritional, growth, developmental and immunisation assessment.</td>
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
                        
                        <td>G.Documented policies and procedures prevent child/neonate abduction and abuse. *</td>
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
                        
                        <td>H.The children’s family members are educated about nutrition, immunisation and safe parenting and this is documented.*</td>
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
        <h3><b>COP.13: Documented policies and procedures guide the care of patients undergoing moderate sedation.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable13">
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
                        
                        <td>A.Documented procedures guide the administration of moderate sedation. *</td>
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
                        
                        <td>B.Informed consent for administration of moderate sedation is obtained.</td>
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
                        
                        <td>C.Competent and trained persons perform sedation.</td>
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
                        
                        <td>D.The person administering and monitoring sedation is different from the person performing the procedure.</td>
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
                        
                        <td>E.Intra-procedure monitoring includes at a minimum the heart rate, cardiac rhythm, respiratory rate, blood pressure, oxygen saturation, and level of sedation.</td>
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
                        
                        <td>F.Patients are monitored after sedation and the same documented.*</td>
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
                        
                        <td>G.Criteria are used to determine appropriateness of discharge from the observation/recovery area. *</td>
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
                        
                        <td>H.Equipment and manpower are available to manage patients who have gone into a deeper level of sedation than initially intended.</td>
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
        <h3><b>COP.14: Documented policies and procedures guide the administration of anaesthesia.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable14">
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
                        
                        <td>A.There is a documented policy and procedure for the administration of anaesthesia. *</td>
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
                        
                        <td>B.Patients for anaesthesia have a pre-anaesthesia assessment by a qualified anaesthesiologist.</td>
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
                        
                        <td>C.The pre-anaesthesia assessment results in formulation of an anaesthesia plan which is documented. </td>
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
                        
                        <td>D.An immediate preoperative re-evaluation is performed and documented. </td>
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
                        
                        <td>E.Informed consent for administration of anaesthesia is obtained by the anesthesiologist.</td>
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
                        
                        <td>F.During anaesthesia monitoring includes regular recording of temperature, heart rate, cardiac rhythm, respiratory rate, blood pressure, oxygen saturation and end tidal carbon dioxide. </td>
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
                        
                        <td>G.Patient’s post-anaesthesia status is monitored and documented.</td>
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
                        
                        <td>H.The anaesthesiologist applies defined criteria to transfer the patient from the recovery area. *</td>
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
                        
                        <td>I.The type of anaesthesia and anaesthetic medications used are documented in the patient record.* </td>
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
                        
                        <td>J.Procedures shall comply with infection control guidelines to prevent cross-infection between patients. </td>
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
                        
                        <td>K.Adverse anaesthesia events are recorded and monitore </td>
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
        <h3><b>COP.15: Documented policies and procedures guide the care of patients undergoing surgical procedures.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable15">
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
                        
                        <td>A.The policies and procedures are documented. *</td>
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
                        
                        <td>B.Surgical patients have a preoperative assessment and a provisional diagnosis documented prior to surgery.</td>
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
                        
                        <td>C.An informed consent is obtained by a surgeon prior to the procedure.</td>
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
                        
                        <td>D.Documented policies and procedures exist to prevent adverse events like wrong site, wrong patient and wrong surgery. *</td>
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
                        
                        <td>E.Persons qualified by law are permitted to perform the procedures that they are entitled to perform.</td>
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
                        
                        <td>F.A brief operative note is documented prior to transfer out of patient from recovery area. </td>
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
                        
                        <td>G.The operating surgeon documents the postoperative care pla</td>
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
                        
                        <td>H.Patient, personnel and material flow conform to infection control practices.</td>
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
                        
                        <td>I.Appropriate facilities and equipment/appliances/instrumentation are available in the operating theatre. </td>
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
                        
                        <td>J.A quality assurance programme is followed for the surgical services. *</td>
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
                        
                        <td>K.The quality assurance programme includes surveillance of the operation theatre environment. *</td>
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
        <h3><b>COP.16: Documented policies and procedures guide organ transplant programme in the organisation.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable16">
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
                        
                        <td>A. The organ transplant program shall be in consonance with the legal requirements and shall be conducted in an ethical manner. </td>
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
                        
                        <td>B. Documented policies and procedures guide the organ transplant progra</td>
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
                        
                        <td>C.The organisation ensures education and counselling of recipient and donor through trained / qualified counsellors before organ transplantation. </td>
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
                        
                        <td>D.The organisation shall take measures to create awareness regarding organ donation.</td>
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
        <h3><b>COP.17: Documented policies and procedures guide the care of patients under restraints (physical and/or chemical).</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable17">
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
                        
                        <td>A. Documented policies and procedures guide the care of patients under restraints. * </td>
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
                        
                        <td>B.The policies and procedures include both physical and chemical restraint meas</td>
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
                        
                        <td>C.The reasons for restraints are document</td>
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
                        
                        <td>D.Patients on restraints are more frequently monitored.</td>
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
                        
                        <td>E.Staff receives training and periodic updating in control and restraint techniques</td>
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
        <h3><b>COP.18: Documented policies and procedures guide appropriate pain management.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable18">
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
                        
                        <td>A.Documented policies and procedures guide the management of pain. *</td>
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
                        
                        <td>B.All patients are screened for pain.</td>
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
                        
                        <td>C.Patients with pain undergo detailed assessment and periodic reassessment.</td>
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
                        
                        <td>D.Pain alleviation measures or medications are initiated and titrated according to patient’s need and response.</td>
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
                        
                        <td>E.The organisation respects and supports management of pain for such patients.</td>
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
                        
                        <td>F.Patient and family are educated on various pain management techniques, where appropriate.</td>
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
        <h3><b>COP.19: Documented policies and procedures guide appropriate rehabilitative services.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable19">
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
                        
                        <td>A.Documented policies and procedures guide the provision of rehabilitative services. *</td>
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
                        
                        <td>B.These services are commensurate with the organisational requirements.</td>
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
                        
                        <td>C.Care is guided by functional assessment and periodic re-assessment which is done and documented by qualified individual(s).</td>
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
                        
                        <td>D.Care is provided adhering to infection control and safe practice</td>
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
                        
                        <td>E.Rehabilitative services are provided by a multidisciplinary team.</td>
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
                        
                        <td>F.There is adequate space and equipment to perform these activities.</td>
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
        <h3><b>COP.19: Documented policies and procedures guide appropriate rehabilitative services.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable19">
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
                        
                        <td>A.Documented policies and procedures guide the provision of rehabilitative services. *</td>
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
                        
                        <td>B.These services are commensurate with the organisational requirements.</td>
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
                        
                        <td>C.Care is guided by functional assessment and periodic re-assessment which is done and documented by qualified individual(s).</td>
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
                        
                        <td>D.Care is provided adhering to infection control and safe practice</td>
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
                        
                        <td>E.Rehabilitative services are provided by a multidisciplinary team.</td>
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
                        
                        <td>F.There is adequate space and equipment to perform these activities.</td>
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
        <h3><b>COP.20: Documented policies and procedures guide all research activities.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable20">
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
                        
                        <td>A.Documented policies and procedures guide all research activities in compliance with regulatory, national and international guidelines. *</td>
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
                        
                        <td>B.The organisation has an ethics committee to oversee all research activities.</td>
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
                        
                        <td>C.The committee has the powers to discontinue a research trial when risks outweigh the potential benefits.</td>
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
                        
                        <td>D.Patient’s informed consent is obtained before entering them in research protocols.</td>
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
                        
                        <td>E.Patients are informed of their right to withdraw from the research at any stage and also of the consequences (if any) of such withdrawal.</td>
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
                        
                        <td>F.Patients are assured that their refusal to participate or withdrawal from participation will not compromise their access to the organisation’s services.</td>
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
        <h3><b>COP.21: Documented policies and procedures guide nutritional therapy.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable21">
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
                        
                        <td>A.Documented policies and procedures guide nutritional therapy including assessment and reassessment. *</td>
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
                        
                        <td>B.Nutritional therapy is planned and provided in a collaborative manner.</td>
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
                        
                        <td>C.There is a written order for the diet.</td>
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
                        
                        <td>D.Patients receive food according to their clinical needs.</td>
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
                        
                        <td>E.Food is prepared, handled, stored and distributed in a safe manner.</td>
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
                        
                        <td>F.When families provide food, they are educated about the patient’s diet limitations.</td>
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
        <h3><b>COP.22: Documented policies and procedures guide the end of life care.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable22">
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
                        
                        <td>A.Documented policies and procedures guide nutritional therapy including assessment and reassessment. *</td>
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
                        
                        <td>B.These policies and procedures are in consonance with the legal requirements.</td>
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
                        
                        <td>C.These also address the identification of the unique needs of such patient and family.</td>
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
                        
                        <td>D.Symptomatic treatment is provided and where appropriate measures are taken for the alleviation of pain.</td>
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
                        
                        <td>E.Staff are educated and trained in end of life care.</td>
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

