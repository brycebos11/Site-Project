<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_control extends CI_Controller {

	/*
         * This is the base controller which is set up to be accessed
         * through http://localhost/train. This loads the three views
         * below which make up the home page.
	 */
	 
	public function index()
	{
                $this->session->sess_destroy();
		$this->load->view('templates/header');
		$this->load->view('home');
		$this->load->view('templates/footer');
	}
}

/* End of file welcome_control.php */
/* Location: ./application/controllers/welcome_control.php */
?>