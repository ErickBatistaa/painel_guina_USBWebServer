<?php

    class Update_Crud_model extends CI_Model{

        public function __construct(){
            parent::__construct();
        }
        
        function get_Update_CRUD(){
            if($this->input->get("search")){
              $this->db->like('header', $this->input->get("header"));
              $this->db->or_like('type', $this->input->get("type"));
              $this->db->or_like('content', $this->input->get("content")); 
            }
            $query = $this->db->get("templates");
            return $query->row();
        }
        
        
        
        
        function editar($id){

           

          $this->db->select('*');

           $this->db->from('templates');
      
           $this->db->where('ID', $id);

           //$this->db->query('SELECT * FROM templates');
      
           $query = $this->db->get();
      
           return $query->result(); 

           //return $this->db->get_where('templates', array('id' => $id))->row();


            
        }

        function update($id){

            /*$this->db->where('id', $data['dados']);
            $this->db->set('header', $data['header']);
            $this->db->set('type', $data['type']);
            $this->db->set('content', $data['content']);
            return $this->db->update('templates');*/
           /* $this->db->where('ID', $this->input->post('ID'));
           
            $this->db->set('header', $data);
            $this->db->set('type', $data);
            $this->db->set('content', $data);
           
            return $this->db->update('templates', $data);*/


            $id = array(

                    'ID' => $this->input->post('ID'),
                    'header' => $this->input->post('header'),
                    'content' => $this->input->post('content'),
                    'type' => $this->input->post('type')
                    //'createdDate' =>$this->input->date('Y-m-d H:i:s')   

            );
            if($id==0){
                return $this->db->update('templates',$id);
            }else{
                $this->db->where('id',$id);
                return $this->db->update('templates',$id);
            }        

        }
    }
?>