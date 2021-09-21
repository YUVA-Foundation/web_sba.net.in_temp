<style type="text/css">
	
</style>

<div class="row">
    <!--  table area -->

     <?php  echo form_open_multipart('toolkit/chapterthree','class="form-inner"') ?>

                            <?php  echo form_hidden('reg_id',$registration->reg_id); ?>
    <div class="col-sm-12">
        <div  class="panel panel-default thumbnail">
 
             <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <!--<a class="btn btn-success" href="<?php //echo base_url("patient/create") ?>"> <i class="fa fa-plus"></i>  <?php //echo display('add_patient') ?> </a> -->
                    Chapter 3: Management of Medication (MOM) 
                </div>
            </div> 
            <div class="row form-group text-center" style="padding-top: 20px;">
			    <label class="col-xs-12 col-form-label">
				<h3><b>MOM.1: Documented policies and procedures guide the organisation of pharmacy services and usage of medication.</b></h3>
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
                    		
                    		<td>A. There is a documented policy and procedure for pharmacy services and medication usage.</td>
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
                    		
                    		<td>B. Policies and procedures comply with the applicable laws and regulations.</td>
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
                    		
                    		<td>C. A multidisciplinary committee guides the formulation and implementation of these policies and procedures.</td>
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
                    		
                    		<td>D.There is a procedure to obtain medication when the pharmacy is closed.</td>
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
				<h3><b>MOM.2. There is a hospital formulary.</b></h3>
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
                    		
                    		<td>A. A list of medications appropriate for the patients and as per the scope of the organisation’s clinical services is developed collaboratively by the multidisciplinary committee. </td>
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
                    		
                    		<td>B. The list is reviewed and updated collaboratively by the multidisciplinary committee at least annually.</td>
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
                    		
                    		<td>C. The formulary is available for clinicians to refer and adhere to.</td>
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
                    		
                    		<td>D. There is a defined process for acquisition of these medications.</td>
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
                    		
                    		<td>E. There is a process to obtain medications not listed in the formulary.</td>
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
				<h3><b>MOM.3: Documented policies and procedures guide the storage of medication.</b></h3>
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
                    		
                    		<td>A. Documented policies and procedures exist for storage of medication. </td>
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
                    		
                    		<td>B. Medications are stored in a clean, safe and secure environment; and incorporating manufacturer’s recommendation(s).</td>
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
                    		
                    		<td>C. Sound inventory control practices guide storage of the medications in all areas throughout the organisation.</td>
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
                    		
                    		<td>D. Look-alike and Sound-alike medications are identified and stored physically apart from each other.</td>
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
                    		
                    		<td>E. The list of emergency medications is defined and is stored in a uniform manner.</td>
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
                            
                            <td>F.Emergency medications are available all the time.</td>
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
                            
                            <td>G. Emergency medications are replenished in a timely manner when used. </td>
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
				<h3><b>MOM.4: Documented policies and procedures guide the safe and rational prescription of medications.</b></h3>
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
                    		
                    		<td>A. Documented policies and procedures exist for prescription of medications. </td>
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
                    		
                    		<td>B. These incorporate inclusion of good practices/guidelines for rational prescription of medications.</td>
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
                    		
                    		<td>C. The organisation determines the minimum requirements of a prescription.</td>
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
                    		
                    		<td>D. Known drug allergies are ascertained before prescribing. </td>
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
                    		
                    		<td>E. The organisation determines who can write orders.</td>
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
                            
                            <td>F. Orders are written in a uniform location in the medical records which also reflects patient’s name and unique identification number. </td>
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
                            
                            <td>G. Medication orders are clear, legible, dated, timed, named and signed.</td>
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
                            
                            <td>H. Medication orders contain the name of the medicine, route of administration, dose to be administered and frequency/time of administration.</td>
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
                            
                            <td>I. Documented policy and procedure on verbal orders is implemented.</td>
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
                            
                            <td>J. The organisation defines a list of high-risk medication(s).</td>
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
                            
                            <td>K. Audit of medication orders/prescription is carried out to check for safe and rational prescription of medications. </td>
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
                              
                              <td>L. Reconciliation of medications occur at transition points of patient care. </td>
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
                              
                              <td>M. Corrective and/or preventive action(s) is taken based on the analysis, where appropriate.</td>
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
                <h3><b>MOM.5: Documented policies and procedures guide the safe dispensing of medications.</b></h3>
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
                            
                            <td>A. Documented policies and procedures guide the safe dispensing of medications.</td>
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
                            
                            <td>B. The procedure addresses medication recall.</td>
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
                            
                            <td>C. Expiry dates are checked prior to dispensing.</td>
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
                            
                            <td>D. There is a procedure for near expiry medications. </td>
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
                            
                            <td>E. Labelling requirements are documented and implemented by the organisation. </td>
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
                            
                            <td>F. High-risk medication orders are verified prior to dispensing.</td>
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
                <h3><b>MOM.6:There are documented policies and procedures for medication administration.</b></h3>
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
                            
                            <td>A. Medications are administered by those who are permitted by law to do so.</td>
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
                            
                            <td>B. Prepared medication is labelled prior to preparation of a second drug.</td>
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
                            
                            <td>C. Patient is identified prior to administration.</td>
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
                            
                            <td>D. Medication is verified from the order and physically inspected prior to administration.  </td>
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
                            
                            <td>E. Dosage is verified from the order prior to administration. </td>
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
                            
                            <td>F. Route is verified from the order prior to administration.</td>
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
                            
                            <td>G. Timing is verified from the order prior to administration. </td>
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
                            
                            <td>H. Medication administration is documented.</td>
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
                            
                            <td>I. Documented policies and procedures govern patient’s self-administration of medications.</td>
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
                            
                            <td>J. Documented policies and procedures govern patient’s own medications brought from outside the organisation.</td>
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
                <h3><b>MOM.7: Patients are monitored after medication administration.</b></h3>
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
                            
                            <td>A. Documented policies and procedures guide the monitoring of patients after medication administration.</td>
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
                            
                            <td>B. The organisation defines those situations where close monitoring is required.</td>
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
                            
                            <td>C. The programme addresses surveillance of test results.</td>
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
                            
                            <td>D. Monitoring is done in a collaborative manner.  </td>
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
                            
                            <td>E. Medications are changed where appropriate based on the monitoring. </td>
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
                <h3><b>MOM.8: Near misses, medication errors and adverse drug events are reported and analysed.</b></h3>
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
                            
                            <td>A. Documented procedure exists to capture near miss, medication error and adverse drug event. </td>
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
                            
                            <td>B. Near miss, medication error and adverse drug event are defined.</td>
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
                            
                            <td>C. These are reported within a specified time frame.</td>
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
                            
                            <td>D. They are collected and analysed.  </td>
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
                <h3><b>MOM.9: Documented procedures guide the use of narcotic drugs and psychotropic substances.</b></h3>
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
                            
                            <td>A. Documented procedures guide the use of narcotic drugs and psychotropic substances which are in consonance with local and national regulations.</td>
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
                            
                            <td>B. These drugs are stored in a secure manner.</td>
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
                            
                            <td>C. A proper record is kept of the usage, administration and disposal of these drugs. </td>
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
                            
                            <td>D. These drugs are handled by appropriate personnel in accordance with the documented procedure.   </td>
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
                <h3><b>MOM.10: Documented policies and procedures guide the usage of chemotherapeutic agents.</b></h3>
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
                            
                            <td>A. Documented policies and procedures guide the usage of chemotherapeutic agents. </td>
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
                            
                            <td>B. Chemotherapy is prescribed by those who have the knowledge to monitor and treat the adverse effect of chemotherapy.</td>
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
                            
                            <td>C. Chemotherapy is prepared in a proper and safe manner and administered by qualified personnel. </td>
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
                            
                            <td>D. Chemotherapy drugs are disposed in accordance with legal requirements.   </td>
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
                            
                            <td>E. Patient and family are educated regarding benefits/risks of chemotherapy, precautions to be taken and possible adverse reactions.  </td>
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
                <h3><b>MOM.11: Documented policies and procedures govern usage of radioactive drugs.</b></h3>
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
                            
                            <td>A. Documented policies and procedures govern usage of radioactive drugs. </td>
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
                            
                            <td>B. These policies and procedures are in consonance with laws and regulations.</td>
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
                            
                            <td>C. The policies and procedures include the safe storage, preparation, handling, distribution and disposal of radioactive drugs. </td>
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
                            
                            <td>D. Staff, patients and visitors are educated on safety precautions. </td>
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
                <h3><b>MOM.12: Documented policies and procedures guide the use of implantable prosthesis and medical devices.</b></h3>
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
                            
                            <td>A. Usage of implantable prosthesis and medical devices is guided by scientific criteria for each individual item and national/international recognised guidelines/ approvals for such specific item(s).</td>
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
                            
                            <td>B. Documented policies and procedures govern procurement, storage/stocking, issuance and usage of implantable prosthesis and medical devices incorporating manufacturer’s recommendation(s).</td>
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
                            
                            <td>C. Patient and his/her family are counselled for the usage of implantable prosthesis and medical device including precautions, if any. </td>
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
                            
                            <td>D. The batch and serial number of the implantable prosthesis and medical devices are recorded in the patient’s medical record, the master logbook and the discharge summary.    </td>
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
                <h3><b>MOM.13: Documented policies and procedures guide the use of medical supplies and consumables.</b></h3>
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
                            
                            <td>A. There is a defined process for acquisition of medical supplies and consumables. </td>
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
                            
                            <td>B. Medical supplies and consumables are used in a safe manner, where appropriate.</td>
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
                            
                            <td>C. Medical supplies and consumables are stored in a clean, safe and secure environment; and incorporating manufacturer’s recommendation(s). </td>
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
                            
                            <td>D. Sound inventory control practices guide storage of medical supplies and consumables.    </td>
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
                            
                            <td>E. There is a mechanism in place to verify the condition of medical supplies and consumables.  </td>
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

