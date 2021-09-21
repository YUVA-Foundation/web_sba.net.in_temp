<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toolkit extends CI_Controller {

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


	

	public function chapterone()
	{ 
		 $reg_id=1; 
		$data['title'] ="Registration";
		$data['main_title'] ="Self Assessment Toolkit";
		
         $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		$data['content'] = $this->load->view('toolkit_view/chapterfirst', $data, true);

		$this->load->view('layout/main_wrapper',$data);
	} 


	public function chaptertwo()
	{ 
		 $reg_id=1; 
		$data['title'] ="Registration";
		$data['main_title'] ="Self Assessment Toolkit";
		
         $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		$data['content'] = $this->load->view('toolkit_view/chaptertwo', $data, true);

		$this->load->view('layout/main_wrapper',$data);
	}

	public function chapterthree()
	{ 
		 $reg_id=1; 
		$data['title'] ="Registration";
		$data['main_title'] ="Self Assessment Toolkit";
		
         $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		$data['content'] = $this->load->view('toolkit_view/chapterthree', $data, true);

		$this->load->view('layout/main_wrapper',$data);
	}  
	public function chapterfour()
	{ 
		 $reg_id=1; 
		$data['title'] ="Registration";
		$data['main_title'] ="Self Assessment Toolkit";
		
         $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		$data['content'] = $this->load->view('toolkit_view/chapterfour', $data, true);

		$this->load->view('layout/main_wrapper',$data);
	}  

	public function chapterfive()
	{ 
		 $reg_id=1; 
		$data['title'] ="Registration";
		$data['main_title'] ="Self Assessment Toolkit";
		
         $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		$data['content'] = $this->load->view('toolkit_view/chapterfive', $data, true);

		$this->load->view('layout/main_wrapper',$data);
	}  

	public function chaptersix()
	{ 
		 $reg_id=1; 
		$data['title'] ="Registration";
		$data['main_title'] ="Self Assessment Toolkit";
		
         $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		$data['content'] = $this->load->view('toolkit_view/chaptersix', $data, true);

		$this->load->view('layout/main_wrapper',$data);
	} 

	public function chapterseven()
	{ 
		 $reg_id=1; 
		$data['title'] ="Registration";
		$data['main_title'] ="Self Assessment Toolkit";
		
         $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		$data['content'] = $this->load->view('toolkit_view/chapterseven', $data, true);

		$this->load->view('layout/main_wrapper',$data);
	}  

	public function chaptereight()
	{ 
		 $reg_id=1; 
		$data['title'] ="Registration";
		$data['main_title'] ="Self Assessment Toolkit";
		
         $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		$data['content'] = $this->load->view('toolkit_view/chaptereigth', $data, true);

		$this->load->view('layout/main_wrapper',$data);
	} 

	public function chapternine()
	{ 
		 $reg_id=1; 
		$data['title'] ="Registration";
		$data['main_title'] ="Self Assessment Toolkit";
		
         $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		$data['content'] = $this->load->view('toolkit_view/chapternine', $data, true);

		$this->load->view('layout/main_wrapper',$data);
	} 

	public function chapterten()
	{ 
		 $reg_id=1; 
		$data['title'] ="Registration";
		$data['main_title'] ="Self Assessment Toolkit";
		
         $data['registration'] = $this->generalinfo_model->read_reg_info($reg_id);
		$data['content'] = $this->load->view('toolkit_view/chapterten', $data, true);

		$this->load->view('layout/main_wrapper',$data);
	} 



}