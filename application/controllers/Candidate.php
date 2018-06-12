<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['page'] = 'dashboard';
        $data['title'] = '';
		$this->load->view('candidate/profile/template.html', $data);
	}

	// From the Candidate1 controller
	public function get_profile($id){
		$data['candidate'] = $this->Candidate_Model->get_candidate($id);
		// Feed the data to the candidate profile view page
		// $this->load->view('profilepage', $data);
	}

	// Get all candidates
	public function get_all_candidates(){
		$data[candidates] = $this->Candidate_Model->get_all_candidates();
		// Feed the relevant views with the data
		// $this->load->view('profilepage', $data);

	}

	// Register
	public function register()
	{
	$data['title'] = 'Register - Tech Arise';
				$data['metaDescription'] = 'Register';
				$data['metaKeywords'] = 'Register';
				$data['page'] = 'signup';
				$data['title'] = '';
				$this->load->view('template.html', $data);
	}
	//Create new candidate
	public function create(){

		// field name, error message, validation rules
		 $this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[1]');
		 $this->form_validation->set_rules('sname', 'Surname', 'trim|required|min_length[1]');
		 $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		 $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|min_length[11]');
		 $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		 $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');

		 if($this->form_validation->run() == FALSE) {
			 $this->register();
		 } else {
			 $data = [];

				 // post values
			 $data['fname'] = $this->input->post('fname');
			 $data['oname'] = $this->input->post('oname');
			 $data['sname'] = $this->input->post('sname');
			 $data['email'] = $this->input->post('email');
			 $data['phone1'] = $this->input->post('phone');
			 $data['password'] = $this->input->post('password');

			 $this->Candidate_Model->create_candidate($data);
		 }



	}




  public function profile()
  {
    $data['page'] = 'profile';
    $data['title'] = '';
		$this->load->view('candidate/profile/template.html', $data);
	}

	public function login()
	{
	$data['title'] = 'Register - Tech Arise';
				$data['metaDescription'] = 'login';
				$data['metaKeywords'] = 'login';
				$data['page'] = 'login';
				$data['title'] = '';
				$this->load->view('template2.html', $data);
	}

  //Login
  public function process_login()
  {
		// field name, error message, validation rules
		 $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		 $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[32]');

		 if($this->form_validation->run() == FALSE) {
			 $this->login();
		 } else {

			 $data = [];

			 $data['email'] = $this->input->post('email');
			 $data['password'] = $this->input->post('password');

			 $res = $this->Candidate_Model->verify_login($data);
			 if($res == true){
				 echo "Login Successful";
			 }
			 else{
				 $error = "Email or password is incorrect!";
				 $this->session->set_flashdata('login_error', $error);
				 redirect('login');
			 }
		 }
	}


}
