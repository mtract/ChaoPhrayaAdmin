<?php
class ads_editdb_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ads_editdb_model');
	}

	public function index()
	{
		if ($this->ion_auth->logged_in())
		{
			
			if ($this->ion_auth->in_group('admin')){
				$this->load->view('ads_editdb',$data);
			}
			
			else {
				redirect('', 'refresh');
			}
		}
		else {
				redirect('', 'refresh');
			}

		
	}
	



}