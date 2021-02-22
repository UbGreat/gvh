<?php
  /**
   *
   */
  class Affiliate_Model extends CI_Model
  {

    // function __construct(argument)
    // {
    //   // load profile, resume, refree models
    //
    // }

    // Get Affilate details
    public function profile($id){
      $query = $this->db->where('id', $id)->get('affiliate');
      return $query->result();
    }

    // Fetch details of all Affilates
    public function all_affiliates(){
      $query = $this->db->get('affiliate');
      return $query->result();
    }

    // Check whether Affilate exists or not
    public function is_registered($email){
      $query = $this->db->where([
        'email'=>$email
      ])
      ->get('affiliate');
      $res=  $query->rows();
      if($res > 0){
        return true;
      }
      else {
        return false;
      }
    }

    // Create Employer details
    public function create_affiliate($data){
      $query = $this->db->insert('affiliate', $data);
      if($query){
        return
        true;
      }
      else{
        return false;
      }
    }

    // Update Employer details
    public function update_affiliate($id, $data){
      $this->db->where('id', $id)
      ->update('affiliate');
    }

    // Delete Employer from database
    public function delete_affiliate($id){
      $query = $this->db->where('id',$id)
      ->delete('affiliate');
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
        ->get('affiliate');
      if($query->num_rows() > 0){
        return true;
      }
      else{
        return false;
      }
    }
  }

?>
