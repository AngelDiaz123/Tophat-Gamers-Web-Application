<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class searchHome extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('searchModel');
 }

  function index(){
    //This method will have the credentials validation
    $this->load->library('form_validation');
    $user = $this->input->post('search_input');

    $this->form_validation->set_rules('search_input', 'Username', 'trim');
    if($user != ''){
      if(strstr($user, '@')){
        $info = $this->searchModel->searchEmail($user);
        $data = array('info' => $info);
      }else{
        $info = $this->searchModel->searchUser($user);
        $data = array('info' => $info);
      }
      $this->load->view('search_view',$data);
    }else{
      $info = $this->searchModel->search();
      $data = array('info' => $info);
      $this->load->view('search_view',$data);
    }

 }

}

?>