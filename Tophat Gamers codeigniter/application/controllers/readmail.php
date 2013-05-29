<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class readMail extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('searchModel');
    $this->load->model('user');
 }

  function index(){
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $user_id = $session_data['id'];
      $results = $this->user->readMail($user_id);
      if($results)
      {
        $data = array('results'=>$results);
        $this->load->view('readmail_view',$data);
      }
      else
      {
        $data = array('message'=>'you have no messages');
        $this->load->view('readmail_view',$data);
      }
      
    }
    else
    {
      $this->load->view('welcome_view');
    }
  }

}

?>