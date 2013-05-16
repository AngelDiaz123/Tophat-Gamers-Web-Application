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
      if($user != '' && $user != 'Ex. JohnDoe or JohnDoe@email.com'){
        // to check to see if it's an email address
        if(strstr($user, '@')){

          $info = $this->searchModel->searchEmail($user);
          $data = array('info' => $info);

        }else{

          // if not an email address
          $info = $this->searchModel->searchUser($user);
          $data = array('info' => $info);
        }

        // to load the view and send the data
        $this->load->view('search_view',$data);

      }else{

        // to load the view and call for all of the users
        $info = $this->searchModel->search();
        $data = array('info' => $info);
        $this->load->view('search_view',$data);

      }
  }

}

?>