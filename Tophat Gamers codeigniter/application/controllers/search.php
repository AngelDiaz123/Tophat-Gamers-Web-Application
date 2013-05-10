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

    // if username and type is not empy
    if($user != '' && $type != ''){

       if(strstr($user, '@')){

        // to search by email and gametype
        $info = $this->searchModel->searchEmailAndType($user,$type);
        $data = array('info' => $info);

      }else{

        // to search by username and type
        $info = $this->searchModel->searchBoth($user,$type);
        $data = array('info' => $info);
        $this->load->view('search_view',$data);

      }

    // if username is empty and gametype isn't
    }else if($user == '' && $type != ''){

      // search by gametype
      $info = $this->searchModel->searchType($type);
      $data = array('info' => $info);
      $this->load->view('search_view',$data);

    // search by username only
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

      // load all users
      $info = $this->searchModel->search();
      $data = array('info' => $info);
      $this->load->view('search_view',$data);
    }

 }

}

?>