<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {

  
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('search_input', 'Username', 'trim|required|xss_clean');

   if($this->form_validation->run() == FALSE){

    	//Field validation failed.  User redirected to login page
    	$this->load->view('welcome_view');

   }else{

    	//Go to private area
    	$this->load->view('search_view');
   }

 }

}

?>