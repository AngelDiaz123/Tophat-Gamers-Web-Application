<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registerUser extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user');
 }

  function index(){
    //This method will have the credentials validation
    $this->load->library('form_validation');

    $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_register_user');

    if($this->form_validation->run() == FALSE){
      //Field validation failed.  User redirected to login page
      $this->load->view('register_view');
   }else{
      //Go to private area
      redirect('dashboard');
   }

 }

  function register_user($password){
    //Field validation succeeded.  Validate against database
    $username = $this->input->post('username');
    $email = $this->input->post('email');

    //query the database
    $result = $this->user->register($username, $email, $password);

    if($result){
      $sess_array = array();
      foreach($result as $row){
        $sess_array = array(
          'id' => $row->user_id,
          'username' => $row->username
      );
        $this->session->set_userdata('logged_in', $sess_array);
      }
      return TRUE;
    }else{
      $this->form_validation->set_message('register_user', 'Username or Email already in use. Please try again');
      return false;
    }
  }
}
?>