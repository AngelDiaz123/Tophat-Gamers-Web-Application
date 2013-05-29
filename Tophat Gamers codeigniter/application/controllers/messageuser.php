<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class messageUser extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('user');
 }

  function index(){
    $session_data = $this->session->userdata('logged_in');
    $info = $this->user->pullUserInfo($session_data['id']);
    $title = $this->input->post('title');
    $user = $this->input->post('user_id');
    $message = $this->input->post('message');
    echo $user."</br>";
    echo $title."</br>";
    echo $message;
  }

}

?>