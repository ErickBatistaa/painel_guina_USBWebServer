<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Create_Crud extends CI_Controller{

        public function index(){

            $this->load->view('Create_CRUD');
            
        }
    
        public function __construct(){

            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('Create_Crud_model');

        }

        function validation(){
            
         $this->form_validation->set_rules('header', 'Nome', 'required|trim');
         $this->form_validation->set_rules('content', 'Conteudo', 'required');
         $this->form_validation->set_rules('type', 'Tipos_templates', 'required');
          
         
          
          
            if($this->form_validation->run()){
                $data = array(
                    'header' => $this->input->post('header'),
                    'content' => $this->input->post('content'),
                    'type' => $this->input->post('type')
                    //'createdDate' =>$this->input->date('Y-m-d H:i:s')   
                );

                
            $createdUser = $this->Create_Crud_model->insert($data);
            
            

            //redirect('crud/create');

            if($createdUser > 0){          
                //if($this->session->set_flashdata();
                $this->session->set_flashdata('message', 'Template registrado com sucesso !!!');     
                redirect('crud/create');
                return -1;
            }else{
                $this->session->set_flashdata('message', 'teste ok');
                redirect('register');
                return 1;
            }
            }else{
              //  redirect('kaydedilemedi.');
                $this->index();
            }
            }
    }
?>