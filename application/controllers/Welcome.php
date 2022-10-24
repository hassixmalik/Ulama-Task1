<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
            
		parent::__construct();
		$this->load->model('ulamamodel');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['show'] = $this->ulamamodel->getdata();
		$this->load->view('disp',$data);
	}

	public function insert(){
		$this->load->view("vinsert");
	}

	public function delete($id){
		if($this->ulamamodel->mydelete($id)){
			redirect('welcome/index');
		}

	}
	
	public function create(){
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('insert');
		}
		else
		{
		   if($this->ulamamodel->insertdata())
		   {
				redirect('welcome/index');
		   }
			
		}
	}
}
