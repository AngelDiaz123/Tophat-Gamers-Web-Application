<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Dashboard extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('searchModel');
   $this->load->model('user');
   $this->load->helper(array('form', 'url'));
 }

 function index(){

    if($this->session->userdata('logged_in')){

      $session_data = $this->session->userdata('logged_in');
      $info = $this->searchModel->retrieveUser($session_data['id']);
      $post = $this->user->pullPosts($session_data['id']);
      $data = array('info' => $info,'post'=>$post);
      $this->load->view('dashboard_view', $data);

    }else{
      //If no session, redirect to login page
      redirect('welcome', 'refresh');
    }
  }

  function logout(){
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('welcome', 'refresh');
   }

  function editAccount($id){
    if($this->session->userdata('logged_in')){
      $userID = $id;
      $username = $this->input->post('username');
      $email = $this->input->post('email');
      $youtube = $this->input->post('youtube');
      $gametype = $this->input->post('gametype');
      $twitch = $this->input->post('twitch');
      $bio = $this->input->post('bio');
      if(isset($_FILES['userfile']) && $_FILES['userfile']['size'] > 0){


        $config['upload_path'] = 'uploads';
        $config['allowed_types'] = 'jpg|gif|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '1920';
        $config['max_height'] = '1080';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
          $info = $this->searchModel->retrieveUser($userID);
          $post = $this->user->pullPosts($userID);
          $data = array('info' => $info,'post'=>$post);
          $this->load->view('dashboarderror_view', $data);
        }
        else
        {
          $data = $this->upload->data();
          $userImg = "uploads/".$data['raw_name'].$data['file_ext'];
          $this->user->updateImg($userID,$userImg);
          $this->user->updateUser($userID, $username, $email, $youtube, $twitch, $gametype, $bio);
          $info = $this->searchModel->retrieveUser($userID);
          $post = $this->user->pullPosts($userID);
          $data = array('info' => $info,'post'=>$post);
          $this->load->view('dashboardsuccess_view', $data);
        }

      }else{

        $this->user->updateUser($userID, $username, $email, $youtube, $twitch, $gametype, $bio);
        $info = $this->searchModel->retrieveUser($userID);
        $post = $this->user->pullPosts($userID);
        $data = array('info' => $info,'post'=>$post);
        $this->load->view('dashboardsuccess_view', $data);
      }
    }else{
      redirect('welcome', 'refresh');
    }
  }

}

?>