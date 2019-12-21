<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->view('teste2');
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
  $this->load->model('register_model');
 }

    
    function validation()
 {
  $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[codeigniter_register.email]');
  $this->form_validation->set_rules('user_password', 'Password', 'required');
  if($this->form_validation->run())
  {
   $verification_key = md5(rand());
   $encrypted_password = base64_encode($this->input->post('user_password'));
   $data = array(
    'name'  => $this->input->post('user_name'),
    'email'  => $this->input->post('user_email'),
    'password' => $encrypted_password,
    'verification_key' => $verification_key
   );
  
   $id = $this->register_model->insert($data);
   //redirect('login');
   if($id > 0)
   {
    $subject = "FELIZ NATAL !!!";
    //$message = "";
     

    


    //$uploaddir = 'C:\Users\Mehmet\Downloads';
    //$uploadfile = $uploaddir . basename($_FILES['userfile']['WhatsApp Image 2019-12-20 at 11.04.52.jpeg']);

   /*echo '<pre>';
   if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";
   } else {
    echo "Possível ataque de upload de arquivo!\n";
   }

   echo 'Aqui está mais informações de debug:';
   print_r($_FILES);

   print "</pre>";*/


   // Arquivo enviado via formulário
   /*$path = $_FILES['attachment']['tmp_name']; 
   $fileType = $_FILES['attachment']['type']; 
   $fileName = $_FILES['attachment']['name']; */

   // Ou arquivo local
   /*$path = 'C:\Users\Mehmet\Downloads';
   $fileType = 'jpg'( $path );
   $fileName = 'WhatsApp Image 2019-12-20 at 11.04.52'( $path );

   // Pegando o conteúdo do arquivo
   $fp = fopen( $path, "rb" ); // abre o arquivo enviado
   $anexo = fread( $fp, filesize( $path ) ); // calcula o tamanho
   $anexo = chunk_split(base64_encode( $anexo )); // codifica o anexo em base 64
   fclose( $fp ); // fecha o arquivo*/



    /*$config = array(
     'protocol'  => 'smtp',
     'smtp_host' => 'ssl://mail.guianaturquia.com',
     'smtp_port'  => 465,
     'smtp_user'  => 'mailtest@guianaturquia.com', 
     'smtp_pass'  => 'mail123456', 
     'mailtype'   => 'html',   
     'charset'    => 'iso-8859-1',
                   'wordwrap'   => TRUE
    );



    $config = fsockopen('mail.guianaturquia.com', 465, $errno, $errstr, 10);




    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from('mailtest@guianaturquia.com','Teste_Erick');
    $this->email->to($this->input->post('user_email'));
    $this->email->subject($subject);
    $this->email->message($message);
    if($this->email->send())
    {
     $this->session->set_flashdata('message', 'Check in your email for email verification mail');
     redirect('register');
    }
   }*/

        $SMTP_HOST = "mail.guianaturquia.com";
        $SMTP_USER = "mailtest@guianaturquia.com";
        $SMTP_PASS = "mail123456";
        $SMTP_PORT = "587";
       
        $this->load->library('email');
       
        // Set the default email config and Initialize
        $config['protocol']  = 'smtp';
        $config['smtp_host'] = $SMTP_HOST;
        $config['smtp_user'] = $SMTP_USER;
        $config['smtp_pass'] = $SMTP_PASS;
        $config['smtp_port'] = $SMTP_PORT;
        $config['mailtype']  = 'html';
               
        $this->email->initialize($config);
       
        $this->email->from('mailtest@guianaturquia.com', 'Guia na Turquia');
        $this->email->to($this->input->post('user_email'));
        $this->email->subject($subject);
        $this->email->message($message);
        //$this->email->anexo($anexo);
        $this->email->attach('file:///C:/Users/Mehmet/Downloads/bulten.html', 'inline');
       
        //if( !$this->CI->email->send())
        if( !$this->email->send())
        {
            $this->index();
            echo $this->email->print_debugger();
            return -1;
        }
        else
        {
           $this->session->set_flashdata('message', 'Check in your email verification mail');
            //echo "Email sent";
            redirect('register');
            return 1;
        } 
  }
  else
  {
   $this->index();

   //$this->load->view('teste2');

  }
 }


/*function mailtest() {

echo 'Mail test.';*/



//$this->load->view('teste2');
		//return view('welcome_message');

		/*$SMTP_HOST = "mail.guianaturquia.com";
        $SMTP_USER = "mailtest@guianaturquia.com";
        $SMTP_PASS = "mail123456";
        $SMTP_PORT = "587";
       
        $this->load->library('email');
       
        // Set the default email config and Initialize
        $config['protocol']  = 'smtp';
        $config['smtp_host'] = $SMTP_HOST;
        $config['smtp_user'] = $SMTP_USER;
        $config['smtp_pass'] = $SMTP_PASS;
        $config['smtp_port'] = $SMTP_PORT;
        $config['mailtype']  = 'html';
               
        $this->email->initialize($config);
       
        $this->email->from('mailtest@guianaturquia.com', 'test');
        $this->email->to('miiscan@gmail.com');
        $this->email->subject('Konu');
        $this->email->message('Merhaba erick nasılsın. :) todo bem erick.? ');
       
        //if( !$this->CI->email->send())
        if( !$this->email->send())
        {
            echo $this->email->print_debugger();
            return -1;
        }
        else
        {
            echo "Email sent";
            return 1;
        } */
           




}




 function verify_email()
 {
  if($this->uri->segment(3))
  {
   $verification_key = $this->uri->segment(3);
   if($this->register_model->verify_email($verification_key))
   {
    $data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'login">here</a></h1>';
   }
   else
   {
    $data['message'] = '<h1 align="center">Invalid Link</h1>';
   }
   $this->load->view('email_verification', $data);
  }
 }

}

?>
