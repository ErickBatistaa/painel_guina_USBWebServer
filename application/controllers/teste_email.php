<?php

function mailtest() {

echo 'Mail test.';



//$this->load->view('teste2');
		//return view('welcome_message');

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
        $this->email->subject($subject);
        $this->email->message($message);
       
        //if( !$this->CI->email->send())
        if( !$this->email->send())
        {
            $this-index();
            echo $this->email->print_debugger();
            return -1;
        }
        else
        {
           $this->session->set_flashdata('message', 'Check in your email verification mail');
            echo "Email sent";
            return 1;
        } 
           




}


?>