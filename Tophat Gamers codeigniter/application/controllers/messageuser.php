<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class messageUser extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('searchModel');
    $this->load->model('user');
 }

  function index(){
    if($this->session->userdata('logged_in')){
    //$session_data = $this->session->userdata('logged_in');
    $session_data = $this->session->userdata('logged_in');
    $mailer = $session_data['id'];
    $title = $this->input->post('title');
    $user = $this->input->post('user_id');
    $message = $this->input->post('message');
      if($mailer == $user){

        $profile = $this->searchModel->retrieveUser($mailer);
        $post = $this->user->pullPosts($mailer);
        $data = array('profile' => $profile,'post'=>$post);
        $this->load->view('profileerror_view',$data);

      }else{

        $this->user->messageUser($message, $title, $user, $mailer);
        $profile = $this->searchModel->retrieveUser($user);
        $post = $this->user->pullPosts($user);
        $data = array('profile' => $profile,'post'=>$post);
        $this->load->view('profilesuccess_view',$data);

      }
    }else{
      $this->load->view('welcome_view');
    }
  }

}

?>