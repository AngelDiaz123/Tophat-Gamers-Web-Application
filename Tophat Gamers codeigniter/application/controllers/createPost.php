<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class createPost extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('user');
 }

  function index(){
  	if($this->session->userdata('logged_in')){
      $session_data = $this->session->userdata('logged_in');
      $data = array('userID'=>$session_data['id']);
      $this->load->view('createpost_view',$data);
    }else{
	  	$this->load->view('welcome_view');
	  }
  }

  function savePost($id){
    $post = $this->input->post('post');
    $title = $this->input->post('title');
    $this->user->savePost($id,$post,$title);
    redirect('dashboard','refresh');
  }

}

?>