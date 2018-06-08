<?php
  /**
   *  Candidate controller
   */
  class Candidate extends CI_Controller
  {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Candidate_Model');
    }

    public function profile($id){
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

    //Check if candidate is already registered
    // public function is_registered($email){
    // $query =  $this->Candidate->is_registered($email);
    // if($query == true){
    //   //throw error
    // }

    // Register
    public function register()
    {
    $data['title'] = 'Register - Tech Arise';
          $data['metaDescription'] = 'Register';
          $data['metaKeywords'] = 'Register';
          $data['page'] = 'test';
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
  }

?>
