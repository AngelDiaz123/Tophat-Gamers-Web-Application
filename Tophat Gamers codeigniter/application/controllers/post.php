<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class post extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user');
 }

 function index(){

  }

  function blog($id){
    if($this->session->userdata('logged_in')){
      $blog = $this->user->pullBlog($id);

    }else{
      //If no session, redirect to login page
      redirect('welcome', 'refresh');
    }
  }

}

?>