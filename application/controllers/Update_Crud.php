<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Update_Crud extends CI_Controller{

        public function index(){

            $this->load->view('Update_CRUD');
            
        }
    
        public function __construct(){

            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('Update_Crud_model');

        }

       /* function validation($up){

            //redirect('register');

         $this->form_validation->set_rules('header', 'Nome', 'required|trim');
         $this->form_validation->set_rules('content', 'Conteudo', 'required');
         $this->form_validation->set_rules('type', 'Tipos_templates', 'required');
            
         //echo "teste";
           
         if($this->form_validation->run()){
            $up = array(
                'header' => $this->input->post('header'),
                'content' => $this->input->post('content'),
                'type' => $this->input->post('type') 
        );
        }


        $teste_up = $this->Update_Crud_model->get($up);

        if($teste_up == true){
            $this->session->set_flashdata('message', 'Template atualizado com sucesso !!!');
            redirect('crud/create');
            return 1;
        }
    }*/

    function editar($up){

        $data['dados'] = $this->Update_Crud_model->editar($up);
//        redirect('Update_CRUD');

     //   $this->load->view('Update_CRUD');

       //$data['title'] = "My Real Title";

        $this->load->view('Update_CRUD', $data);



//        echo   $data['dados']->content ;

  //      print_r($data['dados'] );
   
    }

    function alterar(){

        $this->form_validation->set_rules('header', 'Nome', 'required|trim');
         $this->form_validation->set_rules('content', 'Conteudo', 'required|trim');
         $this->form_validation->set_rules('type', 'Tipos_templates', 'required|trim');
            
         //echo "teste";
           
         if($this->form_validation->run() == FALSE){
            
            $this->editar($this->input->post('id'));

         }else{

            $data['id'] = $this->input->post('id');
            $data['header'] = $this->input->post('header');
            $data['content'] = $this->input->post('content');
            $data['type'] = $this->input->post('type');
         }
            if($this->Update_Crud_model->alterar($data)==true){

                $this->session->set_flashdata('message', 'Template atualizado com sucesso !!!');
                redirect('crud');

            }

         }
        }

    
?>  