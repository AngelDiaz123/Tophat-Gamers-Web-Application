<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class searchHome extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('searchModel');
 }

  function index(){
    //This method will have the credentials validation
    $this->load->library('form_validation');
    $username = $this->input->post('search_input');

    $this->form_validation->set_rules('search_input', 'Username', 'trim');
    if($username != ''){
      $info = $this->searchModel->searchUser($username);
      $data = array('info' => $info);
      $this->load->view('search_view',$data);
    }else{
      var_dump($username);
      $info = $this->searchModel->search();
      $data = array('info' => $info);
      $this->load->view('search_view',$data);
    }

 }

}

?>