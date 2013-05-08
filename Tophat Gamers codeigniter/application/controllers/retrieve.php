<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class retrieve extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('searchModel');
  }

  function index(){

 }

  function ajax(){
    $userID = trim($_POST['userID']);
    $profile = $this->searchModel->retrieveUser($userID);

    echo json_encode($profile);
  }

}

?>