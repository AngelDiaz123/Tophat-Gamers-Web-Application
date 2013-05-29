<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('searchModel');
    $this->load->model('user');
    $this->load->helper('url');
  }

  function index(){

 }

  function user($userID){
    if($this->session->userdata('logged_in')){
      $profile = $this->searchModel->retrieveUser($userID);
      $post = $this->user->pullPosts($userID);
      if(sizeof($profile) > 0){
        $data = array('profile' => $profile,'post'=>$post);
        $this->load->view('profileLoggedIn_view',$data);
      }else{
        //redirect to the 404 page instead
      }
    }else{
      $profile = $this->searchModel->retrieveUser($userID);
      $post = $this->user->pullPosts($userID);
      if(sizeof($profile) > 0){
        $data = array('profile' => $profile,'post'=>$post);
        $this->load->view('profile_view',$data);
      }else{
        //redirect to the 404 page instead
      }
    }
  }

}

?>