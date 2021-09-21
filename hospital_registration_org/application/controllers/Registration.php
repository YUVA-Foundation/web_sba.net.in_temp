<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'human_resources/employee_model'
		));

		$this->load->model(array(
			'generalinfo_model'
		));

		$this->load->model(array(
			'common_model'
		));
		
		if ($this->session->userdata('isLogIn') == false 
			|| $this->session->userdata('user_role') != 1
		) 
		redirect('login');  
	}


	

	public function general_info1($user_role = 'Representative')
	{ 
		  
		$data['title'] ="Registration";
		$data['main_title'] ="General Information";
		$role_id     = $this->user_roles($user_role);
		#-------------------------------#
		$data['employees'] = $this->employee_model->read($role_id);
        $data['userRoles'] = $this->user_roles();

		$data['content'] = $this->load->view('registration/general_info', $data, true);

		$this->load->view('layout/main_wrapper',$data);
	} 

	public function general_info()
	{
		$data['title'] = display('add_department');

		$data['title'] ="Registration";
		$data['main_title'] ="General Information";
		#-------------------------------#
		   $reg_id = 1;
            
		$this->form_validation->set_rules('blding_name', 'Bulding Name' ,'required');
		//$this->form_validation->set_rules('hosinfo[] ', 'Registration Number ' ,'required');
		// $this->form_validation->set_rules('description', display('description'),'trim');
		// $this->form_validation->set_rules('status', display('status') ,'required');
		#-------------------------------#
		if(isset($_POST['save_general_info'])) { 

			

		
		if ($this->form_validation->run()===true) {

			

			$data = array(); 
			$imagearray= array();
	
			foreach ($_FILES as $key =>$file) {
				
             
				if($_FILES[$key]["size"] > 0){
                        $config['upload_path']          = 'assets/images/'.$key.'/';
                        $config['allowed_types']        = 'pdf|doc|png|jpeg|jpg|png';
                        // $config['file_name'] = $_FILES["reg_certif_image"]["name"]."_".$reg_id;
                        $newname= strstr($_FILES[$key]["name"], '.', true);
                         $config['file_name'] = $newname."_".$reg_id;
                        $this->load->library('upload', $config);
                        
                          $this->upload->initialize($config);
                        if ( ! $this->upload->do_upload($key))
                        {
                        	$this->session->set_flashdata('exception',$this->upload->display_errors() );
                                
                        }
                        else
                        {
                            $img_data = $this->upload->data();
                            $imagearray[$key]=$img_data['file_name'];
                        }
                        
                   }
				
			}
        

        
        $data['tbl_contct_info'] = array (
            'reg_id' => $this->input->post('reg_id'),
            'reg_certif_image' => isset($imagearray['reg_certif_image'])? $imagearray['reg_certif_image'] : "",
            'patent_overnite' => $this->input->post('patent_overnite'),
            'blding_name' => $this->input->post('blding_name'),
           'town' => $this->input->post('town'),
           'address' => $this->input->post('address'),
           'landmark' => $this->input->post('landmark'),
           'telephone' => $this->input->post('telephone'),
           'fax' => $this->input->post('fax'),
           'altenate_mob' => $this->input->post('altenate_mob'),
           'website' => $this->input->post('website'),
           'spil_loc' => isset($_POST['spil_loc'])?$_POST['spil_loc']:0 ,
           'spil_loc_count' => $this->input->post('spil_loc_count')
       );
        $result = $this->common_model->data_insert('tbl_contct_info',$data['tbl_contct_info']);
             if ($result) {
         
            $data['tbl_hosp_info'] = array (
	            'reg_id' => $this->input->post('reg_id'),
	    'date_estbl' => $this->input->post('date_estbl'),
	     'hosp_reg_body' => $this->input->post('hosp_reg_body'),
	    // 'hosp_reg_body_image' => $this->input->post('hosp_reg_body_image'),
	     'reg_number' => $this->input->post('reg_number'),
	     'date_reg_year' => $this->input->post('date_reg_year'),
	    'date_reg_month' => $this->input->post('date_reg_month'),
	    'exp_reg_year' => $this->input->post('exp_reg_year'),
	    'exp_reg_month' => $this->input->post('exp_reg_month'),
	     'clincal_year' => $this->input->post('clincal_year'),
	   'clincal_month' => $this->input->post('clincal_month'),
	   'type_ownership' => $this->input->post('type_ownership'),
	   'is_other' => ($_POST['type_ownership']=='Others')?1:0,
	   'other_name' => $this->input->post('other_name'),
	   'type_ownership_doc' => isset($imagearray['type_ownership_doc'])? $imagearray['type_ownership_doc'] : "",
	   'is_schema_present' => isset($_POST['is_schema_present'])?0:1,
	   'cghs' => isset($_POST['cghs'])?1:0,
	   
	   'railway' => isset($_POST['cghs'])?1:0,
		
		'ayush_bhart' => isset($_POST['cghs'])?1:0,
		
		'health_insurance' => isset($_POST['cghs'])?1:0,
		
		'echs' => isset($_POST['cghs'])?1:0,
		
		'health_schem' => isset($_POST['cghs'])?1:0,
		
		'other_schem' => isset($_POST['cghs'])?1:0,
		'other_schem_name' => $this->input->post('other_schem_name')

           );


        $result = $this->common_model->data_insert('tbl_hosp_info',$data['tbl_hosp_info']);

					
                        if ($result) {
					    $this->session->set_flashdata('message', ('Save Successfully'));
				   } else {
					#set exception message
					$this->session->set_flashdata('exception',('Please_try_again, Error in saving Hospital Information'));
				}

      	
					    
				   } else {
					#set exception message
					$this->session->set_flashdata('exception',('Please_try_Again , Error in saving General Information'));
				}

				redirect('registration/general_info');

		

			 
		
		

			#if empty $dprt_id then insert data
			// if (empty($postData['dprt_id'])) {
			// 	if ($this->department_model->create($postData)) {
			// 		#set success message
			// 		$this->session->set_flashdata('message', display('save_successfully'));
			// 	} else {
			// 		#set exception message
			// 		$this->session->set_flashdata('exception',display('please_try_again'));
			// 	}
			// 	redirect('department/create');
			// } else {
			// 	if ($this->department_model->update($postData)) {
			// 		#set success message
			// 		$this->session->set_flashdata('message', display('update_successfully'));
			// 	} else {
			// 		#set exception message
			// 		$this->session->set_flashdata('exception',display('please_try_again'));
			// 	}
			// 	redirect('department/edit/'.$postData['dprt_id']);
			// }

		} 
		} 
		  else {
			
		  $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		
			$data['content'] = $this->load->view('registration/general_info', $data, true);
			$this->load->view('layout/main_wrapper',$data);
		} 
	}


	public function  statutory_compliance()
	{
		
		$reg_id=1;
		$data['title'] = display('add_department');

		$data['title'] ="Registration";
		$data['main_title'] ="Statutory Compliance";

		if(isset($_POST['save_statutory_compliances'])) { 

			
				
				
			
             
			
				
   
        $St_Complis=($_POST['St_Complis']);
        $St_Complis['created_at']= date('d-m-Y');



        $result = $this->common_model->data_insert('tbl_statutory_compliance',$St_Complis);
             if ($result) {

             	$Mous=isset($_POST['Mou'])?$_POST['Mou']:array();
			        
			        if(count($Mous)>0){
					foreach($Mous['MoU_nameOfTheService'] as $key1 => $val) { 

                    if($Mous['MoU_nameOfTheService'][$key1]!="")
                       $data['Mous'][]= array(
                           'reg_id' => $reg_id,
                            'MoU_nameOfTheService'=> isset($Mous['MoU_nameOfTheService'][$key1])? $Mous['MoU_nameOfTheService'][$key1]: "",
                           'MoU_nameOfTheAgency'=> isset($Mous['MoU_nameOfTheAgency'][$key1])? $Mous['MoU_nameOfTheAgency'][$key1]: "", 
                           'MoU_isMoUAvailable'=> isset($Mous['MoU_isMoUAvailable'][$key1])? $Mous['MoU_isMoUAvailable'][$key1]: "",
                           'MoU_moUValidFrom' =>  isset($Mous['MoU_moUValidFrom'][$key1])? $Mous['MoU_moUValidFrom'][$key1]: "",
                           'MoU_moUValidTill' => isset($Mous['MoU_moUValidTill'][$key1])? $Mous['MoU_moUValidTill'][$key1]: "",
                        );
					}
				}else {
					 $data['Mous']=array();
				}
				

				
				if(count($data['Mous'])> 0) {
                   foreach ($data['Mous'] as $value1) {
                      $result = $this->common_model->data_insert('tbl_mou_hosp',$value1);	
             }
            	
				}
					    $this->session->set_flashdata('message', ('Save Successfully'));
				   } else {
					#set exception message
					$this->session->set_flashdata('exception',('Please_try_Again, Error in saving Statutory Compliances'));
				}

        

      
		}
         $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		   
		  
			
		$data['content'] = $this->load->view('registration/statutory_compliance', $data, true);

        $this->load->view('layout/main_wrapper',$data);
	}

	public function  hospital_staffing()
	{
		
		$reg_id=1;
		

		$data['title'] ="Registration";
		$data['main_title'] =" Hospital Staffing";

		if(isset($_POST['save_hospital_staff'])) {

			$data['nurse_patnt_ratio'] = array(
				'reg_id' =>$_POST['reg_id'],
               'nursepatientratio_ward'=>$_POST['nursepatientratio_ward'],
               'nursepatientratio_icuventilated' => $_POST['nursepatientratio_icuventilated'],
               'nursepatientratio_icuNonventilated' => $_POST['nursepatientratio_icuNonventilated'],

			  );
				
   //nurseDetails medic_officer Paramedical SupportStaff 





        $result = $this->common_model->data_insert('tbl_nurse_ptnt_ratio',$data['nurse_patnt_ratio']);
             if ($result) {
                  
                  if(isset($_POST['medic_officer'])){
                    $this->savemedic_officer($_POST['medic_officer'] , $_POST['reg_id']);
                   } 

                   if(isset($_POST['nurseDetails'])){
                    $this->save_nurses($_POST['nurseDetails'] , $_POST['reg_id']);
                   } 

                   if(isset($_POST['Paramedical'])){
                    $this->save_Paramedical($_POST['Paramedical'] , $_POST['reg_id']);
                   } 


                   if(isset($_POST['SupportStaff'])){
                    $this->save_SupportStaff($_POST['SupportStaff'] , $_POST['reg_id']);
                   } 

                   

					    $this->session->set_flashdata('message', ('Save Successfully'));
				   } else {
					#set exception message
					$this->session->set_flashdata('exception',('Please Try Again, Error in saving Hospital Staffing'));
				}

        

      
		}
         $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		   
		  
			
		$data['content'] = $this->load->view('registration/hospital_staffing', $data, true);

        $this->load->view('layout/main_wrapper',$data);
	}

     public function savemedic_officer($data,$reg_id) {
           $date_to_save=$data;
         
           if(count($date_to_save)>0){
		foreach($date_to_save['doctor_name'] as $key1 => $val) { 

        if($date_to_save['doctor_name'][$key1]!="")
            $data1['save'][]= 
                     array(

                          'reg_id' => $reg_id,
                          'doctor_name'=> 
                           isset($date_to_save['doctor_name'][$key1])? $date_to_save['doctor_name'][$key1]: "",

                               'designation'=> isset($date_to_save['designation'][$key1])? $date_to_save['designation'][$key1]: "",

                               'qualification'=> isset($date_to_save['qualification'][$key1])? $date_to_save['qualification'][$key1]: "",

                               'council_of_registration' =>  isset($date_to_save['council_of_registration'][$key1])? $date_to_save['council_of_registration'][$key1]: "",

                                'registration_number' => isset($date_to_save['registration_number'][$key1])? $date_to_save['registration_number'][$key1]: "",

                                 'joining_date' => isset($date_to_save['joining_date'][$key1])? $date_to_save['joining_date'][$key1]: "",

                                  'area_department' => isset($date_to_save['area_department'][$key1])? $date_to_save['area_department'][$key1]: "",
                        );


					}
				}else {
					 $data1['save']=array();
				}
				

				
				if(count($data1['save'])> 0) {
                   foreach ($data1['save'] as $value1) {
                      $result = $this->common_model->data_insert('tbl_medical_officer',$value1);	
             }
            	
				}
			        
	
     }

     public function save_nurses($data,$reg_id) {
           $date_to_save=$data;
         
           if(count($date_to_save)>0){
    foreach($date_to_save['Nurses_nurseName'] as $key1 => $val) { 


        if($date_to_save['Nurses_nurseName'][$key1]!="")
            $data1['save'][]= 
                     array(

                          'reg_id' => $reg_id,
                          'Nurses_nurseName'=> 
                           isset($date_to_save['Nurses_nurseName'][$key1])? $date_to_save['Nurses_nurseName'][$key1]: "",


                               'Nurses_designation'=> isset($date_to_save['Nurses_designation'][$key1])? $date_to_save['Nurses_designation'][$key1]: "",

                               'Nurses_qualification'=> isset($date_to_save['Nurses_qualification'][$key1])? $date_to_save['Nurses_qualification'][$key1]: "",

                               'Nurses_nursingCouncil' =>  isset($date_to_save['Nurses_nursingCouncil'][$key1])? $date_to_save['Nurses_nursingCouncil'][$key1]: "",

                                'Nurses_registrationNumber' => isset($date_to_save['Nurses_registrationNumber'][$key1])? $date_to_save['Nurses_registrationNumber'][$key1]: "",

                                 'Nurses_dateOfJoining' => isset($date_to_save['Nurses_dateOfJoining'][$key1])? $date_to_save['Nurses_dateOfJoining'][$key1]: "",

                                  'Nurses_area_workingDepartment' => isset($date_to_save['Nurses_area_workingDepartment'][$key1])? $date_to_save['Nurses_area_workingDepartment'][$key1]: "",
                        );


          }
        }else {
           $data1['save']=array();
        }
        

        
        if(count($data1['save'])> 0) {
                   foreach ($data1['save'] as $value1) {
                      $result = $this->common_model->data_insert('tbl_nurse',$value1);  
             }
              
        }
              
  
     }

     public function save_Paramedical($data,$reg_id) {
           $date_to_save=$data;
         
           if(count($date_to_save)>0){
    foreach($date_to_save['ParamediclStaff_staffname'] as $key1 => $val) { 


        if($date_to_save['ParamediclStaff_staffname'][$key1]!="")
            $data1['save'][]= 
                     array(

                          'reg_id' => $reg_id,
                          'ParamediclStaff_staffname'=> 
                           isset($date_to_save['ParamediclStaff_staffname'][$key1])? $date_to_save['ParamediclStaff_staffname'][$key1]: "",


                               'ParamediclStaff_designation'=> isset($date_to_save['ParamediclStaff_designation'][$key1])? $date_to_save['ParamediclStaff_designation'][$key1]: "",

                               'ParamediclStaff_qualification'=> isset($date_to_save['ParamediclStaff_qualification'][$key1])? $date_to_save['ParamediclStaff_qualification'][$key1]: "",

                              

                                 'ParamediclStaff_dateOfJoining' => isset($date_to_save['ParamediclStaff_dateOfJoining'][$key1])? $date_to_save['ParamediclStaff_dateOfJoining'][$key1]: "",

                                  'ParamediclStaff_area_workingDepartment' => isset($date_to_save['ParamediclStaff_area_workingDepartment'][$key1])? $date_to_save['ParamediclStaff_area_workingDepartment'][$key1]: "",
                        );


          }
        }else {
           $data1['save']=array();
        }
        

        
        if(count($data1['save'])> 0) {
                   foreach ($data1['save'] as $value1) {
                      $result = $this->common_model->data_insert('tbl_paramedicl_staff',$value1);  
             }
              
        }
              
  
     }

     public function save_SupportStaff($data,$reg_id) {
           $date_to_save=$data;
         
           if(count($date_to_save)>0){
    foreach($date_to_save['AdminSupportStaff_staffname'] as $key1 => $val) { 


        if($date_to_save['AdminSupportStaff_staffname'][$key1]!="")
            $data1['save'][]= 
                     array(

                          'reg_id' => $reg_id,
                          'AdminSupportStaff_staffname'=> 
                           isset($date_to_save['AdminSupportStaff_staffname'][$key1])? $date_to_save['AdminSupportStaff_staffname'][$key1]: "",


                               'AdminSupportStaff_designation'=> isset($date_to_save['AdminSupportStaff_designation'][$key1])? $date_to_save['AdminSupportStaff_designation'][$key1]: "",

                               'AdminSupportStaff_qualification'=> isset($date_to_save['AdminSupportStaff_qualification'][$key1])? $date_to_save['AdminSupportStaff_qualification'][$key1]: "",

                              

                                 'AdminSupportStaff_dateOfJoining' => isset($date_to_save['AdminSupportStaff_dateOfJoining'][$key1])? $date_to_save['AdminSupportStaff_dateOfJoining'][$key1]: "",

                                  'AdminSupportStaff_area_workingDepartment' => isset($date_to_save['AdminSupportStaff_area_workingDepartment'][$key1])? $date_to_save['AdminSupportStaff_area_workingDepartment'][$key1]: "",
                        );


          }
        }else {
           $data1['save']=array();
        }
        

        
        if(count($data1['save'])> 0) {
                   foreach ($data1['save'] as $value1) {
                      $result = $this->common_model->data_insert('tbl_admin_support_staff',$value1);  
             }
              
        }
              
  
     }


