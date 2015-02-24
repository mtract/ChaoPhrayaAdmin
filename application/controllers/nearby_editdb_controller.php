<?php
class nearby_editdb_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('nearby_editdb_model');
	}

	public function index()
	{
		if ($this->ion_auth->logged_in())
		{
			
			if ($this->ion_auth->in_group('admin')){
				$this->load->view('nearby_editdb/index',$data);
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