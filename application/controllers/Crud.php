<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Crud extends CI_Controller{
        
        public function index(){
            
            $this->load->view('crud_');
        
        }

        function create(){

            $this->load->view('Create_CRUD');

        }

        function update(){

            $this->load->view('Update_CRUD');

        }

        function delete(){

            $this->load->view('Delete_CRUD');

        }

        function mostrar_templates(){

            $this->load->view('Show_CRUD');
             
        }
    
    }  




?>