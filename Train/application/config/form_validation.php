<?php

$config = array(
			'register' => array(
							array(
							 'field'   => 'first_name', 
							 'label'   => 'First Name', 
							 'rules'   => 'trim|required|xss_clean'
							   ),
							array(
								 'field'   => 'last_name', 
								 'label'   => 'Last Name', 
								 'rules'   => 'trim|required|xss_clean'
							   ),
							array(
								 'field'   => 'city', 
								 'label'   => 'City', 
								 'rules'   => 'trim|required|xss_clean'
							   ),   
							array(
								 'field'   => 'state', 
								 'label'   => 'State', 
								 'rules'   => 'trim|required|xss_clean'
							   ),
							array(
								 'field'   => 'zip_code', 
								 'label'   => 'Zip Code', 
								 'rules'   => 'trim|required|xss_clean|min_length[5]|max_length[5]|numeric'
							   ),
							array(
								 'field'   => 'username',
								 'label'   => 'Username',
								 'rules'   => 'trim|required|is_unique[members_table.username]'
								),
							 array(
								 'field'   => 'email', 
								 'label'   => 'Email', 
								 'rules'   => 'trim|required|valid_email|is_unique[members_table.email]'
							   ), 
							 array(
								 'field'   => 'password', 
								 'label'   => 'Password', 
								 'rules'   => 'trim|required|min_length[6]|max_length[12]|matches[password_conf]|md5'
							   ),
							 array(
								 'field'   => 'password_conf', 
								 'label'   => 'Password Confirmation', 
								 'rules'   => 'trim|required'
							   ),
							 ),
			'login' => array(
							array(
								 'field'   => 'username_id', 
								 'label'   => 'Username', 
								 'rules'   => 'trim|required'
							   ), 
						 array(
								 'field'   => 'password', 
								 'label'   => 'Password', 
								 'rules'   => 'trim|required|md5|callback_check_database'
							   ),
							),
             );


?>