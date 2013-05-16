<?php
  Class searchModel extends CI_Model{
    // a all around search
    function search(){

      $this->db->select('username, users.user_id');
      $this->db->from('users');
      $this->db->join('profile','users.user_id = profile.user_id');
      $this->db->select('user_img');
      $this->db->join('gametype','profile.user_id = gametype.user_id');
      $this->db->select('gametype');

      $query = $this->db->get();
      return $query->result_array();
    }

    // a search by both username and gametype
    function searchBoth($user,$type){
      $where = "username ='$user' AND gametype ='$type'";

      $this->db->select('username, users.user_id');
      $this->db->from('users');
      $this->db->join('profile','users.user_id = profile.user_id');
      $this->db->select('user_img');
      $this->db->join('gametype','profile.user_id = gametype.user_id');
      $this->db->select('gametype');
      $this->db->where($where);


      $query = $this->db->get();
      return $query->result_array();
    }

    // a search by username
    function searchUser($user){

      $this->db->select('username, users.user_id');
      $this->db->from('users');
      $this->db->join('profile','users.user_id = profile.user_id');
      $this->db->select('user_img');
      $this->db->join('gametype','profile.user_id = gametype.user_id');
      $this->db->select('gametype');
      $this->db->where('username',$user);


      $query = $this->db->get();
      return $query->result_array();
    }

    // a search by gametype
    function searchType($type){

      $this->db->select('username, users.user_id');
      $this->db->from('users');
      $this->db->join('profile','users.user_id = profile.user_id');
      $this->db->select('user_img');
      $this->db->join('gametype','profile.user_id = gametype.user_id');
      $this->db->select('gametype');
      $this->db->where('gametype',$type);


      $query = $this->db->get();
      return $query->result_array();
    } 

    // a search by email address and gametype
    function searchEmailAndType($email,$type){
      $where = "email='$email' AND gametype='$type'";

      $this->db->select('username,email, users.user_id');
      $this->db->from('users');
      $this->db->join('profile','users.user_id = profile.user_id');
      $this->db->select('user_img');
      $this->db->join('gametype','profile.user_id = gametype.user_id');
      $this->db->select('gametype');
      $this->db->where('email',$email);


      $query = $this->db->get();
      return $query->result_array();
    }

    // a search by email address
    function searchEmail($email){

      $this->db->select('username,email, users.user_id');
      $this->db->from('users');
      $this->db->join('profile','users.user_id = profile.user_id');
      $this->db->select('user_img');
      $this->db->join('gametype','profile.user_id = gametype.user_id');
      $this->db->select('gametype');
      $this->db->where('email',$email);


      $query = $this->db->get();
      return $query->result_array();
    }   

    // a ajax search for a profile
    function retrieveUser($id){
      $this->db->select('username, youtube_username');
      $this->db->from('users');
      $this->db->join('profile','users.user_id = profile.user_id');
      $this->db->select('user_img, bio');
      $this->db->join('gametype','profile.user_id = gametype.user_id');
      $this->db->select('gametype');
      $this->db->where('profile.user_id',$id);
      $this->db->limit(1);

      $query = $this->db->get();
      $results = $query->result_array();
      return $results[0];
    }
  }
?>
