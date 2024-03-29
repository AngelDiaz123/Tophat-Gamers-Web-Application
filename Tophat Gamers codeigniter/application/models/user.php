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
        $profile = array();
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

    function pullPosts($id){
      $this->db->select('post, title, post_id');
      $this->db->from('blogs');
      $this->db->where('blogs.user_id',$id);
      $query = $this->db->get();
      return $query->result_array();
    }

    function updateUser($user_id, $username, $email, $youtube, $twitch, $gametype, $bio){
      $data = array('user_id'=>$user_id,'username'=>$username, 'email'=>$email,'youtube_username'=>$youtube,'twitch_username'=>$twitch,'gametype'=>$gametype);
      $bio = array('bio'=>$bio);
      $this->db->where('users.user_id', $user_id);
      $this->db->update('users', $data);
      $this->db->where('profile.user_id', $user_id);
      $this->db->update('profile', $bio);
    }

    function updateImg($id,$img){
      $data = array('user_img'=>$img);
      $this->db->where('user_id', $id);
      $this->db->update('users', $data);
    }

    function savePost($user_id,$post,$title){
      $data = array('user_id'=>$user_id,'post'=>$post,'title'=>$title);
      $this->db->insert('blogs',$data);
    }

    function pullBlog($post_id){
      $this->db->select('post, title, post_id');
      $this->db->from('blogs');
      $this->db->where('post_id',$post_id);

      $query = $this->db->get();
      return $query->result_array();
    }

    function updateBlog($title, $blog, $post_id){
      $data = array('post'=>$blog,'title'=>$title);
      $this->db->where('post_id', $post_id);
      $this->db->update('blogs', $data);
    }

    function messageUser($message, $title, $user_id, $messenger){
      $data = array('message'=>$message, 'title'=>$title, 'user_id'=>$user_id, 'mailer_id'=>$messenger);
      $this->db->insert('mail',$data);
    }

    function readMail($id){
      $this->db->select('mailer_id, message, title');
      $this->db->from('mail');
      $this->db->where('user_id', $id);
      $query = $this->db->get();

      if($query->num_rows() > 0){
        $result = $query->result_array();
        return $result;
      }else{
        return false;
      }
    }
  }
?>
