<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->helper('url');
 }

	function index(){
		//to get to the contact me page
	  	if($this->session->userdata('logged_in')){
	  		$this->load->view('contactloggedin_view');
	    }else{
	    	$this->load->view('contact_view');
	    }
	    
  	}

	function emailsupport(){
		//$subject = $this->input->post('options');
	    //$message = $this->input->post('message');
	    //echo $subject."</br>";

		// echo "fuck your message and fuck you";
	  	// if($this->session->userdata('logged_in')){
	  	// 	redirect('welcome','refresh');
	   //  }else{
	   //  	redirect('dashboard','refresh');
	   //  }

	}

}

?>