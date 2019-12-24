<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Show_Crud extends CI_Controller{

        public function index(){

            $this->load->view('Show_CRUD');
            
        }
    }
?>