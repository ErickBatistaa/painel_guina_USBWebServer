<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('merhaba');
	}

	public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id'))
  {
   redirect('private_area');
  }
  $this->load->library('form_validation');
  $this->load->library('encryption');
  $this->load->model('login_model');
 }

    /*public function index(){
        $this->load->view('merhaba');
    }*/

 function validation()
 {


    //redirect('private_area');

  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
  $this->form_validation->set_rules('user_password', 'Password', 'required');
  if($this->form_validation->run())
  {
   $result = $this->login_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
   if(!$result == '')
   {
       //echo 'login ok';
    redirect('private_area');
   }
   else
   {
    $this->session->set_flashdata('message',$result);
    redirect('private_area');
    //$this->session->load->view('private_area');
   }
  }
  else
  {
   $this->index();
   //redirect('private_area');
  }
 }

  
}
