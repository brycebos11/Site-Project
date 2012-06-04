<?php

class Register_control extends CI_Controller {
    
        /*
         * This controller is set up to be accessed
         * through http://localhost/train/register_control.
	 */

	function index()
	{
            //validation message if username is not unique
		$this->form_validation->set_message('is_unique', 'There is already a 
                    member with the same %s. Please log in or use something different. 
                    <p><h1><a href="http://localhost/Train/index.php/login_control">Login Here!</a></h1></p>');
		
                //Checks to see if the form_validation function for register has
                //been run, and then goes through the appropriate actions.
		if ($this->form_validation->run('register') == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('register');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->register();
			
			$this->load->view('templates/header');
			$this->load->view('register_complete');
			$this->load->view('templates/footer');
 
			//sends an email message with the following params
                        $this->email->from('trainman@gmail.com', 'Brass Hat');
			$email_address = $this->input->post('email');
			$this->email->to($email_address); 

			$this->email->subject('All Aboard!');
			$this->email->message('<html><head>Welcome!</head><body><div><h1>Welcome to the Choo Choo Train Site!</h1> <h5>You are now a member of a 
			very prestigious club. You are receiving this because you have just signed up to become a member. Please go here to finish the registration process:</h5>
			<p><a href="http://localhost/train/index.php/login_control">I want to finish registration!</a></p> <h3>Thank you!</h3></div></body></html>'); 

			$this->email->send();
		}
	}
	function register()
            //loads the train_model file and then runs the insert_registration function
	{
		$this->load->model('Trains_model','',TRUE);
		$this->Trains_model->insert_registration();
	}
}
/* End of file register_control.php */
/* Location: ./application/controllers/register_control.php */
?>