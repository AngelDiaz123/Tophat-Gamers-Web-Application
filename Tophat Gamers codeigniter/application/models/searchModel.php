<?php
  Class searchModel extends CI_Model{
    function search(){

      $this -> db -> select('username');
      $this -> db -> from('users');
      $this -> db -> join('profile','users.user_id = profile.user_id');
      $this -> db -> select('bio,user_img');

      $query = $this -> db -> get();
      return $query->result_array();
    }
  }
?>
