<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stream extends CI_Controller {

 function __construct(){
    parent::__construct();
 }

  function index(){
    $this->load->view('stream_view');
  }

}

?>