<style type="text/css">
  .col-form-label {
    font-size: 15px;
  }
</style>

<div class="row">
    <!--  table area -->
    <?php  echo form_open_multipart('toolkit/chapterone','class="form-inner"') ?>

                            <?php  echo form_hidden('reg_id',$registration->reg_id); ?>
    <div class="col-sm-12">
        <div  class="panel panel-default thumbnail">
 
             <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <!--<a class="btn btn-success" href="<?php //echo base_url("patient/create") ?>"> <i class="fa fa-plus"></i>  <?php //echo display('add_patient') ?> </a> -->
                    Chapter 1: ACCESS, ASSESSMENT AND CONTINUITY OF CARE (AAC) 
                </div>
            </div> 
            <div class="row form-group text-center" style="padding-top: 20px;">
          <label class="col-xs-12 col-form-label">
        <h3><b>AAC.1:  The organisation defines and displays the healthcare services that it provides.</b></h3>
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
                        
                        <td>A. The healthcare services being provided are clearly defined and are in consonance with the needs of the community.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>B. Each defined service should have appropriate diagnostics and treatment facilities with suitably qualified personnel who provide out-patient, in-patient and emergency cover.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>C. The defined healthcare services are prominently displayed.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>D.The staff are oriented to these services.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
        <h3><b>AAC.2: The organisation has a well-defined registration and admission process.</b></h3>
         </label>
      </div> 
            <div class="panel-body">
                <table width="100%" class=" table table-striped table-bordered table-hover" id="myTable1">
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
                        
                        <td>A. Documented policies and procedures are used for registering and admitting patients. </td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>B. Each defined service should have appropriate diagnostics and treatment facilities with suitably qualified personnel who provide out-patient, in-patient and emergency cover.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>C. A unique identification number is generated at the end of registration.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>D.Patients are accepted only if the organisation can provide the required service.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>E. The documented policies and procedures also address managing patients during non-availability of beds.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>F.Access to the healthcare services in the organisation is prioritised according to the clinical needs of the patient.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>G.The staff are aware of these processes.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
        <h3><b>AAC.3: There is an appropriate mechanism for transfer (in and out) or referral of patients.</b></h3>
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
                        
                        <td>A. Documented policies and procedures guide the transfer-in of patients to the organisation. </td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>B. Documented policies and procedures guide the transfer-out/referral of unstable patients to another facility in an appropriate manner.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>C. Documented policies and procedures guide the transfer- out/referral of stable patients to another facility in an appropriate manner.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>D. The documented procedures identify staff responsible during transfer/referral.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>E. The organisation gives a summary of patient’s condition and the treatment given.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
        <h3><b>AAC.4: Patients cared for by the organisation undergo an established initial assessment.</b></h3>
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
                        
                        <td>A. The organisation defines and documents the content of the initial assessment for the out–patients, in-patients and emergency patients. </td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>B. The organisation determines who can perform the initial assessment.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>C. The organisation defines the time frame within which the initial assessment is completed based on patient’s needs.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>D. The initial assessment for in-patients is documented within 24 hours or earlier as per the patient’s condition, as defined in the organisation’s policy. </td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                        
                        <td>E. Initial assessment of in-patients includes nursing assessment which is done at the time of admission and documented.</td>
                        <td>  
                          <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                            <option value="0">Yes</option>
                      <option value="1">No</option>
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
                            
                            <td>F. Initial assessment includes screening for nutritional needs. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>G. The initial assessment results in a documented care plan.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>H. The care plan reflects desired results of the treatment, care or service.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>I. The care plan is countersigned by the clinician in-charge of the patient within 24 hours.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                <h3><b>AAC.5: Patients cared for by the organisation undergo a regular reassessment.</b></h3>
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
                            
                            <td>A. Patients are reassessed at appropriate intervals.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>B. Out-patients are informed of their next follow-up, where appropriate.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>C. For in-patients during reassessment the care plan is monitored and modified, where found necessary.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>D. Staff involved in direct clinical care document reassessments.Staff involved in direct clinical care document reassessments. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>E. Patients are reassessed to determine their response to treatment and to plan further treatment or discharge. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>F. The organisation lays down guidelines and implements processes to identify early warning signs of change or deterioration in clinical conditions for initiating prompt intervention.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                <h3><b>AAC.6:Laboratory services are provided as per the scope of services of the organisation.</b></h3>
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
                            
                            <td>A. Scope of the laboratory services commensurate to the services provided by the organisation.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>B. The infrastructure (physical and equipment) is adequate to provide the defined scope of services.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>C. The manpower is adequate to provide the defined scope of services.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>D. Qualified and trained personnel perform, supervise and interpret the investigations.  </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>E. Documented procedures guide ordering of tests, collection, identification, handling, safe transportation, processing and disposal of specimens. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>F. Laboratory results are available within a defined time frame.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>G. Critical results are intimated immediately to the personnel concerned. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>H. Results are reported in a standardised manner.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>J. Laboratory tests not available in the organisation are outsourced to organisation(s) based on their quality assurance system.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>I. There is a mechanism to address recall / amendment of reports whenever applicable.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                <h3><b>AAC.7:There is an established laboratory quality assurance programme.</b></h3>
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
                            
                            <td>A. The laboratory quality assurance programme is documented.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>B. The programme addresses verification and / or validation of test methods.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>C. The programme addresses surveillance of test results.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>D. The programme includes periodic calibration and maintenance of all equipment.  </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>E. The programme includes the documentation of corrective and preventive actions. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                <h3><b>AAC.8:There is an established laboratory safety programme.</b></h3>
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
                            
                            <td>A. The laboratory safety programme is documented. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>B. This programme is aligned with the organisation’s safety programme.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>C. Written procedures guide the handling and disposal of infectious and hazardous materials.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>D. Laboratory personnel are appropriately trained in safe practices.  </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>E. Laboratory personnel are provided with appropriate safety equipment / devices. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                <h3><b>AAC.9:Imaging services are provided as per the scope of services of the organisation.</b></h3>
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
                            
                            <td>A. Imaging services comply with legal and other requirements.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>B. Scope of the imaging services is commensurate to the services provided by the organisation.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>C. The infrastructure (physical and equipment) and manpower is adequate to provide for its defined scope of services. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>D. Adequately qualified and trained personnel perform, supervise and interpret the investigations.   </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>E. Documented policies and procedures exist to ensure correct identification and safe and timely transportation of patients to and from the imaging services. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>F. Imaging results are available within a defined timeframe.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>G. Critical results are intimated immediately to the personnel concerned. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>H. Results are reported in a standardised manner.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>I.There is a mechanism to address recall / amendment of reports whenever applicable.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>J. Imaging tests not available in the organisation are outsourced to organisation(s) based on their quality assurance system.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                <h3><b>AAC.10 : There is an established quality assurance programme for imaging services.</b></h3>
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
                            
                            <td>A. The quality assurance programme for imaging services is documented. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>B. The programme addresses periodic internal / external peer review of imaging protocols and results using appropriate sampling.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>C. The programme addresses surveillance of imaging results in collaboration with referring clinicians for follow up wherever applicable. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>D. A system is in place to ensure the appropriateness of the investigations and procedures for the clinical indication.   </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>E. The programme includes periodic calibration and maintenance of all equipment. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>F. The programme includes the documentation of corrective and preventive actions.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                <h3><b>AAC.11 : There is an established safety programme in the Imaging services.</b></h3>
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
                            
                            <td>A. The radiation-safety programme is documented. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>B. This programme is aligned with the organisation’s safety programme.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>C. Patients are appropriately screened for safety / risk prior to undergoing an imaging on a particular modality. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>D. Handling, usage and disposal of radio-active and hazardous materials are as per statutory requirements.    </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>E. Imaging personnel and patients are provided with appropriate radiation safety and monitoring devices where applicable.  </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>F. Radiation-safety and monitoring devices and are periodically tested and results are documented.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>G. Imaging and ancillary personnel are trained in imaging safety practices and radiation-safety measures. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>H. Imaging signage are prominently displayed in all appropriate locations.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                <h3><b>AAC.12 : Patient care is continuous and multidisciplinary in nature.</b></h3>
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
                            
                            <td>A. During all phases of care, there is a qualified individual identified as responsible for the patient’s care. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>B. Care of patients is coordinated in all care settings within the organisation.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>C. Information about the patient’s care and response to treatment is shared among medical, nursing and other care-providers. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>D. Information is exchanged and documented during each staffing shift, between shifts, and during transfers between units/departments.    </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>E. Transfers between departments/units are done in a safe manner.  </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>F. The patient’s record(s) is available to the authorised care-providers to facilitate the exchange of information.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>G. Documented procedures guide the referral of patients to other departments/ specialities. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>H. The organisation ensures continuity of care while adhering to defined timelines and informs the caregiver and/or the patient/family whenever there is a change in schedule. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>I.The organisation has a mechanism in place to monitor whether adequate clinical intervention has taken place in response to a critical value alert. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                <h3><b>AAC.13 : The organisation has a documented discharge process.</b></h3>
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
                            
                            <td>A. The patient’s discharge process is planned in consultation with the patient and/or family. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>B. Documented procedures exist for coordination of various departments and agencies involved in the discharge process (including medico-legal and absconded cases).</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>C. Documented policies and procedures are in place for patients leaving against medical advice and patients being discharged on request. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>D. A discharge summary is given to all the patients leaving the organisation (including patients leaving against medical advice and on request).    </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>E. The organisation defines the time taken for discharge and monitors the same.  </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                <h3><b>AAC.14 : Organisation defines the content of the discharge summary.</b></h3>
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
                            
                            <td>A. Discharge summary is provided to the patients at the time of discharge. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>B. Discharge summary contains the patient’s name, unique identification number, date of admission and date of discharge.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>C. Discharge summary contains the reasons for admission, significant findings and diagnosis and the patient’s condition at the time of discharge. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>D. Discharge summary contains information regarding investigation results, any procedure performed, medication administered and other treatment given.    </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>E. Discharge summary contains follow-up advice, medication and other instructions in an understandable manner.  </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>F. Discharge summary incorporates instructions about when and how to obtain urgent care. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
                            
                            <td>G. In case of death, the summary of the case also includes the cause of death. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" X1111>
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
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
} );
</script>

