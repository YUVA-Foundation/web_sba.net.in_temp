<style type="text/css">
	
</style>

<div class="row">
    <!--  table area -->
     <?php  echo form_open_multipart('toolkit/chapterfour','class="form-inner"') ?>

                            <?php  echo form_hidden('reg_id',$registration->reg_id); ?>
    <div class="col-sm-12">
        <div  class="panel panel-default thumbnail">
 
             <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <!--<a class="btn btn-success" href="<?php //echo base_url("patient/create") ?>"> <i class="fa fa-plus"></i>  <?php //echo display('add_patient') ?> </a> -->
                    Chapter 4: Patient Rights and Education (PRE) 
                </div>
            </div> 
            <div class="row form-group text-center" style="padding-top: 20px;">
			    <label class="col-xs-12 col-form-label">
				<h3><b>PRE.1. The organisation protects patient and family rights and informs them about their responsibilities during care.</b></h3>
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
                    		
                    		<td>A. Patient and family rights and responsibilities are documented and displayed.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
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
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>

                    	<tr>
                    		
                    		<td>B. Patients and families are informed of their rights and responsibilities in a format and language that they can understand.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>

                    	<tr>
                    		
                    		<td>C. The organisation’s leaders protect patient and family rights.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>

                    	<tr>
                    		
                    		<td>D.Staff are aware of their responsibility in protecting patient and family rights.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>

                        <tr>
                            
                            <td>E. Violation of patient and family rights is recorded, reviewed and corrective/preventive measures taken.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                    	
                        
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>

            <div class="row form-group text-center" style="padding-top: 20px;">
			    <label class="col-xs-12 col-form-label">
				<h3><b>PRE.2: Patient and family rights support individual beliefs, values and involve the patient and family in decision making processes.</b></h3>
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
                    		
                    		<td>A. Patients and family rights include respecting any special preferences, spiritual and cultural needs. </td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
                    		</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
			                   </div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>

                    	<tr>
                    		
                    		<td>B. Patient and family rights include respect for personal dignity and privacy during examination, procedures and treatment.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>

                    	<tr>
                    		
                    		<td>C. Patient and family rights include protection from neglect or abuse.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>
                    	<tr>
                    		
                    		<td>D. Patient and family rights include treating patient information as confidential.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>
                    	<tr>
                    		
                    		<td>E. Patient and family rights include refusal of treatment.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>
                        <tr>
                            
                            <td>F. Patient and family have a right to seek an additional opinion regarding clinical care.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        <tr>
                            
                            <td>G. Patient and family rights include informed consent before transfusion of blood  and blood components, anaesthesia, surgery, initiation of any research protocol and any other invasive / high risk procedures / treatment.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        <tr>
                            
                            <td>H. Patient and family rights include right to complain and information on how to voice a complaint.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        <tr>
                            
                            <td>I. Patient and family rights include information on the expected cost of the treatment.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>

                        <tr>
                            
                            <td>J. Patient and family rights include access to his / her clinical records.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        <tr>
                            
                            <td>K. Patient and family rights include information on Care plan, progress and  information on their health care needs. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                    	
                    	
                        
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>


             <div class="row form-group text-center" style="padding-top: 20px;">
			    <label class="col-xs-12 col-form-label">
				<h3><b>PRE.3: The patient and/or family members are educated to make informed decisions and are involved in the care planning and delivery process.</b></h3>
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
                    		
                    		<td>A. The patient and/or family members are explained about the proposed care including the risks, alternatives and benefits. </td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
                    		</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
			                   </div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>

                    	<tr>
                    		
                    		<td>B. The patient and/or family members are explained about the expected results.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>

                    	<tr>
                    		
                    		<td>C. The patient and/or family members are explained about the possible complications.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>
                    	<tr>
                    		
                    		<td>D. The care plan is prepared and modified in consultation with patient and/or family members.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>
                    	<tr>
                    		
                    		<td>E. The care plan respects and where possible incorporates patient and/or family concerns and requests.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>

                        <tr>
                            
                            <td>F.The patient and/or family members are informed about the results of diagnostic tests and the diagnosis.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        <tr>
                            
                            <td>G. The patient and/or family members are explained about any change in the patient’s condition in a timely manner. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                    	
					</tbody>
                </table>  <!-- /.table-responsive -->
            </div>



            

            <div class="row form-group text-center" style="padding-top: 20px;">
			    <label class="col-xs-12 col-form-label">
				<h3><b>PRE.4: A documented procedure for obtaining patient and/or family’s consent exists for informed decision making about their care.</b></h3>
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
                    		
                    		<td>A. Documented procedure incorporates the list of situations where informed consent is required and the process for taking informed consent. </td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							                              <option value="0">Yes</option>
							                              <option value="1">No</option>
							                            </select>
                    		</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
			                   </div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>

                    	<tr>
                    		
                    		<td>B. General consent for treatment is obtained when the patient enters the organisation.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>

                    	<tr>
                    		
                    		<td>C. Patient and/or his family members are informed of the scope of such general consent.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>
                    	<tr>
                    		
                    		<td>D. Informed consent includes information regarding the procedure, it’s risks, benefits, alternatives and as to who will perform the procedure in a language that they can understand. </td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>
                    	<tr>
                    		
                    		<td>E. The procedure describes who can give consent when patient is incapable of independent decision making.</td>
                    		<td>  
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                    				<option value="0">Yes</option>
							        <option value="1">No</option>
							    </select>
							</td>
                    		<td>
                    			<div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									   <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		<td>
                    			<select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
							      <option value="0">Yes</option>
							      <option value="1">No</option>
							    </select>
                    		</td>
                    		<td>
                    			 <div>
									  <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
									  <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
								</div>
                    		</td>
                    		 <td>
                    		 	  <textarea class="form-control"  name="remark"></textarea>
                    		 </td>
                    		<td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                    	</tr>
                    	
                        <tr>
                            
                            <td>F. Informed consent is taken by the person performing the procedure. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        <tr>
                            
                            <td>G. Informed consent process adheres to statutory norms.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        <tr>
                            
                            <td>H. Staff are aware of the informed consent procedure.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        
                    	
					</tbody>
                </table>  <!-- /.table-responsive -->
            </div>

            <div class="row form-group text-center" style="padding-top: 20px;">
                <label class="col-xs-12 col-form-label">
                <h3><b>PRE.5: Patient and families have a right to information and education about their healthcare needs.</b></h3>
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
                            
                            <td>A. Patient and/or family are educated about the safe and effective use of medication and the potential side effects of the medication, when appropriate.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                                          <option value="0">Yes</option>
                                                          <option value="1">No</option>
                                                        </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                               </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>

                        <tr>
                            
                            <td>B. Patient and/or family are educated about food-drug interaction.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>

                        <tr>
                            
                            <td>C. Patient and/or family are educated about diet and nutrition.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        <tr>
                            
                            <td>D. Patient and/or family are educated about immunisations. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        <tr>
                            
                            <td>E. Patient and/or family are educated about their specific disease process, complications and prevention strategies. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        
                        <tr>
                            
                            <td>F. Patient and/or family are educated about preventing healthcare associated infections.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>

                        <tr>
                            
                            <td>G. The patients and/or family members’ special educational needs are identified and addressed</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                         <tr>
                              
                              <td>H. Patient and/or family are educated in a language and format that they can understand.</td>
                              <td>  
                                   <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                        <option value="0">Yes</option>
                                           <option value="1">No</option>
                                       </select>
                                   </td>
                              <td>
                                   <div>
                                               <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                                <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                        </div>
                              </td>
                              <td>
                                   <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                         <option value="0">Yes</option>
                                         <option value="1">No</option>
                                       </select>
                              </td>
                              <td>
                                    <div>
                                               <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                               <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                        </div>
                              </td>
                               <td>
                                     <textarea class="form-control"  name="remark"></textarea>
                               </td>
                              <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                         </tr>
                        
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>

            <div class="row form-group text-center" style="padding-top: 20px;">
                <label class="col-xs-12 col-form-label">
                <h3><b>PRE.6: Patients and families have a right to information on expected costs.</b></h3>
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
                            
                            <td>A. There is a uniform pricing policy in a given setting (out-patient and ward category).</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                                          <option value="0">Yes</option>
                                                          <option value="1">No</option>
                                                        </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                               </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>

                        <tr>
                            
                            <td>B. The relevant tariff list is available to patients.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>

                        <tr>
                            
                            <td>C. The patient and/or family members are explained about the expected costs.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        <tr>
                            
                            <td>D. Patient and/or family are informed about the financial implications when there is a change in the patient condition or treatment setting.  </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        
                        
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
            <div class="row form-group text-center" style="padding-top: 20px;">
                <label class="col-xs-12 col-form-label">
                <h3><b>PRE.7: The organisation has a mechanism to capture patient’s feedback and redressal of complaints.</b></h3>
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
                            
                            <td>A. The organisation has a mechanism to capture feedbacks from patients which includes patient satisfaction and patient’s experience.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                                          <option value="0">Yes</option>
                                                          <option value="1">No</option>
                                                        </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                               </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>

                        <tr>
                            
                            <td>B. The organisation has a documented complaint redressal procedure.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>

                        <tr>
                            
                            <td>C. Patient and/or family members are made aware of the procedure for giving feedback and /or lodging complaints.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        <tr>
                            
                            <td>D. All feedback and complaints are reviewed and/or analysed within a defined time frame.  </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        <tr>
                            
                            <td>E. Corrective and/or preventive action(s) are taken based on the analysis where appropriate. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                      </tbody>
                </table>  <!-- /.table-responsive -->
            </div>

            <div class="row form-group text-center" style="padding-top: 20px;">
                <label class="col-xs-12 col-form-label">
                <h3><b>PRE.8: The organisation has a system for effective communication with patients and /or families.</b></h3>
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
                            
                            <td>A. Documented policies and procedures guide the effective communication  with the patients and/or families. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                                          <option value="0">Yes</option>
                                                          <option value="1">No</option>
                                                        </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                               </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>

                        <tr>
                            
                            <td>B. The organisation shall identify special situations where enhanced communication would be required.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>

                        <tr>
                            
                            <td>C. The organisation lays down an approach for effective communication in these identified situations.</td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        <tr>
                            
                            <td>D. The organisation also defines what constitutes an unacceptable communication and sensitizes the staff about the same.  </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>
                        <tr>
                            
                            <td>E. The organisation has a system to monitor and review the implementation   of effective communication. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
                        </tr>

                           <tr>
                            
                            <td>F. The staff are trained in healthcare communication techniques periodically. </td>
                            <td>  
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                    <option value="0">Yes</option>
                                    <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                       <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                            <td>
                                <select class="form-control ng-dirty ng-valid ng-touched" id="phy_anaesthesia" onchange="showDiv(this.value,'phy_anaesthesia_div')" name="phyInfr_anaesthesia" required="">
                                  <option value="0">Yes</option>
                                  <option value="1">No</option>
                                </select>
                            </td>
                            <td>
                                 <div>
                                      <button title="Upload any file" type="button" class="btn btn-sm btn-warning form-group rounded mr-2"><i class="fa fa-upload"></i></button>
                                      <button class="btn btn-primary btn-sm btn-sm form-group  mr-2" title="View Uploaded file" type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            </td>
                             <td>
                                  <textarea class="form-control"  name="remark"></textarea>
                             </td>
                            <td><input class="form-control ng-untouched ng-pristine ng-valid" id="scores" name="scores" pattern="[0-9]+:[0-9]+" placeholder="Scores (0/ 5/ 10)" required="" type="text"></td>
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

