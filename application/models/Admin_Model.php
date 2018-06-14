<?php
  /**
   *
   */
  class Admin_Model extends CI_Model
  {

    // function __construct(argument)
    // {
    //   // load profile, resume, refree models
    //
    // }

    // Get Affilate details
    public function profile($id){
      $query = $this->db->where('id', $id)->get('admin');
      return $query->result();
    }

    // Fetch details of all Admin
    public function all_admin(){
      $query = $this->db->get('admin');
      return $query->result();
    }

    // Check whether Admin exists or not
    public function is_registered($email){
      $query = $this->db->where([
        'email'=>$email
      ])
      ->get('admin');
      $res=  $query->rows();
      if($res > 0){
        return true;
      }
      else {
        return false;
      }
    }

    // Create Admin details
    public function create_admin($data){
      $query = $this->db->insert('admin', $data);
      if($query){
        return
        true;
      }
      else{
        return false;
      }
    }

    // Update Admin details
    public function update_admin($id, $data){
      $this->db->where('id', $id)
      ->update('admin');
    }

    // Delete Admin_Model from database
    public function delete_admin($id){
      $query = $this->db->where('id',$id)
      ->delete('admin');
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
        ->get('admin');
      if($query->num_rows() > 0){
        return true;
      }
      else{
        return false;
      }
    }
  }

?>
