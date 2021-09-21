<style type="text/css">
  .col-form-label {
    font-size: 15px;
  }
</style>

<div class="row">
    <!--  table area -->
    <?php  echo form_open_multipart('toolkit/chapternine','class="form-inner"') ?>

                            <?php  echo form_hidden('reg_id',$registration->reg_id); ?>
    <div class="col-sm-12">
        <div  class="panel panel-default thumbnail">
 
             <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <!--<a class="btn btn-success" href="<?php //echo base_url("patient/create") ?>"> <i class="fa fa-plus"></i>  <?php //echo display('add_patient') ?> </a> -->
                Chapter 9: Human Resource Management (HRM)
                </div>
            </div> 
            <div class="row form-group text-center" style="padding-top: 20px;">
          <label class="col-xs-12 col-form-label">
        <h3><b>HRM.1: Uniform care to patients is provided in all settings of the organisation and is guided by the applicable laws, regulations and guidelines.</b></h3>
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

