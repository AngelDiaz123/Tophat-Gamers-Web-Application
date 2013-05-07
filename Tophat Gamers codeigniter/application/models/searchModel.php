<?php
  Class searchModel extends CI_Model{
    function search(){

      $this -> db -> select('username');
      $this -> db -> from('users');
      $this -> db -> join('profile','users.user_id = profile.user_id');
      $this -> db -> select('user_img');
      $this -> db -> join('gametype','profile.user_id = gametype.user_id');
      $this -> db -> select('gametype');

      $query = $this -> db -> get();
      return $query->result_array();
    }
  }
?>
