<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class searchHome extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('searchModel');
 }

  function index(){
    //This method will have the credentials validation
    $this->load->library('form_validation');

    $this->form_validation->set_rules('search_input', 'Username', 'trim|required');
    $info = $this->searchModel->search();
    $data = array('info' => $info);
    $this->load->view('search_view',$data);

 }

}

?>