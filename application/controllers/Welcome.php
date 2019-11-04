<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	
	public function index()
	{
		if($this->session->userdata('emp_code') !=$this->uri->segment(3)){
			$this->session->set_userdata('emp_code', $this->uri->segment(3));
		}
		$this->loaderContent("partials/upload_image","Browse employee image to save");
	}
	//....................upload images..............
	public function saveupload(){
	$filename = $_FILES['file_name']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);	 
	$attach_file=$this->input->post('ticket_no').".png";
	$config['upload_path'] = './uploads/emp_images/';
    $config['allowed_types']        = 'jpg|jpeg|png';
    $config['max_size']             = 100000;
    $config['max_width']            = 102400;
    $config['max_height']           = 76800;
	$config['file_name'] =$attach_file;	
	$this->load->library('upload', $config);
	$this->upload->overwrite = true;
	$this->upload->do_upload('file_name');
	$this->loaderContent("partials/view_image","Uploaded successfully");
	}
	
		public function viewupload()
	{
		if($this->session->userdata('emp_code') !=$this->uri->segment(3)){
			$this->session->set_userdata('emp_code', $this->uri->segment(3));
		}
		$this->loaderContent("partials/view_image","EMP TICKET NUMBER:".$this->session->userdata('emp_code'));
	}
	//...................................loader.........................................................

	public function loaderContent($form_name,$message)
		{
					$data=array(
						'content'=>$form_name,
						'query_message'=>$message,
						);
					$this->load->view('partials/header',$data);
					$this->load->view('partials/footer');
	}
}
