<?php
  /**
   *
   */
  class Candidate_Model extends CI_Model
  {

    // function __construct(argument)
    // {
    //   // load profile, resume, refree models
    //
    // }

    // Get candidate details
    public function profile($id){
      $query = $this->db->where('id', $id)->get('candidate');
      return $query->result();
    }

    // Fetch details of all candidates
    public function all_candidates(){
      $query = $this->db->get('candidate');
      return $query->result();
    }

    // Check whether candidate exists or not
    public function is_registered($email){
      $query = $this->db->where([
        'email'=>$email
      ])
      ->get('candidate');
      $res=  $query->rows();
      if($res > 0){
        return true;
      }
      else {
        return false;
      }
    }

    // Create Candidate details
    public function create_candidate($data){
      $query = $this->db->insert('candidate', $data);
      if($query){
        return
        true;
      }
      else{
        return false;
      }
    }

    // Update candidate details
    public function update_candidate($id, $data){
      $this->db->where('id', $id)
      ->update('candidate');
    }

    // Delete Candidate from database
    public function delete_candidate($id){
      $query = $this->db->where('id',$id)
      ->delete('candidate');
      if($query){
        return true;
      }
      else{
        return false;
      }
    }
  }

?>
