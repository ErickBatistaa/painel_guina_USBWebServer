<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Delete_Crud extends CI_Controller{

        public function index(){

            $this->load->view('Delete_CRUD');
            
        }
    
        public function __construct(){

            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('Delete_Crud_model');

        }

        function validation($ID){

            //  redirect('register');

            $this->form_validation->set_rules('ID', 'ID', 'required|trim');

            if($this->form_validation->run()){

                $ID = array(
                    'ID' => $this->input->post('ID')
                );

            }
            /*$this->db->where('ID',  $this->input->post('ID'));
            $this->db->delete('templates');*/

            $teste_final = $this->Delete_Crud_model->delete($ID);

            if($teste_final == true){
                $this->session->set_flashdata('message', 'Template excluido com sucesso !!!');
                redirect('crud');
                return 1;
            }


         /*$this->form_validation->set_rules('header', 'Nome', 'required|trim');
         $this->form_validation->set_rules('content', 'Conteudo', 'required|trim');
         $this->form_validation->set_rules('type', 'Tipos_templates', 'required|trim');
         $this->form_validation->set_rules('createdUser', 'Numeracao', 'required');
          
         
          
          
            if($this->form_validation->run()){
                $data = array(
                    'header' => $this->input->post('header'),
                    'content' => $this->input->post('content'),
                    'type' => $this->input->post('type'),
                    'createdUser' => $this->input->post('createdUser')
                    //'createdDate' =>$this->input->date('Y-m-d H:i:s')   
                );

                
            $createdUser = $this->Create_Crud_model->insert($data);
            
            

            //redirect('crud/create');

            if($createdUser < 0){          
                //if($this->session->set_flashdata();
                $this->session->set_flashdata('message', 'Teste');     
                redirect('crud/create');
                return -1;
            }else{
                $this->session->set_flashdata('message', 'teste ok');
                redirect('crud');
                return 1;
            }
            }else{
                 
                 $this->session->set_flashdata('message', 'Template deletado com sucesso !!!');
                 redirect('crud/delete/validation');
               // $this->index();
            }*/
            }
    }
?>