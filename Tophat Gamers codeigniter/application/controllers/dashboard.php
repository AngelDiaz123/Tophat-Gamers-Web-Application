<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Dashboard extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user');
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $info = $this->user->pullUserInfo($session_data['id']);
     $data = array('info' => $info[0]);
     $this->load->view('dashboard_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('welcome', 'refresh');
   }
 }

 function logout(){
  $this->session->unset_userdata('logged_in');
  session_destroy();
  redirect('welcome', 'refresh');
 }

  function editAccount($id){
    $userID = $id;
    $username = $this->input->post('username');
    $email = $this->input->post('email');
    $youtube = $this->input->post('youtube');
    $gametype = $this->input->post('gametype');
    $twitch = $this->input->post('twitch');
    $this->user->updateUser($userID, $username, $email, $youtube, $twitch, $gametype);
    redirect('Dashboard', 'refresh');
  }

}

?>