public function  clinical_services_details()
	{
		
		$reg_id=1;
		

		$data['title'] ="Registration";
		$data['main_title'] =" Clinical Services Details";
		

		if(isset($_POST['save_clinical_Services'])) { 

			
				
        $cl_servc=$_POST['cl_servc'];
       


        $result = $this->common_model->data_insert('tbl_clinical_services_details',$cl_servc);
             if ($result) {
					    $this->session->set_flashdata('message', ('Save Successfully'));
				   } else {
					#set exception message
					$this->session->set_flashdata('exception',('Please Try Again, Error in saving Clinical Services Details'));
				}

        

      
		}
         $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		   
		  
			
		$data['content'] = $this->load->view('registration/clinical_services_details', $data, true);

        $this->load->view('layout/main_wrapper',$data);
	}

 
      

      public function  physical_infrastructure()
	{
		//force_download ( 'assets/images/admin.png', NULL);
		$reg_id=1;
		

		$data['title'] ="Registration";
		$data['main_title'] ="  Physical Infrastructure";
			//print_r($_POST);die();

		if(isset($_POST['save_phys_infra'])) { 

			
				
        $phy_infra=$_POST['phy_infra'];
       


        $result = $this->common_model->data_insert('tbl_phy_infrastructure',$phy_infra);
             if ($result) {
					    $this->session->set_flashdata('message', ('Save Successfully'));
				   } else {
					#set exception message
					$this->session->set_flashdata('exception',('Please Try Again, Error in saving Physical Infrastructure'));
				}

        

      
		}
         $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		   
		  
			
		$data['content'] = $this->load->view('registration/physical_infrastructure', $data, true);

        $this->load->view('layout/main_wrapper',$data);
	}
 
	public function index($user_role = 'Representative')
	{ 
		  
		$data['title'] = display($user_role."_list");
		$role_id     = $this->user_roles($user_role);
		#-------------------------------#
		$data['employees'] = $this->employee_model->read($role_id);
        $data['userRoles'] = $this->user_roles();
		$data['content'] = $this->load->view('human_resources/view', $data, true);
		$this->load->view('layout/main_wrapper',$data);
	} 


    public function email_check($email, $user_id)
    { 
    	$emailExists = $this->db->select('email')
    		->where('email',$email) 
    		->where_not_in('user_id',$user_id) 
    		->get('user')
    		->num_rows();

        if ($emailExists > 0) {
            $this->form_validation->set_message('email_check', 'The {field} field must contain a unique value.');
            return false;
        } else {
            return true;
        }
    }


	public function form($user_id = null)
	{  
		$this->form_validation->set_rules('firstname', display('first_name'),'required|max_length[50]');
		$this->form_validation->set_rules('lastname',display('last_name'),'required|max_length[50]');

		if (!empty($user_id)) {
			$this->form_validation->set_rules('email',display('email'), "required|max_length[50]|valid_email|callback_email_check[$user_id]");
		} else {
			$this->form_validation->set_rules('email',display('email'),'required|max_length[50]|valid_email|callback_email_check');
		}

		$this->form_validation->set_rules('password',display('password'),'required|max_length[32]|md5');
		$this->form_validation->set_rules('mobile',display('mobile'),'required|max_length[20]');
		$this->form_validation->set_rules('sex',display('sex'),'required|max_length[10]');
		$this->form_validation->set_rules('address',display('address'),'required|max_length[255]');
		$this->form_validation->set_rules('status',display('status'),'required');
		#-------------------------------#
		//picture upload
		$picture = $this->fileupload->do_upload(
			'assets/images/human_resources/',
			'picture'
		);
		// if picture is uploaded then resize the picture
		if ($picture !== false && $picture != null) {
			$this->fileupload->do_resize(
				$picture, 293, 350
			);
		}
		//if picture is not uploaded
		if ($picture === false) {
			$this->session->set_flashdata('exception', display('invalid_picture'));
		}
		#-------------------------------#
		//when create a user
		$data['employee'] = (object)$postData = array(
			'user_id'      => $this->input->post('user_id'),
			'firstname'    => $this->input->post('firstname'),
			'lastname' 	   => $this->input->post('lastname'),
			'email' 	   => $this->input->post('email'),
			'password' 	   => md5($this->input->post('password')),
			'mobile'       => $this->input->post('mobile'),
			'sex' 		   => $this->input->post('sex'),
			'address' 	   => $this->input->post('address'),
			'picture'      => (!empty($picture)?$picture:$this->input->post('old_picture')),
			'user_role'    => $this->input->post('user_role'),
			'create_date'  => date('Y-m-d'),
			'created_by'   => $this->session->userdata('user_id'),
			'status'       => $this->input->post('status'),
		); 

        /*-----------CHECK ID -----------*/
        if (empty($user_id)) {

            /*-----------CREATE A NEW RECORD-----------*/
            if ($this->form_validation->run() === true) { 
                if ($this->employee_model->create($postData)) {
                    #set success message
                    $this->session->set_flashdata('message', display('save_successfully'));
                } else {
                    #set exception message
                    $this->session->set_flashdata('exception',display('please_try_again'));
                }
                redirect('human_resources/employee/form');
            } else {
            	//view section
				$data['title'] = display('add_employee');
                $data['userRoles'] = $this->user_roles();
                $data['content'] = $this->load->view('human_resources/form',$data,true);
                $this->load->view('layout/main_wrapper',$data);
            } 

        } else {

            /*-----------UPDATE A RECORD-----------*/
            if ($this->form_validation->run() === true) { 
                if ($this->employee_model->update($postData)) {
                    #set success message
                    $this->session->set_flashdata('message', display('update_successfully'));
                } else {
                    #set exception message
                    $this->session->set_flashdata('exception',display('please_try_again'));
                }
                redirect('human_resources/employee/form/'.$postData['user_id']);
            } else {
            	//view section
                $data['title'] = display('employee_edit');
                $data['employee'] = $this->employee_model->read_by_id($user_id);
                $data['userRoles'] = $this->user_roles(); 
                $data['content'] = $this->load->view('human_resources/form',$data,true);
                $this->load->view('layout/main_wrapper',$data);
            } 
        } 
        /*---------------------------------*/
	}
 
	public function profile($user_id = null)
	{  
		$data['title'] =  display('employee_information');
		#-------------------------------#
        $data['userRoles'] = $this->user_roles(); 
		$data['profile'] = $this->employee_model->read_by_id($user_id);
		$data['content'] = $this->load->view('human_resources/profile',$data,true);
		$this->load->view('layout/main_wrapper',$data);
	}


	public function delete($user_id = null, $user_role = null) 
	{		 
		if ($this->employee_model->delete($user_id, $user_role)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function user_roles($user_role = null)
	{
		$user_list = array(
			'Admin'          => 1,
			'Doctor'         => 2,
			'Accountant'     => 3,
			'Laboratorist'   => 4,
			'Nurse'          => 5,
			'Pharmacist'     => 6,
			'Receptionist'   => 7,
			'Representative' => 8,
			'Case_manager'   => 9,
		);

		if (!empty($user_role)) {
			$user_role = ucfirst($user_role);
			if (array_key_exists($user_role, $user_list)) {
				return $user_list[$user_role];
			} else {
				return null;
			}			
		} else {
			return array_flip($user_list);
		}

	}	

	//change by user
	public function profile_edit()
	{   
		$user_id       = $this->session->userdata('user_id');
		#-------------------------------#
		$this->form_validation->set_rules('firstname', display('first_name'),'required|max_length[50]');
		$this->form_validation->set_rules('lastname',display('last_name'),'required|max_length[50]');
		$this->form_validation->set_rules('email',display('email'), "required|max_length[50]|valid_email|callback_email_check[$user_id]");
		$this->form_validation->set_rules('password',display('password'),'required|max_length[32]|md5');
		$this->form_validation->set_rules('mobile',display('mobile'),'required|max_length[20]');
		$this->form_validation->set_rules('sex',display('sex'),'required|max_length[10]');
		$this->form_validation->set_rules('address',display('address'),'required|max_length[255]');
		$this->form_validation->set_rules('status',display('status'),'required');
		#-------------------------------#
		//picture upload
		$picture = $this->fileupload->do_upload(
			'assets/images/human_resources/',
			'picture'
		);
		// if picture is uploaded then resize the picture
		if ($picture !== false && $picture != null) {
			$this->fileupload->do_resize(
				$picture, 293, 350
			);
		}
		//if picture is not uploaded
		if ($picture === false) {
			$this->session->set_flashdata('exception', display('invalid_picture'));
		}
		#-------------------------------#
		$data['employee'] = (object)$postData = array(
			'user_id'      => $user_id,
			'firstname'    => $this->input->post('firstname'),
			'lastname' 	   => $this->input->post('lastname'),
			'email' 	   => $this->input->post('email'),
			'password' 	   => md5($this->input->post('password')),
			'mobile'       => $this->input->post('mobile'),
			'sex' 		   => $this->input->post('sex'),
			'address' 	   => $this->input->post('address'),
			'picture'      => (!empty($picture)?$picture:$this->input->post('old_picture')),
		); 
		#-------------------------------#
        if ($this->form_validation->run() === true) { 
            if ($this->employee_model->update($postData)) {
                #set success message
                $this->session->set_flashdata('message', display('update_successfully'));
            } else {
                #set exception message
                $this->session->set_flashdata('exception',display('please_try_again'));
            }
            redirect('dashboard/profile');
        } else {
        	//view section
            $data['title'] = display('edit_profile');
            $data['employee'] = $this->employee_model->read_by_id($user_id);
            $data['userRoles'] = $this->user_roles(); 
            $data['content'] = $this->load->view('human_resources/profile_edit',$data,true);
            $this->load->view('layout/main_wrapper',$data);
        } 
	}
}

