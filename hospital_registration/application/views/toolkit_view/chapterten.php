<style type="text/css">
  .col-form-label {
    font-size: 15px;
  }
</style>

<div class="row">
    <!--  table area -->
    <?php  echo form_open_multipart('toolkit/chapterseven','class="form-inner"') ?>

                            <?php  echo form_hidden('reg_id',$registration->reg_id); ?>
    <div class="col-sm-12">
        <div  class="panel panel-default thumbnail">
 
             <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <!--<a class="btn btn-success" href="<?php //echo base_url("patient/create") ?>"> <i class="fa fa-plus"></i>  <?php //echo display('add_patient') ?> </a> -->
                    Chapter 10: Information Management System (IMS)
                </div>
            </div> 
            <div class="row form-group text-center" style="padding-top: 20px;">
          <label class="col-xs-12 col-form-label">
        <h3><b>IMS.1. Documented policies and procedures exist to meet the information needs of the care providers, management of the organisation as well as other agencies that require data and information from the organisation.</b></h3>
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
                        
                        <td>A.The information needs of the organisation are identified and are appropriate to the scope of the services being provided by the organisation.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>B.Documented policies and procedures to meet the information needs exist.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>C.All information management and technology acquisitions are in accordance with the documented policies and procedures.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>D.Documented policies and procedures guide the use of Telemedicine facility in a safe and secure manner.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>E.The organisation contributes to external databases in accordance with the law and regulations.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
        <h3><b>IMS.2. The organisation has processes in place for effective control and management of data.</b></h3>
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
                        
                        <td>A.The organisation has an effective process for document control.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>B.Formats for data collection are standardized.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>C.Necessary resources are available for analysing data.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>D.Documented procedures are laid down for timely and accurate dissemination of data.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>E.Documented procedures exist for storing and retrieving data.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>F.Appropriate clinical and managerial staff participates in selecting, integrating and using data.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
        <h3><b>IMS.3. The organisation has a complete and accurate medical record for every patient. </b></h3>
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
                        
                        <td>A.Every medical record has a unique identifier.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>B.Organisation policy identifies those authorized to make entries in medical record.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>C.Entry in the medical record is named, signed, dated and timed.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>D.The author of the entry can be identified.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>E.The contents of medical record are identified and documented.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>F.The organisation has a documented policy for usage of abbreviations and develops a list based on accepted practices.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>G.The record provides a complete, up-to-date and chronological account of patient care.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>H.Provision is made for 24-hour availability of the patient’s record to healthcare providers to ensure continuity of care.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
        <h3><b>IMS.4. The medical record reflects continuity of care.</b></h3>
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
                        
                        <td>A.The medical record contains information regarding reasons for admission, diagnosis and care plan.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>B.The medical record contains the results of tests carried out and the care provided. </td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>C.Operative and other procedures performed are incorporated in the medical record. </td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>D.When patient is transferred to another hospital, the medical record contains the date of transfer, the reason for the transfer and the name of the receiving hospital.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>E.The medical record contains a copy of the discharge summary duly signed by appropriate and qualified personnel.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>F.In case of death, the medical record contains a copy of the cause of death certificate.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>G.Whenever a clinical autopsy is carried out, the medical record contains a copy of the report of the same.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>H.Care providers have access to current and past medical record. </td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
        <h3><b>MS.5. Documented policies and procedures are in place for maintaining confidentiality, integrity and security of records, data and information.</b></h3>
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
                        
                        <td>A.Documented policies and procedures exist for maintaining confidentiality, security and integrity of records, data and information.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>B.Documented policies and procedures are in consonance with the applicable laws. </td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>C.The policies and procedure (s) incorporate safeguarding of data/ record against loss, destruction and tampering.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>D.The organisation has an effective process of monitoring compliance of the laid down policy and procedure. </td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>E.The organisation uses developments in appropriate technology for improving confidentiality, integrity and security.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>F.Privileged health information is used for the purposes identified or as required by law and not disclosed without the patient’s authorization.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>G.A documented procedure exists on how to respond to patients / physicians and other public agencies requests for access to information in the medical record in accordance with the local and national law.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
        <h3><b>IMS.6. Documented policies and procedures exist for retention time of records, data and information.</b></h3>
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
                        
                        <td>A.Documented policies and procedures are in place on retaining the patient’s clinical records, data and information.*</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>B.The policies and procedures are in consonance with the local and national laws and regulations.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>C.The retention process provides expected confidentiality and security.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>D.The destruction of medical records, data and information is in accordance with the laid-down policy. </td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
        <h3><b>IMS.7. The organisation regularly carries out review of medical records.</b></h3>
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
                        
                        <td>A.The medical records are reviewed periodically.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>B.The review uses a representative sample based on statistical principles.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>C.The review is conducted by identified individuals.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>D.The review focuses on the timeliness, legibility and completeness of the medical records. </td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>E.The review process includes records of both active and discharged patients.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>F.The review points out and documents any deficiencies in records.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>G.Appropriate corrective and preventive measures are undertaken within a defined period of time and are documented.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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

