<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('searchModel');
    $this->load->helper('url');
  }

  function index(){

 }

  function user($userID){
    if($this->session->userdata('logged_in')){

    }else{
      $profile = $this->searchModel->retrieveUser($userID);
      if(sizeof($profile) > 0){
        $data = array('profile' => $profile);
        $this->load->view('profile_view',$data);
      }else{
        echo "no results";
        //redirect to the 404 page instead
      }
    }
  }

}

?>