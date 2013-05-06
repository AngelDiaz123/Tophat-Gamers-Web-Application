<?php
  Class searchModel extends CI_Model{
    function search(){

      $this -> db -> select('username');
      $this -> db -> from('users');

      $query = $this -> db -> get();
      return $query->result_array();
    }
  }
?>
