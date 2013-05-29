<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class post extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->helper(array('form', 'url'));
   $this->load->model('user');
 }

 function index(){

  }

  function blog($id){
    if($this->session->userdata('logged_in')){
      $blog = $this->user->pullBlog($id);
      $data = array('blog'=>$blog);
      $this->load->view('postloggedin_view',$data);
    }else{
      $blog = $this->user->pullBlog($id);
      $data = array('blog'=>$blog[0]);
      $this->load->view('post_view',$data);
    }
  }

  function editBlog($id){
    if($this->session->userdata('logged_in')){
      $blog = $this->user->pullBlog($id);
      $data = array('blog'=>$blog);
      $this->load->view('editpost_view',$data);
    }else{
      $this->load->view('welcome_view');
    }
  }

  function updateBlog(){
    $title = $this->input->post('title');
    $blog = $this->input->post('blog');
    $post_id = $this->input->post('post_id');

    $this->user->updateBlog($title,$blog,$post_id);
    redirect('dashboard','refresh');
  }

}

?>