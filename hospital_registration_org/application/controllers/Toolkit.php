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
		  
		$data['title'] ="Registration";
		$data['main_title'] ="Self Assessment Toolkit";
		

		$data['content'] = $this->load->view('toolkit_view/chapterfirst', $data, true);

		$this->load->view('layout/main_wrapper',$data);
	} 

}