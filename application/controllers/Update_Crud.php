<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Update_Crud extends CI_Controller{

        public function index(){


            $data['data'] = $this->update_Crud_model->get_Update_CRUD();
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

   /* function editar($up){

        $data['dados'] = $this->Update_Crud_model->editar($up);
//        redirect('Update_CRUD');

     //   $this->load->view('Update_CRUD');

       //$data['title'] = "My Real Title";

        $this->load->view('Update_CRUD', $data);



//        echo   $data['dados']->content ;

  //      print_r($data['dados'] );
   
    }

    function alterar($data){

         $this->form_validation->set_rules('header', 'Nome', 'required|trim');
         $this->form_validation->set_rules('content', 'Conteudo', 'required|trim');
         $this->form_validation->set_rules('type', 'Tipos_templates', 'required|trim');
            
         //echo "teste";
           
       /* if($this->form_validation->run()){
            
            $this->editar($this->input->post('id'));

         }else{

            $data['id'] = $this->input->post('id');
            $data['header'] = $this->input->post('header');
            $data['content'] = $this->input->post('content');
            $data['type'] = $this->input->post('type');
         }*/

        /* if($this->form_validation->run()){
            $data = array(
                'ID' => $this->input->post('ID'),
                'header' => $this->input->post('header'),
                'content' => $this->input->post('content'),
                'type' => $this->input->post('type')
                //'createdDate' =>$this->input->date('Y-m-d H:i:s')   
        );
        }

        $teste_final = $this->Update_Crud_model->update($data);

            if($teste_final == true){

                $this->session->set_flashdata('message', 'Template atualizado com sucesso !!!');
                redirect('crud');
            }*/


           /* if($this->form_validation->run()){
                $data = array(
                    'ID' => $this->input->post('ID'),
                    'header' => $this->input->post('header'),
                    'content' => $this->input->post('content'),
                    'type' => $this->input->post('type')
                    //'createdDate' =>$this->input->date('Y-m-d H:i:s')   
            );
            }
                echo "TESTE !!!";

            if(@$data > 0){          
                //if($this->session->set_flashdata();
                $this->session->set_flashdata('message', 'Template atualizado com sucesso !!!');     
                redirect('crud/create');
                return -1;
            }else{
                echo "ERRO !!!";
            }

         }*/
    
         /*public function edit($id = null){
        
            
            $regras = array(
		        array(
		                'field' => 'nome',
		                'label' => 'Nome',
		                'rules' => 'required'
		        ),
		        array(
		                'field' => 'telefone',
		                'label' => 'telefone',
		                'rules' => 'required'		                
		        ),
		        array(
		                'field' => 'email',
		                'label' => 'E-mail',
		                'rules' => 'required|valid_email'
		        ),
		        array(
		                'field' => 'observacoes',
		                'label' => 'Observações',
		                'rules' => 'required'
		        )
		);
		
		$this->form_validation->set_rules($regras);
 
		if ($this->form_validation->run() == FALSE) {
			$variaveis['titulo'] = 'Novo Registro';
			$this->load->view('v_cadastro', $variaveis);
		} else {
			
			$id = $this->input->post('id');
			
			$dados = array(
			
				"nome" => $this->input->post('nome'),
				"telefone" => $this->input->post('telefone'),
				"email" => $this->input->post('email'),
				"observacoes" => $this->input->post('observacoes')
			
			);
			if ($this->m_cadastros->store($dados, $id)) {
				$variaveis['mensagem'] = "Dados gravados com sucesso!";
				$this->load->view('v_sucesso', $variaveis);
			} else {
				$variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
				$this->load->view('errors/html/v_erro', $variaveis);
			}
				
		}
	}


            if ($id) {
                
                $cadastros = $this->m_cadastros->get($id);
                
                if ($cadastros->num_rows() > 0 ) {
                    $variaveis['titulo'] = 'Edição de Registro';
                    $variaveis['id'] = $cadastros->row()->id;
                    $variaveis['nome'] = $cadastros->row()->nome;
                    $variaveis['telefone'] = $cadastros->row()->telefone;
                    $variaveis['email'] = $cadastros->row()->email;
                    $variaveis['observacoes'] = $cadastros->row()->observacoes;
                    $this->load->view('v_cadastro', $variaveis);
                } else {
                    $variaveis['mensagem'] = "Registro não encontrado." ;
                    $this->load->view('errors/html/v_erro', $variaveis);
                }
                
            }*/
            
        
            public function editar($id)
   {
       $item = $this->Update_Crud_model->editar($id);


       $this->load->view('Update_CRUD');
       
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function alterar($id)
   {
        $this->form_validation->set_rules('header', 'Nome', 'required|trim');
        $this->form_validation->set_rules('content', 'Conteudo', 'required|trim');
        $this->form_validation->set_rules('type', 'Tipos_templates', 'required|trim');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect('crud/editar'.$id);
        }else{ 
          $this->session->set_flashdata('message', 'Template atualizado com sucesso !!!');     
          $this->Update_Crud_model->update();
          redirect('crud');
        }
   }
        
        }
    
    
    
        

    
?>  