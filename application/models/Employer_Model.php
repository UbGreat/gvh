<?php
  /**
   *
   */
  class Employer_Model extends CI_Model
  {

    // function __construct(argument)
    // {
    //   // load profile, resume, refree models
    //
    // }

    // Get Employer details
    public function profile($id){
      $query = $this->db->where('id', $id)->get('employer');
      return $query->result();
    }

    // Fetch details of all Employers
    public function all_employers(){
      $query = $this->db->get('employer');
      return $query->result();
    }

    // Check whether Employer exists or not
    public function is_registered($email){
      $query = $this->db->where([
        'email'=>$email
      ])
      ->get('employer');
      $res=  $query->rows();
      if($res > 0){
        return true;
      }
      else {
        return false;
      }
    }

    // Create Employer details
    public function create_employer($data){
      $query = $this->db->insert('employer', $data);
      if($query){
        return
        true;
      }
      else{
        return false;
      }
    }

    // Update Employer details
    public function update_employer($id, $data){
      $this->db->where('id', $id)
      ->update('employer');
    }

    // Delete Employer from database
    public function delete_employer($id){
      $query = $this->db->where('id',$id)
      ->delete('employer');
      if($query){
        return true;
      }
      else{
        return false;
      }
    }

    //Login Verification
    public function verify_login($data){
      $query = $this->db->where([
          'email' => $data['email'],
          'password' => $data['password']
        ])
        ->get('employer');
      if($query->num_rows() > 0){
        return true;
      }
      else{
        return false;
      }
    }
  }

?>
