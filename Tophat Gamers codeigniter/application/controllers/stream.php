<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stream extends CI_Controller {

 function __construct(){
    parent::__construct();
 }

  function index(){
    
  }

  function user($streamName){
  	if($this->session->userdata('logged_in')){
      $data = array("streamName" => $streamName);
      $this->load->view('streamLoggedIn_view',$data);

    }else{
	  	$data = array("streamName" => $streamName);
		  $this->load->view('stream_view',$data);
	  }
  }

}

?>