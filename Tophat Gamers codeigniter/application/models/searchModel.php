<?php
  Class searchModel extends CI_Model{
    // a all around search
    function search(){
      $where = "gametype != ''";

      $this->db->select('username, user_id, user_img, gametype');
      $this->db->from('users');
      $this->db->where($where);

      $query = $this->db->get();
      return $query->result_array();
    }

    // a search by both username and gametype
    function searchBoth($user,$type){
      $where = "username ='$user' AND gametype ='$type'";

      $this->db->select('username, user_id, user_img, gametype');
      $this->db->from('users');
      $this->db->where($where);


      $query = $this->db->get();
      return $query->result_array();
    }

    // a search by username
    function searchUser($user){

      $this->db->select('username, user_id, user_img, gametype');
      $this->db->from('users');
      $this->db->where('username',$user);


      $query = $this->db->get();
      return $query->result_array();
    }

    // a search by gametype
    function searchType($type){

      $this->db->select('username, user_id, user_img, gametype');
      $this->db->from('users');
      $this->db->where('gametype',$type);


      $query = $this->db->get();
      return $query->result_array();
    } 

    // a search by email address and gametype
    function searchEmailAndType($email,$type){
      $where = "email='$email' AND gametype='$type'";

      $this->db->select('username, email, user_id, user_img, gametype');
      $this->db->from('users');
      $this->db->where('email',$email);


      $query = $this->db->get();
      return $query->result_array();
    }

    // a search by email address
    function searchEmail($email){

      $this->db->select('username, email, user_id, user_img, gametype');
      $this->db->from('users');
      $this->db->where('email',$email);


      $query = $this->db->get();
      return $query->result_array();
    }   

    // a ajax search for a profile
    function retrieveUser($id){
      $this->db->select('username, users.user_id, user_img, gametype, twitch_username, youtube_username');
      $this->db->from('users');
      $this->db->join('profile','users.user_id = profile.user_id');
      $this->db->select('bio');
      $this->db->where('users.user_id',$id);

      $query = $this->db->get();
      $results = $query->result_array();

      if(!$results){
        $this->db->select('username, user_id, user_img, gametype, twitch_username, youtube_username');
        $this->db->from('users');
        $this->db->where('user_id', $id);
        $q = $this->db->get();

        if($q->num_rows() > 0){
          $user = $q->result_array();
          return $user[0];
        }else{
          return false;
        }

      }else{
        return $results[0];
      }

      // return $results[0];
    }
  }
?>
