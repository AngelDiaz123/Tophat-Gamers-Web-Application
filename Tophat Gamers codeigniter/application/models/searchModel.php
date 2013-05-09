<?php
  Class searchModel extends CI_Model{
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

    function searchUser($username){

      $this->db->select('username, users.user_id');
      $this->db->from('users');
      $this->db->join('profile','users.user_id = profile.user_id');
      $this->db->select('user_img');
      $this->db->join('gametype','profile.user_id = gametype.user_id');
      $this->db->select('gametype');
      $this->db->where('username',$username);


      $query = $this->db->get();
      return $query->result_array();
    }    

    function retrieveUser($id){
      $this->db->select('username');
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
