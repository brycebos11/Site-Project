<?php

class Login_control extends CI_Controller {

        /*
         * This controller is set up to be accessed
         * through http://localhost/train/login_control.
		 */
	function index()
	{
		//Checks to see if the form_validation function for register has
                //been run, and then goes through the appropriate actions.
		if ($this->form_validation->run('login') == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('login');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->login();
			$this->load->view('templates/header');
			$this->load->view('memberspage');
			$this->load->view('templates/footer');
		}
		
	}
		
	function login()
            //loads the train_model file and then runs the insert_login function
	{
		$this->load->model('Trains_model','',TRUE);
		$this->Trains_model->insert_login();
	}
	
	public function check_database($password)
	 {
	   //Field validation succeeded.  Validate against database
	   $username = $this->input->post('username_id');
	   //query the database
	   $this->load->model('Trains_model','',TRUE);
	   $result = $this->Trains_model->login($username, $password);
	   
           //if result is correct, starts a session.
           //if result is incorrect, returns to page with 'invalid username or password' error
           if($result)
	   {
		 $sess_array = array();
		 foreach($result as $row)
		 {
		   $sess_array = array(
			 'username' => $row->username,
			 'password' => $row->password
		   );
		   $this->session->set_userdata('logged_in', $sess_array);
		 }
		 return TRUE;
	   }
	   else
	   {
		 $this->form_validation->set_message('check_database', 'Invalid username or password');
		 return false;
	   }
	 }
}
/* End of file login_control.php */
/* Location: ./application/controllers/login_control.php */
?>