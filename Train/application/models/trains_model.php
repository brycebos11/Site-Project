<?php

/*
 *This model is used for the train site and is located at
 *webroot/train/application/models/trains_model.php
 */

class Trains_model extends CI_Model {
 
    function __construct()
     {
         parent::__construct();
     }
	 
	 function insert_registration()
     {
             //this function inserts the information the user input
             //on the registration page.
		$this->load->database();
		$register = array(
                 'first_name' => $this->input->post('first_name'),
		 'last_name' => $this->input->post('last_name'),
		 'city' => $this->input->post('city'),
		 'state' => $this->input->post('state'),
		 'zip_code' => $this->input->post('zip_code'),
		 'username' => $this->input->post('username'),
		 'email' => $this->input->post('email'),
		 'password' => $this->input->post('password'),
		);
		
		$this->db->set('created', 'NOW()', FALSE);
		$this->db->set('updated', 'NOW()', FALSE);
        $this->db->insert('members_table', $register);
     }
	 
	 function insert_login()
	 {
             //This function inputs the username and login time of
             //the user into the login_table
		$this->load->database();
		$login = array(
			'username_id' => $this->input->post('username_id')
		);
		
		$this->db->set('login_time', 'NOW()', FALSE);
		$this->db->insert('login_table', $login);
	 }
	 
	 
	function login($username, $password)
	 {
            //This function checks to see if the username and password
            //that someone submitted is in the database.
	   $this -> db -> select('username, password');
	   $this -> db -> from('members_table');
	   $this -> db -> where('username = ' . "'" . $username . "'");
	   $this -> db -> where('password = ' . "'" .($password) . "'");
	   $this -> db -> limit(1);
	   $query = $this -> db -> get();
	   
	   if($query -> num_rows() == 1)
	   {
		 return $query->result();
	   }
	   else
	   {
		 return false;
	   }
	 }
	 
}
/* End of file trains_model.php */
 ?>