<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Private_area extends CI_Controller{
    public function __construct(){
        parent::__construct();
        /*if(!$this->session->userdata('id')){
           // redirect('login');
        }*/
    }

    function index(){

    
        echo '<br /><br /><br /><h1 align="center">Welcome User</h1>';
        echo '<p align="center"><a href="'.base_url().'private_area/logout">Logout</a></p>';
    
        /*public function PHPMailer(){
            return 'anexo concluido com sucesso';
        }*/

        require 'C:\Users\Mehmet\Downloads\PHPMailer-master\PHPMailer-master\src\PHPmailer.php';

        $anexo = new PHPMailer();
        $file_to_attach = 'C:\Users\Mehmet\Downloads';
        $anexo->AddAttachment( $file_to_attach , 'WhatsApp Image 2019-12-20 at 11.04.52.jpeg' );
      
        $subject = "Please verify email for login";
        $message = "
        <p>FINAL TEST !!!!! </p>
        <p>Once you click this link your email will be verified and you can login into system.</p>
        <p>Thanks,</p> 
        
        ";


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
       
        $this->email->from('mailtest@guianaturquia.com', 'Teste_Erick');
        $this->email->to($this->input->post('user_email'));
        $this->email->to('erick.santos067@gmail.com');
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->anexo($anexo);
       
        //if( !$this->CI->email->send())
        if( !$this->email->send())
        {
            $this->index();
            echo $this->email->print_debugger();
            return -1;
        }
        else
        {
           //$this->session->set_flashdata('message', 'Check in your email verification mail');
            echo "Email sent";
            return 1;
        } 
    }

    function logout(){
        $data = $this->session->all_userdata();
        foreach($data as $row => $rows_value){
            $this->session->unset_userdata($row);
        }
        redirect('login');
    }
    }
?>