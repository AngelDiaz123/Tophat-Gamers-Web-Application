<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class about extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->helper('url');
 }

	function index(){
	  	if($this->session->userdata('logged_in')){
	  		$this->load->view('aboutloggedin_view');
	    }else{
	    	$this->load->view('about_view');
	    }
	    
  	}

}

?>