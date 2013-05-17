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

    function pullUserInfo($id){
      $this->db->select('email, user_id, username, youtube_username, twitch_username, gametype');
      $this->db->from('users');
      $this->db->where('user_id',$id);
      $query = $this->db->get();
      return $query->result_array();
    }

    function updateUser($user_id, $username, $email, $youtube, $twitch, $gametype){
      $data = array('user_id'=>$user_id,'username'=>$username, 'email'=>$email,'youtube_username'=>$youtube,'twitch_username'=>$twitch,'gametype'=>$gametype);
      $this->db->where('user_id', $user_id);
      $this->db->update('users', $data);
    }
  }
?>
