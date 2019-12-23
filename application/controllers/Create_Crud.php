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
            
            $this->form_validation->set_rules('user_header', 'Nome', 'required|trim');
            $this->form_validation->set_rules('user_content', 'Conteudo', 'required');
            if($this->form_validation->run()){
                $data = array(
                    'Nome' => $this->input->post('user_name'),
                    'Conteudo' => $this->input->post('user_content')
                );
            $createdUser = $this->Create_Crud_model->insert($data);
            if($createdUser > 0){
                if($this->insert->send()){
                    redirect('register');
                    return -1;
                }else{
                    $this->session->set_flashdata('message', 'teste ok');
                    redirect('Crud');
                    return 1;
                }
            }
            }else{
                $this->index();
            }
            }
    }
?>