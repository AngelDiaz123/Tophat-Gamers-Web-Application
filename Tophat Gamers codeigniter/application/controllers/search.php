<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('searchModel');
 }

  function index(){
    //This method will have the credentials validation
    $this->load->library('form_validation');
    $user = $this->input->post('main_input');
    $type = $this->input->post('main_dropdown');

    $this->form_validation->set_rules('search_input', 'Username or Email', 'trim');
    if($user != '' && $type != ''){

       if(strstr($user, '@')){
        $info = $this->searchModel->searchEmailAndType($user,$type);
        $data = array('info' => $info);

      }else{

        $info = $this->searchModel->searchBoth($user,$type);
        $data = array('info' => $info);
        $this->load->view('search_view',$data);

      }

    }else if($user == '' && $type != ''){

      $info = $this->searchModel->searchType($type);
      $data = array('info' => $info);
      $this->load->view('search_view',$data);

    }else if($user != ''){

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