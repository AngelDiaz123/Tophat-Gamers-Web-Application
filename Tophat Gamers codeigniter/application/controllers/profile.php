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
    $profile = $this->searchModel->retrieveUser($userID);
    var_dump($profile);
  }

}

?>