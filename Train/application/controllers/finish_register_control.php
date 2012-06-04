<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finish_register_control extends CI_Controller {

	
	 
	public function index()
	{
		
		if($this->session->userdata('logged_in'))
		   {
			 $session_data = $this->session->userdata('logged_in');
			 $data['username'] = $session_data['username'];
			 $this->load->view('templates/header', $data);
			 $this->load->view('memberspage', $data);
			 $this->load->view('templates/footer', $data);
		   }
		   else
		   {
				//if ($this->form_validation->run('first_login') == FALSE)
				//{
				//$this->load->view('templates/header');
				//$this->load->view('first_login');
				//$this->load->view('templates/footer');
				//}
				//else
				//{
				$this->load->view('templates/header');
				$this->load->view('memberspage');
				$this->load->view('templates/footer');
				$this->login();
				//}
			 
		   }
	
	}
	
	function login()
        //loads the train_model file and then runs the insert_login function
	{
		$this->load->model('Trains_model','',TRUE);
		$this->Trains_model->insert_login();
	}
}

/* End of file finish_register_control.php */
/* Location: ./application/controllers/finish_register_control.php */
?>