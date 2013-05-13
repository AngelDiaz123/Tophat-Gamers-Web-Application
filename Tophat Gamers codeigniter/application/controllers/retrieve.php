<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class retrieve extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('searchModel');
    $this->load->helper('url');
  }

  function index(){
    $this->uri->segment();
 }

  function ajax(){
    //$title = trim($_GET['userID']);
    //$url_title = url_title($title, '_');

    $userID = trim($_GET['userID']);
    $profile = $this->searchModel->retrieveUser($userID);

    echo json_encode($profile);
  }

}

?>