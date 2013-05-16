<?php
  Class User extends CI_Model{
    function login($username, $password){

      $this->db->select('user_id, username, password');
      $this->db->from('users');
      $this->db->where('username', $username);
      $this->db->where('password', MD5($password));
      $this->db->limit(1);

      $query = $this->db->get();

      if($query->num_rows() == 1){
        return $query->result();

      }else{

       return false;
     }
    }

    function register($username, $email, $password){
      $this->db->select('username, email');
      $this->db->from('users');
      $this->db->where('username', $username);
      $this->db->where('email', $email);

      $query = $this->db->get();

      if($query->num_rows() > 0){
        return false;
      }else{
        $data = array('username'=>$username,'email'=>$email,'password'=>MD5($password),'user_img'=>"images/basic_profile.jpg");
        $this->db->insert('users', $data);
        $this->db->select('user_id, username, password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();
        return $query->result();
      }
    }
  }
?>
